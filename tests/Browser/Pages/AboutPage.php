<?php

namespace Tests\Browser\Pages;

use App\Models\Curriculum;
use Laravel\Dusk\Browser;

class AboutPage extends Page
{
    /**
     * Get the URL for the page.
     */
    public function url(): string
    {
        return '/about';
    }

    /**
     * Assert that the browser is on the page.
     */
    public function assert(Browser $browser): void
    {
        $browser
            ->assertPathIs($this->url())
            ->assertSee('Curriculum Vitae');

        $curricula = Curriculum::all();
        foreach ($curricula as $curriculum) {
            $browser->assertSee($curriculum->getNameWithLanguageAttribute());
        }
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array<string, string>
     */
    public function elements(): array
    {
        return [
            '@CurriculumLink' => '#curriculum_it',
        ];
    }
}
