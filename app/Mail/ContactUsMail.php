<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->view('emails.contact-us')
            ->with([
                'name' => $this->contact->first_name . ' ' . $this->contact->last_name,
                'email' => $this->contact->email,
                'phone' => $this->contact->number,
                'user_query' => $this->contact->message
            ]);
    }
}