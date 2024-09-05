<?php

namespace App\Livewire;

use App\Models\Material;
use Livewire\Component;

class AddMaterial extends Component
{
    public $name;
    public $description;
    public $price;
    public $offer_price;
    public $status = 1;

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'offer_price' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        Material::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'offer_price' => $this->offer_price,
            'status' => $this->status,
        ]);

        $this->dispatch('closeDrawer');
        $this->dispatch('updateAdminMaterials');
    }
    public function render()
    {
        return view('livewire.add-material');
    }
}
