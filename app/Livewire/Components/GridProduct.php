<?php

namespace App\Livewire\Components;

use App\Models\Type;
use App\Models\Product;
use Livewire\Component;

class GridProduct extends Component
{
    public $type_id;
    public $title ;

    public function mount()
    {
        $this->title=__('product');
    }

    public function render()
    {
        if($this->type_id)
        {

            $products = Product::where('type_id', $this->type_id)->where('avalibale', 1)->get();
            if (!$products->isEmpty()) {
                $this->title = app()->getLocale() == 'ar' ? Type::find($this->type_id)->name : Type::find($this->type_id)->name_en ;

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
