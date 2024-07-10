<?php

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->project = Project::factory()->create();
});

it('can create a new project', function () {
    $this->assertDatabaseHas('projects', $this->project->toArray());
});

it('can get the slug attribute', function () {
    $expectedSlug = Str::slug($this->project->subtitle);

    $this->assertEquals($expectedSlug, $this->project->slug);
});

it('can update a project', function () {
    $newData = [
        'title' => 'New Title',
        'subtitle' => 'New Subtitle',
        'category' => 'New Category',
        'description' => 'New Description',
        'date' => now()->toDateString(),
    ];

    $this->project->update($newData);

    $this->assertDatabaseHas('projects', $newData);
});

it('can delete a project', function () {
    $this->project->delete();

    $this->assertDatabaseMissing('projects', $this->project->toArray());
});
