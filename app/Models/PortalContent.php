<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortalContent extends Model
{
    protected $fillable = [
        'title',
        'creator',
        'description',
        'tags',
        'url',
        'media_type',
        'category',
        'program',
        'permission_level',
        'contact',
        'occasion',
        'date_of_publication'
    ];

    protected $casts = ['date_of_publication' => 'datetime:Y-m-d'];
    use HasFactory;
}
