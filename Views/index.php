<?php 
require("../Model/Database/database.php");
if(isset($_GET['msg'])){
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
        <label for="">House name</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="">House type</label>
        <input type="text" name="type">
        <br>
        <br>
        <label for="">Address</label>
        <input type="text" name="address">
        <br>
        <br>
        
        <input type="submit" name="save_home">
        <br>
        <br>
        
    </form>
</body>
</html>