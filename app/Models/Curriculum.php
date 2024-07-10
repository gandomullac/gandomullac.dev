<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;

class Curriculum extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'language',
    ];

    // media library configuration
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('curriculum');
    }

    public function getNameWithLanguageAttribute(): string
    {
        return "[" . Str::upper($this->language) . "] $this->name";
    }

    public function getUrlAttribute(): string
    {
        return asset($this->getFirstMedia('curriculum')->getUrl());
    }
}