<?php

namespace App\Http\Controllers\Frontend;

use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class SponsorsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.sponsors_index.title'))
            ->setDescription(Lang::get('frontend/meta.sponsors_index.description'))
            ->setKeywords(Lang::get('frontend/meta.sponsors_index.keywords'));

        return view('frontend.sponsors.index');
    }
}
