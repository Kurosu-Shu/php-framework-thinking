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

function redirect($uri)
{
    header("Location: $uri");
}

function request($name)
{
    if($_SERVER['REQUEST_METHOD'] == "GET") {
        return $_GET[$name];
    }else if ($_SERVER['REQUEST_METHOD'] == "POST") {
        return $_POST[$name];
    };
}
