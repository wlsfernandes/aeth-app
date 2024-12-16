<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{

    protected $fillable = ['order_number', 'customer_name', 'customer_email', 'total','shipment_cost', 'address', 'address_complement', 'city', 'state', 'zipcode'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    use HasFactory;
}
