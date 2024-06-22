<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactForm as ContactFormModel;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    protected $messages = [
        'name.required' => 'Het naam veld is verplicht.',
        'name.min' => 'De naam moet minimaal 2 karakters zijn.',
        'email.required' => 'Het email adres veld is verplicht.',
        'email.email' => 'Het moet een geldig email adres zijn.',
        'message.required' => 'Het bericht veld is verplicht.',
        'message.min' => 'Het bericht moet minimaal 10 karakters zijn.',
    ];

    public function submit()
    {
        $this->validate();

        ContactFormModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'message']);

        session()->flash('message', 'Thank you for your message. We will get back to you soon.');
    }
    public function render()
    {
        return view('livewire.contactForm');
    }
}
