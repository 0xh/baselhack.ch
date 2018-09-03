<?php



Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['prefix' => 'event', 'namespace' => 'Event', 'as' => 'event.'], function () {
        Route::get('/', 'EventController@index')->name('index');

        Route::get('/sign-up', 'SignUpController@index')->name('signup');
        Route::post('/sign-up', 'SignUpController@store')->name('signup.store');
    });

    Route::get('/about', 'AboutController@index')->name('about.index');

    Route::group(['prefix' => 'partners', 'as' => 'partners.'], function () {
        Route::get('/', 'PartnersController@index')->name('index');
    });

    Route::group(['prefix' => 'sponsors', 'as' => 'sponsors.'], function () {
        Route::get('/', 'SponsorsController@index')->name('index');
    });

    Route::group(['prefix' => 'legal', 'namespace' => 'Legal', 'as' => 'legal.'], function () {
        Route::get('/imprint', 'ImprintController@index')->name('imprint.index');
        Route::get('/privacy', 'PrivacyController@index')->name('privacy.index');
    });

    Route::get('/contact', 'ContactController@index')->name('contact.index');
    Route::post('/contact', 'ContactController@store')->name('contact.store');

    Route::post('/newsletter', 'Newsletter\NewsletterController@store')->name('newsletter.store');
});

