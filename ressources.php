<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A propos de HOP FOR ALL. Exprimez votre générosité et solidarité aux causes de HOP FOR ALL.">
    <meta name="keywords" content="Enfants de la rue, Enfants délaissés, enfants abandonnés, enfants victimes du VIH/SIDA, Femmes ensituation de précarité, femmes maltraitées, femmes en situation d'exclusion, Detenus, personnes incarcérées, prisoniers, kit de survie, accompagnement social, education et santé,  projets et gestion de l'association">
    <meta name="author" content="Dingao Romain">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/lightbox.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title> RESSOURCES - HOP FOR ALL</title>
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
                        <a href="ressources.php" class="nav-link active">Ressources</a>
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

        <!-- <section id="page-title" class="bg-light-blue">
            <div class="container text-center p-4" id="header-wrapper">
                <! -- <img src="./img/header.JPG" alt="Header image" id="header-img"> - ->
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-6 p-5">
                        <h1 class="text-uppercase montserrat-sm" style="border: 2px solid #00668b;">
                            RESSOURCES
                        </h1>
                    </div>
                </div>
            </div>
        </section> -->
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

        <section id="hopforall">
            <div class="container-fluid p-5">
                <div id="main-content">
                    <div id="menu-tab" class="">
                        <ul id="menu-wrap">
                            <li class="active-tab" id="event-item">
                                <a href="javascript:;" id="event-link">Evenement a venir</a>
                            </li>
                            <li id="doc-item">
                                <a href="javascript:;" id="doc-link">Documentation</a>
                            </li>
                            <li id="projet-item">
                                <a href="javascript:;" id="projet-link">Projets</a>
                            </li>
                            <li id="galerie-item">
                                <a href="javascript:;" id="galerie-link">Galerie</a>
                            </li>
                            <li id="faq-item">
                                <a href="javascript:;" id="faq-link">FAQ</a>
                            </li>
                            <li id="witness-item">
                                <a href="javascript:;" id="witness-link">Témoignages</a>
                            </li>
                        </ul>
                    </div>
                    <div id="text-tab" class="p-2 p-md-3 p-lg-5 text-justify montserrat-reg">

                        

                        <!-- BUTTON 1 -->
                        <section id="event-text" class="d-block montserrat-reg">
                            <h6 class="montserrat-sm text-uppercase">événements et programmes à venir</h6>

                            <p class="mt-3">
                                Restez informé des prochaines initiatives et actions de solidarité organisées par HOP FOR ALL. Notre communauté de cœurs généreux et engagés se mobilise régulièrement pour apporter son soutien aux enfants défavorisés, aux femmes en situation de précarité, ainsi qu'aux personnes incarcérées.
                            </p>

                            <div class="d-flex justify-content-evenly align-items-center mt-5" id="events-block">
                                <!-- EVENT CARDS -->
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Opération Sac à Dos
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Distribution des sacs à dos remplis de fournitures scolaires essentielles aux enfants des rues pour leur offrir un meilleur accès à l'éducation.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>15 mai 2024
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Course Solidaire
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Participez à notre course annuelle pour collecter des fonds en faveur des femmes en situation de précarité.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>20 juin 2024  
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Exposition d'Art Réhabilitation
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Découvrez une exposition d'art unique, réalisée par des personnes incarcérées, mettant en lumière leur créativité et leur potentiel de réhabilitation.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>10 juillet 2024
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Camp d'Été pour les Enfants
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Organisation d’un camp d'été offrant aux enfants défavorisés des activités ludiques, éducatives et sécurisantes pendant les vacances.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>1-15 août 2024 
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Journée de Sensibilisation au VIH/SIDA
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Organisation d’une journée de sensibilisation pour informer la communauté sur la prévention du VIH/SIDA et offrir un soutien aux personnes affectées.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>1 décembre 2024  
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Collecte de Fonds pour les Familles Déplacées
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Lancement d’une campagne de collecte de fonds continue pour soutenir les familles déplacées, en fournissant un logement, de la nourriture et des soins de santé.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>Toute l'année
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Programme de Réinsertion Professionnelle
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Lancement d’un programme de formation professionnelle et d'accompagnement pour aider les personnes sortant de prison à se réintégrer dans la société.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>Sur demande 
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Distribution de Kits d'Hygiène
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Distribution des kits d'hygiène contenant des articles essentiels tels que du savon, du shampoing et des brosses à dents aux personnes sans-abri.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>Mensuel  
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Ateliers de Développement Personnel pour les Femmes
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Organisation des ateliers visant à renforcer l'estime de soi, les compétences en communication et l'indépendance financière des femmes en situation de précarité.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>Trimestriel 
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Soirée de Gala de Collecte de Fonds
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Participez à notre soirée de gala annuelle pour collecter des fonds essentiels afin de poursuivre notre mission d'aide aux populations vulnérables.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>15 novembre 2024 
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>

                            <h6 class="montserrat-sm text-uppercase mt-5">Spéciale décembre</h6>

                            <div class="d-flex justify-content-evenly align-items-center mt-5" id="special-block">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Arbre de Noël pour les Enfants Défavorisés
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Organisation d’un arbre de Noël festif pour les enfants défavorisés, avec des cadeaux, des activités ludiques et des rafraîchissements pour apporter un peu de joie pendant les fêtes.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>15 décembre 2024
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Collecte de Fonds pour les Repas de Fêtes
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Lancement d’une campagne de collecte de fonds spéciale pour fournir des repas de fête aux familles en situation de précarité, afin qu'elles puissent célébrer Noël dans la dignité.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>
                                                    Toute la première quinzaine de décembre 2024
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Atelier de Fabrication de Cadeaux Écologiques
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Organisation d’un atelier où les participants peuvent apprendre à fabriquer des cadeaux écologiques et durables à offrir à leurs proches pendant les fêtes, tout en sensibilisant à l'importance de la préservation de l'environnement.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>10 décembre 2024
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-3 mt-lg-0">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="card-title my-3 montserrat-b text-uppercase">
                                                    Concert de Noël au Profit des Personnes Incarcérées
                                                </h6>
                                                <p class="text-justify">
                                                    <span class="montserrat-sm">Description : </span>
                                                    Organisation d’un concert de Noël dans une prison locale, offrant aux détenus une expérience musicale réconfortante et un moment de connexion avec l'extérieur.
                                                </p>
                                                <small class="italic">
                                                    <span class="montserrat-sm">Date : </span>20 décembre 2024
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-4">
                                Ces événements et programmes visent à apporter du réconfort, de la joie et du soutien aux différentes populations que vous soutenez, tout en célébrant l'esprit de solidarité et d'inclusion pendant la période des fêtes. 
                                <br><br>

                                Restez connecté avec HOP FOR ALL pour ne rien manquer de nos actions solidaires. Pour plus d'informations et pour vous inscrire à nos événements, n'hésitez pas à nous contacter.
                            </p>

                        </section>

                        <!-- BUTTON 2 -->
                        <section id="doc-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Documentation</h6>
                            <br>
                            
                            <p>
                                Ici vous pouvez télécharger les différentes fiches d'enrollement !
                            </p>

                            <ol class="text-uppercase" style="font-size: 13px;">
                                <li class="my-3">
                                    <span>Bulletin d'adhesion</span> 
                                    <a href="./docs/BULLETIN D'ADHESION.pdf" download="BULLETIN D'ADHESION" class="btn btn-primary btn-sm mx-3">
                                        <i class="bi bi-download h5"></i>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <span>Fiche d'enrollement des enfants</span> 
                                    <a href="./docs/FICHE D'ENROLLEMENT DES ENFANTS.pdf" download="FICHE D'ENROLLEMENT DES ENFANTS" class="btn btn-primary btn-sm mx-3">
                                        <i class="bi bi-download h5"></i>
                                    </a>
                                </li>
                                <li class="my-3">
                                    <span>Fiche d'enrollement des femmes</span> 
                                    <a href="./docs/FICHE D'ENROLLEMENT des femmes.pdf" download="FICHE D'ENROLLEMENT DES FEMMES" class="btn btn-primary btn-sm mx-3">
                                        <i class="bi bi-download h5"></i>
                                    </a>
                                </li>
                            </ol>
                        </section>

                        <!-- BUTTON 3 -->
                        <section id="projet-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Education & Santé</h6>
                            <br>

                            <!-- PROJECT 1 -->
                            <div class="text-justify">
                                <h6 class="montserrat-sm text-uppercase">
                                    Projet : Programme d'accès à l'éducation et aux soins de santé
                                </h6>
                                <span class="montserrat-sm text-uppercase" style="font-size: 14px;"> 
                                    Objectifs : 
                                </span>
                                <ul>
                                    <li>
                                        Offrir une éducation de qualité à 100 enfants défavorisés, en leur fournissant des fournitures scolaires, des uniformes et un soutien pédagogique.
                                    </li>
                                    <br>
                                    <li>
                                        Assurer un accès aux soins de santé de base, y compris des consultations médicales et des médicaments, aux communautés les plus vulnérables.
                                    </li>
                                </ul>
                                <span class="montserrat-sm text-uppercase" style="font-size: 14px;"> 
                                    Description : 
                                </span>

                                <p>
                                    Ce projet vise à garantir l'accès à l'éducation et aux soins de santé pour 100 enfants victime de VIH/SIDA, orphelins. Nous collaborons avec des écoles locales pour fournir des bourses d'études et des fournitures scolaires aux enfants issus de milieux défavorisés. De plus, nous organisons des cliniques de santé mobiles dans les zones reculées, offrant des consultations médicales gratuites et des médicaments essentiels aux personnes qui en ont besoin.
                                </p>

                                <span class="montserrat-sm text-uppercase" style="font-size: 14px;"> 
                                    Coûts estimés : 
                                </span>
                                <ul>
                                    <li>Fournitures scolaires : 5000 € par an</li>
                                    <li>Cliniques de santé mobiles : 8000 € par an</li>
                                    <li>Salaires du personnel médical : 6000 € par an</li>
                                </ul>
                            </div>

                            <h6 class="montserrat-sm text-uppercase mt-5">
                                ACCOMPAGNEMENT ENTREPRENEURIAL AUX FEMMES EN SITUATION DE VULNERABILITE
                            </h6>
                            <br>

                            <!-- PROJECT 2 -->
                            <div class="text-justify">
                                <h6 class="montserrat-sm text-uppercase">
                                    Projet : Programme d'autonomisation économique des femmes
                                </h6>
                                <span class="montserrat-sm text-uppercase" style="font-size: 14px;"> 
                                    Objectifs : 
                                </span>
                                <ul>
                                    <li>
                                        Renforcer les compétences entrepreneuriales de 100 femmes en situation de vulnérabilité pour qu'elles puissent créer et gérer leurs propres microentreprises.
                                    </li>
                                    <br>
                                    <li>
                                        Favoriser l'indépendance financière et l'autonomie des femmes, réduisant ainsi leur vulnérabilité économique.
                                    </li>
                                </ul>

                                <span class="montserrat-sm text-uppercase" style="font-size: 14px;"> 
                                    Description : 
                                </span>
                                <p>
                                    Ce projet vise à offrir un accompagnement complet aux femmes désireuses de démarrer ou de développer leur propre entreprise. Nous proposons des formations en gestion d'entreprise, des sessions de mentorat individuel, un accès à des microcrédits et des opportunités de réseautage professionnel. Notre objectif est d'encourager l'autonomie économique des femmes et de créer des emplois durables au sein de la communauté.
                                </p>

                                <span class="montserrat-sm text-uppercase" style="font-size: 14px;"> 
                                    Coûts estimés : 
                                </span>
                                <ul>
                                    <li>Formation et mentorat : 7000 € par an</li>
                                    <li>Microcrédits : 10 000 € par an</li>
                                    <li>Frais administratifs : 3000 € par an</li>
                                </ul>
                            </div>

                            <p class="italic">
                                Ces projets sont conçus pour répondre aux besoins spécifiques des différentes populations que vous soutenez, tout en visant des objectifs concrets en termes d'éducation, de santé, de bien-être social et d'autonomisation économique. Les coûts estimés sont basés sur les besoins et les ressources nécessaires pour mettre en œuvre ces programmes avec succès.
                            </p>
                            
                        </section>

                        <!-- BUTTON 4 -->
                        <section id="galerie-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Galerie</h6>
                            <br>

                            <div class="grid-gallery">
                                <div class="grid-item">
                                    <a href="./img/gallery-1.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-1.jpeg" alt="gallery-1 image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-2.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-2.jpeg" alt="gallery-2.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-3.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-3.jpeg" alt="gallery-3.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-4.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-4.jpeg" alt="gallery-4.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-5.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-5.jpeg" alt="gallery-5.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-6.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-6.jpeg" alt="gallery-6.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-7.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-7.jpeg" alt="gallery-7.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-8.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-8.jpeg" alt="gallery-8.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-9.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-9.jpeg" alt="gallery-9.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-10.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-10.jpeg" alt="gallery-10.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-11.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-11.jpeg" alt="gallery-11.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-12.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-12.jpeg" alt="gallery-12.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-13.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-13.jpeg" alt="gallery-13.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-14.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-14.jpeg" alt="gallery-14.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-15.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-15.jpeg" alt="gallery-15.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-16.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-16.jpeg" alt="gallery-16.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-17.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-17.jpeg" alt="gallery-17.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-18.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-18.jpeg" alt="gallery-18.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-19.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-19.jpeg" alt="gallery-19.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-20.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-20.jpeg" alt="gallery-20.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-21.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-21.jpeg" alt="gallery-21.jpeg image">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="./img/gallery-22.jpeg" data-lightbox="gridImage">
                                        <img src="./img/gallery-22.jpeg" alt="gallery-22.jpeg image">
                                    </a>
                                </div>
                            </div>

                            <h6 class="montserrat-sm text-uppercase mt-5 mb-4">Vidéos</h6>
                            <ol>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=hV5RXSNlWks">
                                        https://www.youtube.com/watch?v=hV5RXSNlWks
                                    </a> 
                                </li>
                                <br>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=HlQ-QDOdpo8">
                                        https://www.youtube.com/watch?v=HlQ-QDOdpo8
                                    </a> 
                                </li>
                                <br>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=x1Umf4vriFw">
                                        https://www.youtube.com/watch?v=x1Umf4vriFw
                                    </a> 
                                </li>
                                <br>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=uTD_SyBlpQQ">
                                        https://www.youtube.com/watch?v=uTD_SyBlpQQ
                                    </a> 
                                </li>
                                <br>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=ARJBRT7KTr0">
                                        https://www.youtube.com/watch?v=ARJBRT7KTr0
                                    </a> 
                                </li>
                                <br>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=ilSfbfOsdpw">
                                        https://www.youtube.com/watch?v=ilSfbfOsdpw
                                    </a> 
                                </li>
                            </ol>
                        </section>

                        <!-- BUTTON 5 -->
                        <section id="faq-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">FAQ</h6>
                            <ol class="mt-4">
                                <li>
                                    <span class="montserrat-sm">
                                        Qu'est-ce que l'association HOP FOR ALL et quels sont ses objectifs ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    HOP FOR ALL est une association à but non lucratif qui œuvre pour l'inclusion sociale des personnes en situation de vulnérabilité. Nos objectifs incluent la promotion de l'accessibilité, la sensibilisation à la diversité et la création d'un environnement inclusif pour tous.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je devenir membre de HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Pour devenir membre de Hop for All, veuillez remplir le formulaire d'adhésion disponible sur notre site web et nous le renvoyer par courrier électronique ou par courrier postal. Vous pouvez également nous contacter pour obtenir plus d'informations sur les modalités d'adhésion et les avantages offerts aux membres.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Quels types d'activités proposez-vous pour les personnes en situation de handicap ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    HOP FOR ALL propose une variété d'activités adaptées aux besoins et aux intérêts des personnes en situation de vulnérabilité, y compris des séances de sport adapté, des ateliers artistiques, des sorties culturelles et des événements sociaux. Consultez notre calendrier d'événements pour connaître les activités à venir.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je soutenir HOP FOR ALL en tant que bénévole ou donateur ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Nous accueillons volontiers les bénévoles et les donateurs qui souhaitent soutenir notre mission. Pour devenir bénévole, veuillez remplir le formulaire de bénévolat sur notre site web. Pour faire un don, vous pouvez utiliser notre plateforme de don en ligne ou nous contacter pour obtenir plus d'informations sur les options de don.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je organiser un événement en partenariat avec HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Si vous souhaitez organiser un événement en partenariat avec HOP FOR ALL, veuillez nous contacter pour discuter de votre projet. Nous sommes toujours ouverts à de nouvelles collaborations et nous serions ravis de travailler avec vous pour créer un événement inclusif et inspirant.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Quels sont les avantages d'être membre de HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Les membres de HOP FOR ALL bénéficient d'un accès prioritaire aux activités et aux événements organisés par l'association, ainsi que de tarifs réduits ou de gratuité pour certaines activités. De plus, ils ont la possibilité de participer aux décisions et aux actions de l'association lors des assemblées générales et des réunions des membres.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je proposer une idée ou un projet à HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Si vous avez une idée ou un projet que vous souhaitez proposer à Hop for All, veuillez nous contacter par courrier électronique ou par téléphone pour discuter de votre proposition. Nous sommes toujours ouverts à de nouvelles idées et nous apprécions l'engagement et la créativité de nos membres et de nos partenaires.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Où puis-je trouver des informations sur les événements à venir de HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Vous pouvez trouver des informations sur les événements à venir de HOP FOR ALL sur notre site web, dans notre newsletter mensuelle ou sur nos réseaux sociaux. Assurez-vous de vous inscrire à notre newsletter et de nous suivre sur les réseaux sociaux pour rester informé des dernières actualités et des événements à ne pas manquer.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je accéder aux ressources et aux documents de HOP FOR ALL en ligne ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Les ressources et les documents de HOP FOR ALL sont disponibles en ligne sur notre site web, dans la rubrique "Nos Ressources". Vous pouvez également nous contacter pour obtenir des informations supplémentaires ou pour accéder à des documents spécifiques sur demande.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Quels sont les critères d'éligibilité pour participer aux activités de HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Les activités de HOP FOR ALL sont ouvertes à tous, quel que soit le niveau d'aptitude ou de capacité. Nous encourageons la participation de personnes de tous âges et de tous horizons, y compris les personnes en situation de handicap, les familles, les aidants et les professionnels.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je proposer une collaboration ou un partenariat avec HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Si vous souhaitez proposer une collaboration ou un partenariat avec Hop for All, veuillez nous contacter pour discuter de votre proposition. Nous sommes ouverts à de nouvelles collaborations avec des organisations, des entreprises, des institutions et des individus partageant nos valeurs et notre mission.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Puis-je faire un don en nature à HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Oui, nous acceptons les dons en nature tels que du matériel sportif, des fournitures artistiques, des équipements informatiques, etc. Veuillez nous contacter pour discuter de votre don en nature et des modalités de livraison ou de récupération.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je annuler ou modifier ma réservation pour un événement de HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Pour annuler ou modifier votre réservation pour un événement de Hop for All, veuillez nous contacter dès que possible pour nous informer de votre demande. Nous ferons de notre mieux pour répondre à votre demande et vous fournir les instructions nécessaires.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Puis-je proposer une suggestion ou un commentaire à HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Oui, nous encourageons les suggestions et les commentaires de nos membres et de nos partenaires pour améliorer nos services et nos activités. Veuillez nous contacter pour partager vos idées et vos retours d'expérience, nous apprécions votre contribution à notre mission.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je devenir bénévole pour HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Pour devenir bénévole pour Hop for All, veuillez remplir le formulaire de bénévolat disponible sur notre site web et nous le renvoyer par courrier électronique ou par courrier postal. Nous vous contacterons ensuite pour discuter de vos disponibilités et de vos intérêts en matière de bénévolat.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Est-ce que HOP FOR ALL organise des événements accessibles aux personnes en situation de handicap ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Oui, tous nos événements sont conçus pour être accessibles aux personnes en situation de handicap. Nous nous efforçons de fournir des installations et des services adaptés pour garantir la participation de tous nos membres et de nos participants.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Quels sont les types de handicap pris en charge par HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    HOP FOR ALL accueille les personnes ayant divers types de handicaps, y compris physiques, sensoriels, cognitifs et intellectuels. Nous nous efforçons de créer un environnement inclusif où chacun peut participer pleinement à nos activités, quelle que soit sa situation.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Quelles sont les mesures prises par HOP FOR ALL pour garantir la sécurité des participants pendant les activités ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    La sécurité et le bien-être de nos participants sont notre priorité absolue. Nous prenons toutes les mesures nécessaires pour assurer la sécurité lors de nos activités, notamment en fournissant une supervision adéquate, en mettant en place des protocoles de sécurité et en veillant à ce que nos installations soient conformes aux normes de sécurité.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je obtenir des informations sur les droits et les prestations disponibles pour les personnes en situation de handicap ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    HOP FOR ALL propose des séances d'information et des ateliers sur les droits et les prestations disponibles pour les personnes en situation de handicap. Consultez notre calendrier d'événements ou contactez-nous pour connaître les prochaines sessions prévues.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        HOP FOR ALL propose-t-il des formations pour les professionnels travaillant avec des personnes en situation de handicap ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Oui, HOP FOR ALL propose des formations et des ateliers de sensibilisation pour les professionnels travaillant avec des personnes en situation de handicap, y compris les éducateurs, les travailleurs sociaux, les professionnels de la santé et les intervenants communautaires. Contactez-nous pour en savoir plus sur nos programmes de formation.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je rester informé des dernières actualités et des événements à venir de HOP FOR ALL ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Pour rester informé des dernières actualités et des événements à venir de Hop for All, inscrivez-vous à notre newsletter en ligne et suivez-nous sur nos réseaux sociaux. Nous publions régulièrement des mises à jour sur nos activités, nos programmes et nos initiatives sur nos plateformes de médias sociaux.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        HOP FOR ALL offre-t-il des services de conseil ou d'orientation pour les personnes en situation de handicap et leurs familles ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Oui, HOP FOR ALL propose des services de conseil et d'orientation pour les personnes en situation de handicap et leurs familles, y compris des conseils sur les droits, les prestations, les services de soutien et les opportunités de loisirs accessibles. Contactez-nous pour prendre rendez-vous avec l'un de nos conseillers.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Puis-je proposer un projet ou une initiative à HOP FOR ALL pour soutenir la communauté des personnes en situation de handicap ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Oui, nous sommes toujours ouverts aux propositions de projets ou d'initiatives visant à soutenir la communauté des personnes en situation de handicap. Contactez-nous pour discuter de votre projet et de la manière dont nous pouvons collaborer pour le réaliser.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Est-ce que HOP FOR ALL organise des camps ou des séjours adaptés pour les personnes en situation de handicap ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Oui, HOP FOR ALL organise des camps et des séjours adaptés pour les personnes en situation de handicap, offrant une gamme d'activités récréatives, éducatives et sociales dans un environnement inclusif et sécurisé. Consultez notre calendrier d'événements pour connaître les prochains camps prévus.
                                </li>
                                <br>

                                <li>
                                    <span class="montserrat-sm">
                                        Comment puis-je obtenir de l'aide ou des conseils sur les questions liées au handicap ?
                                    </span>
                                    <br><br>
                                    <span class="montserrat-sm">Réponse : </span>
                                    Pour obtenir de l'aide ou des conseils sur les questions liées au handicap, veuillez nous contacter pour prendre rendez-vous avec l'un de nos conseillers en handicap. Nous sommes là pour vous soutenir et vous guider dans vos démarches.
                                </li>
                                <br>
                            </ol>
                        </section>

                        <!-- BUTTON 6 -->
                        <section id="witness-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Témoignages</h6>
                            <br>

                            <div class="d-flex justify-content-center align-items-center">
                                <div class="testimonial mySwiper">
                                    <div class="testi-content swiper-wrapper">
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/dingao.jpeg" alt="Photo de Dingao">
                                            <p>
                                                En tant que président de HOP FOR ALL, j'ai été témoin de la transformation incroyable que notre communauté a apportée à la vie de tant de personnes. Chaque jour, je suis inspiré par la dévotion et la générosité de nos membres, qui travaillent sans relâche pour faire une différence tangible dans la vie des plus vulnérables. C'est un honneur et un privilège de faire partie d'une organisation aussi dédiée à l'entraide, à la solidarité et à l'inclusion.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Dingao Romain</span>
                                                <br>
                                                <span class="text-small">Président de HOP FOR ALL</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/emma.jpeg" alt="Photo de Emmanuel">
                                            <p>
                                                Je suis fière de voir comment notre organisation a grandi et évolué au fil des ans. Notre engagement envers la justice sociale et l'égalité des chances est au cœur de tout ce que nous faisons, et je suis reconnaissante envers chaque membre de notre équipe pour leur passion et leur dévouement. Ensemble, nous continuons à travailler pour créer un monde où chaque individu est respecté et soutenu.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Emmanuel</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/dehake.jpeg" alt="Photo de Dehake">
                                            <p>
                                                Je suis constamment émerveillée par la générosité de nos donateurs et le dévouement de nos membres. Chaque contribution financière que nous recevons nous permet d'étendre notre portée et d'offrir un soutien vital à ceux qui en ont le plus besoin. C'est une responsabilité que nous prenons très au sérieux, et je suis fier de jouer un rôle dans la gestion responsable des fonds de notre organisation.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Dehake</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/kadi.jpeg" alt="">
                                            <p>
                                                Je suis honorée de contribuer à la documentation de notre travail et de nos réalisations. Chaque histoire de réussite que nous partageons est le résultat de nombreuses heures de travail acharné et de dévouement de la part de notre équipe. C'est une joie de voir comment nos efforts changent la vie de tant de personnes, et je suis impatiente de voir ce que l'avenir nous réserve.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Kadi</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                Je suis constamment inspirée par la compassion et l'altruisme du président et de notre communauté. Chaque jour, je vois des gens donner de leur temps et de leur énergie et faire des sacrifices pour aider ceux qui sont dans le besoin, et c'est un rappel puissant de la bonté humaine. Ensemble, nous formons une équipe formidable, et je suis reconnaissant envers chaque bénévole pour leur engagement et leur dévouement.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Déborah</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                Pour ma part, je suis passionné par notre mission d'apporter un changement positif dans la vie des plus vulnérables. Chaque programme que nous mettons en place est conçu avec soin et attention pour répondre aux besoins spécifiques de ceux que nous servons. C'est un privilège de voir comment nos initiatives transformeront les vies et créeront des opportunités là où il n'y en avait pas auparavant.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Joseph</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                Il fut un temps où je pensais que ma vie était condamnée à tourner en rond derrière les barreaux. Mais grâce à HOP FOR ALL®, j'ai découvert une nouvelle voie. Le programme de réhabilitation en prison m'a non seulement aidé à surmonter mes erreurs passées, mais il m'a aussi donné les outils pour devenir un mentor pour d'autres détenus. Aujourd'hui, je suis un exemple de rédemption, et je suis fier de contribuer à aider mes pairs à trouver la lumière au bout du tunnel.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Inconnu</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                Je m'appelle Déborah et ma première visite en prison avec HOP FOR ALL® a été bouleversante. En rencontrant les détenus, j'ai réalisé qu'ils étaient bien plus que des criminels, mais des êtres humains avec des failles et des rêves brisés. Cette expérience m'a appris la compassion, l'empathie et le pouvoir du pardon. Depuis, je suis déterminée à apporter un peu de lumière dans les ténèbres de la détention, convaincue que chaque geste de soutien peut faire une différence dans la vie de ces personnes en quête de rédemption.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Déborah</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/nestor.jpeg" alt="Photo de Nestor">
                                            <p>
                                                Je suis fier du passage de HOP FOR ALL® en prison. Voir l'impact positif que cela a eu sur les détenus m'a profondément touché. Leur engagement envers la réhabilitation m'a inspiré à devenir un membre actif de cette organisation. Je suis impatient de continuer à apporter de l'espoir et du soutien à ceux qui en ont le plus besoin.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Nestor</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                En tant que régisseur de prison, j'ai été profondément impressionné par le travail de HOP FOR ALL® lors de leur passage dans notre établissement. Leur approche empathique et leur engagement envers les détenus ont eu un impact positif sur notre communauté carcérale. Les programmes et les services offerts par HOP FOR ALL® ont non seulement contribué à améliorer le bien-être des détenus, mais ils ont également renforcé notre mission. Après avoir vu les résultats tangibles de leur intervention, j'ai pris la décision d'inviter HOP FOR ALL® à passer régulièrement dans notre prison, car je crois fermement en leur capacité à apporter un changement significatif dans la vie des détenus. Je suis fier de collaborer avec une organisation aussi dévouée et je suis convaincu que notre partenariat continuera à avoir un impact durable au sein de notre établissement pénitentiaire.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">
                                                    Le Régisseur de la prison
                                                </span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                J'ai été profondément touché par la mission et le travail de HOP FOR ALL®. Leur engagement envers l'entraide, la solidarité et l'inclusion résonne profondément avec mes propres valeurs chrétiennes. Je suis honoré de pouvoir soutenir financièrement une organisation qui œuvre sans relâche pour apporter de l'aide et de l'espoir aux plus vulnérables de notre société. Chaque fois que je donne, je sais que mes contributions vont directement là où elles sont le plus nécessaires, et cela me remplit d'une immense gratitude. Voir les résultats tangibles du travail de HOP FOR ALL® me rappelle que même les plus petits gestes de générosité peuvent avoir un impact significatif dans la vie des autres. Je suis reconnaissant de faire partie de cette communauté de cœurs généreux et engagés, et je continuerai à soutenir leur noble cause aussi longtemps que je le pourrai.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Missionnaire (anonyme)</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                Je suis détenu dans la prison x depuis plusieurs années. La vie derrière ces murs peut parfois être sombre et solitaire, mais il y a un jour que je n'oublierai jamais : le jour où HOP FOR ALL® est venu nous rendre visite. Leur présence dans notre établissement a apporté une lueur d'espoir et de réconfort à chacun d'entre nous. Leur écoute attentive et leur compassion sincère ont fait toute la différence pour moi et mes camarades détenus. Pour la première fois depuis longtemps, je me suis senti entendu, compris et soutenu. Les programmes et les services qu'ils ont offerts nous ont donné un sentiment de normalité et de dignité, des choses que nous avions presque oubliées dans ce lieu. Le simple fait de savoir qu'il y avait des gens à l'extérieur qui se souciaient de nous et qui travaillaient pour notre réhabilitation a allégé le poids sur nos épaules. Depuis leur passage, je me sens plus fort, plus motivé et plus confiant dans ma capacité à changer ma vie. Je suis reconnaissant envers HOP FOR ALL® pour leur engagement envers les personnes comme moi, et je suis déterminé à faire de mon mieux pour saisir les opportunités qu'ils ont créées pour nous. Leur passage dans cette prison restera à jamais gravé dans ma mémoire comme un moment de lumière et d'espoir au milieu de l'obscurité. Merci, HOP FOR ALL®, pour votre soutien inestimable et votre compassion inébranlable.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Un détenu (anonyme)</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                Désavouée par mon mari, Je suis profondément reconnaissante envers HOP FOR ALL® pour leur assistance et leur soutien. Leur aide a été un véritable phare dans les moments sombres de ma vie. Grâce à eux, j'ai pu retrouver espoir et courage pour surmonter les défis auxquels je faisais face. Leur générosité et leur dévouement ont changé ma vie de manière indélébile, et je serai éternellement reconnaissante pour tout ce qu'ils ont fait pour moi.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Une bénéficiaire (anonyme)</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                Je suis profondément impressionné par le travail de HOP FOR ALL®. Leur engagement envers l'entraide et l'inclusion est une manifestation concrète de l'amour chrétien en action. J'ai été honoré de pouvoir apporter mon soutien à leur noble cause et de les voir réaliser des changements positifs dans la vie de tant de personnes dans le besoin. Leur dévouement à servir les autres est une source d'inspiration pour nous tous, et je continuerai à les soutenir de tout mon cœur dans leur mission de compassion et de solidarité.
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">Un prêtre (anonyme)</span>
                                            </div>
                                        </div>
                                        <div class="slide swiper-slide">
                                            <img class="img-fluid my-3" src="./images/avatar.png" alt="">
                                            <p>
                                                Nous sommes un groupe de personnes qui avons été touchées par la générosité de HOP FOR ALL®. Grâce à leur aide, nous avons reçu des soins médicaux vitaux, des repas nutritifs et des vêtements. Leur soutien inestimable a été une bouée de sauvetage dans nos moments de détresse et de besoin. Nous sommes profondément reconnaissants envers HOP FOR ALL® pour leur compassion et leur engagement à nous offrir une aide pratique et réconfortante. Leurs actions ont eu un impact significatif sur nos vies et nous leur en serons éternellement reconnaissants."
                                            </p>

                                            <i class="bi bi-quote h1 text-primary"></i>

                                            <div class="details text-center">
                                                <span class="montserrat-sm">(anonyme)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next slide-btn"></div>
                                    <div class="swiper-button-prev slide-btn"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            
                        </section>


                    </div>
                </div>
            </div>
        </section>


        <section id="donate-block" class="text-light bg-primary">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <h3 class="montserrat-b text-uppercase">
                            Appel aux dons
                        </h3>
                        <p class="montserrat-sm">Merci pour votre générosité</p>
                        <span class="montserrat-reg">
                            Grâce à vous nous pouvons agir chaque jour pour aider à l'amélioration de nombreuses vies humaines !
                        </span><br>
                        <a href="dons.php" class="btn btn-lg btn-outline-light mt-3 montserrat-b">
                            Faire un don
                        </a>
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
        <div class="copyright p-3">
            <p>All rights reserved. © HOP for ALL, 2024</p>
        </div>
    </footer>



    <script src="./js/lightbox-plus-jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/ressources.js"></script>
    
</body>
</html>