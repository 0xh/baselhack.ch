<?php

namespace App\Http\Controllers\Frontend\Newsletter;

use App\Domain\Objects\Newsletter;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use App\Domain\Jobs\SubscribeToNewsletter;
use App\Http\Requests\Frontend\StoreNewsletterRequest;

class NewsletterController extends Controller
{
    public function store(StoreNewsletterRequest $request)
    {
        $newsletter = new Newsletter($request->email);

        SubscribeToNewsletter::dispatch($newsletter);

        try {
            alert()->success(Lang::get('frontend/components/newsletter.form.notification.success.title'), Lang::get('frontend/components/newsletter.form.notification.success.description'));
        } catch (\Exception $exception) {
            alert()->error(Lang::get('frontend/components/newsletter.form.notification.error.title'), Lang::get('frontend/components/newsletter.form.notification.error.description'));
        }

        return back();
    }
}
