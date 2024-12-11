<?php

namespace App\Providers;

use Filament\Support\Facades\FilamentView;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        UrlGenerator::macro('alternateHasCorrectSignature', function (Request $request, bool $absolute = true, array $ignoreQuery = []): bool {
            $ignoreQuery[] = 'signature';
        
            // Genera l'URL assoluto o relativo
            $baseUrl = $absolute ? url($request->path()) : '/' . $request->path();
        
            // Filtra i parametri della query ignorati
            $queryString = collect(explode('&', (string)$request->server->get('QUERY_STRING')))
                ->reject(fn($parameter) => in_array(Str::before($parameter, '='), $ignoreQuery))
                ->join('&');
        
            // Combina URL e query string
            $original = rtrim($baseUrl . '?' . $queryString, '?');
        
            // Recupera la chiave HMAC dal file di configurazione
            $key = config('app.key');
        
            if (!is_string($key)) {
                throw new \RuntimeException('Invalid app key: must be a non-empty string.');
            }
        
            // Genera la firma HMAC
            $signature = hash_hmac('sha256', $original, $key);
        
            // Confronta la firma con quella fornita
            return hash_equals($signature, (string)$request->query('signature', ''));
        });
        
        UrlGenerator::macro('alternateHasValidSignature', function (Request $request, bool $absolute = true, array $ignoreQuery = []): bool {
            return $this->alternateHasCorrectSignature($request, $absolute, $ignoreQuery)
                && URL::signatureHasNotExpired($request);
        });
        
        Request::macro('hasValidSignature', function (bool $absolute = true, array $ignoreQuery = []): bool {
            return URL::alternateHasValidSignature($this, $absolute, $ignoreQuery);
        });
        
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
