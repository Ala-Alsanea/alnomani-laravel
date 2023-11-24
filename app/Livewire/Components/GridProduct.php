<?php

namespace App\Livewire\Components;

use App\Models\Product;
use Livewire\Component;

class GridProduct extends Component
{
    public function render()
    {
        $products = Product::where('avalibale', 1)->get();

        return view(
            'livewire.Components.grid-product',
            [
                'products' => $products,
            ]
        );
    }
}
