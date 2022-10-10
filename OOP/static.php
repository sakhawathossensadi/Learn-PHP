<?php

class AClass
{
    public static $name;

    public function __construct($name)
    {
        self::$name = $name;
    }

    public static function showName()
    {
        echo  "Name : " . self::$name . "<br>";
    }
}

class Derived extends AClass
{
    public function __construct()
    {
        //
    }

    public function print()
    {
        echo "Parent class value of name : " . parent::$name . "<br>";
    }
}

//using class object to access static member and method
$a = new AClass("Sakhawat Hossen");

echo " Value of static member name is : " . $a::$name . "<br>";

$a::showName();

//using class name to access static member and method
echo " Value of static member name is : " . AClass::$name . "<br>";

AClass::showName();

$derived = new Derived();

$derived->print();
