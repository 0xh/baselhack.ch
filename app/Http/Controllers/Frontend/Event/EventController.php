<?php

namespace App\Http\Controllers\Frontend\Event;

use App\App\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('redesign.event.index');
    }


}
