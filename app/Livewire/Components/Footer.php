<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\ContactInfo;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.components.footer', [

            'contact_info' => ContactInfo::get()->first()
        ]);
    }
}
