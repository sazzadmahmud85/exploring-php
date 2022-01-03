<?php
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        self::$name = 'Sazzad';
        self::doSomething();
        echo "Fibonacci Series up to {$n}\n";
    }

    static function doSomething(){
        echo "Doing Something\n";
    }

    function factorial($n){
        self::doSomething();
        $this->doSomething();
        $this->number = 12;
        echo "Calculating Factorial of {$n}\n";
    }
}

$mathc = new MathCalculator();
$mathc -> factorial(8);

// MathCalculator::fibonacci(7);