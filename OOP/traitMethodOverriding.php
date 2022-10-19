<?php

trait Hello
{
    public function hello()
    {
        echo "Hello programming World! from Hello trait" . "<br>";
    }
}

trait Hi
{
    public function hello()
    {
        echo "Hello programming World! from Hi trait" . "<br>";
    }

    private function sayHi()
    {
        echo "Hi everyone" . "<br>";
    }
}

class ClassA
{
    public function hello()
    {
        echo "Hello programming World! from ClassA" . "<br>";
    }
}

class ClassB extends ClassA
{
    use Hello;

    public function hello()
    {
        echo "Hello programming World! from ClassB" . "<br>";
    }
}

class ClassC extends ClassA
{
    use Hello;
}

class BaseClass
{
    use Hello, Hi {
        Hi::hello insteadof Hello;
        Hello::hello as newHello;
        Hi::sayHi as public sayHello; // we can modify access modifier of trait function and also change method name
    }
}


$objA = new ClassA();
$objA->hello();

$objB = new ClassB();
$objB->hello();

$objC = new ClassC();
// trait gets higher priority
$objC->hello();

$objBase = new BaseClass();
//Trait method Hi::hello has not been applied as BaseClass::hello, because of collision with Hello::hello
$objBase->hello();
$objBase->newHello();
// $objBase->sayHi();
$objBase->sayHello();
