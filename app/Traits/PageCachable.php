<?php

namespace App\Traits;

use App\Events\PageCachingRequested;

trait PageCachable
{
    /**
     * In occasione del salvataggio del modello, esegui la generazione della sitemap.
     */
    public static function bootPageCachable(): void
    {
        static::saved(function () {
            event(new PageCachingRequested);
        });
    }
}
