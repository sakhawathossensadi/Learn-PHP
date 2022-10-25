<?php

// require "Autoload\abc.php";
// require "Autoload\xyz.php";

// $obj1 = new Abc();
// $obj2 = new Xyz();


// __autoload() is no longer supported, use spl_autoload_register()
// function __autoload($class)
// {
//     require "Autoload/" . $class . ".php";
// }


spl_autoload_register(function ($class) {
    require "Autoload/" . $class . ".php";
});

$object1 = new Abc();
$object2 = new Xyz();
