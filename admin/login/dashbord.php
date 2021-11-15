<?php
        include_once("../../login/db_connect.php");

        if (isset($_POST['save'])) {
            $user = $_POST['user'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $conn->query("INSERT INTO admin (user, email, pass) VALUES ('$user', '$email', '$pass')") or die($conn->error);
             header("location:../user/dashbord.php");
         }

?>