<?php

namespace Tests;

use Exception;
use App\App\Exceptions\Handler;

use Illuminate\Contracts\Debug\ExceptionHandler;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;


abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public $baseUrl = 'http://localhost';


}
