<?php

namespace App\Http\Controllers\Frontend;

use App\App\Controllers\Controller;

class SponsorsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_page = 'sponsors';

        return view('frontend.sponsors.index', compact('current_page'));
    }
}
