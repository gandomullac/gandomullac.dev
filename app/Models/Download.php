<?php

namespace App\Models;

use App\Traits\PageCachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Download extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use PageCachable;

    protected $fillable = [
        'name',
        'description',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('downloads');
    }

    public function getUrlAttribute(): string
    {
        return $this->getFirstMedia('downloads')->getUrl();
    }
}
