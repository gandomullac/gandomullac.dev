<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\PageCachable;

class Nickname extends Model
{
    use HasFactory;
    use PageCachable;

    protected $fillable = [
        'name',
        'sort',
    ];
}
