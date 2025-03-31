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

    protected $fillable = [

        'book_no', //string
        'name', //title 
        'author', //string
        'publisher', //string
        'year_of_publication', // date
        'shelf_location', //string
        'storage_1_office', //number
        'storage_2_almacen', // number
        'stock', // number
        'printer_cost',  // money
        'price', // change position to after printer_cost 
        'isbn', //string
        'notes', //text
        'costo_invertido_q', // money
        'costo_y_venta', // money
        'margen', // % percente
        'porcentaje_margen', //string
        'contrato_editorial', //string
        'contrato_regalias', //string
        'permiso', //string
        'reimpresion', //string
        'stop', //string
        'baja_destruccion', //string
        'description', // string default ''
        'weight', //number
        'image', //string
        'notes',
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    use HasFactory;
}
