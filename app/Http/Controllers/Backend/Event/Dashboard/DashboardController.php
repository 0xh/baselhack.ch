<?php

namespace App\Http\Controllers\Backend\Event\Dashboard;

use App\App\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth']);
    }

    public function index()
    {
        return view('backend.event.dashboard.index');
    }
}
