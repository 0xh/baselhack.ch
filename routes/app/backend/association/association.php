<?php


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


    Route::group(['prefix' => '/newsletters', 'namespace' => 'Newsletters', 'as' => 'newsletters.'], function () {
        Route::get('/', 'NewslettersController@index')->name('index');
        Route::get('/create', 'NewslettersController@create')->name('create');
    });



    Route::group(['prefix' => '/passwords', 'namespace' => 'Passwords', 'as' => 'passwords.'], function () {
        Route::get('/', 'PasswordsController@index')->name('index');
        Route::get('/create', 'PasswordsController@index')->name('create');
    });
});
