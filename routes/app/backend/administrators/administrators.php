<?php

Route::group(['prefix' => '/administrators', 'namespace' => 'Administrators', 'as' => 'administrators.'], function () {
    Route::group(['prefix' => '/users', 'namespace' => 'Users', 'as' => 'users.'], function () {
        Route::get('/', 'UsersController@index')->name('index');

        Route::get('/create', 'UsersController@create')->name('create');
        Route::post('/create', 'UsersController@store')->name('store');
        Route::get('/edit/{user}', 'UsersController@edit')->name('edit');
        Route::patch('/update/{user}', 'UsersController@update')->name('update');

        Route::delete('/delete/{user}', 'UsersController@delete')->name('delete');

        Route::get('/archived', 'UsersController@archived')->name('archived');
        Route::patch('/archived/restore/{email}', 'UsersController@restore')->name('restore');

        Route::patch('/activate/{user}', 'UsersController@activate')->name('activate');
        Route::patch('/deactivate/{user}', 'UsersController@deactivate')->name('deactivate');

        Route::patch('/add/role/{user}', 'RolesController@addRole')->name('add.role');
        Route::patch('/remove/role/{user}', 'RolesController@removeRole')->name('remove.role');

    });
});
