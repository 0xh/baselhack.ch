<?php

namespace App\Http\Controllers\Frontend\Event;

use App\App\Controllers\Controller;
use App\Jobs\RedirectSignUpRequest;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests\Frontend\StoreSignUpRequest;

class SignUpController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_page = 'signup';

        return view('frontend.event.signup', compact('current_page'));
    }

    public function store(StoreSignUpRequest $request)
    {
        RedirectSignUpRequest::dispatch($request);

        alert()->success(Lang::get('frontend/event/signup.form.notification.success.title'), Lang::get('frontend/event/signup.form.notification.success.description'))->autoClose(3000);

        return back();
    }
}
