<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderDetails extends Component
{
    public $orderId;
    public function mount($id)
    {
        $this->orderId = $id;
    }

    public function render()
    {
        $order = Order::with('user', 'orderItems.product.images', 'customerAddress', 'payment', 'history')->where('order_number', $this->orderId)->first();
        return view('livewire.order-details', compact('order'))->layout('layouts.app');
    }
}
