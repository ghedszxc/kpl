<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $contact;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->name = $contact['name'];
        $this->email = $contact['email_address'];
        $this->contact = $contact['contact_number'];
        $this->message = $contact['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kplsales@kplindustrialsupply.com')
                    ->subject('Customer Reach out')
                    ->view('contact');
    }
}
