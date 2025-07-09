<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimplePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_es',
        'title_pt',
        'content_en',
        'content_es',
        'content_pt',
        'slug',
        'published',
        'published_at',
        'summary_en',
        'summary_es',
        'summary_pt',
        'image_url',
        'file_url',
        'file_url_es',
        'file_url_ptBR',
        'button_text_en',
        'button_text_es',
        'button_text_pt',
        'external_link',
        'external_link_button',
        'date_of_publication',
        'date_of_event',
        'program_id'
    ];

    protected $casts = [
        'published' => 'boolean',
        'published_at' => 'datetime',
        'date_of_publication' => 'datetime',
        'date_of_event' => 'datetime',
    ];
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
