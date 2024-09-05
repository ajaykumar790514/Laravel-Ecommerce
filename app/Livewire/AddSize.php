<?php

namespace App\Livewire;

use App\Models\CustomeSize;
use Livewire\Component;

class AddSize extends Component
{
    public $name;
    public $status = 1;
    public $code;

    protected $rules = [
        'name' => 'required',
        'code' => 'required',
    ];

    public function submit()
    {
        $this->validate();
        CustomeSize::create([
            'name' => $this->name,
            'code' => $this->code,
            'status' => $this->status,
        ]);

        $this->dispatch('closeDrawer');
        $this->dispatch('updateCustomeSizes');
    }
    public function render()
    {
        return view('livewire.add-size');
    }
}
