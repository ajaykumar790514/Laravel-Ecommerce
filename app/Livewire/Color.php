<?php

namespace App\Livewire;

use App\Models\Color as ModelsColor;
use Livewire\Attributes\On;
use Livewire\Component;

class Color extends Component
{
    public function delete($id)
    {
        ModelsColor::where('id', $id)->delete();
        $this->dispatch('updateColor');
    }

    #[On('updateColor')]
    public function render()
    {
        $colors = ModelsColor::latest()->get();
        return view('livewire.color', compact('colors'))->layout('layouts.app');
    }
}
