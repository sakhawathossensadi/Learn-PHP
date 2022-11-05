<?php

spl_autoload_register(function ($class) {
    require "OOP/" . $class . ".php";
});

$obj = new DataBase();

$obj->insert('students', ['name' => 'Sakhawat', 'city' => 'Dhaka', 'email' => 'sakhawat@gmail.com']);

print_r($obj->getResult());
