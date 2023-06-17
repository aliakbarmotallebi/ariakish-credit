<?php


if (!function_exists('_is_link_active')) {
    function _is_link_active($route)
    {
        return request()->routeIs("{$route}*");
    }
}