<?php
    require("connection.php");
    $food = $_REQUEST["food"];
    $gram = $_REQUEST["gram"];
    $kcal = $_REQUEST["kcal"];
    $fats = $_REQUEST["fats"];
    $prot = $_REQUEST["prot"];

    $sql = mysqli_query($db,"SELECT * FROM `request` WHERE `name` = '$food'");
    if($sql){
        if(mysqli_num_rows($sql)>0){
            echo "false";
        }
        else{
            $sql = mysqli_query($db,"INSERT INTO `request` (`name`, `gram`, `kcal`, `fats`, `prot`) VALUES ('$food', '$gram', '$kcal', '$fats', '$prot')");
            if($sql){
                echo "true";
            }
        }
    }
?>