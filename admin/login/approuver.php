<?php
        include_once("../../login/db_connect.php");

        if (isset($_POST['save'])) {
            $article1 = $_POST['article1'];
            $nom1 = $_POST['nom1'];
            $article2 = $_POST['article2'];
            $nom2 = $_POST['nom2'];
            $article3 = $_POST['article3'];
            $nom3 = $_POST['nom3'];

            $conn->query("INSERT INTO approuver (article1, nom1, article2, nom2, article3, nom3) VALUES ('$article1', '$nom1', '$article2', '$nom2', '$article3', '$nom3')") or die($conn->error);
             header("location:../contact/approuver.php");
         }


         if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $conn->query("DELETE FROM approuver WHERE id =$id") or die($conn->error());
            header("location:../contact/approuver.php");
        }
 ?>


