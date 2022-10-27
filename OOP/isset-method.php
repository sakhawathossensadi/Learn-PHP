<?php

$test;
echo (isset($test)) . "<br>";
$name = "Sakhawat Hossen";
echo (isset($name)) . "<br>";

class ABCClass
{
    public $course;
    public $fee;
    private $firstName;
    private $lastName;
    private $address;
    private $details = ['name' => "Sadi", 'age' => 27];

    public function setName($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __isset($property)
    {
        //array property
        // echo isset($this->details[$property]);

        if (isset($this->$property)) {
            echo "Property : $property is set" . "<br>";
        } else {
            echo "Property : $property is not set" . "<br>";
        }
    }
}

$obj = new ABCClass();
$obj->course = "PHP";
echo isset($obj->course) . "<br>";
echo isset($obj->fee) . "<br>";
$obj->setName("Sakhawat", "Hossen");
echo isset($obj->firstName);
echo isset($obj->address);
//for array property
// echo isset($obj->name);
// echo isset($obj->city);
