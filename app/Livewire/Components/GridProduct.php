<?php

namespace App\Livewire\Components;

use App\Models\Type;
use App\Models\Product;
use Livewire\Component;

class GridProduct extends Component
{
    public $type_id;
    public $title = 'منتجات';

    public function render()
    {
        if($this->type_id)
        {

            $products = Product::where('type_id', $this->type_id)->where('avalibale', 1)->get();
            $this->title = Type::find($this->type_id)->name;
            if (!$products->isEmpty()) {

                // dd($this->title);
                return view(
                    'livewire.Components.grid-product',
                    [
                        'products' => $products,
                    ]
                );
            } else
                abort('404');
        }


        $products = Product::where('avalibale', 1)->get();
        return view(
            'livewire.Components.grid-product',
            [
                'products' => $products,
            ]
        );
    }
}
