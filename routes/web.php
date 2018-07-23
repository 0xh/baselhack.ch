<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => '', 'namespace' => 'Backend\Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');

    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');

    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
});


Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {

    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['prefix' => 'event', 'namespace' => 'Event', 'as' => 'event.'], function () {
        Route::get('/', 'EventController@index')->name('index');

        Route::get('/sign-up', 'SignUpController@index')->name('signup');
        Route::post('/sign-up', 'SignUpController@store')->name('store');
    });

    Route::get('/about', 'AboutController@index')->name('about.index');


    Route::group(['prefix' => 'partners', 'as' => 'partners.'], function () {
        Route::get('/', 'PartnersController@index')->name('index');
    });

    Route::group(['prefix' => 'legal', 'namespace' => 'Legal', 'as' => 'legal.'], function () {
        Route::get('/imprint', 'ImprintController@index')->name('imprint.index');
        Route::get('/privacy', 'PrivacyController@index')->name('privacy.index');
    });

    Route::get('/contact', 'ContactController@index')->name('contact.index');
    Route::post('/contact', 'ContactController@store')->name('contact.store');

    Route::post('/newsletter', 'Newsletter\NewsletterController@store')->name('newsletter.store');

});

@include 'app/backend/backend.php';


