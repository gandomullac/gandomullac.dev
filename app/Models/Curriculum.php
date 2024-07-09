<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

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

    public function getRouteAttribute(): string
    {
        if ($this->language === 'it') {
            return 'curriculum_it';
        }

        return 'curriculum_en';
    }
}
