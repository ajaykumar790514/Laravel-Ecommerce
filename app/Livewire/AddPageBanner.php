<?php

namespace App\Livewire;

use App\Models\OfferBanner;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPageBanner extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $image;

    protected $rules = [
        'title' => 'required',
        'image' => 'required',
    ];
    public function submit()
    {
        $this->validate();
        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('banner');
        }
        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'image' => $imagePath,
        ];

        OfferBanner::create($data);
        
        $this->dispatch('closeDrawer');
        $this->dispatch('updatedPageBanner');

    }
    public function render()
    {

        return view('livewire.add-page-banner');
    }
}
