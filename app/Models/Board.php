<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'title_en',
        'title_es',
        'title_pt',
        'description_en',
        'description_es',
        'description_pt',
        'photo_url',
        'slug',
        'order'
    ];
    protected $casts = [
        'order' => 'integer',
    ];
    use HasFactory;
}
