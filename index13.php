<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 17:51
 */

/*php5.4
$sales = array(
    "machida" => 200,
    "test" => 800,
    "dot" => 600,
);
*/

$sales = [
    "machi" => 200,
    "test" => 800,
    "dot" => 600,
];

var_dump($sales["machi"]);
$sales["test"] = 900;
var_dump($sales["test"]);

$colors = ["red","blue","pink"];
var_dump($colors[1]);