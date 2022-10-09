<?php

//abstract class
abstract class A
{
    public $name;

    //abstract method
    abstract protected function cal($num1, $num2);
}

class B extends A
{
    public function cal($val1, $val2)
    {
        $res = $val1 + $val2;

        echo "Result : " . $res . "<br>";
    }
}

//cannot create object of abstract class
// $PC = new A();

$cd = new B();
$cd->cal(10, 10);
