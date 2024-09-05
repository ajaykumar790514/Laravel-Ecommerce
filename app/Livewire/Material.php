<?php

namespace App\Livewire;

use App\Models\Material as ModelsMaterial;
use Livewire\Attributes\On;
use Livewire\Component;

class Material extends Component
{

    public function delete($id)
    {
        ModelsMaterial::where('id', $id)->delete();
        $this->dispatch('updateAdminMaterials');
    }

    #[On('updateAdminMaterials')]
    public function render()
    {
        $materials = ModelsMaterial::latest()->get();
        return view('livewire.material', compact('materials'))->layout('layouts.app');
    }
}
