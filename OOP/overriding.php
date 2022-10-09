<?php

class ParentClass
{
    public $name = "Parent class";

    public function sum($val1, $val2)
    {
        $res = $val1 + $val2;

        return $res;
    }
}

class ChildClass extends ParentClass
{
    public $name = 'Child class';

    // public function sum($val1, $val2)
    // {
    //     $res = $val1 * $val2;

    //     return $res;
    // }
}

$Parent = new ParentClass();
echo $Parent->name . "<br>";
echo $Parent->sum(10, 10) . "<br>";

$child = new ChildClass();
echo $child->name . "<br>";
//if child class not override parent class method then through child class object we call parent class method
echo $child->sum(10, 10) . "<br>";
