<?php
    require("connection.php");
    session_start();
    $email = $_SESSION['email'];
    $query = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    if($result){
        $profile = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $prof_array = array(
            "name" => $profile['name'],
            "email" => $profile['email']
        );
        echo json_encode($prof_array);
    }
?>
