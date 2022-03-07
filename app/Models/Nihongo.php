<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nihongo extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'lesson_type',
        'section',
        'material',
        'hiragana',
        'romaji',
        'english',
        'indonesia',
        'explanation',
    ];
}
