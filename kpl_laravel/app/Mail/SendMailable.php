<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $contact;
    public $checkbox;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name['name'];
        $this->email = $name['email'];
        $this->contact = $name['contact'];
        $this->checkbox = $name['checkbox'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kplsales@kplindustrialsupply.com ')
                    ->subject('Customer Inquire')
                    ->view('email');
        	  
    }
}
