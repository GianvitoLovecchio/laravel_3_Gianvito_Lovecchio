<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $surname, $about, $email; 

    public function __construct($nome,$cognome,$indirizzoEmail,$argomento)
    {
        $this->name = $nome;
        $this->surname = $cognome;
        $this->email = $indirizzoEmail;
        $this->about = $argomento;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email, "$this->name $this->surname"),
            subject: 'Contatto ricevuto!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.admin_mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
