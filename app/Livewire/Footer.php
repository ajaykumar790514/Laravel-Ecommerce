<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\SiteSettings;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $categories = Category::all();
        $setting = SiteSettings::first();
        return view('livewire.footer', compact('categories', 'setting'));
    }
}
