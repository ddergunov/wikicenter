<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::registerStyles([
            'https://unpkg.com/tippy.js@6/dist/tippy.css', //external url
            app(\Illuminate\Foundation\Vite::class)('resources/css/app.css'), //vite
            asset('css/app.css'), // asset from public folder
        ]);
    }
}
