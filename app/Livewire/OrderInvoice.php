<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\SiteSettings;
use Livewire\Component;

class OrderInvoice extends Component
{
    public $orderId;

    public function mount($id)
    {
        $this->orderId = $id;
    }
    public function render()

    {
        $setting = SiteSettings::first();
        $order = Order::with('user','orderItems.product', 'customerAddress')->where('order_number', $this->orderId)->first();
        // dd($order);
        return view('livewire.order-invoice', compact('setting', 'order'))->layout('layouts.app');
    }
}
