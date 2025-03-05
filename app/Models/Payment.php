<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Payment
 *
 * Represents a payment transaction within the system.
 *
 * @package App\Models
 *
 * @property int $id Unique identifier for the payment.
 * @property string $first_name First name of the payer.
 * @property string $last_name Last name of the payer.
 * @property string $email Email address of the payer.
 * @property float $amount Payment amount.
 * @property string $type Type of payment (e.g., subscription, one-time).
 * @property string|null $program Program or service associated with the payment.
 * @property string|null $stripe_payment_intent_id Stripe Payment Intent identifier.
 * @property string|null $payment_method Payment method used (e.g., credit card, PayPal).
 * @property string $currency Currency of the payment (e.g., USD, EUR).
 * @property string $status Status of the payment (e.g., pending, completed, failed).
 * @property string|null $receipt_url URL to the payment receipt.
 * @property string|null $customer_id Identifier for the customer in the payment gateway.
 * @property \Illuminate\Support\Carbon|null $payment_date Date when the payment was processed.
 * @property float|null $shipment_cost Cost associated with shipping (if applicable).
 * @property bool $isRecurring Indicates whether the payment is recurring.
 * @property string|null $processed_by Identifier of the user or system that processed the
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the payment record was last updated.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 *
 * @mixin \Eloquent
 */
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
        'shipment_cost',
        'isRecurring',
        'processed_by',
        'tax',
        'totalAmount',
    ];
    use HasFactory;
}

