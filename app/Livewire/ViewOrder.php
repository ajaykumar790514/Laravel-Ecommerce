<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewOrder extends Component
{
    public $orderNumber;

    public function mount($id){
        $this->orderNumber = $id;
    }
    public function render()
    {
        $order = Order::with('user','orderItems.product.images','history','customerAddress','payment')->where(['user_id' => Auth::id(), 'order_number'=>$this->orderNumber])->first();
        // dd($order);
        return view('livewire.view-order',compact('order'))->layout('layouts.profile_layout');
    }
}
