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

    return view('home', compact('nicknames'));
})->name('home');


Route::get('/projects', function () {
    $projects = Project::all();

    return view('projects', compact('projects'));
})->name('projects');

Route::get('/about', function () {
    $curricula = Curriculum::all();

    return view('about', compact('curricula'));
})->name('about');
