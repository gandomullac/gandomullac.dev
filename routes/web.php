<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;

$pages = [
    'home' => 'home',
    'about' => 'about',
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

Route::get('/curriculum_it', function () {
    $filePath = public_path('/pdf/CV_3.5_italian.pdf');

    return response()->file($filePath);
})->name('cv');

Route::get('/projects', function () {
    $projects = Project::all();

    return view('projects', compact('projects'));
})->name('projects');
