<?php

namespace App\Livewire\Components;

use App\Models\Type;
use Livewire\Component;
use App\Models\ContactInfo;

class Nav extends Component
{
    public function render()
    {
        $types = Type::take(3)->get();
        // dd($types);
        return view(
            'livewire.Components.nav',
            [
                'types' => $types,
                'contact_info' => ContactInfo::get()->first()
            ]
        );
    }
}
