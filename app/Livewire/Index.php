<?php

namespace App\Livewire;

use App\Models\Banner;
use App\Models\Category;
use App\Models\OfferBanner;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $newProduct = Product::with(['category', 'subCategory', 'images', 'brand', 'variants' => function ($query) {
            $query->orderBy('id')->take(1); // Retrieve only the first variant
        }])
            ->latest()
            ->limit(10)
            ->get();
        $products = Product::with(['category', 'subCategory', 'images', 'brand', 'variants' => function ($query) {
            $query->orderBy('id')->take(1); // Retrieve only the first variant
        }])
            ->limit(10)
            ->get();

        $bestProduct = Product::with(['category', 'subCategory', 'images', 'brand', 'variants' => function ($query) {
            $query->orderBy('id')->take(1); // Retrieve only the first variant
        }])->inRandomOrder()
            ->limit(10)
            ->get();




        $categoryProducts = Category::with(['products.brand', 'products.images', 'products.variants'])->limit(3)->get();

        $banners = Banner::where('is_active', 1)->get();
        $offerBanner = OfferBanner::inRandomOrder()->first();
        // dd($offerBanner);

        return view('livewire.index', compact('newProduct','offerBanner', 'products', 'bestProduct', "categoryProducts", 'banners'))->layout('layouts.guest');
    }
}
