<?php

namespace App\Livewire;

use App\Models\OfferBanner;
use Livewire\Attributes\On;
use Livewire\Component;

class PageBanner extends Component
{
    #[On('updatedPageBanner')]
    public function render()
    {
        $banners = OfferBanner::all();
        return view('livewire.page-banner', compact('banners'))->layout('layouts.app');
    }
}
