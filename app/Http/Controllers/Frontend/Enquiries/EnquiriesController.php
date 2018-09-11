<?php

namespace App\Http\Controllers\Frontend\Enquiries;

use App\Domain\Models\Enquiry;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Lang;
use App\Domain\Jobs\ProceedEnquiries;
use App\Http\Requests\Frontend\StoreEnquiryRequest;

class EnquiriesController extends Controller
{
    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.contact_index.title'))
            ->setDescription(Lang::get('frontend/meta.contact_index.description'))
            ->setKeywords(Lang::get('frontend/meta.contact_index.keywords'));

        return view('frontend.enquiries.index');
    }

    public function store(StoreEnquiryRequest $request)
    {
        $enquiry = Enquiry::create([
            'type' => $request->type,
            'company' => $request->company,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        try {
            ProceedEnquiries::dispatch($enquiry);

            alert()->success(Lang::get('frontend/enquiries.form.notification.success.title'), Lang::get('frontend/enquiries.form.notification.success.description'));
        } catch (\Exception $exception) {
            Log::error(print_r($exception->getMessage(), true));

            alert()->error(Lang::get('frontend/enquiries.form.notification.error.title'), Lang::get('frontend/enquiries.form.notification.error.description'));
        }

        return back();
    }
}
