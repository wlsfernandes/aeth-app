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

        // Redirect all non-primary domains to aeth.org
        if (!app()->runningInConsole()) {
            $host = request()->getHost();

            // ✅ Only redirect if NOT already on www.aeth.org
            if ($host !== 'www.aeth.org') {
                Redirect::to('https://www.aeth.org' . request()->getRequestUri(), 301)->send();
            }
        }
    }
}
