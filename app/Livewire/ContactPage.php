<?php

namespace App\Livewire;

use App\Models\ContactMassage;
use Livewire\Component;

class ContactPage extends Component
{



    public $name;
    public $email;
    public $_message;
    public $isSend=0;


    public function render()
    {
        return view('livewire.contact-page');
    }

    public function store()
    {
        if ($this->isSend == 1) {
            return;
        }

        $contactMessage = $this->validate([
            'name' => 'required|string',
            '_message' => 'required|string|min:5|max:900',
            'email' => 'required|email',
        ]);

        $contactMessage['message'] = $this->_message;

        ContactMassage::create($contactMessage);

        $this->isSend = 1;
        // $this->isSend = 0;
        // dd($contactMessage);
    }
}
