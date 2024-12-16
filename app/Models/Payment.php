<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'web_payments';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'amount',
        'type',
        'program',
        'stripe_payment_intent_id',
        'payment_method',
        'currency',
        'status',
        'receipt_url',
        'customer_id',
        'payment_date',
        'shipment_cost'
    ];
    use HasFactory;
}
