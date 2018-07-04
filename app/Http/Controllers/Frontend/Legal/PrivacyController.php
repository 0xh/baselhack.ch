<?php

namespace App\Http\Controllers\Frontend\Legal;

use App\App\Controllers\Controller;

class PrivacyController extends Controller
{


    public function index()
    {
        return view('redesign.legal.privacy.index');
    }
}
