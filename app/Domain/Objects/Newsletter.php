<?php

namespace App\Domain\Objects;

class Newsletter
{

    public $email;

    public function __construct($email)
    {
        $this->email = $email;

    }

}
