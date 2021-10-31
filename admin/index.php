<?php
ob_start();

include_once("../login/db_connect.php");
session_start();
if(isset($_SESSION['user_id'])!="") {
    header("Location:./user/dashbord.php");
}
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['uid'];
		$_SESSION['user_name'] = $row['user'];
		header("Location:./user/dashbord.php");
	} else {
		$error_message = "Email ou mot de passe incorrect!!!";
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
<link rel="stylesheet" href="../asset/login.css">

<link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="login-form">
  <form role="form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
            <h2 class="text-center">SE CONNECTEZ</h2>
            <div class="text-center social-btn">
                <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i>Se connecter avec <b>Google</b></a>
            </div>
            <div class="or-seperator"><i>ou</i></div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" name="email" placeholder="Votre e-mail" required class="form-control mb-2" />
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" placeholder="Votre mot de passe" required class="form-control mb-2" />
                </div>
            </div>
            <div class="form-group">
            <input type="submit" name="login" value="CONNECTEZ" class="btn btn-success btn-block login-btn form-control" />
            </div>
            <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
            <div class="clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox">Souviens-toi de moi</label>
                <a href="#" class="pull-right text-success">Mot de passe oublié?</a>
            </div>

        </form>
        <div class="hint-text small">Nouvel utilisateur? <a href="../login/register.php" class="text-success">Inscrivez-vous ici</a></div>
    </div>

</body>
</html>

