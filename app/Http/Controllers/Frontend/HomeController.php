<?php

namespace App\Http\Controllers\Frontend;

use App\App\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_page = 'home';

        return view('frontend.home.index', compact('current_page'));
    }
}
