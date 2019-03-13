<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mailing extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
       public $data;
    
       public $data1;

       public $sermail;


    public function __construct($data , $data1, $sermail)

    {
        //

        return [$this->data = $data, $this->data1 = $data1, $this->sermail = $sermail];
   
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->data1 == 'takemetoburma' || $this->data1 == 'cyclingburma' || $this->data1 == 'golftravelmyanmar' ) {
            
           return $this->from($this->sermail)
                     ->subject('Great hotel & resort, golf course & golf package  inside')
                     ->view('emails.mailing.mailing_test')
                     ->with(['data' => $this->data, 'data1' => $this->data1]);
        }
        else{
         return $this->from($this->sermail)
                     ->subject('Great hotel & resort, golf course & golf package  inside')
                     ->view('emails.mailing.mailing_tem')
                     ->with(['data' => $this->data, 'data1' => $this->data1]);
        }
    }
}
