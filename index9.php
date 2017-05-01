<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 16:10
 */
$x = 5;
if($x == true) {
    echo "great";
}

$a = 5;
$b = 7;
$max = ($a > $b) ? $a : $b;

if($a > $b){
    $max = $a;
} else {
    $max = $b;
}

echo $max;