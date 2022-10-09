<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name = 'No Name', $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function show()
    {
        echo "Name : " . $this->name . " and Age : " . $this->age . "<br>";
    }
}

$p1 = new Person("Sakhawat Hossen", 27);
$p1->show();

$p2 = new Person("Sadi", 26);
$p2->show();

$p3 = new Person();
$p3->show();
