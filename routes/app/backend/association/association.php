<?php


Route::group(['prefix' => '/association', 'namespace' => 'Association', 'as' => 'association.'], function () {
    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => '/members', 'namespace' => 'Members', 'as' => 'members.'], function () {
        Route::get('/', 'MembersController@index')->name('index');
        Route::get('/create', 'MembersController@create')->name('create');
        Route::get('/edit/{member}', 'MembersController@edit')->name('edit');
        Route::patch('/update/{member}', 'MembersController@update')->name('update');
        Route::get('/files', 'MembersController@files')->name('files');
        Route::get('/webmail', 'MembersController@webmail')->name('webmail');
        Route::get('/export', 'MembersController@export')->name('export');
    });

    Route::group(['prefix' => '/passwords', 'namespace' => 'Passwords', 'as' => 'passwords.'], function () {
        Route::get('/', 'PasswordsController@index')->name('index');
    });
});
