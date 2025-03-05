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
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @property string|null $tracking_number
 * @property string $order_status
 * @property string|null $status_date
 * @property-read \Illuminate\Database\Eloquent\Collection<int, OrderItem> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddressComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShipmentCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatusDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTrackingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereZipcode($value)
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
