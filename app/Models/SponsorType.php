<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }
}
