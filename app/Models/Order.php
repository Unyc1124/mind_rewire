<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_number',
        'subtotal',
        'tax',
        'shipping',
        'total_amount',
        'payment_method',
        'payment_status',
        'razorpay_order_id',
        'razorpay_payment_id',
        'razorpay_signature',
        'status',
        'customer_name',
        'customer_email',
        'customer_phone',
        'shipping_address',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
