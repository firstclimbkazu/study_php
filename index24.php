<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 20:25
 */

interface sayHi {
    public function sayHi();
}

interface sayHello {
    public function sayHello();
}

class User implements sayHi, sayHello {
    public function sayHi() {
        echo "hi!";
    }

    public function sayHello() {
        echo "hello!";
    }
}

$tom = new User();
$tom->sayHi();
$tom->sayHello();