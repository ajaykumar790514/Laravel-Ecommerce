<?php

namespace App\Livewire;

use App\Models\CustomeSize;
use Livewire\Attributes\On;
use Livewire\Component;

class Sizes extends Component
{
    public function delete($id)
    {
        CustomeSize::where('id', $id)->delete();
        $this->dispatch('updateCustomeSizes');
    }

    #[On('updateCustomeSizes')]
    public function render()
    {
        $sizes = CustomeSize::latest()->get();
        return view('livewire.sizes', compact('sizes'))->layout('layouts.app');
    }
}
