<?php

/**
 * class_exists()
 * interface_exists()
 * method_exists()
 * trait_exists()
 * property_exists()
 * is_a()
 * is_subclass_of()
 */

trait NewTrait
{
    public function traitMethod()
    {
        echo "method form trait" . "<br>";
    }
}

interface MyInterface
{
    public function hello();
}

class ParentClass
{
}

class Child extends ParentClass
{
}

class MyClass
{
    public $name = "Sakhawat";

    public function hello()
    {
        echo "Hello" . "<br>";
    }
}

if (class_exists('MyClass')) {
    echo "Class exist" . "<br>";
    $obj = new MyClass();
} else {
    echo "Class does not exist" . "<br>";
}

if (interface_exists('MyInterface')) {
    echo "Interface exist" . "<br>";
} else {
    echo "Interface does not exist" . "<br>";
}

$obj = new MyClass();
if (method_exists($obj, 'hello')) {
    echo "Method exist" . "<br>";
} else {
    echo "Method does not exist" . "<br>";
}

if (trait_exists('NewTrait')) {
    echo "Trait exist" . "<br>";
} else {
    echo "Trait does not exist" . "<br>";
}

if (property_exists($obj, 'name')) {
    echo "Property exist" . "<br>";
} else {
    echo "Property does not exist" . "<br>";
}

if (is_a($obj, 'MyClass')) {
    echo "This object is class of MyClass" . "<br>";
} else {
    echo "This object is not class of MyClass" . "<br>";
}

$object = new Child();
if (is_subclass_of($object, 'ParentClass')) {
    echo "This \$object is a object of subclass of ParentClass" . "<br>";
} else {
    echo "This \$object is not a object of subclass of ParentClass" . "<br>";
}
