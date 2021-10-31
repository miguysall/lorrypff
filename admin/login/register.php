<?php
ob_start();
include_once("db_connect.php");
session_start();
if(isset($_SESSION['user_id'])) {
	header("Location:../index.php");
}
$error = false;
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$uname_error = "Le nom ne doit contenir que des lettres et des espaces";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Veuillez entrer un identifiant de courriel valide";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Le mot de passe doit comporter au moins 6 caractères";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Le mot de passe et la confirmation du mot de passe ne correspondent pas";
	}
	if (!$error) {
		if(mysqli_query($conn, "INSERT INTO users(user, email, pass) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			$success_message = "Enregistré avec succès! <a href='login.php'>Cliquez ici pour vous identifier</a>";
		} else {
			$error_message = "Erreur lors de l'enregistrement... Veuillez réessayer plus tard !";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/registre.css">
</head>
<body class="bg-light">
<div class="login-form">
<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
            <h2 class="text-center">S'INSCRIRE</h2>
            <div class="form-group">
                <div class="input-group">
                <input type="text" name="name" placeholder="Entrez le nom complet" required value="<?php if($error) echo $name; ?>" class="form-control  mb-2" />
						<span class="text-danger"><?php if (isset($uname_error)) echo $uname_error; ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="text" name="email" placeholder="E-mail" required value="<?php if($error) echo $email; ?>" class="form-control mb-2" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="password" name="password" placeholder="Mot de passe" required class="form-control  mb-2" />
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="password" name="cpassword" placeholder="Confirmez le mot de passe" required class="form-control  mb-2" />
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                </div>
            </div>
            <div class="form-group">
            <input type="submit" name="signup" value="S'identifier" class="btn btn-success btn-block login-btn  mb-2 form-control" />
            </div>
            <div class="clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox">Souviens-toi de moi</label>
                <a href="#" class="pull-right text-success">Mot de passe oublié?</a>
            </div>

        </form>
        <span class="text-success"><?php if (isset($success_message)) { echo $success_message; } ?></span>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
        <div class="hint-text small">Déjà enregistré? <a href="../login/login.php" class="text-success">Connectez-vous ici</a></div>
    </div>

</body>
</html>















