<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 19:35
 */

class User {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    //final public function sayHi() {
    public function sayHi() {
        echo "hi, i am $this->name!";
    }
}

class AdminUser extends User {
    public function sayHello() {
        echo "hello from Admin!";
    }
    // oberride
    public function sayHi() {
        echo "[Admin] hi, i am $this->name!";
    }
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");

$tom->sayHi();
$steve->sayHi();
$steve->sayHello();