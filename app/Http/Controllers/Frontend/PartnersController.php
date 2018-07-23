<?php

namespace App\Http\Controllers\Frontend;

use App\App\Controllers\Controller;

class PartnersController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_page = 'partners';

        return view('frontend.partners.index', compact('current_page'));
    }

}
