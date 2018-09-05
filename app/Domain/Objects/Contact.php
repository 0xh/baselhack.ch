<?php

namespace App\Domain\Objects;

class Contact
{
    public $topic;
    public $name;
    public $email;
    public $message;

    public function __construct($topic, $name, $email, $message)
    {
        $this->topic = $topic;
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

}
