<?php

namespace App\Livewire;

use App\Models\OfferBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPageBanner extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $image;
    public $imagePath;
    public $bannerId;

    protected $rules = [
        'title' => 'required',
    ];

    public function mount($params)
    {
        $data = OfferBanner::find($params['id']);
        $this->title = $data->title;
        $this->description = $data->description;

        $this->imagePath = $data->image;
        $this->bannerId = $data->id;
    }

    public function submit()
    {
        $this->validate();
        if ($this->image) {
            if ($this->imagePath && Storage::exists($this->imagePath)) {
                Storage::delete($this->imagePath);
            }
            $this->imagePath = $this->image->store('banner');
        }
        $data = OfferBanner::find($this->bannerId);
        $data->title = $this->title;
        $data->description = $this->description;
        $data->image = $this->imagePath;
        $data->save();
        
        $this->dispatch('closeDrawer');
        $this->dispatch('updatedPageBanner');
    }

    public function render()
    {
        return view('livewire.edit-page-banner');
    }
}
