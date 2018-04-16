<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Http\Request;
use App\Domain\Users\Models\User;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WebShopAuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = $this->validateRequest($request);

        if ($validator->fails()) {
            /* @TODO add LogIn Event */
            Auth::logout(auth()->user());

            return redirect('/')
                ->withErrors($validator);

        /* @TODO Implement redirect page & Message */
            /* @TODO Notify Administrator */
        } else {
            $user = User::byCustomerId($request->customer);

            if ($this->validateHash($user, $request->hash)) {

                /* @TODO add LogIn Event */
                Auth::login($user, true);

                toast('Log-In Successfully!', 'success', 'bottom-right');

                return redirect()->intended('/backend/dashboard');
            } else {
                Auth::logout(auth()->user());

                return redirect('/');

                /* @TODO Implement redirect page & Message */
                /* @TODO Notify Administrator */
            }
        }
    }

    protected function validateRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer' => 'required|exists:users,customer_id',
            'hash' => 'required',
        ]);

        return $validator;
    }

    protected function validateHash(User $user, $hash)
    {
        if ($hash === $user->customerHash()) {
            return true;
        }

        return false;
    }
}
