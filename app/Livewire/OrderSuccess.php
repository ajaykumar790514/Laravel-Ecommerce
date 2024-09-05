<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderSuccess extends Component
{
    public $orderNumber;
    public function mount($id)
    {

        $this->orderNumber = $id;
    }
    public function render()
    {
        $order = Order::with('orderItems.product','customerAddress')->where('order_number', $this->orderNumber)->first();
        // dd($order);
        return view('livewire.order-success',compact('order'))->layout('layouts.guest');
    }
}
