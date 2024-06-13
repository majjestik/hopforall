<?php 
    /* START SESSION */
    if(!isset($_SESSION)) {
        session_start();
    }

    require_once './classes/Donate.class.php';

    $check = new Donate();

    if(isset($_POST['donner'])) {
        $check->submitDonForm();
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Exprimez votre générosité et solidarité aux causes de HOP FOR ALL. Faire un don.">
    <meta name="keywords" content="Enfants de la rue, Enfants délaissés, enfants abandonnés, enfants victimes du VIH/SIDA, Femmes ensituation de précarité, femmes maltraitées, femmes en situation d'exclusion, Detenus, personnes incarcérées, prisoniers, kit de survie, accompagnement social, education et santé,  projets et gestion de l'association">
    <meta name="author" content="Guene Joseph">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/dons.css">
    <title> Faire un Don - HOP FOR ALL | hopforall.com</title>
</head>
<body>

    <!-- NAVBAR  -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="meine-navbar-2">
        <div class="container justify-content-between">
            <div id="logo-div">
                <img src="./img/hop-logo.jpg" alt="Hop for All hop-logo" id="hop-logo-img" class="d-none d-lg-block" />
                <a href="#" class="navbar-brand">
                    HOP for ALL
                </a>
            </div>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-grow-0" id="navmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="./index.php" class="nav-link mt-4 mt-md-0 ">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="hopforall.php" class="nav-link">HOP FOR ALL</a>
                    </li>
                    <li class="nav-item">
                        <a href="ressources.php" class="nav-link">Ressources</a>
                    </li>
                    <li class="nav-item">
                        <a href="membre.php" class="nav-link">Espace membre</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contact.php" class="nav-link">Contactez-nous</a>
                    </li>
                </ul>
                
                <a href="dons.php" class="btn btn-md w-100 mt-4 mt-lg-0 d-lg-none donate-btn" id="donate-btn">Faire un don</a>
            </div>
            
            <div class="d-none d-lg-block">
                <a href="dons.php" class="btn btn-md donate-btn" id="donate-btn">Faire un don</a>
            </div>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="montserrat-reg">

        <section id="page-title" class="bg-primary">
            <div class="container pt-4 pb-3">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="p-3 text-light text-center">
                        <h1 class="text-uppercase montserrat-sm mt-3">Avec Hop for ALL </h1>
                        <p class="italic" style="font-size: 20px;">
                            Ensemble bâtissons un monde plus solidaire et inclusif
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="montserrat-sm text-uppercase">Faire un don</h3>

                        <p class="montserrat-reg text-justify">
                            Grâce à la fidélité et à la générosité de nos donateurs, nos équipes peuvent agir chaque
                            jour pour venir en aide aux Enfants (de la rue, délaissés, abandonnés, victimes du VIH
                            etc…), aux Femmes en situation de précarité et/ou d'exclusion et des Personnes
                            incarcérées etc…). 
                            <br><br>
                            Par avance, merci de votre confiance et de votre aide.
                        </p>
                    </div>


                    <div class="col-md">
                        <div class=" d-none" >
                            <div class="progress_container">
                                <div class="progress" id="progress"></div>
                                <div class="circle active-circle">1</div>
                                <div class="circle">2</div>
                                <div class="circle">3</div>
                                <div class="circle">4</div>
                            </div>
                        </div>
                        
                        <form class="col-lg-10 offset-lg-1" id="donForm" method="POST" action="">

                            <!--    DISPLAY RESULT  -->
                            <div class="col-md-12 text-center justify-content-center d-flex">
                                        <?php  
                                            if(!empty($check->error)) {
                                                echo "
                                                    <div class='alert alert-danger alert-dismissable fade show' role='alert'>
                                                        $check->error 
                                                        <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
                                                            <span aria-hidden='true' class='ml-3'>&times;</span>
                                                        </button>
                                                    </div>
                                                ";
                                            }
                                            else {
                                                if(!empty($check->message)) {
                                                    echo "
                                                        <div class='alert alert-success alert-dismissable fade show' role='alert'>
                                                            $check->message 
                                                            <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
                                                                <span aria-hidden='true' class='ml-3'>&times;</span>
                                                            </button>
                                                        </div>
                                                    ";
                                                }
                                            }
                                        ?>
                                    </div>


                            <!-- STEP 1 -->
                            <section id="form1" class="step">
                                <div class="inner">
                                    <h5 class="montserrat-sm mb-5 text-center text-uppercase"> Vos coordonnées</h5>

                                    <div id="result" class="text-center text-success my-3"></div>

                                    <div class="row">
                                        <div class="col-lg-2 mb-4">
                                            <label for="civilite" class="form-label">Civilité</label>
                                            <select name="civilite" id="civilite" class="form-select">
                                                <option value="mr">Mr</option>
                                                <option value="mme">Mme</option>
                                                <option value="mlle">Mlle</option>
                                                <option value="dr">Dr</option>
                                                <option value="pr">Pr</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5 mb-4">
                                            <label for="nomDon" class="form-label">Nom</label>
                                            <input type="text" class="form-control text-capitalize" placeholder="Nom" id="nomDon" name="nomDon"
                                            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['nomDon']; ?>"
                                            >
                                            <span class="error" id="nomErr"></span>
                                        </div>
                                        <div class="col-lg-5 mb-4">
                                            <label for="prenomDon" class="form-label">Prénom</label>
                                            <input type="text" class="form-control text-capitalize" placeholder="Prénom" id="prenomDon" name="prenomDon"
                                            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['prenomDon']; ?>"
                                            >
                                            <span class="error" id="prenomErr"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <label for="telephone" class="form-label">Téléphone</label>
                                            <input type="number" placeholder="690000000" class="form-control text-capitalize" id="telephone" name="telephone"
                                            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['telephone']; ?>"
                                            >
                                            <span class="error" id="telErr"></span>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label for="Don" class="form-label">Email</label>
                                            <input type="email" placeholder="monemail@email.com" class="form-control" id="emailDon" name="emailDon"
                                            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['emailDon']; ?>"
                                            >
                                            <span class="error" id="emailErr"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <label for="ville" class="form-label">Ville</label>
                                            <input type="text" placeholder="Ville" class="form-control text-capitalize" id="ville" name="ville"
                                            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['ville']; ?>"
                                            >
                                            <span class="error" id="villeErr"></span>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label for="pays" class="form-label">Pays</label>
                                            <input type="text" placeholder="Pays" class="form-control text-capitalize" id="pays" name="pays"
                                            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['pays']; ?>"
                                            >
                                            <span class="error" id="paysErr"></span>
                                        </div>
                                    </div>
                                    
                                    <!-- <br>
                                    <div class="mb-3">
                                        <button class="btn btn-primary float-right " type="button" id="next1" >
                                            Suivant
                                        </button>
                                    </div> -->
                                </div>
                            </section>

                            <!-- STEP 2 -->
                            <section id="form2" class="step">
                                <div class="inner">
                                    <h5 class="montserrat-sm my-5 text-center text-uppercase"> Informations supplémentaires</h5>

                                    <div class="col-lg-12 mb-4">
                                        <label for="raison" class="form-label">
                                            Comment avez-vous entendu parlé de HOP FOR ALL et pourquoi faire un don ?
                                        </label>
                                        <textarea name="raison" id="raison" class="form-control req2" rows="5"
                                        value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['raison']; ?>"
                                        ></textarea>
                                        <span class="error" id="raisonErr"></span>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                        <label for="nature" class="form-label">Nature du don</label>
                                        <select name="nature" id="nature" class="form-select">
                                            <option value="argent">En espèces</option>
                                            <option value="nature">En nature</option>
                                            <option value="autres">Autres</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 mb-4" id="destination">
                                        <label for="destination" class="form-label">Destination de votre don</label><br>
                                        <span class="error" id="destinationErr"></span>
                                        <br>
                                        <div class="mb-3 mb-md-0">
                                            <span class="">
                                                <input type="checkbox" name="destination" value="enfants" class="form-check-input mb-3 mx-2">
                                            </span> 
                                            <span class="">
                                                Enfants (de la rue, délaissés, abandonnés, victimes du VIH etc…)
                                            </span>
                                        </div>
                                        <input type="checkbox" name="destination" value="femmes" class="form-check-input mb-3 mx-2"> Femmes en situation de précarité <br>
                                        <input type="checkbox" name="destination" value="detenu" class="form-check-input mb-3 mx-2"> Personnes incarcérées <br>
                                        <input type="checkbox" name="destination" value="kit" class="form-check-input mb-3 mx-2"> Kit de survie <br>
                                        <input type="checkbox" name="destination" value="accompagnement" class="form-check-input mb-3 mx-2"> Accompagnement social <br>
                                        <input type="checkbox" name="destination" value="educ" class="form-check-input mb-3 mx-2"> Education & Santé <br>
                                        <input type="checkbox" name="destination" value="projet" class="form-check-input mb-3 mx-2"> Projet et gestion de l'association <br>
                                        <input type="checkbox" name="destination" value="autres" class="form-check-input mb-3 mx-2"> Autres <br>
                                    </div>

                                    <!-- <div class="mb-5">
                                        <button class="btn btn-primary float-right" type="button" id="next2">Suivant</button>
                                        <button class="btn btn-danger float-right mx-4" type="button" id="prev1">Précédent</button>
                                    </div> -->
                                </div>
                            </section>

                            <!-- STEP 3 -->
                            <section id="form3" class="step">
                                <div class="inner">
                                    <h5 class="montserrat-sm mb-3 text-center text-uppercase"> Informations des comptes</h5>

                                    <div class="row text-center my-5">
                                        <p class="text-center italic mb-5">
                                            Pour les dons en espèces, veuillez utiliser les moyens d'envoi d'argent avec les informations ci-dessous !
                                        </p>
                                        <br>
                                        <div class="col-md-6">
                                            <span class="d-flex justify-content-evenly align-items-center mb-3">
                                                <span>
                                                    <img src="./images/western-union-2.svg" alt="Western union icon image">
                                                </span>
                                                <span>
                                                    <img src="./images/moneygram.svg" alt="MoneyGram Icon image">
                                                </span>
                                            </span>
                                            <h6 class="text-uppercase mb-4 text-danger">Western union / MoneyGram</h6>
                                        
                                            <p class="">
                                                Nom : <span class="text-uppercase">Dingao Romain</span>
                                            </p>
                                            <p class="">
                                                Tél : (+237) 693 - 964 - 714
                                            </p>
                                        </div>

                                        <div class="col-md-6 ">
                                            <span>
                                                <img src="./images/mtn momo.png" alt="MTN MOMO image" class="img-fluid mb-3" width="110">
                                            </span>
                                            <h6 class="text-uppercase mb-4 text-primary">MTN Mobile Money</h6>
                                        
                                            <p class="">
                                                Nom : <span class="text-uppercase">Dingao Romain</span>
                                            </p>
                                            <p class="">
                                                Tél : (+237) 672 - 315 - 904
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="text-center italic mb-5">
                                            Pour toutes autres formes de dons, veuillez nous <a href="contact.php"> contacter </a>  par email ou à notre boîte postale !
                                        </p>
                                    </div>
                                    <br>
                                    <!-- <div class="mb-5">
                                        <button class="btn btn-primary float-right" type="button" id="next3">Suivant</button>
                                        <button class="btn btn-danger float-right mx-4" type="button" id="prev2">Précédent</button>
                                    </div> -->
                                </div>
                            </section>

                            <!-- STEP 4 -->
                            <section id="form4" class="step">
                                <div class="inner">
                                    <h5 class="montserrat-sm mb-3 text-center text-uppercase"> Validation du don</h5>

                                    <br>
                                    <p class="text-center italic mb-5">
                                        Veuillez entrer l'ID de votre transaction ou le Numéro du bordereau de votre transaction à l'étape précédente !
                                    </p>
                                    <div class="col-md my-5">
                                        <label for="idTransaction" class="form-label">ID de la transaction</label>
                                        <input type="text" class="form-control" placeholder="ID de la transaction" id="idTransaction" name="idTransaction" 
                                        value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['idTransaction']; ?>"
                                        >
                                        <span class="error" id="transErr"></span>
                                    </div>
                                    <div class="col-md mb-4">
                                        <input type="checkbox" id="anonyme" name="anonyme" class="form-check-input mx-2">
                                        <label for="anonyme">Je souhaite rester anonyme</label>
                                    </div>
                                    <div class="col-md mb-4">
                                        <input type="checkbox" id="souscription" name="souscription" class="form-check-input mx-2">
                                        <label for="souscription">Je souhaite recevoir régulièrement des newsletter</label>
                                    </div>
                                    <br>
                                    <!-- <div class="mb-5">
                                        <button class="btn btn-success float-right" type="submit" id="donner" name="donner">
                                            Donner
                                        </button>
                                        <button class="btn btn-danger float-right mx-4" type="button" id="prev3">Précédent</button>
                                    </div> -->
                                </div>
                            </section>

                            <div class="mb-5" id="stepBtns">
                                <button class="btn btn-success float-right" type="submit" id="donner" name="donner">
                                    Donner
                                </button>
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>
        </section>



    </main>






    <footer class="footer-block">
        <div class="container-fluid p-5 d-none">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="">
                        <i class="bi bi-facebook "></i>
                    </a>
                    <a href="">
                        <i class="bi bi-twitter mx-4"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-instagram "></i>
                    </a>
                    <a href="">
                        <i class="bi bi-youtube mx-4"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright p-4">
            <p>All rights reserved. © HOP for ALL, 2024</p>
        </div>
    </footer>



    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/additional-methods.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/donForm.js"></script>
    
</body>
</html>