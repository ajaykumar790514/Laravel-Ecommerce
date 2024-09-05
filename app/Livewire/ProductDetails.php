<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductDetails extends Component
{
    public $product_id;
    public $sub_category_id;
    public $quantity = 1;

    public $firstProductVariant;
    public function mount($id, $sub_cat)
    {

        // Assign product ID
        $this->product_id = $id;

        // Attempt to find the sub-category by slug
        $subCategory = SubCategory::where('slug', $sub_cat)->first();
        if (!$subCategory) {
            abort(404, 'Sub-category not found.');
        }
        // dd(Product::find($id)->first());
        // Assign sub-category ID
        // $this->sub_category_id = $subCategory->id;

        $this->firstProductVariant = ProductVariant::where('product_id', $this->product_id)->first();
    }


    public function updateVariant($varSku)
    {
        $this->firstProductVariant = ProductVariant::where(['product_id' => $this->product_id, 'sku' => $varSku])->first();
        // dd($this->firstProductVariant);
        $this->dispatch('loaderShow');
    }

    #[On('updateProductVariant')]
    public function render()
    {
        // Validate product ID and sub-category ID
        // if (!is_numeric($this->product_id) || !is_numeric($this->sub_category_id)) {
        //     abort(404, 'Invalid product or sub-category ID.');
        // }

        // Attempt to find the product with associated relationships
        try {
            $product = Product::with('category', 'subCategory', 'images', 'variants')
                ->where([
                    'id' => $this->product_id,
                    // 'sub_category_id' => $this->sub_category_id
                ])->firstOrFail();
        } catch (ModelNotFoundException $e) {
            abort(404, 'Product not found.');
        }

        // Check if product was found
        if (!$product) {
            abort(404, 'Product not found.');
        }



        return view('livewire.product-details', compact('product'))->layout('layouts.guest');
    }
}
