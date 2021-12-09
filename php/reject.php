<?php
    require("connection.php");
    $name = $_REQUEST['name'];
    $del = mysqli_query($db, "DELETE FROM `request` WHERE `name` = '$name' ");
    if($del){
        echo "Successfully Rejected";
    }
    else{
        echo "Error";
    }
?>