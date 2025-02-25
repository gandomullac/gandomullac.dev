<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class PurgeCloudflare extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cloudflare:purge-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Purge the entire Cloudflare cache';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $zoneId = config('services.cloudflare.zone_id');
        $apiToken = config('services.cloudflare.api_token');

        if (!$zoneId || !$apiToken) {
            $this->error('Cloudflare configuration is missing. Please check your services configuration.');
            return 1;
        }

        $response = $this->purgeCache($zoneId, $apiToken);

        if ($response['success']) {
            $this->info('Cloudflare cache purged successfully.');
            return 0;
        }

        $this->error('Failed to purge Cloudflare cache: ' . json_encode($response['errors'] ?? 'Unknown error'));
        return 1;
    }

    /**
     * Purge the Cloudflare cache for the given zone.
     *
     * @param string $zoneId
     * @param string $apiToken
     * @return array
     */
    private function purgeCache(string $zoneId, string $apiToken): array
    {
        try {
            $response = Http::withToken($apiToken)
                ->post("https://api.cloudflare.com/client/v4/zones/{$zoneId}/purge_cache", [
                    'purge_everything' => true,
                ]);

            return $response->json();
        } catch (\Exception $e) {
            $this->error('An error occurred while purging the cache: ' . $e->getMessage());
            return ['success' => false, 'errors' => [$e->getMessage()]];
        }
    }
}
