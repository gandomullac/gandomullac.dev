<?php

namespace App\Providers;

use App\Support\UrlMacroRegistrar;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        UrlMacroRegistrar::register();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentView::registerRenderHook(
            'panels::head.start',
            fn(): string => '<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">',
        );

        URL::forceScheme('https');
    }
}
