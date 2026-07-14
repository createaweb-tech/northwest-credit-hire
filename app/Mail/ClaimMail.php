<?php

namespace App\Mail;

use App\Models\Claim;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClaimMail extends Mailable 
{
    use Queueable, SerializesModels;

    public function __construct(public Claim $claim, public array $filePaths)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Claim Submission: #'.$this->claim->reference_number,
            replyTo: [$this->claim->email],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.claim',
            text: 'emails.claim_plain',
            with: [
                'claim' => $this->claim,
                'filePaths' => $this->filePaths,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return array_map(
            fn (string $path) => Attachment::fromStorageDisk('public', $path),
            $this->filePaths
        );
    }
}
