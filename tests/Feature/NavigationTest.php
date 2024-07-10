<?php

$pages = [
    'home' => 'home',
    'about' => 'about',
    'projects' => 'projects',
];

foreach ($pages as $name => $route) {
    test($name . ' page can be rendered', function () use ($route): void {
        $response = $this->get(route($route));
        $response->assertStatus(200);
    });
}
