<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/guide.css">
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/bootstrap/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
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
                            <li><a class="dropdown-item text-dark" href="../index.php#caracteristique">Caract??ristiques</a></li>
                            <li><a class="dropdown-item text-dark" href="../index.php#avantage"> Avantages</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-dark" href="../index.php#credits">Cr??dits</a></li>
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
    <br><br><br>
    <div class="container bg-light">
        <h1 class="text-center  mt-4">Solution logistique intelligente</h1>
        <p class="text-center mt-4 ">Tout sous une seule plateforme</p>

        <div class="accordion mb-4 descent " id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Faire une r??servation
              </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="flexbox">
                            <div class="card-title">
                                <h3>??tape 1</h3>
                                <div class="card-body">
                                    <p class="para">S??lectionnez votre prise en charge et votre retour pr??f??r??s destinations. Saisissez ensuite les d??tails de les entreprises et les articles ?? livrer.</p>
                                </div>
                            </div>

                            <div class="card-title">
                                <h3>??tape 2</h3>
                                <div class="caed-body">
                                    <p class="para">S??lectionnez le type de v??hicule, la date de prise en charge, la prise en charge du temps et de la main-d'??uvre suppl??mentaire en fonction de vos besoins de livraison.</p>
                                </div>
                            </div>

                            <div class="card-title">
                                <h3>??tape 3</h3>
                                <div class="card-body">
                                    <p class="para">V??rifiez votre r??servation et ?? CONFIRMER ??. Nous v??rifierons votre commande et ferons le dispositions n??cessaires.</p>
                                </div>
                            </div>

                            <div>
                                <iframe src="../asset/img/demo.mp4" frameborder="8"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Les d??tails de r??servation
              </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="flexbox">
                            <div class="card-title">
                                <h3>Des d??tails</h3>
                                <div class="card-body">
                                    <p class="para">Surveillez et v??rifiez toutes vos r??servations facilement via notre tableau de bord en ligne.</p>

                                    <p class="para">Tous les d??tails essentiels de vos r??servations sont facilement disponibles sur notre tableau de bord en ligne.</p>
                                </div>
                            </div>

                            <div class="card-title">
                                <h3>Suivie</h3>
                                <div class="card-body">
                                    <p class="para">Notre syst??me de suivi fournit des mises ?? jour de statut et</p>
                                    <p class="para">vous assure de ne jamais perdre de vue vos livraisons.</p>
                                </div>
                            </div>

                            <div>
                                <iframe src="../asset/img/demo2.mp4" frameborder="8"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Comptes
              </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="flexbox ">
                            <div class="card-title">
                                <h3>Transactions</h3>
                                <div class="card-body">
                                    <p class="para">Notre syst??me de signature ??lectronique et nos relev??s en ligne permettre une v??rification facile de toutes les livraisons termin??es.</p>
                                    <p class="para">Toutes les transactions sont enti??rement int??gr??es ?? notre plate-forme, assurant un acc??s instantan?? pour r??f??rence future.</p>
                                </div>
                            </div>

                            <h3>D??tails du compte</h3>

                            <div>
                                <iframe src="../asset/img/demo3.mp4" frameborder="8"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
