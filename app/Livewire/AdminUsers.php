<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminUsers extends Component
{
    public function render()
    {
        $users = User::latest()->get();
        return view('livewire.admin-users',compact('users'))->layout('layouts.app');
    }
}
