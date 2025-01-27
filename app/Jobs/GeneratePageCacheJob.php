<?php

namespace App\Jobs;

use Artisan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GeneratePageCacheJob implements ShouldBeUnique, ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(): void
    {
        // Artisan::call('page-cache:clear');
        // Artisan::call('page-cache:generate');
        Artisan::call('cloudflare:purge-cache');
    }

    // Durata per cui il job rimane unico
    public function uniqueFor()
    {
        return 3600; // 1 ora
    }
}
