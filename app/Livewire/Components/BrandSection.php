<?php

namespace App\Livewire\Components;

use App\Models\Brand;
use Livewire\Component;

class BrandSection extends Component
{
    public function render()
    {
        $brands=Brand::all();
        // dd($brands);
        return view('livewire.Components.brand-section',
    [
        'brands'=>$brands,
    ]
    );
    }
}
