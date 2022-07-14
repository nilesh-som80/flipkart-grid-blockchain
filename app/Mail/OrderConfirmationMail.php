<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data,$user_data,$totalprice, $shipping;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$user_data,$totalprice, $shipping)
    {
        $this->data = $data;
        $this->user_data = $user_data;
        $this->totalprice = $totalprice;
        $this->shipping = $shipping;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.order_confirmation_mail');
    }
}
