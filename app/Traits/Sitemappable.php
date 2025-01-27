<?php

namespace App\Traits;

use App\Events\SitemapGenerationRequested;

trait Sitemappable
{
    /**
     * In occasione del salvataggio del modello, esegui la generazione della sitemap.
     */
    public static function bootSitemappable(): void
    {
        static::saved(function () {
            event(new SitemapGenerationRequested);
        });
    }
}
