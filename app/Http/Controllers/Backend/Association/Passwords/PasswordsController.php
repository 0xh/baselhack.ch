<?php

namespace App\Http\Controllers\Backend\Association\Passwords;

use App\App\Controllers\Controller;

class PasswordsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth', 'role:member']);
    }

    public function index()
    {
        return view('backend.association.passwords.index');
    }
}
