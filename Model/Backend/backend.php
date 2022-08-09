<?php 
require('../../Model/Database/database.php');
require('../../Controller/Classes/House/house.php');
require('../../Controller/Classes/Window/window.php');
require('../../Controller/Functions/Functions.php');


$house = new House();

if($_POST['save_home']){
    $house->processHouseDetail($_POST['name'],$_POST['type'],$_POST['address']);

}


$window = new Window();

if($_POST['submit_window']){

    $window->processWindow($_POST['name'],$_POST['width'],$_POST['height']);
  
}