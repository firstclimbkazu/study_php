<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 19:04
 */

$x = 5.6;
echo ceil($x) . " , ";
echo floor($x) . " , ";
echo round ($x) . " , ";
echo rand(1,10) . " , ";

$s1 = "hello";
$s2 = "ねこ";
echo strlen($s1) . " , ";
echo mb_strlen($s2) . " , ";
printf("%s - %s - %.3f , ", $s1, $s2, $x);

$colors = ["red","blue","pink"];
echo count($colors). " , ";
echo implode("@" , $colors);
