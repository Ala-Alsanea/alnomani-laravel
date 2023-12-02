<?php

namespace App\Livewire\Components;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $available_locales = [
        'English' => 'en',
        'Arabic' => 'ar',
    ];

    public $current_locale='ar';

    public function mount()
    {
        $this->current_locale = app()->getLocale();
    }

    public function render()
    {
        return view('livewire.components.language-switcher');
    }
}
