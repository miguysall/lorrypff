<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lorrybussiness site logistique transport et de commerce...">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../asset/apropos.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bgnav header-white static-top fixed-top">
        <div class="container">
            <a class="navbar-brand logo" href="../index.php">

            <img src="../asset/img/logo.png" alt="Lorry" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Entreprise
          </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../index.php#caracteristique">Caract??ristiques</a></li>
                            <li><a class="dropdown-item" href="../index.php#avantage"> Avantages</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../index.php#credits">Cr??dits</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="apropos.php">?? propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="./contact.php">Nous Contacter</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="../login/login.php">Se connecter</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-light" href="../login/logout.php">D??connexion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <br><br><br><br>
    <div class="container-fluid">
        <!--  Accueil Apropos -->
        <div class=" float-end mb-4" syle=" border-radius: 10px;">
<button class="btn btn-secondary"><a href="../index.php" style="color: white; text-decoration: none;">Accueil</a></button>
        </div>
        <!--  Section Apropos -->
        <div class="mt-4  mb-4 ">
            <h1 class="text-start "><b>?? propos</b></h1>
        </div>
        <!-- SECTION 2 -->
        <?php
             include_once("../login/db_connect.php");
              $result = $conn->query("SELECT * FROM   a_propos") or  die($conn->error);
             // pre_r($result);
        ?>
        <div class="row mb-4">
            <div class="col-sm-6">
                <div class="card">
                <?php
                       while ($appro = $result->fetch_assoc()) :
            ?>
                    <div class="card-body">
                       <center>
                       <h5 class="card-title"><?php  echo $appro['titre']; ?></h5>
                        <p class="card-text"><?php  echo $appro['article']; ?></p>
                       </center>
                    </div>
                    <?php  endwhile; ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                       <center>
                       <p class="card-text"><img src="../asset/img/banier_apropos.jfif" class="img-fluid" alt="Responsive image" style="width: 476px;"></p>
                       </center>
                    </div>
                </div>
            </div>
        </div>
        <!--  CONTACT  -->
        <div class="section3 mt-4 float-center mb-4  ">
           <button class="btn btn-secondary"> <a href="./contact.php"  style="color: white; text-decoration: none;">Contactez-nous</a>
</button>
        </div>
        <!--  FOOTER OU PIED DE PAGE -->
        <footer>
            <div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 cizgi">
                            <div class="card bg-secondary border-0">
                                <div class="card-body text-light text-center " id="logo_footer">


                                    <a href="../index.php"> <img src="../asset/img/logo.png" alt="Lorry" /></a>
                                    <h5 class="card-title text-white display-4" style="font-size:30px">Le Camion d'Affaires</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
                            <div class="card bg-secondary border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-white display-4" style="font-size:30px">Notre compagnie</h5>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="./apropos.php">A propos de nous</a>

                                    <h5 class="card-title text-white display-4" style="font-size:30px">Entreprise</h5>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="../index.php#caracteristique">Caracteristique</a>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="../index.php#avantage">Avantages</a>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="../index.php#credits">Credits</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card bg-secondary border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-white display-4" style="font-size:30px">Soutien</h5>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="./faq.php">FAQ</a>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="./condition.php">Termes et conditions</a>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="./guide.php">Visite guidee du produit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</body>

</html>
