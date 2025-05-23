<?php

namespace App\Models;

use App\Traits\PageCachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nickname extends Model
{
    use HasFactory;
    use PageCachable;

    protected $fillable = [
        'name',
        'sort',
    ];
}
