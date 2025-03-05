<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Role
 *
 * Represents a user role within the system, defining permissions and access levels.
 *
 * @package App\Models
 *
 * @property int $id Unique identifier for the role.
 * @property string $name Name of the role (e.g., admin, editor, user).
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the role was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the role was last updated.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 *
 * @mixin \Eloquent
 */

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
