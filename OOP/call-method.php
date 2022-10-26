<?php

//__call() method called when we are trying to call private method or a method that does not exist

class TestClass
{
    private $firstName;
    private $lastName;

    private function setName($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $arguments);
        } else {
            echo "Method does not exist : $method" . "<br>";
        }
    }
}

$obj = new TestClass();
$obj->setName("Sakhawat", "Hossen");
$obj->setSalary(23000);
echo "<pre>";
print_r($obj);
echo "</pre>";
