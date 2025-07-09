<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'human_resource_id'];

    public function portalContents()
    {
        return $this->belongsToMany(PortalContent::class, 'portal_content_program');
    }
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function humanResource()
    {
        return $this->belongsTo(HumanResource::class);
    }
    public function simplePages()
    {
        return $this->hasMany(SimplePage::class);
    }
}
