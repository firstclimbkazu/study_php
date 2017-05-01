<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 18:53
 */

$lang = "ruby";

function sayHi($name){
    $lang = "php";
    echo "hi! $name from $lang";
}

sayHi("Tom");
echo "$lang";