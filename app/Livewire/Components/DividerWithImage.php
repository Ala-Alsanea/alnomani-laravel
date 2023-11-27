<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DividerWithImage extends Component
{
    public $title= 'ابحث عن العنصر المثالي لسيارتك ';
    public $text = 'دائما نلبي مطالبك';
    public function render()
    {
        return view('livewire.Components.divider-with-image');
    }
}
