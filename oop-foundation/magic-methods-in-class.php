<?php
class Student
{
    private $name;
    private $age;
    private $class;
    function __construct($name = '', $age = '', $class = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }


    //     function getName(){
    //         return $this->name;
    //     }

    //     function setName(){
    //         $this->name = $name;
    //     }
    //     function getAge(){
    //         return $this->age;
    //     }

    //     function setAge(){
    //         $this->age = $age;
    //     }
    //     function getClass(){
    //         return $this->class;
    //     }

    //     function setClass(){
    //         $this->class = $class;
    //     }
    // }
    public function __get($prop)
    {
        return strtoupper($this->$prop);
    }
    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }
}

$R = new Student('Rahim', '16', '10');
// $R = new Student();
// $R->setName('Rahim');
// echo $R->getName();

$R->name = 'Kamal';
echo $R->name;