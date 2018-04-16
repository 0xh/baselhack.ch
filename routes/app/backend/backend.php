<?php


Route::group(['prefix' => 'backend', 'namespace' => 'Backend', 'as' => 'backend.'], function () {

    @include 'administrators/administrators.php';
    @include 'users/users.php';
    @include 'association/association.php';

});
