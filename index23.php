<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 20:11
 */

abstract class BaseUser {
    public $name;
    abstract public function sayHi();
}

class User extends BaseUser {
    public function sayHi() {
        echo "hello from User";
    }
}

$tom = new User();
$tom->sayHi();