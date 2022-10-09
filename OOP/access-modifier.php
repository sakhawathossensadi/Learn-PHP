<?php

class Base
{
    public $name;
    protected $age = 27;
    private $salary = 1200;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo "Name : " . $this->name . "<br>";
        echo "Salary : " . $this->salary . "<br>";
    }
}

class Child extends Base
{
    public function __construct()
    {
    }

    public function age()
    {
        echo "Age : " . $this->age . "<br>";
    }

    public function salary()
    {
        echo "Salary : " . $this->salary . "<br>";
    }
}

$test = new Base("Sakhawat");
$test->name = "Sadi";

// protected fields cannot be access outside of class
// $test->age = 27;

// private fields cannot be access outside of class
// $test->salary = 15000;

$test->show();

$child = new Child();
$child->age();

// $child->salary = 50000;
// $child->salary();

// private property cannot be accessed form derived class
// $child->salary();
