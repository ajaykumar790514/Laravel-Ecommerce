<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Livewire\Attributes\On;
use Livewire\Component;

class CategoryItemPage extends Component
{


    public $category_id;
    public $selectedBrand = [];
    public $selectedCategory;
    public function mount($category)
    {
        $category_data = Category::where('slug', $category)->first();

        if ($category_data) {
            $this->category_id = $category_data->id;
        }
    }

    public function resetFilter()
    {
        $this->selectedCategory = null;
        $this->selectedBrand = [];
        $this->dispatch('updatedProduct');
    }
#[On('updatedProduct')]
    public function render()
    {
        $brands = Brand::all();
        $subCategory  = SubCategory::with('category')->where('category_id', $this->category_id)->get();


        $query  = Product::with(['category', 'subCategory', 'images' => function ($img) {
            $img->orderBy('id')->take(1);
        }, 'brand', 'variants' => function ($query) {
            $query->orderBy('id')->take(1);
        }]);


        if ($this->selectedCategory) {
            $query->where('sub_category_id', $this->selectedCategory);
        }


        if($this->selectedBrand){
            $query->whereIn('brand_id', $this->selectedBrand);
        }

        $categoryItems = $query->where('category_id', $this->category_id)->get();
        if (!$categoryItems) {
            abort(404, "data not found");
        }


        return view('livewire.category-item-page', compact('brands', 'subCategory', 'categoryItems'))->layout('layouts.guest');
    }
}
