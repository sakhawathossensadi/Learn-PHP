<?php

/**
 * int
 * float
 * string
 * bool
 * array
 * class/interface
 * object
 */


function sum(int $value)
{
    echo $value + 10;
    echo "<br>";
}

sum(10);
// sum("hello");

function colors(array $titles)
{
    foreach ($titles as $title) {
        echo $title . "<br>";
    }
}

$values = ["red", "blue"];

colors($values);

class Hello
{
    public function sayHello()
    {
        echo "Hello everyone" . "<br>";
    }
}

class Bye
{
    public function sayBye()
    {
        echo "Bye everyone" . "<br>";
    }
}

function functionCall(Hello $obj)
{
    $obj->sayHello();
}

$hello = new Hello();
$bye = new Bye();

functionCall($hello);
// functionCall($bye);

class School
{
    public function getNames(Student $names)
    {
        foreach ($names->stuNames() as $name) {
            echo $name . "<br>";
        }
    }
}

class Student
{
    public function stuNames()
    {
        return ["Sadi", "Zoha"];
    }
}

$sch = new School();
$stu = new Student();

$sch->getNames($stu);
