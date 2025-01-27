<?php

namespace App\Providers;

use App\Events\PageCachingRequested;
use App\Events\SitemapGenerationRequested;
use App\Listeners\GeneratePageCache;
use App\Listeners\GenerateSitemap;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        SitemapGenerationRequested::class => [
            GenerateSitemap::class,
        ],
        PageCachingRequested::class => [
            GeneratePageCache::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
