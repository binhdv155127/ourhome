<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\RoomCare;
class Schedulemail extends Mailable
{
    use Queueable, SerializesModels;
    public $maildetail = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($maildetail)
    {
        $this->maildetail = $maildetail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('theme.mail.mail');
    }
}
