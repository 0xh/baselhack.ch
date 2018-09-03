<?php

namespace App\Http\Controllers\Frontend\Event;

use App\App\Controllers\Controller;
use App\Domain\Models\Participant;
use App\Http\Requests\Frontend\StoreSignUpRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Lang;

class SignUpController extends Controller
{

    public function index()
    {
        $current_page = 'event';

        return view('frontend.event.signup', compact('current_page'));

    }

    public function store(StoreSignUpRequest $request)
    {
        $participant = Participant::create([

            'type' => $request->type,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'company' => $request->company,
            'email' => $request->email,
            'over_eighteen' => $request->over_eighteen == true ? true : false,
            'accepted_policy' => Carbon::now(),

        ]);

        if($participant instanceof Participant)
        {
            alert()->success(Lang::get('frontend/event.signup.form.notification.success.title'), Lang::get('frontend/event.signup.form.notification.success.description'))->autoClose(3000);
        } else
        {
            alert()->success(Lang::get('frontend/event.signup.form.notification.error.title'), Lang::get('frontend/event.signup.form.notification.error.description'))->autoClose(3000);
        }


        return back();

    }
}
