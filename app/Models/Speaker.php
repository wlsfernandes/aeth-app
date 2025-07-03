<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title_en',
        'title_es',
        'title_pt',
        'description_en',
        'description_es',
        'description_pt',
        'photo_url',
        'slug',
    ];

}
