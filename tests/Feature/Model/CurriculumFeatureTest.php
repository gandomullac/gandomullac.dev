<?php

use App\Models\Curriculum;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

beforeEach(function (): void {
    Storage::fake('public');

    $this->curriculum = Curriculum::factory()->create();
    $this->pdf = UploadedFile::fake()->create(
        name: 'curriculum.pdf',
        kilobytes: 10000,
        mimeType: 'application/pdf'
    );
});

it('can create a new curriculum', function (): void {
    $this->assertDatabaseHas('curricula', $this->curriculum->toArray());
});

it('can attach a file to a curriculum', function (): void {
    $this->curriculum->addMedia($this->pdf)->toMediaCollection('curriculum');
    $this->assertNotNull($this->curriculum->getFirstMedia('curriculum'));
});

it('can get the url attribute', function (): void {
    $this->curriculum->addMedia($this->pdf)->toMediaCollection('curriculum');

    $this->assertStringContainsString('curriculum.pdf', $this->curriculum->url);
});
