<!-- 

// include_once("../../login/db_connect.php");
       

// if (isset($_POST['save'])){

//    $uid=htmlentities($_GET['uid']);
//   $user=htmlentities($_POST['user']);
//    $pass = htmlentities($_POST['pass']);
//   $email=htmlentities($_POST['email']);
 


// $req = $bdd->prepare("UPDATE admin SET uid = ?, user = ?, pass =?, email = ? WHERE uid = ?");
//  $req->execute(array( $uid, $user , $pass, $email));
//  $update_App= $req->fetch(PDO::FETCH_ASSOC); -->
<?php 
include_once("../../login/db_connect.php");
		$uid = $_GET["edit"];
        $uid=$_POST['uid'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
       

	$query = "UPDATE admin SET uid=$uid, user='$user', pass='$pass',email='$email'  WHERE uid=$uid";
	
	if ($conn->query($query) === TRUE) {
	  echo "Liste des Administrateurs";
	  header('Location: ../user/dashbord.php');
	  exit();

	} else {
	  echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
 ?>