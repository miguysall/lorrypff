<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="./asset/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  navbar-dark bgnav header-white static-top fixed-top">
        <div class="container">
            <a class="navbar-brand logo " href="./index.html">
                <img src="./asset/img/logo.png" alt="Lorry" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="./apropos/contact.php">Nous Contacter</a>
                    </li>
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
                        <a class="nav-link active text-light" aria-current="page" href="./login/login.php">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./login/logout.php">Déconnexion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="baniere  mt-4 bg-secondary">

                <!-- <img src="./asset/img/section1.jpg" class="img-fluid" alt="Responsive image" width="100%"> -->
                <div id="carouselExampleIndicators" class="carousel slide baniere" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./asset/transport/transportation-4506971__480.webp" class="d-block w-100" alt="Pas  d'images">
    </div>
    <div class="carousel-item">
      <img src="./asset/transport/istockphoto-849485930-612x612.jpg" class="d-block w-100" alt="Pas  d'images">
    </div>
    <div class="carousel-item">
      <img src="./asset/transport/istockphoto-1060878340-612x612.jpg" class="d-block w-100" alt="Pas  d'images">
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
                <u class="text-danger"> <h4 class="text-center mt-4">Digitalisation du transport routier de marchandises et de logistique au Senegal</h4></u>
                <p class="mt-4 pt-4"><b>Avantages</b><br>de <b style="color: crimson;"> LorryBusiness</b> pour les <br>entreprises</p>
            </section>
        </div>
        <!-- FLEXBOX 1 -->

        <div class="row flexbox ">
            <div class="col">
                <img src="./asset/img/route.jpg" alt="">
                <p>Platforme unique, tous les <br> resultats <br> Controle dynamique complet et <br> mises a jour en temps reel <br>sur tous vos reservation. <br>Reductions des risques <br>operationnels et des responsabilites <br>en optant pour des economies
                    <br>d'echelle avec notre solution <br> logistique.</p>
            </div>
            <div class="col">
                <img src="./asset/img/voiture1.jpg" alt="">
                <p>Resultats coherants, quotidients, <br>Nos partenaires se composent <br> uniquement de chauffeurs <br> selectionner, <br>fiables et experimentes pour garantir <br>vos marchandise en transport <br>en toutes securites jusqu'a votre destination
                    finale. <br>Avec le suivi des expeditions 24/24 et 7/7</p>
            </div>
            <div class="col">
                <img src="./asset/img/laptop.jpg" alt="">
                <p>Axe sur les donnees et la technologie <br>la numerisation des operations <br>permet une mmeilleur strategie <br>d'orientation commerciale <br> et une economie substantielle des <br>couts logistiques. <br>Beneficiez d'un acces transparent
                    <br> et oubliez les appels telephoniques <br> inattendut, <br>les e-mails manuels et la paperasse.</p>
            </div>
        </div>
        <div id="hr"> </div>

        <!-- FLEXBOX 2 -->

        <div class="section2_text" id="caracteristique">
            <h2>Caracteristique</h2>
            <h4>Ce que nous aportons a votre entreprise</h4>
        </div>
        <div class="row">
            <div class="col">
                <img src="./asset/img/section2_4.jpg" alt="" width="300px">
            </div>
            <div class="col">
                <div class="flexbox2">
                    <div class="blog_section2_1">
                        <div>
                            <img src="./asset/img/section2_1.jpg" alt="" class="section2_img">
                        </div>
                        <div>
                            <p> Systeme de gestion numerique de bout <br> en bout <br>Automatisez vos depenses avec un <br> Paiement <br>par credit sans tracas. Ne soyer plus <br> jamais victime de marchandage <br> de couts et de devis ad hoc.</p>
                        </div>
                    </div>
                    <!-- FLEX BOX2 2-->
                    <div class="blog_section2_1">
                        <div>
                            <img src="./asset/img/section2_2.jpg" alt="" class="section2_img">
                        </div>
                        <div>
                            <p>Paiements simplifies <br>Simplifiez votre experience avec nos <br> nouvelles <br> de confort et de tranquillite d'esprit <br> reste notre priorite absolue !</p>
                        </div>
                    </div>
                    <!-- FLEX BOX2 2-->
                    <div class="blog_section2_1">
                        <div>
                            <img src="./asset/img/section2_3.jpg" alt="" class="section2_img">
                        </div>
                        <div>
                            <p>Qualite des corespondances dans les <br> qualites <br> de lots <br>Ne laissez jamais la capacite etre un <br>facteur limitant <br>pour votre prochain grosse commande.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BUTTON VISITE -->
            <div class="button  float-end">
              <a href="./apropos/guide.php">  <button class="button_rouge btn btn-danger float-end mt-4 mb-4">Visite guidee du produit</button></a>
            </div>
            <!-- BUTTON VISITE -->
        </div>
        <!-- section 3 -->



        <!--  BLOG SECTION 3 -->
    <div style=" background: crimson;">
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
                        <h3 class="mb-md-5 mb-3 mt-4" style="color: #5B44C2;font-weight: 700;">Payer par crédits</h3>
                        <p>Temps efficace et économique. Mettez à niveau à tout moment en fonction de votre utilisation.</p>
                    </div>
                </div>
                <div class="row  flexrow">
                    <div class="col-md-6 card-tal  mt-4 ">
                        <div class="container-fluid card-tal-con">
                            <div class="row">
                                <div class="col-6">
                                    <hr style="background-color: white;border-top: 2px solid rgb(255 255 255);">
                                </div>
                                <div class="col-6">
                                    <h2>Kit de départ</h2>
                                    <h5>Argent</h5>
                                </div>
                                <div class="col-md-6">
                                    <img class="p-" style="width: 100%;" src="./asset/img/credit.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>Paquet d'argent</h4>
                                    <div class="pt-2 pt-md-1">

                                        <h5><b>150.00 </b>crédits</h5>
                                        <p>crédits 150 RM</p>
                                    </div>
                                </div>
                                <div class="col-2 col-md-6"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 card-tal  mt-4">
                        <div class="container-fluid card-tal-con">
                            <div class="row">
                                <div class="col-6">
                                    <hr class="bg-white">
                                </div>
                                <div class="col-6">
                                    <h2>Essentiels <br> <b class="text-center">ou</b></h2>
                                </div>
                                <div class="col-md-6">
                                    <img class="p-" style="width: 100%;" src="./asset/img/credit.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h3>Paquet d'or</h3>
                                    <div class="">
                                        <h5><b>500.00 </b>crédits</h5>
                                        <p>crédits 500 RM</p>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="text-warning">Crédit gratuit de 50 RM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 card-tal mt-4  " id="platine">
                        <div class="container-fluid card-tal-con">
                            <div class="row">
                                <div class="col-6">
                                    <hr class="bg-white">
                                </div>
                                <div class="col-6">
                                    <h2>Développez votre entreprise </h2>
                                </div>
                                <div class="col-md-6">
                                    <img class="p-" style="width: 100%; " src="./asset/img/credit.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h3>Platine</h3>
                                    <h4>Pack Platine</h4>
                                    <div class="">
                                        <h5><b>1000.00 </b>crédits</h5>
                                        <p>crédits 1000 RM</p>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="text-warning">Crédit gratuit de 150 RM</p>
                                </div>
                            </div>
                        </div>
                    </div> <div class="col-md-6 card-tal mt-4  " id="platine">
                        <div class="container-fluid card-tal-con">
                            <div class="row">
                                <div class="col-6">
                                    <hr class="bg-white">
                                </div>
                                <div class="col-6">
                                    <h2>LorryBussiness Votre Avenir </h2>
                                </div>
                                <div class="col-md-6">
                                    <img class="p-" style="width: 100%; " src="./asset/img/credit.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h3>Platine</h3>
                                    <h4>Pack Platine</h4>
                                    <div class="">
                                        <h5><b>1000.00 </b>crédits</h5>
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
                </div>
            </div>
        </section>
        <!-- APPROUVER CAROSEL -->
        <div class="blog_section_4">
            <h4 class="text-center">Approuve par</h4>
        </div>

        <!-- COMMANCEMENT DU CAROSEL -->
        <div id="carouselpartenairIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselpartenairIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselpartenairIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselpartenairIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./asset/img/car.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./asset/img/ecat.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./asset/img/coca.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
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
        <div class="blog_section_5">
            <div class="row">
                <div class="col">
                    <img src="./asset/img/lion.jpg" alt=""><br>
                    <img src="./asset/img/etoile.jpg" alt=""><br>

                    <p><q> LorryBusiness est plus <br> facile a gerer; tout peut etre fait <br>en ligne et les taches sont <br>automatisees </q></p><br>
                    <p><b> knney <br>Directeur general <br>Mon Mozek</b></p>
                </div>
                <div class="col">
                    <img src="./asset/img/lion.jpg" alt=""><br>
                    <img src="./asset/img/etoile.jpg" alt=""><br>
                    <p><q>L'ensemble de l'experience est tres fluide. Le plus important est que nous ne rencontrons pas de probleme d'annulation de derniere minute de la part LorryBusiness.</q></p>
                    <p><b> Michael<br>Co-associe et gestionnaire <br> tout Tes.</b></p>
                </div>
                <div class="col">
                    <img src="./asset/img/lion.jpg" alt=""><br>
                    <img src="./asset/img/etoile.jpg" alt=""><br>
                    <p><q>Les prix initiaux de LorryBusiness <br>garantissent que les depenses <br>de mon projet respectent <br>toujours les budget.</q></p>
                    <p><b> Navin <br>Associe & Chef du Departement <br> Energie <br> initiative Biji Biji</b></p>
                </div>
            </div>
        </div>

        <footer>
            <div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
                <div class="container">
                    <div class="row">
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
            </div>
        </footer>

    </div>

</body>

</html>
