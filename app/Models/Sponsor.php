<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image_url',
        'website_url',
        'sponsor_type_id',
        'order',
    ];
    public function sponsorType()
    {
        return $this->belongsTo(SponsorType::class);
    }


}
