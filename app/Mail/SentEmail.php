<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SentEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $data = [];  

    /**
     * Create a new message instance.
     */
    public function __construct($param = null)
    {
        //
        if($param != null)
        {
            $this->data = $param;
        }
    }

    /**
     * Get the message envelope.
    */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'My Email',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }

    public function build()
    {
        return $this->view('my_email',['data'=>$this->data])
                    ->subject('CAM gửi mail');
    }
}