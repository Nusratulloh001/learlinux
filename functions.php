<?php


function d (mixed $value) : void
{
    echo "<pre style='border: 1px solid black; background-color: black; color: white; border-radius: 5px; padding: 5px; font-size: 18px; margin: 5px;'>";
    var_dump($value);
    echo "</pre>";
}

function dd (mixed $value) : void
{
    echo "<pre style='border: 1px solid black; background-color: black; color: white; border-radius: 5px; padding: 5px; font-size: 18px; margin: 5px;'>";
    var_dump($value);
    echo "</pre>";
    die();
}

function p (mixed $value) : void
{
    echo "<pre style='border: 1px solid black; background-color: black; color: white; border-radius: 5px; padding: 5px; font-size: 18px; margin: 5px;'>";
    print_r($value);
    echo "</pre>";
}