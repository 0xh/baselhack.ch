<?php

namespace App\App\Providers;

use App\Domain\Models\SocialMedia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (DB::connection()->getDatabaseName() and Schema::hasTable('social_media')) {
            $social_medias = SocialMedia::all();

            View::composer('*', function ($view) use ($social_medias) {
                $view->with(compact('social_medias'));
            });
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
