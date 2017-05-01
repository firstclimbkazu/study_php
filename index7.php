<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 15:34
 */
$name = "machida";
$s1 = "hello $name!/nhello agein!";
var_dump($s1);
var_dump("<br/");
$s1 = "hello {$name}!¥nhello agein!";
var_dump($s1);
var_dump("<br/");
$s1 = "hello ${name}!¥nhello again";
var_dump($s1);
var_dump("<br/");
$s2 = 'hello $name!¥nhello agein!';
var_dump($s1);
var_dump("<br/");
var_dump($s2);
var_dump("<br/");

$s = "hello " . "world";
var_dump($s);