<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DividerWithImage extends Component
{
    public $title;
    public $text;





    public function render()
    {
        return view('livewire.Components.divider-with-image');
    }
}
