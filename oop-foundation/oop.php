<?php
class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }
    private function sayName(){
        echo "My name is {$this->name}";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

// $h1 = new Human();
// $h2 = new Human();
$h1->name = "Rubel";
$h2 -> name = "Hasin";
$c1 = new Cat();
$d1 = new dog();

// $h1->sayName();
// $h2 sayName();
// echo $h2->name;
echo PHP_EOL;
$h2->sayHi();
// $c1->sayHi();