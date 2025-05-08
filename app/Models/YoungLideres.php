<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoungLideres extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'email',
        'organization',
        'zipcode',
        'phone_number',
        'language',
        'denomination',
        'member_since',
        'isAethMember',
        'notes',
        'young_lideres_membership'
    ];

    protected $casts = [
        'member_since' => 'datetime:Y-m-d',
        'young_lideres_membership' => 'boolean'
    ];


}
