<?php

namespace App\Http\Controllers\Backend\Events\Newsletters;

use App\App\Controllers\Controller;
use App\Domain\Events\Models\Newsletter;
use App\Http\Requests\Backend\Association\Newsletters\StoreNewsletterRequest;

class NewslettersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth', 'role:events']);
    }

    public function index()
    {
        $newsletters = Newsletter::all();

        return view('backend.events.newsletters.index', compact('newsletters'));
    }

    public function store(StoreNewsletterRequest $request)
    {
        $newsletter = Newsletter::create([

            'email' => $request->email,
        ]);

        $newsletter->subscribe();

        return back();
    }

    public function delete(Newsletter $newsletter)
    {
        $newsletter->unsubscribe();
        $newsletter->delete();

        return back();
    }
}
