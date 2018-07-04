<?php

namespace App\Http\Controllers\Frontend;

use App\App\Controllers\Controller;

class AboutUsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('redesign.about.index');
    }
    
}
