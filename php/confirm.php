<?php
    require("connection.php");
    $name = $_REQUEST['name'];
    $sql = mysqli_query($db, "INSERT INTO `food` (`name`, `gram`, `kcal`, `fats`, `prot`) SELECT `name`, `gram`, `kcal`, `fats`, `prot` FROM `request` WHERE `name` = '$name'");
    if($sql){
        $del = mysqli_query($db, "DELETE FROM `request` WHERE `name` = '$name' ");
        if($del){
            echo "Success";
        }
        else{
            echo "Error";
        }
    }
?>