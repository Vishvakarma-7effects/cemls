<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $emailDataArr;

    public function __construct($emailDataArr){
        //
        $this->emailDataArr = $emailDataArr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
          

        // $dataArra=$this
        return $this->subject('Mail shalu')->view('mail.mailTemplate',$this->emailDataArr);
    }
}
