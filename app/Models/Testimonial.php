<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'program_id',
        'image_url',
        'name',
        'title',
        'text_en',
        'text_es',
        'text_pt',
        'order',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
