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
    <link rel="stylesheet" href="./asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="./asset/style.css">
</head>
<body  style="    padding: 0;
   margin: 0; ">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  navbar-dark bgnav header-white static-top fixed-top">
        <div class="container">
            <a class="navbar-brand logo " href="./index.php">
                <img src="./asset/img/logo.png" alt="Lorry" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
               
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Entreprise
          </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#caracteristique">Caractéristiques</a></li>
                            <li><a class="dropdown-item " href="#avantage"> Avantages</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#credits">Crédits</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="./apropos/apropos.php">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="./apropos/boutique.php">Boutique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="./apropos/contact.php">Nous Contacter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="./login/login.php">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./login/logout.php">Déconnexion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
  
    <!-- Page Content -->
    <div class="container-fluid" >
        <div class="  mt-4">

                <!-- <img src="./asset/img/section1.jpg" class="img-fluid" alt="Responsive image" width="100%"> -->
                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" id="carousel_top">
        <div class="carousel-item active">
        <img src="./asset/transport/slide1.jpg" class="d-block w-100" alt="Pas  d'images"  style=" height: 400px;">
        </div>
        <div class="carousel-item">
        <img src="./asset/transport/slide2.jpg" class="d-block w-100" alt="Pas  d'images" style=" height: 400px;">
        </div>
        <div class="carousel-item">
        <img src="./asset/transport/istockphoto-1060878340-612x612.jpg" class="d-block w-100" alt="Pas  d'images"  style=" height: 400px;">
        </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
        <!-- SECTION 2 -->
        <div class="section2" id="avantage">
            <section>
                <u class=""> <h4 class="text-center mt-4">Digitalisation du transport routier de marchandises <center> et de logistique au Senegal et partous dans le monde!</center></h4></u>
                <p class="mt-4 pt-4"><b>Avantages</b><br>de <b style="color: crimson;"> LorryBusiness</b> pour les <br>entreprises</p>
            </section>
        </div>
        <!-- FLEXBOX 1 -->
        <?php
             include_once("./login/db_connect.php");
              $result = $conn->query("SELECT * FROM   avantage") or  die($conn->error);
             // pre_r($result);
        ?>
        <div class="row flexbox ">
        <?php
                       while ($row = $result->fetch_assoc()) :
            ?>
            <div class="col">
                <img src="./asset/img/route.jpg" alt="" style="width: 80%; height: 40%;">

                <p class=" m-4"><?php  echo $row['article1']; ?></p>
            </div>
            <div class="col">
                <img src="./asset/img/voiture1.jpg" alt=""  style="width: 80%; height: 40%;">
                <p class=" m-4"><?php  echo $row['article2']; ?></p>
            </div>
            <div class="col">
                <img src="./asset/img/laptop.jpg" alt=""  style="width: 80%; height: 40%;">
                <p class=" m-4"><?php  echo $row['article3']; ?></p>
            </div>
            <?php  endwhile; ?>
        </div>
        
        <hr style="max: heite 5px; margin: 20px">
        <!-- FLEXBOX 2 -->
        <?php
             include_once("./login/db_connect.php");
              $result = $conn->query("SELECT * FROM   caracteristique") or  die($conn->error);
             // pre_r($result);
        ?>
        <div class="section2_text mb-5" id="caracteristique">
            <h2>Caracteristique</h2>
            <h4>Ce que nous aportons a votre entreprise</h4>
        </div>
        <div class="row">
            <div class="col">
                <img src="./asset/img/section2_4.jpg" alt="" width="100%" style="height: 100%;">
            </div>
            <div class="col">
                <div class="flexbox2">
                <?php
                       while ($cat = $result->fetch_assoc()) :
            ?>
                    <div class="blog_section2_1">
                        <div>
                            <img src="./asset/img/section2_1.jpg" alt="" class="section2_img">
                        </div>
                        <div>
                        <p class=" m-4"><?php  echo $cat['article1']; ?></p>
                        </div>
                    </div>
                    <!-- FLEX BOX2 2-->
                    <div class="blog_section2_1">
                        <div>
                            <img src="./asset/img/section2_2.jpg" alt="" class="section2_img">
                        </div>
                        <div>
                        <p class=" m-4"><?php  echo $cat['article2']; ?></p>
                        </div>
                    </div>
                    <!-- FLEX BOX2 2-->
                    <div class="blog_section2_1">
                        <div>
                            <img src="./asset/img/section2_3.jpg" alt="" class="section2_img">
                        </div>
                        <div>
                        <p class=" m-4"><?php  echo $cat['article3']; ?></p>
                        </div>
                    </div>
                    <?php  endwhile; ?>
                </div>
            </div>
            <!-- BUTTON VISITE -->
            <div class="button  float-end">
              <a href="./apropos/guide.php">  <button class="button_rouge btn btn-secondary float-end mt-4 mb-4">Visite guidee du produit</button></a>
            </div>
            <!-- BUTTON VISITE -->
        </div>
        <!-- section 3 -->



        <!--  BLOG SECTION 3 -->
    <div style=" background: rgba(85, 85, 85, 0.945);">
        <div class="blog_section_3">

            <div>
                <h2>Digitalisez votre logistique maintenant</h2>
                <p>Faites partie de la revolution !</p>
            </div>
            <div class="btncommencer"><a href="#credits"> <button class="btn btn-white"><b> Commencez maintenant</b></button></a></div>
        </div>
        </div>
        <!--  BLOG SECTION 3 -->
        <section id="credits">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <h3 class="mb-md-5 mb-3 mt-4" style="font-weight: 700;">Payer par crédits</h3>
                        <p  style="font-size: 18px;">Temps efficace et économique. Mettez à niveau à tout moment en fonction de votre utilisation.</p>
                    </div>
                </div>
                <div class="row  flexrow">
                    <div class="col-md-6 card-tal  mt-4 " style=" border-radius: 5px; box-shadow: #333;">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-6">
                                    <hr style="background-color: white;border-top: 2px solid rgb(255 255 255);">
                                </div>
                                <div class="col-6">
                                    <h2 style="font-size: 18px;">Kit de départ</h2>
                                    <h5 style="font-size: 14px;">Argent</h5>
                                </div>
                                <div class="col-md-6">
                                    <img class="credit_img" style="width: 100%;" src="./asset/img/credit.jpg" alt="" >
                                </div>
                                <div class="col-md-6">
                                    <h4 style="font-size: 14px;">Paquet d'argent</h4>
                                    <div class="pt-2 pt-md-1" style="font-size: 14px;">

                                        <h5><b style="font-size: 14px;">150.00 </b >crédits</h5>
                                        <p>crédits 150 RM</p>
                                    </div>
                                </div>
                                <div class="col-2 col-md-6"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 card-tal  mt-4" style=" border-radius: 5px; box-shadow: #333; ">
                        <div class="container-fluid md-4 p-4 ml-4" style=" border-radius: 5px;">
                            <div class="row m-4">
                                <div class="col-6">
                                    <hr class="bg-white">
                                </div>
                                <div class="col-6">
                                    <h2 style="font-size: 18px;">Essentiels <br> <b class="text-center" style="font-size: 14px;">ou</b></h2>
                                </div>
                                <div class="col-md-6">
                                    <img class="credit_img"  style="width: 100%;" src="./asset/img/credit4.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h3 style="font-size: 14px;">Paquet d'or</h3>
                                    <div class="">
                                        <h5><b style="font-size: 14px;">500.00 </b>crédits</h5>
                                        <p style="font-size: 14px;">crédits 500 RM</p>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="text-warning">Crédit gratuit de 50 RM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="max: heite 5px;">
                    <div class="col-md-6 card-tal mt-4  " id="platine" style=" border-radius: 5px; box-shadow: #333; ">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-6">
                                    <hr class="bg-white">
                                </div>
                                <div class="col-6">
                                    <h2 style="font-size: 18px;">Développez votre entreprise </h2>
                                </div>
                                <div class="col-md-6">
                                    <img class="credit_img"  style="width: 100%; " src="./asset/img/credit3.jfif" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h3  style="font-size: 18px;">Platine</h3>
                                    <h4  style="font-size: 18px;">Pack Platine</h4>
                                    <div class="">
                                        <h5><b  style="font-size: 14px;">1000.00 </b>crédits</h5>
                                        <p>crédits 1000 RM</p>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="text-warning">Crédit gratuit de 150 RM</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6 card-tal mt-4  " id="platine" style=" border-radius: 5px; box-shadow: #333; ">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-6">
                                    <hr class="bg-white">
                                </div>
                                <div class="col-6">
                                    <h2  style="font-size: 18px;">LorryBussiness Votre Avenir </h2>
                                </div>
                                <div class="col-md-6">
                                    <img class="credit_img"  style="width: 100%; " src="./asset/img/credit2.jfif" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h3  style="font-size: 18px;">Platine</h3>
                                    <h4  style="font-size: 18px;">Pack Platine</h4>
                                    <div class="">
                                        <h5><b style="font-size: 14px;">1000.00 </b>crédits</h5>
                                        <p style="font-size: 14px;">crédits 1000 RM</p>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="text-warning">Crédit gratuit de 150 RM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- APPROUVER CAROSEL -->
        <div class="blog_section_4">
            <h4 class="text-center">Approuve par</h4>
        </div>

        <!-- COMMANCEMENT DU CAROSEL -->
       
        <div id="carouselpartenairIndicators" class="carousel slide  mt-5 mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselpartenairIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselpartenairIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselpartenairIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
           <center>
           <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img src="./asset/img/car.jpg" class="d-block w-1" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./asset/img/ecat.jpg" class="d-block w-1" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./asset/img/coca.jpg" class="d-block w-1" alt="...">
                </div>
            </div>
           </center>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselpartenairIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselpartenairIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        </div>
       
        <!-- APPROUVER CAROSEL -->

        <!-- BLOCK SECTION 5 -->
        <?php
             include_once("./login/db_connect.php");
              $result = $conn->query("SELECT * FROM   approuver") or  die($conn->error);
             // pre_r($result);
        ?>
        <div class="blog_section_5 mt-5">
        <?php
                       while ($appr = $result->fetch_assoc()) :
            ?>
            <div class="row">
                <div class="col">
                    <img src="./asset/img/lion.jpg" alt=""><br>
                    <img src="./asset/img/etoile.jpg" alt="" ><br>

                    <p><q><?php  echo $appr['article1']; ?></q></p>
                    <p><b><?php  echo $appr['nom1']; ?></b></p>
                </div>
                <div class="col">
                    <img src="./asset/img/lion.jpg" alt=""><br>
                    <img src="./asset/img/etoile.jpg" alt=""><br>
                    <p><q><?php  echo $appr['article2']; ?></q></p>
                    <p><b> <?php  echo $appr['nom2']; ?></b></p>
                </div>
                <div class="col">
                    <img src="./asset/img/lion.jpg" alt=""><br>
                    <img src="./asset/img/etoile.jpg" alt=""><br>
                    <p><q><?php  echo $appr['article3']; ?></q></p>
                    <p><b><?php  echo $appr['nom3']; ?></b></p>
                </div>
            </div>
            <?php  endwhile; ?>
        </div>

        <footer style=" height: 200px;">
            <div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
                <div class="container">
                    <div class="row" style=" height: 180px;">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 cizgi">
                            <div class="card bg-secondary border-0">
                                <div class="card-body text-light text-center " id="logo_footer">


                                    <a href="./index.php"> <img src="./asset/img/logo.png" alt="Lorry" /></a>
                                    <h5 class="card-title text-white display-4" style="font-size:30px">Le Camion d'Affaires</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
                            <div class="card bg-secondary border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-white display-4" style="font-size:30px">Notre compagnie</h5>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="./apropos/apropos.php">A propos de nous</a>

                                    <h5 class="card-title text-white display-4" style="font-size:30px">Entreprise</h5>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="#caracteristique">Caracteristique</a>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="#avantage">Avantages</a>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="#credits">Credits</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card bg-secondary border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-white display-4" style="font-size:30px">Soutien</h5>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="./apropos/faq.php">FAQ</a>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="./apropos/condition.php">Termes et conditions</a>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="./apropos/guide.php">Visite guidee du produit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center text-white">&copy LorryBusiness 2022</p>
            </div>
        </footer>

    </div>

</body>

</html>
