<?php


Route::group(['prefix' => '/events', 'namespace' => 'Events', 'as' => 'events.'], function () {
    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => '/newsletters', 'namespace' => 'Newsletters', 'as' => 'newsletters.'], function () {
        Route::get('/', 'NewslettersController@index')->name('index');
        Route::get('/create', 'NewslettersController@create')->name('create');
    });


});
