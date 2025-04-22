<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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

        // Redirect all other domains to somosaeth.org
        if (!app()->runningInConsole()) {
            $host = request()->getHost();

            if (in_array($host, ['www.aeth.org', 'aeth.org'])) {
                Redirect::to('https://somosaeth.org' . request()->getRequestUri(), 301)->send();
            }
        }
    }
}
