<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class OrderItem
 * 
 * Represents an individual item within a customer order.
 *
 * @package App\Models
 * @property int $id Unique identifier for the order item.
 * @property int $order_id Identifier for the associated order.
 * @property int $product_id Identifier for the associated product.
 * @property int $quantity Quantity of the product ordered.
 * @property float $price Price of the product at the time of the order.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the order item was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the order item record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem query()
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class OrderItem extends Model
{

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    use HasFactory;
}
