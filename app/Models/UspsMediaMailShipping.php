<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class UspsMediaMailShipping
 * 
 * Represents USPS Media Mail shipping details and costs.
 *
 * @package App\Models
 * @property int $id Unique identifier for the shipping record.
 * @property float $cost Cost of the USPS Media Mail shipping.
 * @property string|null $delivery_time Estimated delivery time for Media Mail shipments.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the shipping record was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the shipping record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping query()
 * @property string $weight_not_over
 * @property string $rate
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereWeightNotOver($value)
 * @mixin \Eloquent
 */

class UspsMediaMailShipping extends Model
{
    use HasFactory;
}
