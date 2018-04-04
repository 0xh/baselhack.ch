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


Auth::routes();

Route::get('/', 'Frontend\HomeController@index')->name('home.index');


Route::get('/backend/dashboard', 'HomeController@index')->name('dashboard.index');
Route::get('/backend/members', 'MembersController@index')->name('members.index');

Route::get('/backend/members/create', 'MembersController@create')->name('members.create');

Route::get('/backend/members/{member}/edit', 'MembersController@edit')->name('members.edit');
Route::patch('/backend/members/{member}/update', 'MembersController@update')->name('members.update');

Route::get('/backend/members/files', 'MembersController@files')->name('members.files');
Route::get('/backend/members/webmail', 'MembersController@webmail')->name('members.webmail');
Route::get('/backend/members/export', 'MembersController@export')->name('members.export');
