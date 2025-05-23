<?php

namespace App\Models;

use App\Traits\PageCachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Curriculum extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use PageCachable;

    protected $fillable = [
        'name',
        'language',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('curriculum');
    }

    public function getNameWithLanguageAttribute(): string
    {
        return '['.Str::upper($this->language).'] '.$this->name;
    }

    public function getUrlAttribute(): string
    {
        return asset($this->getFirstMedia('curriculum')->getUrl());
    }
}
