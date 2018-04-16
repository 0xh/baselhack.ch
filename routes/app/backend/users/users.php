<?php


Route::group(['prefix' => '/users', 'namespace' => 'Users', 'as' => 'users.'], function () {
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
