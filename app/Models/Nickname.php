<?php

namespace App\Models;

use App\Scopes\SortScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nickname extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sort',
    ];
}
