<?php

namespace App\Http\Controllers\Backend\events\Dashboard;

use App\App\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth', 'role:events']);
    }

    public function index()
    {
        return redirect()->route('backend.events.newsletters.index');

        //return view('backend.events.dashboard.index');
    }
}
