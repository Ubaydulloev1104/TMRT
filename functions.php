<?php


function debug($array, $die = false) 
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    if($die) die();
}