<?php
class Human
{
    public $name;
    public $age;
    function __construct($personName, $personAge = 0)
    {
        echo "New Human Object is Created\n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi()
    {
        echo "Salam\n";
        $this->sayName();
    }
    function sayName()
    {
        if ($this->age) {
            echo "My name is {$this->name}. I am $this->age years old.";
        } else {
            echo "My name is {$this->name}. I don't know how old I am";
        }
    }
}

$h1 = new Human("Rubel", 31);
$h2 = new Human("Sazzad", 25);
$h3 = new Human("Rakhi");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();
