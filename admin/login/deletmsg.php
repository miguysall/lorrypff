<?php
    include_once("../../login/db_connect.php");

    //  TABLE CONTACT SUPPRESSION
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM contact WHERE id =$id") or die($conn->error());
   header("location:../user/message.php");
}


//  TABLE  ADMIN  SUPPRESSION
if (isset($_GET['delet'])) {
    $id = $_GET['delet'];
    $conn->query("DELETE FROM admin WHERE uid =$id") or die($conn->error());
   header("location:../user/dashbord.php");
}


//  TABLE USERS  SUPPRESSION
if (isset($_GET['dele'])) {
    $id = $_GET['dele'];
    $conn->query("DELETE FROM users WHERE uid =$id") or die($conn->error());
   header("location:../user/listuser.php");
}
