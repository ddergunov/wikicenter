<?php

namespace App\Providers;

use Illuminate\Foundation\Vite;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    private static bool $pageBuilderConfigured = false;
    private static bool $curatorPresetsSet = false;

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
        $vite = app(Vite::class)('resources/css/app.css');

        // Тема filament
        \Filament\Facades\Filament::serving(function () use ($vite) {
            // Using Vite
            \Filament\Facades\Filament::registerTheme($vite);
        });

        // Загрузка ресурсов
        \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::registerStyles([
            // 'https://unpkg.com/tippy.js@6/dist/tippy.css',//external url
            $vite, //vite
            // asset('css/app.css'),// asset from public folder
        ]);

        // Настройки PageBuilder
        if (!self::$pageBuilderConfigured) {
            \Z3d0X\FilamentFabricator\Forms\Components\PageBuilder::configureUsing(function (\Z3d0X\FilamentFabricator\Forms\Components\PageBuilder $builder) {
                $builder->collapsed(); //You can use any method supported by the Builder field
            });
            self::$pageBuilderConfigured = true;
        }

        // Настройки Curation Preset
        if (!self::$curatorPresetsSet) {
            \Awcodes\Curator\Facades\Curator::curationPresets([
                // настройки пресетов...
                \Awcodes\Curator\CurationPreset::make('thumbnail')
                    ->label('Thumbnail')
                    ->width(200)
                    ->height(200)
                    ->format('webp')
                    ->quality(80),
                \Awcodes\Curator\CurationPreset::make('hero')
                    ->label('Hero')
                    ->width(960)
                    ->height(300),
                \Awcodes\Curator\CurationPreset::make(name: 'og-image')
                    ->label('OG Image')
                    ->width(1200)
                    ->height(630),
            ]);
            self::$curatorPresetsSet = true;
        }
    }
}