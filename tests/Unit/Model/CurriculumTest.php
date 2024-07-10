<?php

use App\Models\Curriculum;
use Illuminate\Support\Str;

it('can get the name with language attribute', function (): void {
    $curriculum = Curriculum::factory()->make();

    $expectedString = '['.Str::upper($curriculum->language).'] '.$curriculum->name;

    $this->assertEquals($expectedString, $curriculum->name_with_language);
});
