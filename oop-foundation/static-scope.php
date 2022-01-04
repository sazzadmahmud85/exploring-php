<?php
class A{
    static $name;
    static function sayHi(){
        self::$name = "hello";
        echo "Hi from A\n";
    }
}

class B extends A{
    static function sayHi(){
        echo "Hi from B\n";
        parent::sayHi();
    }
}

B::sayHi();
echo B::$name;