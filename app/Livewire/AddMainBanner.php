<?php

namespace App\Livewire;

use App\Models\Banner;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddMainBanner extends Component
{
    use WithFileUploads;
    public $title;
    public $category_id;
    public $description;
    public $image;
    public $link;
    public $is_active = 0;

    protected $rules = [
        'title' => 'required',
        'category_id' => 'required',
        'image' => 'required',
        'link' => 'required',

    ];

    public function submit()
    {
        $this->validate();
        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('banner');
        }

        Banner::create([
            'title' => $this->title,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'image' => $imagePath,
            'link' => $this->link,
            'is_link' => $this->link ? 1 : 0,
            'is_active' => $this->is_active,
        ]);

        $this->dispatch('closeDrawer');
        $this->dispatch('updatedMainBanner');
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.add-main-banner', compact('categories'));
    }
}
