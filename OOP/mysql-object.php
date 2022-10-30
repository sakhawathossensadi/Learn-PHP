<?php

$serverName = "localhost";
$userName = "sakhawat";
$password = "sakhawat";
$dbName = "studentdb";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error);
}

$sqlQuery = "select * from students";
$result = $conn->query($sqlQuery);

if ($result->num_rows > 0) {
    while ($rowData = $result->fetch_assoc()) {
        echo "Id : {$rowData["id"]} - Name : {$rowData["name"]} - City : {$rowData["city"]} - Email : {$rowData["email"]}" . "<br>";
    }
} else {
    echo "No result found" . "<br>";
}

$conn->close();
