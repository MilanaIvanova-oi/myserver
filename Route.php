<?php
class Route
{
    static function getRoute($route)
    {
        if($route === '/myserver/get')
            require 'get.php';

        else
            require '404.php';
    }
}