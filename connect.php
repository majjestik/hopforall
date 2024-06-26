<?php

    require_once('includes/autoloader.inc.php');

    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }

    $check = new Members();

    if(isset($_POST['connect'])) {
        $check->loginMember();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="description" content="Se connecter à votre compte. Devenir un membre, un volontaire ou un donateur chez HOP FOR ALL.">
    <meta name="keywords" content="Enfants de la rue, Enfants délaissés, enfants abandonnés, enfants victimes du VIH/SIDA, Femmes ensituation de précarité, femmes maltraitées, femmes en situation d'exclusion, Detenus, personnes incarcérées, prisoniers, kit de survie, accompagnement social, education et santé,  projets et gestion de l'association">
    <meta name="author" content="Guene Joseph">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/connect.css">
    <title>SE CONNECTER - HOP FOR ALL</title>
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

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="./connect.php" method="post" class="my-5 p-4 col-lg-8 offset-lg-2 montserrat-sm d-block" id="form1"
                    >

                    <!--    DISPLAY RESULT  -->
                    <div class="col-md-12 text-center justify-content-center d-flex">
                            <?php  
                                if(!empty($check->error)) {
                                    echo "
                                        <div class='alert alert-info alert-dismissable fade show text-danger' role='alert'> <i class='bi bi-exclamation-triangle-fill h5'></i> 
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

                        <h4 class=" mb-4 text-center text-uppercase montserrat-b"> Se connecter</h4>
                        <div class="col-md-12 mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['email']; ?>"
                            >
                        </div>
                        <div class="col-md-12">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Mot de passe ********" name="password"
                            >
                        </div>

                        <div class="my-4">
                            <a href="forgotpwd.php" class="">Mot de passe oublié ?</a>
                        </div>

                        <div class="col-md-12 mb-4 d-flex justify-content-center align-items-center">
                            <button type="submit" name="connect" class="btn btn-lg btn-primary" id="connect-btn">Se connecter</button>
                        </div>
                        <p>
                            Vous n'êtes pas encore membre,  
                            <a href="register.php" id="signup-btn">inscrivez-vous ici</a>
                        </p>
                    </form>

                   
                </div>
            </div>
        </div>





    </main>






    <footer class="footer-block">
        
        <div class="copyright p-4">
            <p>All rights reserved. © HOP for ALL, 2024</p>
        </div>
    </footer>



    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/connect.js"></script>
    
</body>
</html>