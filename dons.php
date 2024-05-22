<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/dons.css">
    <title> FAIRE UN DON - HOP FOR ALL</title>
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
                        <div class="" >
                            <div class="progress_container">
                                <div class="progress" id="progress"></div>
                                <div class="circle active-circle">1</div>
                                <div class="circle">2</div>
                                <div class="circle">3</div>
                                <div class="circle">4</div>
                            </div>
                        </div>
                        
                        <form class="col-lg-10 offset-lg-1 d-block" id="form1">
                            <h5 class="montserrat-sm mb-5 text-center text-uppercase"> Vos coordonnées</h5>
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
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom">
                                </div>
                                <div class="col-lg-5 mb-4">
                                    <label for="prenom" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" placeholder="Prénom" id="prenom" name="prenom">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <label for="telephone" class="form-label">Téléphone</label>
                                    <input type="number" placeholder="690000000" class="form-control" id="telephone" name="telephone">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" placeholder="monemail@email.com" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <label for="ville" class="form-label">Ville</label>
                                    <input type="text" placeholder="Ville" class="form-control" id="ville" name="ville">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label for="pays" class="form-label">Pays</label>
                                    <input type="text" placeholder="Pays" class="form-control" id="pays" name="pays">
                                </div>
                            </div>
                            
                            <br>
                            <div class="mb-3">
                                <button class="btn btn-primary float-right" type="button" id="next1">
                                    Suivant
                                </button>
                            </div>
                        </form>

                        <form id="form2" class="col-lg-10 offset-lg-1 d-none">
                            <h5 class="montserrat-sm mb-5 text-center text-uppercase"> Informations supplémentaires</h5>
                            <div class="col-lg-12 mb-4">
                                <label for="raison" class="form-label">
                                    Comment avez-vous entendu parlé de HOP FOR ALL et pourquoi faire un don ?
                                </label>
                                <textarea name="raison" id="raison" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <label for="nature-du-don" class="form-label">Nature du don</label>
                                <select name="nature-du-don" id="nature-du-don" class="form-select">
                                    <option value="argent">En espèces</option>
                                    <option value="nature">En nature</option>
                                    <option value="autres">Autres</option>
                                </select>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <label for="destination" class="form-label">Destination de votre don</label>
                                <br>
                                <div class="mb-3 mb-md-0">
                                    <span class="">
                                        <input type="checkbox" name="destination" id="destination" value="enfants" class="form-check-input mb-3 mx-2">
                                    </span> 
                                    <span class="">
                                        Enfants (de la rue, délaissés, abandonnés, victimes du VIH etc…)
                                    </span>
                                </div>
                                <input type="checkbox" name="destination" id="destination" value="femmes" class="form-check-input mb-3 mx-2"> Femmes en situation de précarité <br>
                                <input type="checkbox" name="destination" id="destination" value="detenu" class="form-check-input mb-3 mx-2"> Personnes incarcérées <br>
                                <input type="checkbox" name="destination" id="destination" value="kit" class="form-check-input mb-3 mx-2"> Kit de survie <br>
                                <input type="checkbox" name="destination" id="destination" value="accompagnement" class="form-check-input mb-3 mx-2"> Accompagnement social <br>
                                <input type="checkbox" name="destination" id="destination" value="educ" class="form-check-input mb-3 mx-2"> Education & Santé <br>
                                <input type="checkbox" name="destination" id="destination" value="projet" class="form-check-input mb-3 mx-2"> Projet et gestion de l'association <br>
                                <input type="checkbox" name="destination" id="destination" value="autres" class="form-check-input mb-3 mx-2"> Autres <br>
                            </div>

                            <div class="mb-5">
                                <button class="btn btn-primary float-right" type="button" id="next2">Suivant</button>
                                <button class="btn btn-danger float-right mx-4" type="button" id="prev1">Précédent</button>
                            </div>
                        </form>

                        <form id="form3" class="col-lg-10 offset-lg-1 d-none">
                            <h5 class="montserrat-sm mb-5 text-center text-uppercase"> Informations des comptes</h5>
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
                            <div class="mb-5">
                                <button class="btn btn-primary float-right" type="button" id="next3">Suivant</button>
                                <button class="btn btn-danger float-right mx-4" type="button" id="prev2">Précédent</button>
                            </div>
                        </form>

                        <form action="" id="form4" class="col-lg-10 offset-lg-1 d-none">
                            <h5 class="montserrat-sm mb-5 text-center text-uppercase"> Validation du don</h5>
                            <br>
                            <p class="text-center italic mb-5">
                                Veuillez entrer l'ID de votre transaction ou le Numéro du bordereau de votre transaction à l'étape précédente !
                            </p>
                            <div class="col-md my-5">
                                <label for="transacid" class="form-label">ID de la transaction</label>
                                <input type="text" class="form-control" placeholder="ID de la transaction" id="transacid">
                            </div>
                            <div class="col-md mb-4">
                                <input type="checkbox" id="anonyme" name="anonyme" class="form-check-input mx-2">
                                <label for="anonyme">Je souhaite rester anonyme</label>
                            </div>
                            <div class="col-md mb-4">
                                <input type="checkbox" id="news" name="news" class="form-check-input mx-2">
                                <label for="news">Je souhaite recevoir régulièrement des newsletter</label>
                            </div>
                            <br>
                            <div class="mb-5">
                                <button class="btn btn-success float-right" type="button" id="submit">Envoyer</button>
                                <button class="btn btn-danger float-right mx-4" type="button" id="prev3">Précédent</button>
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



    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/dons.js"></script>
    
</body>
</html>