<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/07
 * Time: 12:49
 */

session_start();

$_SESSION['username'] = 'machi';

if(isset($_SESSION['username'])) {
    echo $_SESSION['username'];
}
unset($_SESSION['username']);

if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}
