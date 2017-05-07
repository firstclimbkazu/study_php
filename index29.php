<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/07
 * Time: 12:49
 */

//setcookie("username" , "machida");
setcookie("username" , "machida" , time() + 60 * 60);
//setcookie("username" , "machida" , time() -  60 * 60 );

if(isset($_COOKIE["username"]))
{
    echo $_COOKIE["username"];
}

