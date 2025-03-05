<?php
/**
 * Class PostType
 *
 * Represents a classification or category for posts.
 *
 * @package App\Models
 *
 * @property int $id Unique identifier for the post type.
 * @property string $name Name of the post type (e.g., blog, news, announcement).
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the post type was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the post type was last updated.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|PostType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostType query()
 *
 * @mixin \Eloquent
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|PostType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PostType extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    use HasFactory;
}
