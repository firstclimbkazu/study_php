<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/07
 * Time: 12:26
 */

function div($a,$b){
    try {
        if ($b === 0) {
            throw new Exception("connot divide by 0!");
        }
        echo $a / $b;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

div(7,2);
div(5,0);
