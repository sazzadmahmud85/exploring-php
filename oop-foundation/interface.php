<?php
interface BaseAnimal
{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal
{
    function isAlive()
    {
    }
    function canEat($param1, $param2)
    {
    }
    function breed()
    {
    }
}

interface BaseHuman extends BaseAnimal
{
    function canTalk();
}



$cat = new Animal();
echo $cat instanceof Human;

// echo $h instanceof BaseAnimal;
// echo $h instanceof BaseHuman;

abstract class AbstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "I am Eating";
    }
}

class Human extends AbstractHuman
{
    function isAlive()
    {
    }
    function canEat($param1, $param2)
    {
    }
    function breed()
    {
    }
    function canTalk()
    {
    }
    function run()
    {
    }
}

$h = new Human();