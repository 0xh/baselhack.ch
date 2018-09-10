<?php

namespace App\Http\Controllers\Frontend\Event;

use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;


class EventController extends Controller
{

    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.event_index.title'))
            ->setDescription(Lang::get('frontend/meta.event_index.description'))
            ->setKeywords(Lang::get('frontend/meta.event_index.keywords'));

        return view('frontend.event.index');
    }

}
