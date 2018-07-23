<?php


Route::group(['prefix' => 'backend', 'namespace' => 'Backend', 'as' => 'backend.'], function () {


    Route::group(['prefix' => '/administrators', 'namespace' => 'Administrators', 'as' => 'administrators.'], function () {

        Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard.index');

        Route::group(['prefix' => '/users', 'namespace' => 'Users', 'as' => 'users.'], function () {
            Route::get('/', 'UsersController@index')->name('index');

            Route::get('/create', 'UsersController@create')->name('create');
            Route::post('/create', 'UsersController@store')->name('store');

        });
    });


    Route::group(['prefix' => '/users', 'namespace' => 'Users', 'as' => 'users.'], function ()
    {
        Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard.index');

        Route::group(['prefix' => '/settings', 'namespace' => 'Settings', 'as' => 'settings.'], function () {
            Route::group(['prefix' => '/profile', 'namespace' => 'Profile', 'as' => 'profile.'], function () {
                Route::get('/', 'ProfileController@index')->name('index');
                Route::patch('/{user}', 'ProfileController@update')->name('update');
            });

            Route::group(['prefix' => '/security', 'namespace' => 'Security', 'as' => 'security.'], function () {
                Route::get('/', 'SecurityController@index')->name('index');
                Route::patch('/{user}', 'SecurityController@update')->name('update');
            });

            Route::group(['prefix' => '/language', 'namespace' => 'Language', 'as' => 'language.'], function () {
                Route::get('/', 'LanguageController@index')->name('index');
                Route::patch('/{user}', 'LanguageController@update')->name('update');
            });
        });
    });

    Route::group(['prefix' => '/association', 'namespace' => 'Association', 'as' => 'association.'], function () {
        Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');

        Route::group(['prefix' => '/members', 'namespace' => 'Members', 'as' => 'members.'], function () {
            Route::get('/', 'MembersController@index')->name('index');
            Route::get('/create', 'MembersController@create')->name('create');
            Route::post('/store', 'MembersController@store')->name('store');

            Route::get('/edit/{member}', 'MembersController@edit')->name('edit');
            Route::patch('/update/{member}', 'MembersController@update')->name('update');

            Route::get('/export', 'MembersController@export')->name('export');
        });


    });


    Route::group(['prefix' => '/event', 'namespace' => 'Event', 'as' => 'event.'], function () {
        Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');

        Route::group(['prefix' => '/subscribers', 'namespace' => 'Subscribers', 'as' => 'subscribers.'], function () {
            Route::get('/', 'SubscribersController@index')->name('index');
            Route::get('/create', 'SubscribersController@create')->name('create');
        });

        Route::group(['prefix' => '/participants', 'namespace' => 'Participants', 'as' => 'participants.'], function () {
            Route::get('/', 'ParticipantsController@index')->name('index');
            Route::get('/create', 'ParticipantsController@create')->name('create');
        });

    });
});
