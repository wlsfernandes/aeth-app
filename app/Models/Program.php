<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function portalContents()
    {
        return $this->belongsToMany(PortalContent::class, 'portal_content_program');
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

}
