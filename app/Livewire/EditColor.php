<?php

namespace App\Livewire;

use App\Models\Color;
use Livewire\Component;

class EditColor extends Component
{
    public $name;
    public $status = 1;
    public $color;
    public $colorId;


    protected $rules = [
        'name' => 'required',
        'color' => 'required',
    ];

    public function mount($params)
    {
        $data = Color::find($params['id']);
        $this->name = $data->name;
        $this->color = $data->color;
        $this->colorId = $data->id;
        $this->status = $data->status;
    }

    public function submit()
    {
        $this->validate();
        $data = Color::find($this->colorId);
        $data->name = $this->name;
        $data->color = $this->color;
        $data->status = $this->status;
        $data->save();
        $this->dispatch('closeDrawer');
        $this->dispatch('updateColor');
    }



    public function render()
    {
        return view('livewire.edit-color');
    }
}
