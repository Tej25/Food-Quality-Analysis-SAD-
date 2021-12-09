<?php
    session_start();
    if(!isset($_SESSION["email"])){
        header("Location: http://localhost/SAD_J_COMP/html/login.html");
        exit();
    }
?>