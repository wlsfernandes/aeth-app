<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Post
 * 
 * Represents a multilingual blog post or article.
 *
 * @package App\Models
 * @property int $id Unique identifier for the post.
 * @property string $title_en Title of the post in English.
 * @property string|null $title_es Title of the post in Spanish.
 * @property string|null $title_pt Title of the post in Portuguese.
 * @property string $content_en Content of the post in English.
 * @property string|null $content_es Content of the post in Spanish.
 * @property string|null $content_pt Content of the post in Portuguese.
 * @property string $slug URL-friendly identifier for the post.
 * @property bool $published Indicates if the post is published.
 * @property \Illuminate\Support\Carbon|null $published_at Timestamp when the post was published.
 * @property \Illuminate\Support\Carbon|null $date Date associated with the post (e.g., event date).
 * @property string|null $summary_en Summary of the post in English.
 * @property string|null $summary_es Summary of the post in Spanish.
 * @property string|null $summary_pt Summary of the post in Portuguese.
 * @property string|null $image_url URL of the post’s featured image.
 * @property int $post_type_id Identifier for the post type.
 * @property string|null $file_url URL of an attached file (English version).
 * @property string|null $file_url_es URL of an attached file (Spanish version).
 * @property string|null $file_url_ptBR URL of an attached file (Portuguese-BR version).
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the post was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the post was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @property-read \App\Models\PostType $postType
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContentEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContentEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContentPt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFileUrlEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFileUrlPtBR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePostTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSummaryEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSummaryEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSummaryPt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitleEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitlePt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Post extends Model
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
        'date',
        'summary_en',
        'summary_es',
        'summary_pt',
        'image_url',
        'post_type_id',
        'file_url',
        'file_url_es',
        'file_url_ptBR',
        'button_text_en',
        'button_text_es',
        'button_text_pt'
    ];


    public function postType()
    {
        return $this->belongsTo(PostType::class);
    }
    public function getPlainSummaryAttribute(): string
    {
        $locale = app()->getLocale();
        $summary = match ($locale) {
            'es' => $this->summary_es,
            'pt' => $this->summary_pt,
            default => $this->summary_en,
        };

        return Str::limit(strip_tags($summary), 120, '...');
    }

}
