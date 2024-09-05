<?php

namespace App\Livewire;

use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddUserAddress extends Component
{
    public $address;
    public $city;
    public $state;
    public $pincode;
    public $mobile;
    public $is_default = 0;



    protected $rules = [
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'pincode' => 'required',
        'mobile' => 'required',
    ];
    public function submit()
    {
        $this->validate();
        $userId = Auth::id();

        if ($this->is_default) {
            CustomerAddress::where('user_id', $userId)->update(['is_default' => false]);
        }

        CustomerAddress::create([
            'user_id' => $userId,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'pincode' => $this->pincode,
            'mobile' => $this->mobile,
            'is_default' => $this->is_default,
        ]);
        return redirect()->route('user_dashboard');
    }
    public function render()
    {
        return view('livewire.add-user-address')->layout('layouts.profile_layout');;
    }
}
