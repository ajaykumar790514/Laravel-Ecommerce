<?php

namespace App\Livewire;

use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditUserAddress extends Component
{

    public $address;
    public $city;
    public $state;
    public $pincode;
    public $mobile;
    public $customerId;
    public $is_default = 0;



    protected $rules = [
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'pincode' => 'required',
        'mobile' => 'required',
    ];
    public function mount($id)
    {
        $data = CustomerAddress::find($id);
        $this->address = $data->address;
        $this->city = $data->city;
        $this->state = $data->state;
        $this->pincode = $data->pincode;
        $this->mobile = $data->mobile;
        $this->is_default = $data->is_default;
        $this->customerId = $data->id;
    }

    public function submit()
    {
        $this->validate();


        if ($this->is_default) {
            // Set is_default to false for all other addresses of the user
            CustomerAddress::where('user_id', Auth::id())->update(['is_default' => false]);
        }

        $data = CustomerAddress::find($this->customerId);
        $data->address = $this->address;
        $data->city = $this->city;
        $data->state = $this->state;
        $data->pincode = $this->pincode;
        $data->mobile = $this->mobile;
        $data->is_default = $this->is_default;
        $data->save();
        return redirect()->route('user_dashboard');
    }
    public function render()
    {
        return view('livewire.edit-user-address')->layout('layouts.profile_layout');
    }
}
