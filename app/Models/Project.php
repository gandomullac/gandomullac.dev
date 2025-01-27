<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\PageCachable;

class Project extends Model
{
    use HasFactory;
    use PageCachable;

    protected $fillable = [
        'title',
        'subtitle',
        'category',
        'description',
        'date',
    ];

    public function getSlugAttribute(): string
    {
        return Str::slug($this->subtitle);
    }
}
