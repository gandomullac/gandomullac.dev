<?php

namespace App\Listeners;

use App\Events\SitemapGenerationRequested;
use App\Jobs\GenerateSitemapJob;

class GenerateSitemap
{
    public function handle(SitemapGenerationRequested $event): void
    {
        $job = GenerateSitemapJob::dispatch()->delay(now()->addSeconds(15));
    }
}
