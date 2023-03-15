<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryPrice extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@natadesign.id')
            ->markdown('emails.inquiry.receive', [
                'name'      => $this->mail['name'],
                'phone'     => $this->mail['phone'],
                'email'     => $this->mail['email'],
                'type'      => $this->mail['type'],
                'size'      => $this->mail['size'],
                'location'  => $this->mail['location'],
                'job'       => $this->mail['job'],
                'time'      => $this->mail['time'],
                'info'      => $this->mail['info'],
            ]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address($this->mail['email'], $this->mail['name']),
            tags: ['Inquiry Price Estimation'],
            subject: 'New Inquiry Received - Nat.A Design Website',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.inquiry.price',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
