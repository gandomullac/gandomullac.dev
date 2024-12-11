<?php

namespace App\Support;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class UrlMacroRegistrar
{
    /**
     * Register the URL macros to fizx 422 and 401 in a Filament / Forge / Octane environment.
     *
     * @return void
     */
    public static function register(): void
    {
        UrlGenerator::macro('alternateHasCorrectSignature', function (Request $request, bool $absolute = true, array $ignoreQuery = []): bool {
            $ignoreQuery[] = 'signature';

            $baseUrl = $absolute ? url($request->path()) : '/' . $request->path();

            $queryString = collect(explode('&', (string)$request->server->get('QUERY_STRING')))
                ->reject(fn($parameter) => in_array(Str::before($parameter, '='), $ignoreQuery))
                ->join('&');

            $original = rtrim($baseUrl . '?' . $queryString, '?');

            $key = config('app.key');

            if (!is_string($key)) {
                throw new \RuntimeException('Invalid app key: must be a non-empty string.');
            }

            $signature = hash_hmac('sha256', $original, $key);

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
}
