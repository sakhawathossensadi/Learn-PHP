<?php

//__callStatic() method called when we are trying to call private static method or a method that does not exist

class LearnClass
{
    private static $firstName;
    private static $lastName;

    private static function setName($firstName, $lastName)
    {
        self::$firstName = $firstName;
        self::$lastName = $lastName;
    }

    public static function hello()
    {
        echo "Name : " . self::$firstName . " " . self::$lastName . "<br>";
    }

    public static function __callStatic($method, $arguments)
    {
        // echo "This is a private static method : $method" . "<br>";
        if (method_exists(__CLASS__, $method)) {
            call_user_func_array([__CLASS__, $method], $arguments);
        } else {
            echo "Method does not exist : $method" . "<br>";
        }
    }
}

$learnClass = new LearnClass();
LearnClass::setName("John", "Wick");
LearnClass::show();
LearnClass::hello();
