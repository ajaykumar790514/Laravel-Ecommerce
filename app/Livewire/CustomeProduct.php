<?php

namespace App\Livewire;

use App\Models\Color;
use App\Models\CustomeSize;
use App\Models\Material;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class CustomeProduct extends Component
{
    public $color;
    public $size;
    public $material;

    public function mount()
    {
        $this->material = Material::where('status', 1)->first();
        $this->color = Color::where('status', 1)->first()->color;
        $this->size = CustomeSize::where('status', 1)->first()->code;
        // dd($this->material);
    }

    public function changeMaterial($id)
    {
        $this->material = Material::where('status', 1)->find($id);
    }
    public function render()
    {

        $colors = Color::where('status', 1)->get();
        $sizes = CustomeSize::where('status', 1)->get();
        $tshirt_materials = Material::where('status', 1)->get();
        // dd($tshirt_materials);
        return view('livewire.custome-product', compact('colors', 'sizes', 'tshirt_materials'))->layout('layouts.guest');
    }

    public function store(Request  $request)
    {
       print_r($request);
    }
}
