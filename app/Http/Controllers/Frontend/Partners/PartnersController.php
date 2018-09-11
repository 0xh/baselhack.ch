<?php

namespace App\Http\Controllers\Frontend\Partners;

use App\App\Controllers\Controller;
use App\Domain\Models\Partner;
use Illuminate\Support\Facades\Lang;

class PartnersController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->seo()
            ->setTitle(Lang::get('frontend/meta.partners_index.title'))
            ->setDescription(Lang::get('frontend/meta.partners_index.description'))
            ->setKeywords(Lang::get('frontend/meta.partners_index.keywords'));


        $partners = Partner::all();

        return view('frontend.partners.index', compact('partners'));
    }
}
