<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 16:38
 */

$signal = "green";

switch($signal) {
    case "red":
        echo "stop!";
        break;
    case "blue":
    case "green":
        echo "go!";
        break;
    case "yellow":
        echo "caution!";
        break;
    default:
        echo "wrong signal";
        break;
}
