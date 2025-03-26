<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortalCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function portalContents()
    {
        return $this->belongsToMany(PortalContent::class, 'portal_content_category');
    }
}
