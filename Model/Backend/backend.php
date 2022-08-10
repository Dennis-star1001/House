<?php
require('../../Model/Database/database.php');
require('../../Controller/Classes/House/house.php');
require('../../Controller/Classes/Window/window.php');
require('../../Controller/Functions/Functions.php');


$house = new House();
$window = new Window();
$db = new Database();
// if($_POST['save_home']){
//     $house->processHouseDetail($_POST['name'],$_POST['type'],$_POST['address']);

// }



// if($_POST['submit_window']){

//     $window->processWindow($_POST['name'],$_POST['width'],$_POST['height']);

// }

if ($_POST['windows']) {
    Fun::dynamicDropdown("windows", "window", "name", "", "name", "name");
}
