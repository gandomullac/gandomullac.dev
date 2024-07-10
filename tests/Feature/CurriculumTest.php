<?php

use App\Models\Curriculum;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

beforeEach(function () {
    Storage::fake('public');

    $this->curriculum = Curriculum::factory()->create();
    $this->pdf = UploadedFile::fake()->create(
        name: 'curriculum.pdf',
        kilobytes: 10000,
        mimeType: 'application/pdf'
    );
});

it('can create a new curriculum', function () {
    $this->assertDatabaseHas('curricula', $this->curriculum->toArray());
});

it('can attach a file to a curriculum', function () {
    $this->curriculum->addMedia($this->pdf)->toMediaCollection('curriculum');
    $this->assertNotNull($this->curriculum->getFirstMedia('curriculum'));
});

it('can get the name with language attribute', function () {
    $expectedString = '['.Str::upper($this->curriculum->language).'] '.$this->curriculum->name;

    $this->assertEquals($expectedString, $this->curriculum->name_with_language);
});

it('can get the url attribute', function () {
    $this->curriculum->addMedia($this->pdf)->toMediaCollection('curriculum');

    $this->assertStringContainsString('curriculum.pdf', $this->curriculum->url);
});
