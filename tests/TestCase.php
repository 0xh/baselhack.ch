<?php

namespace Tests;

use Exception;
use App\App\Exceptions\Handler;
use Smart6ate\Roles\Models\Role;
use App\Domain\Users\Models\User;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Laravel\BrowserKitTesting\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public $baseUrl = 'http://localhost';

    protected function signIn($user = null)
    {
        $user = $user ?: create(User::class);
        $this->actingAs($user);

        return $this;
    }

    protected function logInAs($user, $title)
    {
        $user = $user ?: create(User::class);

        $role = Role::create([
            'title' => $title,
        ]);

        $user->roles()->attach($role);

        $this->signIn($user);

        return $this;
    }

    protected function disableExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, new class extends Handler {
            public function __construct()
            {
            }

            public function report(Exception $exception)
            {
            }

            public function render($request, Exception $exception)
            {
                throw $exception;
            }
        });
    }
}
