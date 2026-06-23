<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $name,
        public string $email,
        public string $phone,
        public string $enquirySubject,
        public string $messageBody,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New enquiry: ' . $this->enquirySubject . ' — ' . $this->name,
            replyTo: [$this->email],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            text: 'emails.contact_plain',
            with: [
                'name'        => $this->name,
                'email'       => $this->email,
                'phone'       => $this->phone,
                'subject'     => $this->enquirySubject,
                'messageBody' => $this->messageBody,
            ],
        );
    }
}
