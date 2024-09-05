<?php

namespace App\Livewire;

use App\Models\SiteSettings;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAdminSetting extends Component
{
    use WithFileUploads;
    public $siteId;
    public $name;
    public $slogan;
    public $logo;
    public $favicon;
    public $email;
    public $phone;
    public $address;
    public $facebook;
    public $twitter;
    public $instagram;
    public $linkedin;
    public $youtube;
    public $logoPath;
    public $faviconPath;

    protected $rules = [
        'name' => 'required',
        'slogan' => 'required',

        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',

    ];

    public function mount($params)
    {
        $data = SiteSettings::find($params['id']);
        $this->siteId = $data->id;
        $this->name = $data->name;
        $this->slogan = $data->slogan;
        $this->logoPath = $data->logo;
        $this->faviconPath = $data->favicon;

        $this->email = $data->email;
        $this->phone = $data->phone;
        $this->address = $data->address;
        $this->facebook = $data->facebook;
        $this->twitter = $data->twitter;
        $this->instagram = $data->instagram;
        $this->linkedin = $data->linkedin;
        $this->youtube = $data->youtube;
        $this->linkedin = $data->linkedin;
        $this->youtube = $data->youtube;
    }

    public function submit()
    {
        if ($this->logo) {
            $this->logoPath = $this->logo->store('products');
        }
        if ($this->favicon) {
            $this->faviconPath = $this->favicon->store('products');
        }

        $this->validate();
        $data = SiteSettings::find($this->siteId);
        $data->name = $this->name;
        $data->slogan = $this->slogan;
        $data->logo = $this->logoPath;
        $data->favicon = $this->faviconPath;
        $data->email = $this->email;
        $data->phone = $this->phone;
        $data->address = $this->address;
        $data->facebook = $this->facebook;
        $data->twitter = $this->twitter;
        $data->instagram = $this->instagram;
        $data->linkedin = $this->linkedin;
        $data->youtube = $this->youtube;
        $data->save();
        $this->dispatch('closeDrawer');
        $this->dispatch('updateSetting');
    }

    public function render()
    {
        return view('livewire.edit-admin-setting');
    }
}
