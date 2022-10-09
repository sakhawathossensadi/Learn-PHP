<?php

//base class
class Employee
{
    public $name;
    public $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function show()
    {
        echo "<h3> Profile </h3>";
        echo "Name : " . $this->name . "<br>";
        echo "Salary : " . $this->salary . "<br>";
    }
}

//derived class
class Manager extends Employee
{
    public $designation;

    public function __construct($name, $salary, $designation)
    {
        parent::__construct($name, $salary);
        $this->designation = $designation;
    }

    public function info()
    {
        $this->show();
        echo "Designation : " . $this->designation . "<br>";
    }
}

$e1 = new Employee('John Wick', 12000);

$e1->show();

$e1 = new Manager('Shawn', 12000, "Manager");

$e1->info();
