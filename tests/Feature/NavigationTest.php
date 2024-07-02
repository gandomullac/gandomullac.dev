<?php

$pages = [
    'home' => 'home',
    // 'about' => 'about',
    // 'blog' => 'blog',
    // 'consulting' => 'consulting',
    // 'learning' => 'learning',
    // 'projects' => 'projects',
];

foreach ($pages as $name => $route) {
    test("{$name} page can be rendered", function () use ($route) {
        $response = $this->get(route($route));
        $response->assertStatus(200);
    });
}
