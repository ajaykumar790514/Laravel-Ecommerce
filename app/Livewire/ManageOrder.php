<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ManageOrder extends Component
{
    // use WithPagination;

    #[On('updateOrders')]
    public function render()
    {
        $orders = Order::with('user')->latest()->paginate(10);
        return view('livewire.manage-order', compact('orders'))->layout('layouts.app');
    }
}
