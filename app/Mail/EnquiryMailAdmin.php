<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnquiryMailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($e)
    {
        $this->e = $e;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from(['address' => 'enquiry@ultrasoftacademy.com', 'name' => 'ultrasoftacademy'])->subject('Admission Enquiry')->view('mail.enquiryadmin',['e'=>$this->e]);
    }
}
