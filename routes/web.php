<?php

use App\Models\Curriculum;
use App\Models\Nickname;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nicknames = Nickname::query()
        ->orderBy('sort')
        ->get()
        ->pluck('name')
        ->toArray();

    return view('home', ['nicknames' => $nicknames]);
})->name('home');

Route::get('/projects', function () {
    $projects = Project::all();

    return view('projects', ['projects' => $projects]);
})->name('projects');

Route::get('/about', function () {
    $curricula = Curriculum::all();

    return view('about', ['curricula' => $curricula]);
})->name('about');
