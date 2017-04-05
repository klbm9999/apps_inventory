<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mymail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $c1;
    public $c2;
    public $r1;
    public $name;
    public $country;
    public $email;
    public $phone;
    public $company;
    public $industry;
    public $desc;

    public function __construct($c1=null,
                                $c2=null,
                                $r1=null,
                                $name,
                                $country,
                                $email,
                                $phone,
                                $company,
                                $industry,
                                $desc)
    {
        $this->c1 = $c1;
        $this->c2 = $c2;
        $this->r1= $r1;
        $this->name= $name;
        $this->country = $country;
        $this->email = $email;
        $this->phone = $phone;
        $this->company = $company;
        $this->industry = $industry;
        $this->desc = $desc;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@appsinventory.com')
        ->view('email.mail');
    }
}
