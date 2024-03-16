<?php

function dd($value)
{
    var_dump($value);
    die();
}

function view($name, $data = [])
{
    extract(
        $data
    );

    return require "views/$name.view.php";
}
