<?php

namespace App\Livewire\Components;

use App\Models\ContactInfo;
use Livewire\Component;

class WhatsappFloatingButton extends Component
{
    public function render()
    {

        return view('livewire.components.whatsapp-floating-button',[

            'whatsapp'=> ContactInfo::pluck('phone_whatsapp')->first()
        ]);
    }
}
