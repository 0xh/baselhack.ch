<?php

namespace App\Http\Controllers\Frontend\Event;

use App\App\Controllers\Controller;

class SignUpController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('redesign.event.signup');
    }

    public function store()
    {
        toast('You have successfully signed-up for the event!', 'success', 'bottom-right');

        return back();
    }
}
