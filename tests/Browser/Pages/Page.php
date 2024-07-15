<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Page as BasePage;

abstract class Page extends BasePage
{
    /**
     * Get the global element shortcuts for the site.
     *
     * @return array<string, string>
     */
    public static function siteElements(): array
    {
        return [
            // '@Github_icon' => '#GitHub_icon',
            // '@LinkedIn_icon' => '#LinkedIn_icon',
            // '@Email_icon' => '#Email_icon',
        ];
    }
}