<?php

/**
 * get_class()
 * get_parent_class()
 * get_class_methods()
 * get_class_vars()
 * get_object_vars()
 * get_called_class()
 * get_declared_classes()
 * get_declared_interfaces()
 * get_declared_traits()
 * class_alias()
 */
trait NewTrait
{
}

interface NewInterface
{
}

interface OldInterface
{
}

class PClass
{
    public static function test()
    {
        var_dump(get_called_class());
    }
}

class CClass extends PClass
{
}

class NewClass
{
    public $fName = "Sakhawat";
    protected $lName = "Hossen";
    public $phone = "01773084398";
    private $email = "sakhawathossen42@gmail.com";

    public function __construct()
    {
        $this->phone = "01780966238";
        //methods list
        echo "<pre>";
        print_r(get_class_methods($this));
        echo "</pre>";
        //variables list
        echo "<pre>";
        print_r(get_class_vars(__CLASS__));
        echo "</pre>";
    }

    public function name()
    {
        echo "Class name : " . get_class($this) . "<br>";
    }

    public function show()
    {
        echo "Hello" . "<br>";
    }

    private function hello()
    {
        echo "Hello" . "<br>";
    }

    protected function hi()
    {
        echo "Hello" . "<br>";
    }
}

class HelloClass
{
    public $name;

    public function __construct()
    {
        echo "From HelloClass" . "<br>";
    }
}

$obj = new NewClass();
$obj->name();
echo "Class name : " . get_class($obj) . "<br>";

$childObj = new CClass();
echo "Class name : " . get_parent_class($childObj) . "<br>";

//private and protected methods will name list not show out side of class
$class_methods = get_class_methods($obj);
echo "<pre>";
print_r($class_methods);
echo "</pre>";

//private and protected variables will name list not show out side of class
$class_vars = get_class_vars(get_class($obj));
echo "<pre>";
print_r($class_vars);
echo "</pre>";

echo "<pre>";
print_r(get_object_vars($obj));
echo "</pre>";

PClass::test();
CClass::test();

// show declared classes in a php file
echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";

// show declared interfaces in a php file
echo "<pre>";
print_r(get_declared_interfaces());
echo "</pre>";

// show declared traits in a php file
echo "<pre>";
print_r(get_declared_traits());
echo "</pre>";

$helloClass = new HelloClass();
$helloClass->name = "Md. Sakhawat Hossen Sadi";
echo $helloClass->name . "<br>";

class_alias(get_class($helloClass), "HiClass");

$hiClass = new HiClass();

$hiClass->name = "Md. Sakhawat Hossen";
echo $hiClass->name;
