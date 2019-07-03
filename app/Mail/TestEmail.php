<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
{
    public function build()
    {
        return $this->from('jonathanHneumann@gmail.com', 'Fresh Interactive')
            ->subject('New sign up')
            ->view('emails.mail');
    }
}