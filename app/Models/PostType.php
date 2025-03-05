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

class PostType extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    use HasFactory;
}
