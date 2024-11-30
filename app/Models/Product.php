<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'description', 'price', 'stock', 'sku', 'type'];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    use HasFactory;
}
