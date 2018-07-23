<?php

namespace App\Http\Controllers\Backend\Event\Participants;

use App\App\Controllers\Controller;
use App\Domain\Event\Models\Subscriber;

class ParticipantsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth']);
    }

    public function index()
    {
        $participants = Subscriber::all();

        return view('backend.event.participants.index', compact('participants'));
    }
}
