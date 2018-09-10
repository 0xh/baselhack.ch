<?php

namespace App\Http\Controllers\Frontend\Legal;

use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class ImprintController extends Controller
{
    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.imprint_index.title'))
            ->setDescription(Lang::get('frontend/meta.imprint_index.description'))
            ->setKeywords(Lang::get('frontend/meta.imprint_index.keywords'));

        return view('frontend.legal.imprint.index');
    }
}
