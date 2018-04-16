<?php

namespace App\Http\Controllers\Backend\Administrators\Users;

use Illuminate\Http\Request;
use Smart6ate\Roles\Models\Role;
use App\Domain\Users\Models\User;
use App\App\Controllers\Controller;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth', 'role:administrator']);
    }

    public function addRole(Request $request, User $user)
    {
        $role = Role::find($request->role_id);

        $user->roles()->detach($role);
        $user->roles()->attach($role);

        toast('Role successfully added!', 'success', 'bottom-right');

        return back();
    }

    public function removeRole(Request $request, User $user)
    {
        $role = Role::find($request->role_id);

        toast('Role successfully removed!', 'success', 'bottom-right');

        return back();
    }
}
