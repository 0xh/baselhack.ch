<?php

namespace App\Http\Controllers\Frontend\Newsletter;

use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use App\Jobs\ProceedNewsletterRequest;
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

       $newsletter = [
           'email' => $request->email,
       ];

        ProceedNewsletterRequest::dispatch($newsletter);

        alert()->success(Lang::get('frontend/components/newsletter.form.notification.success.title'), Lang::get('frontend/components/newsletter.form.notification.success.description'))->autoClose(3000);

        return back();
    }
}
