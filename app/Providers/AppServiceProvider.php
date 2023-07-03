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
        $vite = app(Vite::class)('resources/css/app.css');

        Filament::serving(function () use ($vite) {
            Filament::registerTheme($vite);
        });

        $this->registerStyles($vite);

        $this->configurePageBuilder();

        $this->setCuratorPresets();

    }

    private function registerStyles(string $vite): void
    {
        FilamentFabricator::registerStyles([
            $vite,
        ]);
    }

    private function configurePageBuilder(): void
    {
        PageBuilder::configureUsing(function (PageBuilder $builder) {
            $builder->collapsed();
        });
    }

    private function setCuratorPresets(): void
    {
        Curator::curationPresets($this->getCurationPresets());
    }

    private function getCurationPresets(): array
    {
        return [
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
        ];
    }
}