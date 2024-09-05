<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'cart_amount', 'delivery_boy_id', 'customer_address_id', 'customer_address_id', 'order_number', 'status', 'payment_method', 'payment_status', 'total_amount', 'discount_amount', 'delivery_fee', 'tax_amount', 'platform_fee', 'order_type', 'pickup_time', 'delivery_time', 'note'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function deliveryBoy()
    {
        return $this->belongsTo(DeliveryBoy::class, 'delivery_boy_id', 'id');
    }
    public function customerAddress()
    {
        return $this->belongsTo(CustomerAddress::class, 'customer_address_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(OrderPayment::class, 'order_id', 'id');
    }

    public function history()
    {
        return $this->hasMany(OrderHistory::class, 'order_id', 'id');
    }
}
