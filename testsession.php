<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/07
 * Time: 13:03
 */

session_start();

if(isset($_SESSION['username']))
{
    echo $_SESSION['username'];
}
