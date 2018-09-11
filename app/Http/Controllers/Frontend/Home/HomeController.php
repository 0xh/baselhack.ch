<?php

namespace App\Http\Controllers\Frontend\Home;

use App\App\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.home_index.title'))
            ->setDescription(Lang::get('frontend/meta.home_index.description'))
            ->setKeywords(Lang::get('frontend/meta.home_index.keywords'));

        return view('frontend.home.index');
    }
}
