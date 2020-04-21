<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    protected $objData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($objData)
    {
        $this->objData = $objData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.order')->with('data', $this->objData);
    }
}
