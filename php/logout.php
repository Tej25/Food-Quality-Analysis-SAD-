<?php
    session_start();
    if(session_destroy()) {
        header("Location: http://localhost/SAD_J_COMP/html/login.html");
    }
?>