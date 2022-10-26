<?php

//__set() method called when we are trying to set value to private property or a property that does not exist

class ClassTest
{
    private $name;

    public function showName()
    {
        echo "Name : " . $this->name . "<br>";
    }

    public function __set($property, $value)
    {
        // echo "This is Non existing or Private Property : ($property) and value : ($value)" . "<br>";
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        if (!property_exists($this, $property)) {
            echo "This is Non existing or Private Property : $property and value : $value" . "<br>";
        }
    }
}

$classObj = new ClassTest();
$classObj->name = "Sakhawat";
$classObj->showName();
$classObj->course = "PHP";
