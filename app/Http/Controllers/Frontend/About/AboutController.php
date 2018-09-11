<?php

namespace App\Http\Controllers\Frontend\About;

use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class AboutController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.about_index.title'))
            ->setDescription(Lang::get('frontend/meta.about_index.description'))
            ->setKeywords(Lang::get('frontend/meta.about_index.keywords'));

        return view('frontend.about.index');
    }
}
