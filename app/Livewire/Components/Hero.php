<?php

namespace App\Livewire\Components;

use App\Models\BannerLandingPage;
use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        $banners = BannerLandingPage::where('active', 1)->get();
        return view('livewire.Components.banner-landing-page',
    [
        'banners'=>$banners,
    ]);
    }
}
