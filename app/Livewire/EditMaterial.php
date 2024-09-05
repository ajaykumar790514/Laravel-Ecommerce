<?php

namespace App\Livewire;

use App\Models\Material;
use Livewire\Component;

class EditMaterial extends Component
{
    public $name;
    public $description;
    public $price;
    public $offer_price;
    public $omaterialId;
    public $status = 1;

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'offer_price' => 'required',
    ];
    public function mount($params)
    {
        $data = Material::find($params['id']);
        $this->omaterialId = $data->id;
        $this->name = $data->name;
        $this->description = $data->description;
        $this->price = $data->price;
        $this->offer_price = $data->offer_price;
        $this->status = $data->status;
    }

    public function submit()
    {
        $this->validate();
        $data = Material::find($this->omaterialId);
        $data->name = $this->name;
        $data->description = $this->description;
        $data->price = $this->price;
        $data->offer_price = $this->offer_price;
        $data->status = $this->status;
        $data->save();
        $this->dispatch('closeDrawer');
        $this->dispatch('updateAdminMaterials');
    }
    public function render()
    {
        return view('livewire.edit-material');
    }
}
