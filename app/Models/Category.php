<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * Represents a category for organizing products or content.
 *
 * @package App\Models
 * @property int $id Unique identifier for the category.
 * @property string $name Name of the category.
 * @property string|null $description Optional description of the category.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the category was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the category was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    use HasFactory;
}
