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
 *
 * @property int $id Unique identifier for the product.
 * @property string $name Name of the product.
 * @property string|null $description Detailed description of the product.
 * @property float $price Price of the product.
 * @property int $stock Quantity of the product available in stock.
 * @property string $sku Stock Keeping Unit (SKU) identifier for the product.
 * @property string|null $type Type or category of the product.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the product was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the product was last updated.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 *
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
