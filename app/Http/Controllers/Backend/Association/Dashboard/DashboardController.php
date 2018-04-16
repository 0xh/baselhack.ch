<?php

namespace App\Http\Controllers\Backend\Association\Dashboard;

use App\App\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth', 'role:member']);
    }

    public function index()
    {
        return view('backend.association.dashboard.index');
    }
}
