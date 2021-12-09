<?php
    require("connection.php");
    $q = $_REQUEST["q"];
    $sql = mysqli_query($db,"SELECT * FROM `food` WHERE `name` = '$q'");
    if($sql){
        if(mysqli_num_rows($sql)>0){
            $food_row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
            $food_true = array(
                'gram' => $food_row['gram'],
                'kcal' => $food_row['kcal'],
                'fats' => $food_row['fats'],
                'prot' => $food_row['prot'],
            );
            echo json_encode($food_true);
        }
        else{
            $food_false = array(
                0 => "false"
            );
            echo json_encode($food_false);
        }
    }
?>