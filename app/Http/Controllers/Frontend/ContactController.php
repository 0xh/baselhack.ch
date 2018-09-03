<?php

namespace App\Http\Controllers\Frontend;

use App\Domain\Objects\Contact;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use App\Domain\Jobs\ForwardContacRequest;
use App\Http\Requests\Frontend\StoreContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $current_page = 'contact';

        return view('frontend.contact.index', compact('current_page'));
    }

    public function store(StoreContactRequest $request)
    {
        $contact = new Contact(
            $request->topic,
            $request->name,
            $request->email,
            $request->message
        );

        if ($contact instanceof Contact) {
            ForwardContacRequest::dispatch($contact);

            alert()->success(Lang::get('frontend/contact.form.notification.success.title'), Lang::get('frontend/contact.form.notification.success.description'))->autoClose(3000);
        } else {
            alert()->success(Lang::get('frontend/contact.form.notification.error.title'), Lang::get('frontend/contact.form.notification.error.description'))->autoClose(3000);
        }

        return back();
    }
}
