<?php

use App\Livewire\CustomeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/custom_product/store',[CustomeProduct::class,'store']);
