<?php

namespace App\Livewire;

use App\Models\Banner;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditMainBanner extends Component
{
    use WithFileUploads;
    public $title;
    public $category_id;
    public $bannerId;
    public $description;
    public $image;
    public $imagePath;
    public $link;
    public $is_active = 0;

    protected $rules = [
        'title' => 'required',
        'category_id' => 'required',
        'link' => 'required',

    ];

    public function mount($params)
    {
        $data = Banner::find($params['id']);
        $this->title = $data->title;
        $this->bannerId = $data->id;
        $this->category_id = $data->category_id;
        $this->description = $data->description;
        $this->imagePath = $data->image;
        $this->link = $data->link;
        $this->is_active = $data->is_active;
    }

    public function submit()
    {
        $data = Banner::findOrFail($this->bannerId);

        if ($this->image) {
            // Delete old image if it exists
            if ($data->image && Storage::exists($data->image)) {
                Storage::delete($data->image);
            }
            // Store new image
            $this->imagePath = $this->image->store('banner');
        }

        $data->title = $this->title;
        $data->category_id = $this->category_id;
        $data->description = $this->description;
        $data->link = $this->link;
        $data->is_active = $this->is_active;
        $data->is_link = true;
        $data->image = $this->imagePath;


        $data->save();
        $this->dispatch('closeDrawer');
        $this->dispatch('updatedMainBanner');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.edit-main-banner', compact('categories'));
    }
}
