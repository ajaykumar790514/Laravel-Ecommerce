<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'amount', 'payment_method', 'payment_id','razorpay_order_id'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
