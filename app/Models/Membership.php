<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
