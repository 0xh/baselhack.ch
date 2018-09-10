<?php

namespace App\Http\Controllers\Frontend\Legal;

use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class PrivacyController extends Controller
{
    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.privacy_index.title'))
            ->setDescription(Lang::get('frontend/meta.privacy_index.description'))
            ->setKeywords(Lang::get('frontend/meta.privacy_index.keywords'));

        return view('frontend.legal.privacy.index');
    }
}
