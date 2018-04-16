<?php

namespace App\Http\Controllers\Backend\Association\Members;

use App\Domain\Users\Models\User;
use App\App\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Domain\Users\Models\UserExport;

class MembersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['web', 'auth', 'role:member']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = User::orderBy('name', 'asc')->get();

        return view('backend.association.members.index', compact('members'));
    }

    public function create()
    {
        return view('backend.association.members.create');
    }

    public function files()
    {
        $email = auth()->user()->basel_hack_email;

        return redirect()->away('https://baselhack.blaucloud.de/index.php/login'.'?user='.$email);
    }

    public function webmail()
    {
        $email = auth()->user()->basel_hack_email;

        return redirect()->away('http://webmail.baselhack.ch/login.php'.'?horde_user='.$email);
    }

    public function export()
    {
        return Excel::download(new UserExport(), 'members.xlsx');
    }
}
