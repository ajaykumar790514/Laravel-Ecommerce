<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class CartPage extends Component
{

    public function Increment($p_id)
    {
        $cart = Session::get('cart');
        $cart[$p_id]['quantity']++;

        Session::put('cart', $cart);
    }
    public function Decrement($p_id)
    {
        $cart = Session::get('cart');

        $qnt =  $cart[$p_id]['quantity'];


        if ($qnt > 1) {
            $cart[$p_id]['quantity']--;
        }
        Session::put('cart', $cart);
    }

    #[On('removeCart')]
    public function render()
    {
        $carts  = Session::get('cart');
        return view('livewire.cart-page', compact('carts'))->layout('layouts.guest');
    }
}
