<?php

namespace App\Http\Controllers\Backend\Users\Settings\Profile;

use App\Domain\Users\Models\User;
use App\App\Controllers\Controller;
use App\Http\Requests\Backend\Users\Profile\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth']);
    }

    public function index()
    {
        $user = Auth()->user();

        return view('backend.users.settings.profile.index', compact('user'));
    }

    public function update(UpdateProfileRequest $request, User $user)
    {
        if (! $user->isSameAs(Auth::user())) {
            abort(404);
        }
        $user->update($request->only('name', 'email'));

        toast('Profile updated Successfully!', 'success', 'bottom-right');

        return back();
    }
}
