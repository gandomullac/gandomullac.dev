<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    private array $urls = [
        ['url' => '/', 'priority' => 1.0],
        ['url' => '/about', 'priority' => 0.8],
        ['url' => '/projects', 'priority' => 0.7],
    ];

    private array $curricula = [
        // ['url' => '/curriculum_en', 'priority' => 0.4],
        ['url' => '/curriculum_it', 'priority' => 0.2],
    ];

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        foreach ($this->urls as $url) {
            $sitemap->add(Url::create($url['url'])->setPriority($url['priority']));
        }

        // // TODO: arbitrary date, will be updated.
        // foreach ($this->curricula as $url) {
        //     $sitemap->add(Url::create($url['url'])
        //         ->setPriority($url['priority'])
        //         ->setLastModificationDate(Carbon::create(2024, 5, 5)));
        // }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
