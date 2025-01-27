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
    protected $description = 'Purge entire Cloudflare cache';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $zoneId = config('services.cloudflare.zone_id');
        $apiToken = config('services.cloudflare.api_token');

        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->request('POST', "https://api.cloudflare.com/client/v4/zones/{$zoneId}/purge_cache", [
                'headers' => [
                    'Authorization' => "Bearer {$apiToken}",
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'purge_everything' => true,
                ],
            ]);

            $body = json_decode($response->getBody(), true);

            if ($body['success']) {
                $this->info('Cloudflare cache purged successfully.');
                return 0;
            } else {
                $this->error('Failed to purge Cloudflare cache: ' . json_encode($body['errors']));
                return 1;
            }
        } catch (\Exception $e) {
            $this->error('An error occurred: ' . $e->getMessage());
            return 1;
        }
    }
}
