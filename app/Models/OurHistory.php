<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurHistory extends Model
{

    protected $fillable = ['year', 'title_es', 'title_en', 'title_pt', 'description_en', 'description_es', 'description_pt', 'image_url'];

    use HasFactory;
}
