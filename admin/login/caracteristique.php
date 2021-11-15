<?php
        include_once("../../login/db_connect.php");

        if (isset($_POST['save'])) {
            $article1 = $_POST['article1'];
            $article2 = $_POST['article2'];
            $article3 = $_POST['article3'];

            $conn->query("INSERT INTO caracteristique (article1, article2, article3) VALUES ('$article1', '$article2', '$article3')") or die($conn->error);
             header("location:../contact/caracteristique.php");
         }


         if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $conn->query("DELETE FROM caracteristique WHERE id =$id") or die($conn->error());
            header("location:../contact/caracteristique.php");
        }
 ?>


