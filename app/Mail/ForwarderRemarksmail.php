<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForwarderRemarksmail extends Mailable
{
    use Queueable, SerializesModels;

    public $application_forms;
    
    public function __construct($application_forms)
    {
        $this->application_forms=$application_forms;
    }

    public function build()
    {
        return $this->markdown('email.ForwarderRemarks')->subject('Notice regarding your InnerLine Pass Application')->with('application_forms',$this->application_forms);
    }
}
