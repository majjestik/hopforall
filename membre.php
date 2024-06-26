<?php

    /* START SESSION */
    if(!isset($_SESSION)) {
        session_start();
    }

    require_once('includes/autoloader.inc.php');

    // Check if the user is already logged in, if no then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: connect.php");
        exit;
    }

    $check = new Members();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hop for All Dashboard. Exprimez votre générosité et solidarité aux causes de HOP FOR ALL.">
    <meta name="keywords" content="Enfants de la rue, Enfants délaissés, enfants abandonnés, enfants victimes du VIH/SIDA, Femmes ensituation de précarité, femmes maltraitées, femmes en situation d'exclusion, Detenus, personnes incarcérées, prisoniers, kit de survie, accompagnement social, education et santé,  projets et gestion de l'association">
    <meta name="author" content="Guene Joseph">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/membre.css">
    <title>MEMBRE - HOP FOR ALL</title>
</head>
<body>
    
    <!-- MAIN -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-primary sticky-top">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-primary align-items-center sticky-top">
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item" id="profiles">
                            <?php
                                if($_SESSION['role'] === 'admin') {
                                    echo '

                                    <a href="profiles.php" class="d-block p-3 link-dark  text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                                        <i class="bi-person-circle fs-1 text-light"></i>
                                        <span class="montserrat-sm d-none d-md-block text-light">Membres</span>
                                    </a>
                                    ';
                                }
                                else {
                                    echo '
                                    <a href="javascript:;" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                                        <i class="bi-person-circle fs-1"></i>
                                    </a>
                                    ';
                                }
                            ?>
                            
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <i class="bi-house fs-1 text-light"></i>
                                <span class="montserrat-sm d-none d-md-block text-light">Accueil</span>
                            </a>
                        </li>
                        <li class="active-item" id="dashboard-item">
                            <a href="./membre.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Tableu de bord">
                                <i class="bi-palette fs-1 text-light"></i>
                                <span class="montserrat-sm d-none d-md-block text-light">Tableau de bord</span>
                            </a>
                        </li>
                        <li class="" id="doc-item">
                            <a href="./documentation.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Documents">
                                <i class="bi-folder fs-1 text-light"></i>
                                <span class="montserrat-sm d-none d-md-block text-light">Documentation</span>
                            </a>
                        </li>
                        <li>
                            <a href="./includes/logout.inc.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Déconnexion">
                                <i class="bi-person-walking fs-1 text-light"></i>
                                <span class="montserrat-sm d-none d-md-block text-light">Déconnexion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm px-5 pt-3 min-vh-100" id="content-tab">
                <!-- content -->

                <section class="d-block" id="dashboard-content">
                    <h3 class="text-center montserrat-sm text-uppercase">Bienvenue sur votre bureau virtuel</h3>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 offset-md-8">
                                <div id="contact-icons" class="d-flex justify-content-center p-3">
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
                                    <a href="">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-4 my-3 my-lg-0">
                                <div class="card bg-success text-light montserrat-sm text-center">
                                    <div class="card-body">
                                        <div class="">
                                            <i class="bi bi-people-fill h1"></i>
                                            <span class="mx-3">Nombre de membres</span>
                                        </div>
                                        <div class="text-center h1">
                                            1000
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-8 my-3 my-lg-0">
                                <div class="card bg-primary text-light montserrat-sm text-center">
                                    <div class="card-body">
                                        <div class="">
                                            <i class="bi bi-laptop h1"></i>
                                            <span class="mx-3">Programme des réunions</span>
                                        </div>
                                        <div class="text-center h1">
                                            8
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <br>

                        <div class="row mt-4 ">
                            <div class="col-md text-center d-flex justify-content-end">
                                <a href="./index.php">
                                    <img src="./images/actualite 2.jpeg" alt="actualité image" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <br>

                        <div class="row mt-4">
                            <div class="col-md col-lg-8 offset-lg-4">
                                <a href="./ressources.php" class="text-decoration-none mx-3">
                                    <img src="./images/gallery.png" alt="Gallery photo image" class="img-fluid" style="width: 50px; height: 50px;">
                                    <span class="montserrat-sm h4">Galerie photo</span>
                                </a> 
                                <a href="./contact.php" class="text-decoration-none">
                                    <img src="./images/yahoo.png" alt="Yahoo photo image" class="img-fluid mx-2" style="width: 50px; height: 50px;">
                                </a> 
                                <a href="./contact.php" class="text-decoration-none">
                                    <img src="./images/gmail.png" alt="Gmail photo image" class="img-fluid mx-2" style="width: 50px; height: 50px;">
                                </a> 
                                <a href="./contact.php" class="text-decoration-none">
                                    <img src="./images/whatsapp.png" alt="Whatsapp photo image" class="img-fluid mx-2" style="width: 50px; height: 50px;">
                                </a> 
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>








    



    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/membre.js"></script>
    
</body>
</html>