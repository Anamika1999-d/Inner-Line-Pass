<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppliSubmissionmail extends Mailable
{
    use Queueable, SerializesModels;

    public $application_forms;

    public function __construct($application_forms)
    {
        $this->application_forms=$application_forms;
    }
    public function build()
    {
        return $this->markdown('email.AppliSubmission')->subject('Application form for Inner Line Pass ')->with('application_forms',$this->application_forms);
    }
}
