<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_message)
    {
        $this->message = trim($_message);
    }

    /**
     * Build the message.
     *
     * @return View 
     */
    public function build()
    {
        return $this->subject("Mensaje enviado desde el formulario de Contacto")
            ->view("email.contact", [
                "comment" => $this->message,
            ]);
    }
}
