<?php
        include_once("../../login/db_connect.php");

        if (isset($_POST['save'])) {
            $titre = $_POST['titre'];
            $article = $_POST['article'];


            $conn->query("INSERT INTO a_propos (titre, article) VALUES ('$titre', '$article')") or die($conn->error);
             header("location:../contact/appropos.php");
         }

// la requette pour supprimer
         if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $conn->query("DELETE FROM a_propos WHERE id =$id") or die($conn->error());
           header("location:../contact/appropos.php");
        }

 ?>


