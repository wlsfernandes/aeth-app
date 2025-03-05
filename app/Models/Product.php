<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Product
 * 
 * Represents a product available for purchase.
 *
 * @package App\Models
 * @property int $id Unique identifier for the product.
 * @property string $name Name of the product.
 * @property string|null $description Detailed description of the product.
 * @property float $price Price of the product.
 * @property int $stock Quantity of the product available in stock.
 * @property string $sku Stock Keeping Unit (SKU) identifier for the product.
 * @property string|null $type Type or category of the product.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the product was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the product was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @property string|null $image
 * @property string|null $weight
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CartItem> $cartItems
 * @property-read int|null $cart_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWeight($value)
 * @mixin \Eloquent
 */

class Product extends Model
{

    protected $fillable = ['name', 'description', 'price', 'stock', 'sku', 'type'];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    use HasFactory;
}
