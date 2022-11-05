<?php

spl_autoload_register(function ($class) {
    require "OOP/" . $class . ".php";
});

$obj = new DataBase();

// $obj->insert('students', ['name' => 'Sakhawat', 'city' => 'Dhaka', 'email' => 'sakhawat@gmail.com']);

// print_r($obj->getResult());

// $obj->sqlCommand("select * from students where id > 3");
// echo "<pre>";
// print_r($obj->getResult());
// echo "<?pre>";

// $re = $obj->getResult();
// foreach ($re as $r) {
//     echo $r['name'] . "<br>";
// }

// $obj->select('students', '*', null, null, null, null);
// echo "<pre>";
// print_r($obj->getResult());
// echo "<?pre>";
// $obj->select('students', 'id, name', null, null, null, null);
// echo "<pre>";
// print_r($obj->getResult());
// echo "<?pre>";
// $obj->select('students', '*', null, 'city = "Dhaka"', null, null);
// echo "<pre>";
// print_r($obj->getResult());
// echo "<?pre>";
// $obj->select('students', 'id, name', null, null, 'id DESC', null);
// echo "<pre>";
// print_r($obj->getResult());
// echo "<?pre>";
// $obj->select('students', '*', null, null, null, 3);
// echo "<pre>";
// print_r($obj->getResult());
// echo "<?pre>";
