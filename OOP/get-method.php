<?php

//__get() method called when we are trying to call private property or a property that does not exist

class TestClass
{
    private $name = "Sakhawat";
    private $data = [
        'name' => "Sadi",
        'course' => "PHP",
    ];

    public function __get($property)
    {
        // echo "You are trying to access Non Existing or Private Property($property)" . "<br>";
        if (array_key_exists($property, $this->data)) {
            return $this->data[$property];
        } else {
            echo "This property($property) is not defined" . "<br>";
        }
    }
}

$obj = new TestClass();
// $obj->name;
print_r($obj->pin);
echo $obj->course;
