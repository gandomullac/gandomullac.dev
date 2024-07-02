<?php

use Illuminate\Support\Facades\Route;

$pages = [
    'home' => 'home',
    // 'about' => 'about',
    // 'blog' => 'blog',
    // 'consulting' => 'consulting',
    // 'learning' => 'learning',
    // 'projects' => 'projects',
    // 'uses' => 'uses',
];

foreach ($pages as $uri => $view) {
    Route::get($uri === 'home' ? '/' : $uri, function () use ($view) {
        return view($view);
    })->name($view);
}
