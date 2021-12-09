<?php
    require('connection.php');
    session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $check = mysqli_query($db, "SELECT * FROM `users` WHERE `email`='$email'");
        if(mysqli_num_rows($check) == 1){
            $encrypted_password = mysqli_fetch_assoc($check)['password'];
            $decrypted_check = password_verify($password,$encrypted_password);
            if($decrypted_check){
                $_SESSION['email'] = $email;
                header("Location: http://localhost/SAD_J_COMP/html/analyze.html");
            }
            else{
                echo
                    "
                    <script>
                        alert('incorrect password');
                        window.location.href='http://localhost/SAD_J_COMP/html/login.html';
                    </script>
                    ";
            }
        }
        else{
            echo
                "
                <script>
                    alert('incorrect password or username');
                    window.location.href='http://localhost/SAD_J_COMP/html/login.html';
                </script>
                ";
        }
    }
?>
