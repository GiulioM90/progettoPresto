<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;
    public $forAdmin;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($forAdmin)
    {
        $this->forAdmin=$forAdmin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->forAdmin['email'])->view('mail.adminMail');
    }
}
