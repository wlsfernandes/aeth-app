<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Specify the table if it differs from the default (e.g., 'members')
    protected $table = 'members';

    // Mass assignable attributes
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'membership_start_date',
        'membership_end_date',
        'active_status',
        'membership_plan',
        'isYear',
    ];

    // Cast the date fields to Carbon instances
    protected $casts = [
        'membership_start_date' => 'date',
        'membership_end_date' => 'date',
    ];

    /**
     * Get the user that owns the member.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the memberships associated with the member.
     */
    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
}
