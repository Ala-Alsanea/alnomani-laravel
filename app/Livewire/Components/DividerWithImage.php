<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DividerWithImage extends Component
{
    public $title= 'ابحث عن العنصر المثالي لسيارتك';
    public $text = 'دائما نلبي مطالبك';


    public function mount()
    {
        $this->title = __('Find the perfect item for your car');
        $this->text = __('We always meet your demands');

    }


    public function render()
    {
        return view('livewire.Components.divider-with-image');
    }
}
