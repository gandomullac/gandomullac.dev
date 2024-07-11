<?php

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\AboutPage;
use Tests\Browser\Pages\HomePage;
use Tests\Browser\Pages\ProjectsPage;

test('Full Navigation', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit(new HomePage)
            ->clickLink('about')
            ->on(new AboutPage)
            ->clickLink('projects')
            ->on(new ProjectsPage);
    });
});
