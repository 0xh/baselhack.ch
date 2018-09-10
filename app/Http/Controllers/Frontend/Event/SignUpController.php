<?php

namespace App\Http\Controllers\Frontend\Event;

use Carbon\Carbon;
use App\Domain\Models\Participant;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use App\Domain\Notifications\ConfirmParticipation;
use App\Http\Requests\Frontend\StoreSignUpRequest;
use App\Domain\Jobs\SubscribeToParticipantNewsletter;

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
        try {
            $participant = Participant::create([

                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'company' => $request->company,
                'email' => $request->email,
                'over_eighteen' => true,
                'accepted_policy' => Carbon::now(),
            ]);

            $participant->notify(new ConfirmParticipation($participant));

            SubscribeToParticipantNewsletter::dispatch($participant);

            alert()->success(Lang::get('frontend/event.signup.form.notification.success.title'), Lang::get('frontend/event.signup.form.notification.success.description'));
        } catch (\Exception $exception) {
            $participant = Participant::whereEmail($request->email)->first();

            if ($participant instanceof Participant) {
                $participant->forceDelete();
            }

            alert()->error(Lang::get('frontend/event.signup.form.notification.error.title'), Lang::get('frontend/event.signup.form.notification.error.description'));
        }

        return back();
    }

    public function confirm(Participant $participant)
    {
        $participant->unreadNotifications->markAsRead();

        if (! $participant->confirmed_email) {
            $participant->update([
                'confirmed_email' => true,
            ]);
        }

        alert()->success(Lang::get('frontend/event.signup.form.notification.confirmed.title'), Lang::get('frontend/event.signup.form.notification.confirmed.description'));

        return redirect()->route('frontend.home.index');
    }
}
