<?php
    require("connection.php");
    $sql = mysqli_query($db, "SELECT * FROM `request`");
    if($sql){
        if(mysqli_num_rows($sql) > 0){
            $food_row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
            $food_true = array(
                'food' => $food_row['name'],
                'gram' => $food_row['gram'],
                'kcal' => $food_row['kcal'],
                'fats' => $food_row['fats'],
                'prot' => $food_row['prot'],
            );
            echo json_encode($food_true);
        }
        else{
            $food_true = array(
                'food' => "none",
                'gram' => '',
                'kcal' => '',
                'fats' => '',
                'prot' => '',
            );
            echo json_encode($food_true);
        }
    }
?>