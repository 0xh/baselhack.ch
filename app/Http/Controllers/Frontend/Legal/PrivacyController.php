<?php

namespace App\Http\Controllers\Frontend\Legal;

use App\App\Controllers\Controller;

class PrivacyController extends Controller
{
    public function index()
    {
        $current_page = 'privacy';

        return view('frontend.legal.privacy.index', compact('current_page'));
    }
}
