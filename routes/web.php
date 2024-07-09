<?php

use App\Models\Curriculum;
use App\Models\Project;
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

Route::get('/curriculum_it', function () {

    $cv = Curriculum::whereLanguage('it')->sole();
    $filePath = $cv->getFirstMedia('curriculum')->getPath();

    return response()->file($filePath);
})->name('curriculum_it');

Route::get('/projects', function () {
    $projects = Project::all();

    return view('projects', compact('projects'));
})->name('projects');

Route::get('/about', function () {
    $curricula = Curriculum::all();

    return view('about', compact('curricula'));
})->name('about');
