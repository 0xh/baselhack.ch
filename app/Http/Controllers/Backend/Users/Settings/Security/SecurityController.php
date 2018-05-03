<?php

namespace App\Http\Controllers\Backend\Users\Settings\Security;

use Illuminate\Support\Str;
use App\Domain\Users\Models\User;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Requests\Backend\Users\Profile\UpdatePasswordRequest;

class SecurityController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth']);
    }

    public function index()
    {
        $user = Auth()->user();

        return view('backend.users.settings.security.index', compact('user'));
    }

    public function update(UpdatePasswordRequest $request, User $user)
    {
        if (! $user->isSameAs(Auth::user())) {
            abort(404);
        }

        $user->password = Hash::make($request->password);
        $user->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));

        toast('Password updated Successfully!', 'success', 'bottom-right');

        return back();
    }
}
