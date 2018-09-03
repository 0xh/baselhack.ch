<?php

namespace App\Http\Controllers\Frontend\Newsletter;

use App\App\Controllers\Controller;
use App\Domain\Jobs\SubscribeToNewsletter;
use App\Domain\Objects\Newsletter;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests\Frontend\StoreNewsletterRequest;

class NewsletterController extends Controller
{
    public function store(StoreNewsletterRequest $request)
    {
        $newsletter = new Newsletter($request->email);

        if($newsletter instanceof Newsletter)
        {
            SubscribeToNewsletter::dispatch($newsletter);
            alert()->success(Lang::get('frontend/components/newsletter.form.notification.success.title'), Lang::get('frontend/components/newsletter.form.notification.success.description'))->autoClose(3000);
        } else
        {
            alert()->success(Lang::get('frontend/components/newsletter.form.notification.error.title'), Lang::get('frontend/components/newsletter.form.notification.error.description'))->autoClose(3000);
        }

        return back();
    }
}
