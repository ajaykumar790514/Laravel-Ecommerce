<?php

namespace App\Livewire;

use App\Models\SiteSettings;
use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {
        $setting = SiteSettings::first();
        return view('livewire.contact-page', compact('setting'))->layout('layouts.guest');
    }
}
