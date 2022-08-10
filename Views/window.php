<?php
require("../Model/Database/database.php");
require("../Controller/Classes/Window/window.php");
require("../Controller/Functions/Functions.php");
if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
$msg = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../Model/Backend/backend.php" method="Post">
        <!-- <label for="">Window brand</label>
        <input type="text" name="brand">
        <br>
        <br>
        <label for="">Window type</label>
        <input type="text" name="type">
        <br>
        <br>
        <label for="">Window size</label>
        <input type="text" name="size">
        <br>
        <br>
        <label for="">Window Amount</label>
        <input type="text" name="amount">
        <br>
        <br>
        <input type="submit" name="submit_window">
        <br>
        <br> -->

        <label for="">Name</label>
        <?php
        $db = new Database();
        Fun::dynamicDropdown("windows", "window", "name", "", "name", "name");

        ?>


        <label for="">Width</label>
        <input type="text" name='width'>

        <label for="">Height</label>
        <input type="text" name='height'>
        <input type="submit" name='windows'>
    </form>
    <?php

    ?>

</body>

</html>