<?php

namespace App\Http\Controllers\Frontend\Newsletter;

use App\Jobs\ProceedNewsletterRequest;
use Illuminate\Support\Facades\Lang;
use App\App\Controllers\Controller;
use App\Http\Requests\Frontend\StoreNewsletterRequest;

class NewsletterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsletterRequest $request)
    {
        ProceedNewsletterRequest::dispatch($request);

        alert()->success(Lang::get('frontend/components/newsletter.notification.success.title'), Lang::get('frontend/components/newsletter.notification.success.descripion'))->autoClose(3000);

        return back();
    }
}
