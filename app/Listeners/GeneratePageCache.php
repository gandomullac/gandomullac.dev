<?php

namespace App\Listeners;

use App\Events\PageCachingRequested;
use App\Jobs\GeneratePageCacheJob;

class GeneratePageCache
{
    public function handle(PageCachingRequested $event): void
    {
        $job = GeneratePageCacheJob::dispatch()->delay(now()->addSeconds(15));
    }
}
