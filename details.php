<?php

    /* START SESSION */
    if(!isset($_SESSION)) {
        session_start();
    }

    require_once('includes/autoloader.inc.php');

    // Check if the user is already logged in, if no then redirect him to login page
    if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
        header("location: connect.php");
        exit;
    }

    $view = new Members();
    $view->detailsMembre();

    if(isset($_POST['activate'])) {
        $view->activateMember();
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center mt-3">
                        <li class="nav-item" id="profiles">
                            <?php
                                if($_SESSION['role'] === 'admin') {
                                    echo '

                                    <a href="profiles.php" class="d-block p-3 link-dark active-item text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
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
                        <li class="" id="dashboard-item">
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
                    <h3 class="text-center montserrat-sm text-uppercase">
                        Details du profil
                    </h3>

                    <div class="container mt-5">
                        <div class="row my-4">
                            <div class="col-md">
                                <a href="profiles.php">
                                    <i class="bi bi-arrow-left-square-fill h1"></i>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-lg-8 offset-lg-2">
                                <p class="montserrat-sm h5">
                                    <span class="text-uppercase">Nom : </span>
                                    <span class="montserrat-reg text-capitalize">
                                        <?php echo $view->myNom . " " . $view->myPrenom; ?>
                                    </span>
                                </p>

                                <p class="montserrat-sm h5 my-4">
                                    <span class="text-uppercase">Email : </span> 
                                    <span class="montserrat-reg">
                                        <?php echo $view->myEmail; ?>
                                    </span>
                                </p>

                                <p class="montserrat-sm h5">
                                    <span class="text-uppercase">Statut : </span> 
                                    <span class="montserrat-reg">
                                        <?php echo $view->myStatut; ?>
                                    </span>
                                </p>

                                <form action="" method="post">
                                    <button class="btn btn-success montserrat-sm my-4" type="submit" name="activate"
                                    >
                                        Activer
                                    </button>
                                </form>

                                <!--    DISPLAY RESULT  -->
                                <div class="col-md-12 text-center justify-content-center d-flex">
                                    <?php  
                                        if(!empty($view->error)) {
                                            echo "
                                                <div class='alert alert-danger alert-dismissable fade show' role='alert'>
                                                    $view->error 
                                                    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
                                                        <span aria-hidden='true' class='ml-3'>&times;</span>
                                                    </button>
                                                </div>
                                            ";
                                        }
                                        else {
                                            if(!empty($view->message)) {
                                                echo "
                                                    <div class='alert alert-success alert-dismissable fade show' role='alert'>
                                                        $view->message 
                                                        <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
                                                            <span aria-hidden='true' class='ml-3'>&times;</span>
                                                        </button>
                                                    </div>
                                                ";
                                            }
                                        }
                                    ?>
                                </div>
                                
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