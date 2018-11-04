<?php

namespace App\App\Providers;

use App\Domain\Models\Participant;
use App\Domain\Models\Social;
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
        try {
            if (Schema::hasTable('social_media')) {
                $social_medias = Social::all();
                $current_participants = Participant::all()->count();

                View::composer('*', function ($view) use ($social_medias, $current_participants) {
                    $view->with(compact('social_medias','current_participants'));
                });
            }
        } catch (\Exception $exception) {
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
