<?php
    require('connection.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check = mysqli_query($db, "SELECT * FROM `users` WHERE `email` LIKE '$email'");

        if($check){
            if(mysqli_num_rows($check) > 0){
                echo
                "
                <script>
                    alert('user is already registered please login');
                    window.location.href='http://localhost/SAD_J_COMP/html/login.html';
                </script>
                ";
            }
            else{
                $encrypt = password_hash($password,PASSWORD_DEFAULT);
                $query = mysqli_query($db, "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$encrypt')");
                if(!$query){
                    header("Location: http://localhost/SAD_J_COMP/html/registration.html");
                }
                else{
                    header("Location: http://localhost/SAD_J_COMP/html/login.html");
                }
            }
            
        }
    }
?>
