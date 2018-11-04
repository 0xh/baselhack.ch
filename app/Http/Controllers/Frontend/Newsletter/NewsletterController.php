<?php

namespace App\Http\Controllers\Frontend\Newsletter;

use App\Domain\Models\Enquiry;
use Newsletter;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Lang;
use App\Domain\Jobs\SubscribeToNewsletter;
use App\Http\Requests\Frontend\StoreNewsletterRequest;

class NewsletterController extends Controller
{
    public function store(StoreNewsletterRequest $request)
    {
        try {

            SubscribeToNewsletter::dispatch($request->email);

            alert()->success(Lang::get('frontend/components/newsletter.form.notification.success.title'), Lang::get('frontend/components/newsletter.form.notification.success.description'));
        } catch (\Exception $exception) {
            Log::error(print_r($exception->getMessage(), true));

            alert()->error(Lang::get('frontend/components/newsletter.form.notification.error.title'), Lang::get('frontend/components/newsletter.form.notification.error.description'));
        }

        return back();
    }
}
