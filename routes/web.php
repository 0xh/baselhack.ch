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

Route::get('/', 'Frontend\HomeController@index')->name('frontend.home.index');

Route::post('/newsletter', 'Frontend\Newsletter\NewsletterController@store')->name('frontend.newsletter.store');

@include 'app/backend/auth/auth.php';

@include 'app/backend/backend.php';
