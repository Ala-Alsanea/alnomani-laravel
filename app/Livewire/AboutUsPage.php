<?php

namespace App\Livewire;

use App\Models\AboutUs;
use Livewire\Component;

class AboutUsPage extends Component
{
    public function render()
    {
        return view('livewire.about-us-page',
        [
            'main_text'=>AboutUs::first()->main_text,
        ]

    );
    }
}
