<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class Message extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $message;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $message)
    {
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->withSymfonyMessage(function (Email $message) {
            $message->getHeaders()->addTextHeader([
                'Content-type' => 'text/html; charset=utf-8',
                'MIME-Version' => '1.0',
            ]);
        });

        $this->view('emails.message');

        $address = "robot@" . request()->getHttpHost();

        $this->subject($this->subject);

        return $this->from($address);
    }
}
