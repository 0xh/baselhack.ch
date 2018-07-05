<?php

namespace App\Http\Controllers\Backend\Event\Subscribers;

use App\App\Controllers\Controller;
use App\Domain\Event\Models\Subscriber;
use App\Http\Requests\Backend\Association\Newsletters\StoreNewsletterRequest;

class SubscribersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth']);
    }

    public function index()
    {
        $subscribers = Subscriber::all();

        return view('backend.event.subscribers.index', compact('subscribers'));
    }

    public function store(StoreNewsletterRequest $request)
    {
        $newsletter = Subscriber::create([

            'email' => $request->email,
        ]);

        $newsletter->subscribe();

        return back();
    }

    public function delete(Subscriber $newsletter)
    {
        $newsletter->unsubscribe();
        $newsletter->delete();

        return back();
    }
}
