<?php

if (!function_exists('same_route')) {
    function same_route($route)
    {
        return Route::currentRouteName() === $route ? true : false;
    }
}


if (!function_exists('split_name')) {
    function split_name($name)
    {
        $name = trim($name);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        $first_name = trim(preg_replace('#' . $last_name . '#', '', $name));
        return array($first_name, $last_name);
    }
}