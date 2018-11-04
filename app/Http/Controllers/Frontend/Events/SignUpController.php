<?php

namespace App\Http\Controllers\Frontend\Events;

use Carbon\Carbon;
use App\Domain\Models\Participant;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Lang;
use App\Domain\Jobs\SubscribeToNewsletter;
use App\Domain\Jobs\SubscribeToParticipate;
use App\Http\Requests\Frontend\StoreSkipRequest;
use App\Domain\Notifications\ConfirmParticipation;
use App\Http\Requests\Frontend\StoreSignUpRequest;

class SignUpController extends Controller
{
    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.event_signup.title'))
            ->setDescription(Lang::get('frontend/meta.event_signup.description'))
            ->setKeywords(Lang::get('frontend/meta.event_signup.keywords'));

        return view('frontend.events.signup.index');
    }

    public function store(StoreSignUpRequest $request)
    {
        if (Participant::all()->count() >= config('baselhack.maximum_participants')) {
            alert()->error(Lang::get('frontend/event.signup.form.notification.fully_booked.title'), Lang::get('frontend/event.signup.form.notification.fully_booked.description'));

            return back();
        }

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
            SubscribeToParticipate::dispatch($participant);

            alert()->success(Lang::get('frontend/event.signup.form.notification.success.title'), Lang::get('frontend/event.signup.form.notification.success.description'));
        } catch (\Exception $exception) {
            Log::error(print_r($exception->getMessage(), true));

            alert()->error(Lang::get('frontend/event.signup.form.notification.error.title'), Lang::get('frontend/event.signup.form.notification.error.description'));
        }

        return back();
    }

    public function skip(StoreSkipRequest $request)
    {
        try {
            SubscribeToNewsletter::dispatch($gdpr = true, $list = 'waiting_2018', $request->email);

            alert()->success(Lang::get('frontend/components/newsletter.form.notification.success.title'), Lang::get('frontend/components/newsletter.form.notification.success.description'));
        } catch (\Exception $exception) {
            Log::error(print_r($exception->getMessage(), true));

            alert()->error(Lang::get('frontend/components/newsletter.form.notification.error.title'), Lang::get('frontend/components/newsletter.form.notification.error.description'));
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
