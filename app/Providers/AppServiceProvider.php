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
            $primaryDomain = 'aeth.org';

            // List domains you want to redirect TO the primary
            $redirectDomains = [
                'www.aeth.org',
                'aeth.info',
                'www.aeth.info',
                'somosaeth.org',
                'www.somosaeth.org',
            ];

            // Redirect if current host is not the primary one
            if ($host !== $primaryDomain && in_array($host, $redirectDomains)) {
                Redirect::to('https://' . $primaryDomain . request()->getRequestUri(), 301)->send();
            }
        }
    }

}
