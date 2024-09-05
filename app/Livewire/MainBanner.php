<?php

namespace App\Livewire;

use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;


class MainBanner extends Component
{

    public function delete($id)
    {
        $data = Banner::find($id);
        if ($data->image && Storage::exists($data->image)) {
            Storage::delete($data->image);
        }
        $data->delete();
        $this->dispatch('updatedMainBanner');
    }
    #[On('updatedMainBanner')]
    public function render()
    {
        $banners = Banner::with('category')->latest()->get();
        // dd($banners);
        return view('livewire.main-banner', compact('banners'))->layout('layouts.app');
    }
}
