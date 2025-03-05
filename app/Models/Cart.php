<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * 
 * Represents a shopping cart associated with a user.
 *
 * @package App\Models
 * @property int $id Unique identifier for the cart.
 * @property string $user_identifier Unique identifier for the user (can be session-based or user ID).
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the cart was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the cart was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CartItem> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUserIdentifier($value)
 * @mixin \Eloquent
 */
class Cart extends Model
{
    use HasFactory;

    /**
     * Attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['user_identifier'];

    /**
     * Get the items associated with the cart.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(CartItem::class);
    }
}
