<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 18:41
 */

function sayHi($name = "machida") {
    return "hi! " . $name;
}

$names = [
    "test" => "",
    "dot" => "dotinstall",
    "google" => "www.google.com",
];
echo sayHi() . " ";
foreach($names as $name):
    echo sayHi($name) . " ";
endforeach;
