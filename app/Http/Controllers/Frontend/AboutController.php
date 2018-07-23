<?php

namespace App\Http\Controllers\Frontend;

use App\App\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_page = 'about';

        return view('frontend.about.index', compact('current_page'));
    }
    
}
