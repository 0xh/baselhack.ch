<?php

namespace App\Http\Controllers\Backend\Users\Settings\Language;

use App\Domain\Users\Models\User;
use App\App\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\Backend\Users\Profile\UpdateLanguageRequest;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['web', 'auth']);
    }

    public function index()
    {
        $user = Auth()->user();

        $languages = Config::get('languages.backend.active');

        return view('backend.users.settings.language.index', compact('user', 'languages'));
    }

    public function update(UpdateLanguageRequest $request, User $user)
    {
        $user->update($request->only('language'));

        toast('Language updated Successfully!', 'success', 'bottom-right');

        return back();
    }
}
