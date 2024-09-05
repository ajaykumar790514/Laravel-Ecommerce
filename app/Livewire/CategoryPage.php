<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Livewire\Component;

class CategoryPage extends Component
{
    public $category_id;
    public $sub_category_id;
    public $selectedBrand = [];
    public function mount($category, $sub_category)
    {
        $this->category_id = Category::where('slug', $category)->first()->id;
        $sub_category_data = SubCategory::where('slug', $sub_category)->first();
        // dd($sub_category_data);
        if ($sub_category_data) {
            $this->sub_category_id = $sub_category_data->id;
        }
    }

    public function resetFilter()
    {
        $this->selectedBrand = [];
    }

    public function render()
    {
        $brands = Brand::all();
        $subCategory  = SubCategory::with('category')->where('category_id', $this->category_id)->get();
        $query  = Product::with(['category', 'subCategory', 'images' => function ($img) {
            $img->orderBy('id')->take(1);
        }, 'brand', 'variants' => function ($query) {
            $query->orderBy('id')->take(1);
        }])->where('sub_category_id', $this->sub_category_id);

        if ($this->selectedBrand) {
            $query->whereIn('brand_id', $this->selectedBrand);
        }

        $categoryItems = $query->get();

        if (!$categoryItems) {
            abort(404, "data not found");
        }
        return view('livewire.category-page', compact('brands', 'subCategory', 'categoryItems'))->layout('layouts.guest');
    }
}
