<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $phone;
    public $inquiry;

    public function __construct($phone, $inquiry)
    {
        $this->phone = $phone;
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('laminowner369@gmail.com', 'Mahn')
            ->to('hponemahn@gmail.com', 'Hpone')
            ->subject('Inquiry from MyMar')
            ->text('emails.inquiry');
            // ->with(['phone' => $this->phone, 'message' => $this->message]);
    }
}
