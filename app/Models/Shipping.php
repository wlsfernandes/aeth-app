<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Shipping
 *
 * Represents shipping costs associated with orders.
 *
 * @package App\Models
 *
 * @property int $id Unique identifier for the shipping cost entry.
 * @property string $region The region or zone where the shipping cost applies.
 * @property float $cost The shipping cost for the specified region.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the shipping cost entry was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the shipping cost entry was last updated.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping query()
 *
 * @mixin \Eloquent
 */

class Shipping extends Model
{
    protected $table = 'shipping_costs';

    use HasFactory;
}
