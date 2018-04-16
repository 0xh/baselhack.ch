<?php
/**
 * Created by PhpStorm.
 * User: sebastian.fix
 * Date: 10.04.18
 * Time: 14:50.
 */
function create($class, $attributes = [], $times = null)
{
    return factory($class, $times)->create($attributes);
}
function make($class, $attributes = [], $times = null)
{
    return factory($class, $times)->make($attributes);
}
