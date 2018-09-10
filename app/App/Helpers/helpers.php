<?php

if (! function_exists('same_route')) {
    function same_route($route)
    {
        return Route::currentRouteName() === $route ? true : false;
    }
}
