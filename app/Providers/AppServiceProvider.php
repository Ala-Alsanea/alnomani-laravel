<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use BezhanSalleh\FilamentLanguageSwitch\Enums\Placement;


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
        //
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->visible(outsidePanels: true)
                ->outsidePanelPlacement(Placement::TopLeft)
                ->outsidePanelRoutes([
                    'profile',
                    'home',
                    // Additional custom routes where the switcher should be visible outside panels
                ])
                ->locales(['ar', 'en'])
                ->circular(); // also accepts a closure
        });
    }
}
