<?php


Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'Home\HomeController@index')->name('home.index');

    Route::get('/event/sign-up/confirm/{participant}', 'Events\SignUpController@confirm');

    Route::group(['prefix' => 'events', 'namespace' => 'Events', 'as' => 'events.'], function () {
        Route::get('/', 'EventsController@index')->name('index');
        Route::get('/unsubscribe/{email}', 'EventsController@unsubscribe')->name('unsubscribe');


        Route::group(['prefix' => 'sign-up', 'as' => 'signup.'], function () {
            Route::get('/', 'SignUpController@index')->name('index');
            Route::post('/', 'SignUpController@store')->name('store');
            Route::post('/skip', 'SignUpController@skip')->name('skip');
            Route::get('/confirm/{participant}', 'SignUpController@confirm')->name('confirm');

        });
    });

    Route::get('/about', 'About\AboutController@index')->name('about.index');

    Route::group(['prefix' => 'partners', 'namespace' => 'Partners', 'as' => 'partners.'], function () {
        Route::get('/', 'PartnersController@index')->name('index');
    });

    Route::group(['prefix' => 'sponsors', 'namespace' => 'Sponsors', 'as' => 'sponsors.'], function () {
        Route::get('/', 'SponsorsController@index')->name('index');
    });

    Route::group(['prefix' => 'legal', 'namespace' => 'Legal', 'as' => 'legal.'], function () {
        Route::get('/imprint', 'ImprintController@index')->name('imprint.index');
        Route::get('/privacy', 'PrivacyController@index')->name('privacy.index');
    });

    Route::group(['prefix' => 'contact', 'namespace' => 'Enquiries', 'as' => 'enquiries.'], function () {
        Route::get('/', 'EnquiriesController@index')->name('index');
        Route::post('/', 'EnquiriesController@store')->name('store');
    });

    Route::post('/newsletter', 'Newsletter\NewsletterController@store')->name('newsletter.store');
});


