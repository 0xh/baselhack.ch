<?php

namespace App\Http\Controllers\Frontend\Legal;

use App\App\Controllers\Controller;

class ImprintController extends Controller
{
    public function index()
    {
        return view('redesign.legal.imprint.index');
    }

}
