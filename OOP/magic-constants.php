<?php

namespace myNamespace;

echo "Line Number : " . __LINE__ . "<br>";

echo "File path : " . __FILE__ . "<br>";

echo "Directory of file : " . __DIR__ . "<br>";

function hello()
{
    echo "The function name : " . __FUNCTION__ . "<br>";
}

hello();

//class related magic constants

trait myTrait
{
    public function traitMethod()
    {
        echo "Method form trait" . "<br>";
    }

    public function getTraitName()
    {
        echo "Trait name : " . __TRAIT__ . "<br>";
    }
}

class D
{
    use myTrait;

    public function getClassName()
    {
        echo "Class name : " . __CLASS__ . "<br>";
    }

    public function getMethodName()
    {
        echo "Class name : " . __METHOD__ . "<br>";
    }

    public function getNameSpaceName()
    {
        echo "Namespace name : " . __NAMESPACE__ . "<br>";
    }
}

$obj = new D();
$obj->getClassName();
$obj->getMethodName();
$obj->getNameSpaceName();
$obj->getTraitName();
