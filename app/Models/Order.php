<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;
/**
 * Class Order
 *
 * Represents a customer order containing multiple order items.
 *
 * @package App\Models
 *
 * @property int $id Unique identifier for the order.
 * @property string $order_number Unique order reference number.
 * @property string $customer_name Name of the customer who placed the order.
 * @property string $customer_email Email address of the customer.
 * @property float $total Total cost of the order.
 * @property float|null $shipment_cost Cost of shipping the order.
 * @property string $address Shipping address of the order.
 * @property string|null $address_complement Additional address details (e.g., apartment, suite).
 * @property string $city City where the order is being shipped.
 * @property string $state State or region where the order is being shipped.
 * @property string $zipcode Postal code of the shipping address.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the order was placed.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the order record was last updated.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 *
 * @mixin \Eloquent
 */

class Order extends Model
{

    protected $fillable = ['order_number', 'customer_name', 'customer_email', 'total', 'shipment_cost', 'address', 'address_complement', 'city', 'state', 'zipcode'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    use HasFactory;
}
