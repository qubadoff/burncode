<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $surname;
    public string $email;
    public string $phone;
    public string $body;

    public function __construct($name, $surname, $email, $phone, $body)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
        $this->body = $body;
    }

    public function build(): self
    {
        return $this->subject('New Contact Message')
            ->view('emails.contactMessage');
    }
}
