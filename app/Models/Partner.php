<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    protected $fillable = [
        'name',
        'image_url',
        'website_url',
        'order',
    ];
    use HasFactory;
}
