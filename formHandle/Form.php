<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>

<body>
    <!-- <form action="FormSubmit.php" method="get"> -->
    <!-- <form action="FormSubmit.php" method="post"> -->
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        Name : <input type="text" name="name"><br><br>
        Age : <input type="text" name="age"><br><br>
        <input type="submit" name="save">
    </form>

    <?php

    if (isset($_POST['save'])) {
        echo $_POST['name'] . "<br>";
        echo $_POST['age'] . "<br>";
    }
    ?>
</body>

</html>