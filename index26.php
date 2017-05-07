<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/07
 * Time: 12:08
 */

require "User.class.php";

use Dotinstall\Lib;

$bob = new Lib\User("Bob");
$bob->sayHi();