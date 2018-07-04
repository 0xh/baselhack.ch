<?php

namespace App\Http\Controllers\Frontend;

use App\App\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('redesign.contact.index');
    }

    public function store()
    {
        toast('We\'ll get in touch with you soon !', 'success', 'bottom-right');

        return back();
    }
}
