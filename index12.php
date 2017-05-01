<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 16:54
 */

/*
$i = 0;
while($i < 10){
    echo $i;
    $i++;
}
*/

for($i = 0; $i< 10; $i++) {
    if ($i === 5) {
        break;
        //continue;
    }
    echo $i;
}


