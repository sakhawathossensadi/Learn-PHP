<?php

//__unset() is called when we try to unset any private property of a class
class XYZ
{
    private $firstName;
    private $lastName;
    public $email = "sakhawathossen42@gmail.com";

    public function setName($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __unset($property)
    {
        unset($this->$property);
    }
}

$obj = new XYZ();
$obj->setName("Sakhawat", "Hossen");
echo "<pre>";
print_r($obj);
echo "</pre>";
unset($obj->email);
unset($obj->firstName);
echo "<pre>";
print_r($obj);
echo "</pre>";
