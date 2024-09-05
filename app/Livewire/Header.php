<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class Header extends Component
{


    #[On('addToCart')]
    public function addToCart($p_id, $varient)
    {

        $cart = Session::get('cart', []);


        $data = Product::find($p_id);
        // dd($data-)
        $image = ProductImages::where('product_id', $p_id)->first();
        if (array_key_exists($p_id, $cart)) {
            $cart[$p_id]['quantity']++;
        } else {
            $cart[$p_id] = [
                'productId' => $p_id,
                'title' => $data->name,
                'varient' => $varient,
                'quantity' => 1,
                'image' => $image->image ?? null,
            ];
        }

        Session::put('cart', $cart);
        $this->dispatch('updateCart');
    }

    #[On('removeCart')]
    public function removeItem($pr_id)
    {

        $cart = Session::get('cart');
        // Check if the product exists in the cart
        if (isset($cart[$pr_id])) {
            // Remove the product from the cart
            unset($cart[$pr_id]);
        }
        Session::put('cart', $cart);
        $this->dispatch('updateCart');
    }

    #[On('updateCart')]
    public function render()
    {
        $categories = Category::with('subCategory')->get();
        $brands = Brand::all();
        $cartItem = Session::get('cart');

        $totalPrice = 0;
        if ($cartItem) {

            $totalPrice = array_reduce($cartItem, function ($carry, $item) {
                return $carry + ($item['varient']['offer_price'] * $item['quantity']);
            }, 0);
        }

        $setting = SiteSettings::first();


        return view('livewire.header', compact('categories', 'brands', 'cartItem', 'setting', 'totalPrice'));
    }
}
