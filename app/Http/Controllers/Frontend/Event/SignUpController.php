<?php

namespace App\Http\Controllers\Frontend\Event;

use Carbon\Carbon;
use App\Domain\Models\Participant;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests\Frontend\StoreSignUpRequest;

class SignUpController extends Controller
{
    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.event_signup.title'))
            ->setDescription(Lang::get('frontend/meta.event_signup.description'))
            ->setKeywords(Lang::get('frontend/meta.event_signup.keywords'));

        return view('frontend.event.signup');
    }

    public function store(StoreSignUpRequest $request)
    {
        $participant = Participant::create([

            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'company' => $request->company,
            'email' => $request->email,
            'over_eighteen' => true,
            'accepted_policy' => Carbon::now(),

        ]);

        if ($participant instanceof Participant) {
            alert()->success(Lang::get('frontend/event.signup.form.notification.success.title'), Lang::get('frontend/event.signup.form.notification.success.description'))->autoClose(3000);
        } else {
            alert()->success(Lang::get('frontend/event.signup.form.notification.error.title'), Lang::get('frontend/event.signup.form.notification.error.description'))->autoClose(3000);
        }

        return back();
    }
}
