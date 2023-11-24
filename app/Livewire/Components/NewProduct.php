<?php

namespace App\Livewire\Components;

use App\Models\Product;
use Livewire\Component;

class NewProduct extends Component
{
    public function render()
    {
        $newProducts = Product::where('avalibale', 1)->take(4)->get();
        // dd($newProducts);
        return view(
            'livewire.Components.new-product',
            [
                'newProducts' => $newProducts,
            ]
        );
    }
}
