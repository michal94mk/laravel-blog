<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactPage extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';

    protected array $rules = [
        'name'    => 'required|string|min:3|max:255',
        'email'   => 'required|email|min:3|max:255',
        'message' => 'required|string|min:3|max:1000',
    ];

    public function updated($propertyName)
    {
        $this->resetErrorBag($propertyName);
    }

    public function send()
    {
        $validatedData = $this->validate();

        try {
            Mail::to('admin@reply.com')->send(new ContactFormMail($validatedData));
            session()->flash('success', 'Message sent successfully.');
        } catch (\Throwable $th) {
            session()->flash('error', 'Failed to send message. Please try again later.');
        }

        $this->reset(['name', 'email', 'message']);
    }

    #[Layout('layouts.blog')]
    public function render()
    {
        return view('livewire.contact-page');
    }
}
