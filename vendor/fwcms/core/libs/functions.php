<?php

function ninja($value = null, $value2 = null, $die = 1) 
{

    echo "Debug <br><pre>";
    echo print_r($value);
    echo "</pre>";

    if($value2)
    {
        echo "Debug2 <br><pre>";
        echo print_r($value2);
        echo "</pre>";
    }

    if ($die) {die;}
}

function redirect($http = false)
{
    if($http)
    {
        $redirect = $http;
    }
    else
    {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
    }
    
    header("Location: " . $redirect);
    exit;
}

//htmlspecialchars
function hsc($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}