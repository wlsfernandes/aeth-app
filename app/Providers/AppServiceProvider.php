<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS in production
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        if (!app()->runningInConsole() && app()->environment('production')) {
            $host = request()->getHost();

            if ($host !== 'www.aeth.org') {
                Redirect::to('https://www.aeth.org' . request()->getRequestUri(), 301)->send();
                exit; // make sure script stops after redirect
            }
        }

        // Define a macro for consistent HTML response headers
        Response::macro('htmlCache', function ($content) {
            return response($content)
                ->header('Cache-Control', 'public, max-age=900')
                ->header('Content-Type', 'text/html; charset=UTF-8');
        });

    }
}
