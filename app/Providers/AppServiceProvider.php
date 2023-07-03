<?php

namespace App\Providers;

use Awcodes\Curator\CurationPreset;
use Awcodes\Curator\Facades\Curator;
use Filament\Facades\Filament;
use Illuminate\Foundation\Vite;
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
        // Тема filament
        Filament::serving(function () {
            // Using Vite
            Filament::registerTheme(
                app(Vite::class)('resources/css/app.css'),
            );
        });

        // Загрузка ресурсов
        FilamentFabricator::registerStyles([
            //external url
            'https://unpkg.com/tippy.js@6/dist/tippy.css',
            //vite
            app(Vite::class)('resources/css/app.css'),
            // asset from public folder
            asset('css/app.css'),
        ]);

        // Настройки PageBuilder
        PageBuilder::configureUsing(function (PageBuilder $builder) {
            $builder->collapsed(); //You can use any method supported by the Builder field
        });

        // Настройки Curation Preset
        Curator::curationPresets([
            CurationPreset::make('thumbnail')
                ->label('Thumbnail')
                ->width(200)
                ->height(200)
                ->format('webp')
                ->quality(80),
            CurationPreset::make('hero')
                ->label('Hero')
                ->width(960)
                ->height(300),
            CurationPreset::make(name: 'og-image')
                ->label('OG Image')
                ->width(1200)
                ->height(630),
        ]);
    }
}
