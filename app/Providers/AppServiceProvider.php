<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Forms\Components\PageBuilder;

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
        // Загрузка ресурсов
        FilamentFabricator::registerStyles([
            //external url
            'https://unpkg.com/tippy.js@6/dist/tippy.css',
            //vite
            app(\Illuminate\Foundation\Vite::class)('resources/css/app.css'),
            // asset from public folder
            asset('css/app.css'),
        ]);

        // Настройки PageBuilder
        PageBuilder::configureUsing(function (PageBuilder $builder) {
            $builder->collapsed(); //You can use any method supported by the Builder field
        });
    }
}
