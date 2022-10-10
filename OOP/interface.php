<?php

//interface
interface A
{
    function printSomething();

    function cal($num1, $num2);
}

//interface
interface B
{
    function showSomething();
}

//derived class
class C implements A, B
{
    public function printSomething()
    {
        echo "Print something" . "<br>";
    }

    public function cal($num1, $num2)
    {
        $res = $num1 + $num2;

        echo "Result : " . $res . "<br>";
    }

    public function showSomething()
    {
        echo "Show something" . "<br>";
    }
}

$c = new C();

$c->printSomething();
$c->showSomething();
$c->cal(10, 200);
