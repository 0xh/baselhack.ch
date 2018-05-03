<?php

namespace App\Http\Controllers\Backend\Association\Passwords;

use App\App\Controllers\Controller;
use App\Domain\Association\Models\Password;

class PasswordsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth', 'role:member']);
    }

    public function index()
    {
        $passwords = Password::all();

        return view('backend.association.passwords.index', compact('passwords'));
    }
}
