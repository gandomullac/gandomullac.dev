<?php

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    $this->project = Project::factory()->create();
});

it('can create a new project', function (): void {
    $this->assertDatabaseHas('projects', $this->project->toArray());
});

it('can update a project', function (): void {
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

it('can delete a project', function (): void {
    $this->project->delete();

    $this->assertDatabaseMissing('projects', $this->project->toArray());
});
