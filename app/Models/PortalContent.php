<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PortalContent
 *
 * Represents content published on the portal, such as media, articles, or resources.
 *
 * @package App\Models
 *
 * @property int $id Unique identifier for the portal content.
 * @property string $title Title of the content.
 * @property string $creator Name of the content creator or author.
 * @property string|null $description Brief description of the content.
 * @property string|null $tags Comma-separated tags associated with the content.
 * @property string $url URL or link to the content.
 * @property string $media_type Type of media (e.g., video, article, image).
 * @property string $category Category under which the content is classified.
 * @property string|null $program Associated program or initiative.
 * @property string|null $permission_level Access level required to view the content.
 * @property string|null $contact Contact information related to the content.
 * @property string|null $occasion Special occasion or event related to the content.
 * @property \Illuminate\Support\Carbon|null $date_of_publication Date when the content was published.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the content was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the content was last updated.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent query()
 *
 * @mixin \Eloquent
 */

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
