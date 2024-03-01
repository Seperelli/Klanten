<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        Filament::serving(function () {
            Filament::registerNavigationItems([
                NavigationItem::make('Rapport Survey Partners')
                    ->url('https://eu.jotform.com/report/23355308289305822')
                    ->icon('heroicon-o-globe-alt'), // Change the icon as needed
            ]);
        });
    }
}
