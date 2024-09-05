<?php

namespace App\Livewire;

use App\Models\CustomeSize;
use Livewire\Component;

class EditSize extends Component
{
    public $name;
    public $status = 1;
    public $code;
    public $sizeId;

    protected $rules = [
        'name' => 'required',
        'code' => 'required',
    ];

    public function mount($params)
    {
        $data = CustomeSize::find($params['id']);
        $this->sizeId = $data->id;
        $this->name = $data->name;
        $this->code = $data->code;
        $this->status = $data->status;
    }

    public function submit()
    {
        $this->validate();
     
        $data = CustomeSize::find($this->sizeId);
        $data->name = $this->name;
        $data->code = $this->code;
        $data->status = $this->status;
        $data->save();
        

        $this->dispatch('closeDrawer');
        $this->dispatch('updateCustomeSizes');
    }
    public function render()
    {
        return view('livewire.edit-size');
    }
}
