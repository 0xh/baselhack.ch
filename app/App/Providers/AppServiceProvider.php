<?php

namespace App\App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend(
            'recaptcha',
            'App\\Domain\\Validators\\ReCaptcha@validate'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (! app()->environment('production')) {
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
            $this->app->register(\Laravel\Dusk\DuskServiceProvider::class);
        }
    }
}
