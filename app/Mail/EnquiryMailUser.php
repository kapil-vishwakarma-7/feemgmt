<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnquiryMailUser extends Mailable
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
        
        return $this->from(['address' => 'info@ultrasoftacademy.com', 'name' => 'ultrasoftacademy'])->subject('Admission Enquiry')->view('mail.enquiryuser',['e'=>$this->e]);
    }
}
