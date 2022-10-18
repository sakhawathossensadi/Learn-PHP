<?php

trait Hello
{
    public function hello()
    {
        echo "Hello World!" . "<br>";
    }

    public function coding()
    {
        echo "Happy Coding" . "<br>";
    }
}

trait Welcome
{
    public function welcome()
    {
        echo "Welcome everyone" . "<br>";
    }
}

class ClassA
{
    use Hello, Welcome;
}

class ClassB
{
    use Hello;
}

$classA = new ClassA();
$classA->hello();
$classA->welcome();
$classA->coding();

$classB = new ClassB();
$classB->hello();
