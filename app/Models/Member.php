<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 *
 * Represents a registered member with personal details and membership information.
 *
 * @package App\Models
 * @property int $id Unique identifier for the member.
 * @property int $user_id Identifier for the associated user.
 * @property string $first_name First name of the member.
 * @property string $last_name Last name of the member.
 * @property string $email Email address of the member.
 * @property string|null $phone_number Contact phone number.
 * @property string|null $address_line_1 Primary address line.
 * @property string|null $address_line_2 Secondary address line (if any).
 * @property string|null $zipcode Postal code of the address.
 * @property string|null $state State or region of residence.
 * @property string|null $country Country of residence.
 * @property \Illuminate\Support\Carbon|null $membership_start_date Date when the membership started.
 * @property \Illuminate\Support\Carbon|null $membership_end_date Date when the membership expires.
 * @property bool $active_status Indicates if the membership is currently active.
 * @property string|null $membership_plan Type of membership plan subscribed to.
 * @property bool $isYear Indicates if the membership plan is based on a yearly subscription.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the member was registered.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the member record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member query()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Membership> $memberships
 * @property-read int|null $memberships_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereActiveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereIsYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMembershipEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMembershipPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMembershipStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereZipcode($value)
 * @mixin \Eloquent
 */

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
        'address_line_1',
        'address_line_2',
        'zipcode',
        'state',
        'country',
        'membership_start_date',
        'membership_end_date',
        'active_status',
        'membership_plan',
        'isYear',
        'old_membership_id'
    ];

    // Cast the date fields to Carbon instances
    protected $casts = [
        'active_status' => 'boolean',
        'membership_start_date' => 'datetime',
        'membership_end_date' => 'datetime',
        'isYear' => 'boolean',
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
