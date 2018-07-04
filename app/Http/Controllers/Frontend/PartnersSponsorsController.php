<?php

namespace App\Http\Controllers\Frontend;

use App\App\Controllers\Controller;

class PartnersSponsorsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('redesign.partners.index');
    }

}
