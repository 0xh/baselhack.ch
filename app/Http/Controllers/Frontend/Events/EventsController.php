<?php

namespace App\Http\Controllers\Frontend\Events;

use Illuminate\Http\Request;
use App\Domain\Models\Participant;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class EventsController extends Controller
{
    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.event_index.title'))
            ->setDescription(Lang::get('frontend/meta.event_index.description'))
            ->setKeywords(Lang::get('frontend/meta.event_index.keywords'));

        return view('frontend.events.index');
    }

    public function unsubscribe(Request $request)
    {
        $participants = Participant::where('uuid', $request->uuid)->get();

        if ($participants->count()) {
            $participants->first()->delete();

            alert()->success('Thank you!', 'You\'ve successfully unsubscribed from our event!');
        } else {
            alert()->error('Ohhps!', 'Pleas Sign-Up first =)!');
        }

        return redirect()->route('frontend.home.index');
    }
}
