<?php

namespace App\Livewire;

use App\Models\CustomerAddress;
use App\Models\Order;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class UserDashBoard extends Component
{
    public function deleteAddress($id)
    {
        CustomerAddress::where('id', $id)->delete();
        $this->dispatch('profileUpdated');
    }

    #[On('profileUpdated')]
    public function render()
    {
        $user = Auth::user();
        $address = CustomerAddress::where('user_id', Auth::id())->get();
        $defaultAddress = CustomerAddress::where('user_id', Auth::id())->where('is_default', true)->first();

        $orders = Order::with('orderItems.product')->where('user_id', Auth::id())->latest()->get();
        // dd($orders);
        $setting = SiteSettings::first();
        $pendingOrder = Order::where('user_id', Auth::id())->where('status', 'pending')->count();
        // dd($pendingOrder);
        return view('livewire.user-dash-board', compact('user', 'address', 'orders', 'setting', 'defaultAddress','pendingOrder'))->layout('layouts.profile_layout');
    }
}
