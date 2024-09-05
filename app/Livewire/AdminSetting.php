<?php

namespace App\Livewire;

use App\Models\SiteSettings;
use Livewire\Attributes\On;
use Livewire\Component;

class AdminSetting extends Component
{
    #[On('updateSetting')]

    public function render()
    {
        $setting = SiteSettings::first();

        return view('livewire.admin-setting',compact('setting'))->layout('layouts.app');
    }
}
