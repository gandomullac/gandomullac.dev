<?php

use App\Models\Project;
use Illuminate\Support\Str;

it('can get the slug attribute', function (): void {
    $project = Project::factory()->make();

    $expectedSlug = Str::slug($project->subtitle);

    $this->assertEquals($expectedSlug, $project->slug);
});
