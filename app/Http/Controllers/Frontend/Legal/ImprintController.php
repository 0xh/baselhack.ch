<?php

namespace App\Http\Controllers\Frontend\Legal;

use App\App\Controllers\Controller;

class ImprintController extends Controller
{
    public function index()
    {
        $current_page = 'imprint';

        return view('frontend.legal.imprint.index', compact('current_page'));
    }
}
