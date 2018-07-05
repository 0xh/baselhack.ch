<?php

namespace App\Http\Controllers\Backend\Administrators\Users;


use App\Domain\Users\Models\User;
use App\App\Controllers\Controller;
use App\Http\Requests\Administrators\Users\StoreUserRequest;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth']);
        /*$this->middleware(['web', 'auth', 'role:administrator']);*/
    }

    public function index()
    {
        $users = User::orderBy('name', 'asc')->get();

        return view('backend.administrators.users.index', compact('users'));
    }

    public function create()
    {
        return view('backend.administrators.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt(base64_encode(random_bytes(10))),
            'activated' => false,
            'member_status' => 'inaactive',

        ]);

        toast('User successfully created!', 'success', 'bottom-right');

        return redirect()->route('backend.administrators.users.index');
    }


}
