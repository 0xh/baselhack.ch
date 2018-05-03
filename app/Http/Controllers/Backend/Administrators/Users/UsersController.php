<?php

namespace App\Http\Controllers\Backend\Administrators\Users;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Smart6ate\Roles\Models\Role;
use App\Domain\Users\Models\User;
use App\App\Controllers\Controller;
use App\Http\Requests\Backend\Association\Newsletters\StoreNewsletterRequest;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth', 'role:administrator']);
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

    public function store(StoreNewsletterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt(base64_encode(random_bytes(10))),
            'activated' => false,
            'member_status' => 'active',

        ]);

        toast('User successfully created!', 'success', 'bottom-right');

        return redirect()->route('backend.administrators.users.index');
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('backend.administrators.users.edit', compact('user', 'roles'));
    }

    /* public function update(Request $request, User $user)
     {
         return back();
     }*/

    public function delete(User $user)
    {
        if ($user->isSameAs(auth()->user())) {
            toast('You\'re not allowed to archive yourself!', 'error', 'bottom-right');

            return back();
        }

        $user->update(['published_at' => null]);

        $user->roles()->detach();

        $user->delete();

        toast('User successfully archived!', 'success', 'bottom-right');

        return redirect()->route('backend.administrators.users.index');
    }

    public function archived()
    {
        $users = User::onlyTrashed()->get();

        return view('backend.administrators.users.archived', compact('users'));
    }

    public function activate(User $user)
    {
        $user->update(['published_at' => Carbon::now()->toDateTimeString()]);

        toast('User successfully activated!', 'success', 'bottom-right');

        return back();
    }

    public function deactivate(User $user)
    {
        if ($user->isSameAs(auth()->user())) {
            toast('You\'re not allowed to deactivate yourself!', 'error', 'bottom-right');

            return back();
        }

        $user->update(['published_at' => null]);

        toast('User successfully deactivated!', 'success', 'bottom-right');

        return back();
    }

    public function restore($email)
    {
        User::withTrashed()->byEmail($email)->restore();

        toast('User successfully restored!', 'success', 'bottom-right');

        return back();
    }
}
