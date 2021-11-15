<?php

include_once("db_connect.php");
if (isset($_POST['save'])) {
       $nom = $_POST['nom'];
       $email = $_POST['email'];
       $telephone = $_POST['telephone'];
       $domaine = $_POST['domaine'];
       $message = $_POST['message'];

       $conn->query("INSERT INTO contact (nom, email, telephone, domaine, message) VALUES ('$nom', ' $email', '$telephone','$domaine',  '$message')") or die($conn->error);
       header("location:../apropos/contact.php");
    }

?>
