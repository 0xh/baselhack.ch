<?php

namespace App\Http\Controllers\Frontend\Newsletter;

use Newsletter;
use App\App\Controllers\Controller;
use App\Http\Requests\Frontend\Newsletter\StoreNewsletterRequest;

class NewsletterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsletterRequest $request)
    {
        Newsletter::subscribe($request->email);

        toast('Successfully subscribed!', 'success', 'bottom-right');

        return back();
    }
}
