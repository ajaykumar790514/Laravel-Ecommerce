<?php

namespace App\Livewire;

use App\Models\Color;
use Livewire\Component;

class AddColor extends Component
{
    public $name;
    public $status = 1;
    public $color;

    protected $rules = [
        'name' => 'required',
        'color' => 'required',
    ];

    public function submit()
    {
        
        $this->validate();
        Color::create([
            'name' => $this->name,
            'color' => $this->color,
            'status' => $this->status,
        ]);
        $this->dispatch('closeDrawer');
        $this->dispatch('updateColor');
    }
    public function render()
    {
        return view('livewire.add-color');
    }
}
