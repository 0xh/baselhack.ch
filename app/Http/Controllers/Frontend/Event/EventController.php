<?php

namespace App\Http\Controllers\Frontend\Event;

use App\App\Controllers\Controller;
use App\Domain\Models\Participant;
use App\Http\Requests\Frontend\StoreSignUpRequest;
use Illuminate\Support\Facades\Lang;

class EventController extends Controller
{

    public function index()
    {
        $current_page = 'event';

        return view('frontend.event.index', compact('current_page'));
    }

    public function signup(StoreSignUpRequest $request)
    {
        $current_page = 'event';

        $participant = Participant::create([

        ]);

        alert()->success(Lang::get('frontend/event.signup.form.notification.success.title'), Lang::get('frontend/event.signup.form.notification.success.description'))->autoClose(3000);

        return back();

    }
}
