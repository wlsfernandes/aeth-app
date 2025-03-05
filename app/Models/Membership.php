<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Membership
 *
 * Represents a membership subscription for a user.
 *
 * @package App\Models
 *
 * @property int $id Unique identifier for the membership.
 * @property int $user_id Identifier for the associated user.
 * @property string $membership_plan Type of membership plan subscribed to.
 * @property float $price Cost of the membership.
 * @property \Illuminate\Support\Carbon|null $start_date Date when the membership started.
 * @property \Illuminate\Support\Carbon|null $end_date Date when the membership expires.
 * @property bool $is_active Indicates if the membership is currently active.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the membership was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the membership record was last updated.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership query()
 *
 * @mixin \Eloquent
 */

class Membership extends Model
{
    use HasFactory;

    // Specify the table if it differs from the default (e.g., 'membership')
    protected $table = 'membership';

    // Mass assignable attributes
    protected $fillable = [
        'user_id',
        'membership_plan',
        'price',
        'start_date',
        'end_date',
        'is_active',
    ];

    /**
     * Get the user associated with the membership.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the member associated with the membership.
     */
    public function member()
    {
        return $this->belongsTo(Member::class, 'user_id', 'user_id');
    }
}
