<?php 
    /* START SESSION */
    if(!isset($_SESSION)) {
        session_start();
    }

    require_once './includes/autoloader.inc.php';

    $check = new Users();

    // if(isset($_POST['subscribe'])) {
    //     $check->subsToNewsletter();
    // }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bienvenue sur le site officiel de l'Association HOP FOR ALL. Exprimez votre générosité et solidarité aux causes de HOP FOR ALL.">
    <meta name="keywords" content="Enfants de la rue, Enfants délaissés, enfants abandonnés, enfants victimes du VIH/SIDA, Femmes ensituation de précarité, femmes maltraitées, femmes en situation d'exclusion, Detenus, personnes incarcérées, prisoniers, kit de survie, accompagnement social, education et santé,  projets et gestion de l'association">
    <meta name="author" content="Guene Joseph">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/cookiebanner.style.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/aos.css">
    <title>ACCUEIL - HOP for All</title>
</head>
<body>
    <!-- BG IMAGE -->
    <img src="./img/wallpaper-2.jpg" alt="Backgroung image" class="bg-img">

    <!-- NAVBAR  -->

    <nav class="navbar navbar-expand-lg navbar-light" id="meine-navbar">
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
                        <a href="./index.php" class="nav-link mt-4 mt-md-0 active">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="./hopforall.php" class="nav-link">HOP FOR ALL</a>
                    </li>
                    <li class="nav-item">
                        <a href="./ressources.php" class="nav-link">Ressources</a>
                    </li>
                    <li class="nav-item">
                        <a href="./membre.php" class="nav-link">Espace membre</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contact.php" class="nav-link">Contactez-nous</a>
                    </li>
                </ul>
                
                <a href="dons.php" class="btn btn-md w-100 mt-4 mt-md-0 d-lg-none donate-btn" id="donate-btn">Faire un don</a>
            </div>
            
            <div class="d-none d-lg-block">
                <a href="dons.php" class="btn btn-md donate-btn" id="donate-btn">Faire un don</a>
            </div>
        </div>
    </nav>
    
    <!-- MAIN -->

    <main class="">

        <!-- SHOWCASE -->

        <section id="first-section">
            <div class="container" id="welcome">
                <div > <br><br><br>
                    <h1 id="welcome-text" data-aos="zoom-in" data-aos-duration="2000" class="">
                        Bienvenue sur notre site
                    </h1> 
                </div>
            </div>
        </section>

        <!-- SECOND BLOCK -->

        <section id="second-section">

            <section id="charitable" class="bg-light text-dark p-5 text-center text-lg-start">
                <div class="container-fluid">
                    <div class="row gap-5 align-items-center justify-content-between">
                        <div class="col-md">
                            <h3 class="montserrat-sm" data-aos="fade-up-right" data-aos-duration="2000" 
                                data-aos-anchor-placement="bottom-bottom"
                            >
                                Unis pour un Avenir Meilleur : L'engagement de HOP FOR ALL envers <span class="italic">l'Entraide</span>  et <span class="italic">l'Inclusion</span>
                            </h3>
                            <p class="lead mt-4 text-justify " data-aos="fade-right" data-aos-duration="2000"
                                data-aos-easing="ease-in-sine"
                            >
                                <span class="text-primary">HOP FOR ALL</span> est bien plus qu'une simple association, c'est une communauté de coeurs généreux et engagés, unissant leurs forces pour apporter un soutien essentiel à ceux qui en ont le plus besoin (Enfants de la rue et/ou Orphelins, Femmes en situation de précarité et ou d'exclusion et des Personnes incarcérées etc...). Depuis notre création, nous nous consacrons à l'entraide, à la solidarité et à l'inclusion, plaçant l'humain au coeur de nos actions.
                            </p>
                            <div class="d-md-flex mt-5 justify-content-evenly"
                                data-aos="zoom-in" data-aos-duration="1000"
                            >
                                <a href="membre.php" class="btn btn-md d-none text-light d-md-block membre-btn my-4 my-md-0" >
                                    Devenir membre
                                </a>
                                <a href="dons.php" class="btn btn-md d-none d-md-block donate-btn">Faire un don</a>

                                <!-- FOR SM -->
                                <a href="membre.php" class="btn btn-md d-block text-light d-md-none w-100 membre-btn my-4 my-md-0" >
                                    Devenir membre
                                </a>
                                <a href="dons.php" class="btn btn-md d-block d-md-none w-100 donate-btn">Faire un don</a>
                            </div>
                        </div>
                        <div class="col-md">
                            <img src="./img/hop-logo.jpg" alt="Logo Hop en HD" class="img-fluid w-100" data-aos="fade-left" data-aos-duration="2000"
                            data-aos-easing="ease-in-sine"
                            >
                        </div>
                    </div>
                </div>
            </section>

            <!-- ACTUALITES ET EVENEMENTS -->
            <section id="section-8" class="bg-light-yellow">
                <div class="container p-5">
                    <div class="row mb-3">
                        <div class="col-md">
                            <h3 id="block-title">Actualités - evenements</h3>
                            <div class="block-title-underline"></div>
                        </div>
                    </div>
                    <!-- SLIDER CAROUSEL -->
                    <div id="carouselSliderControls" class="carousel"
                        data-bs-ride="carousel"
                    >
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="./img/sac.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title montserrat-b text-uppercase">
                                            Sacs à dos
                                        </h5>
                                        <p class="card-text text-justify">
                                            Distribution des sacs à dos remplis de fournitures scolaires essentielles aux enfants des rues pour leur offrir un meilleur accès à l'éducation.
                                        </p>
                                        <a href="./ressources.php" class="btn btn-primary">Lire</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="./img/sida.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title montserrat-b text-uppercase">
                                            VIH / SIDA
                                        </h5>
                                        <p class="card-text text-justify">
                                            Organisation d’une journée de sensibilisation sur la prévention du VIH/SIDA et offrir un soutien aux personnes affectées.
                                        </p>
                                        <a href="./ressources.php" class="btn btn-primary">Lire</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="./img/hygiene.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title montserrat-b text-uppercase">
                                            Kits d'hygiene
                                        </h5>
                                        <p class="card-text text-justify">
                                            Distribution des kits d'hygiène contenant des articles tels que du savon, du shampoing et des brosses à dents aux personnes sans-abri.
                                        </p>
                                        <a href="ressources.php" class="btn btn-primary">Lire</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="./img/course.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title montserrat-b text-uppercase">
                                            Course solidaire
                                        </h5>
                                        <p class="card-text text-justify">
                                            Participez à notre course annuelle pour collecter des fonds en faveur des femmes en situation de précarité.
                                        </p>
                                        <a href="ressources.php" class="btn btn-primary">Lire</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="./img/ateliers.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title montserrat-b text-uppercase">
                                            Ateliers educatif
                                        </h5>
                                        <p class="card-text text-justify">
                                            Organisation des ateliers visant à renforcer l'estime de soi, les compétences en communication et l'indépendance financière des f...
                                        </p>
                                        <a href="ressources.php" class="btn btn-primary">Lire</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="./img/educ enfants.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title montserrat-b text-uppercase">
                                            Education des enfants
                                        </h5>
                                        <p class="card-text text-justify">
                                            Ce projet vise à garantir l'accès à l'éducation et aux soins de santé pour 100 enfants victime de VIH/SIDA, orphelins...
                                        </p>
                                        <a href="./ressources.php" class="btn btn-primary">Lire</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="./img/femmes entrepr.jpeg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title montserrat-b text-uppercase">
                                            Femmes et entreprise
                                        </h5>
                                        <p class="card-text text-justify">
                                            Ce projet vise à offrir un accompagnement complet aux femmes désireuses de démarrer ou de développer leur propre entr...
                                        </p>
                                        <a href="./ressources.php" class="btn btn-primary">Lire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="prev"
                        >
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="next"
                        >
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </section>

            <!-- MISSION -->
            <section id="hopforall-sect" class="p-5 my-5">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md">
                            <h3 id="block-title">Qui sommes-nous ?</h3>
                            <div class="block-title-underline"></div>
                        </div>
                    </div>
                    <div class="row text-center gap-4">
                        <div class="col-md" data-aos="zoom-out" data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"
                        >
                            <h3 class="text-center montserrat-b text-uppercase">Vision</h3>
                            <div class="card bg-dark text-light" id="vision-card">
                                <div class="card-body">
                                    <div class="h1 mb-3 text-center">
                                        <i class="bi bi-eye"></i>
                                    </div>
                                    <p class="card-text text-justify">
                                        Notre vision chez <b>HOP FOR ALL</b> est celle d'un monde où chaque individu, quelque soit son origine ou sa situation, a la possibilité de s'épanouir pleinement. Nous croyons en une société où la solidarité et l'inclusion
                                        
                                        <span id="vision-card-plus" class="d-none">
                                            sont des valeurs fondamentales, où personne n'est laissé pour compte. <br><br> 
                                            En unissant nos coeurs généreux et nos efforts, nous aspirons à créer un environnement où les enfants de la rue et/ou orphelins, les femmes en situation de précarité ou d'exclusion, ainsi que les personnes incarcérées, trouvent le soutien essentiel dont-ils ont besoin pour reconstruire leurs vies. <br><br>
                                            Nous sommes déterminés à oeuvrer chaque jour pour promouvoir l'entraide, la solidarité et l'inclusion, plaçant toujours l'humain au coeur de nos actions.
                                            <b class="italic">Ensemble, nous construisons un avenir meilleur pour tous.</b>
                                        </span>
                                    </p>

                                    <i class="h4 bi bi-chevron-double-down" id="vision-chev"
                                        onclick="visionFunc"
                                    ></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md" data-aos="zoom-out" data-aos-duration="1800"
                            data-aos-easing="ease-in-sine"
                        >
                            <h3 class="text-center montserrat-b text-uppercase">Mission</h3>
                            <div class="card bg-primary text-light" id="mission-card">
                                <div class="card-body">
                                    <div class="h1 mb-3 text-center">
                                        <i class="bi bi-journal-bookmark-fill"></i>
                                    </div>
                                    <p class="card-text text-justify">
                                        La mission de HOP FOR ALL ®, est de fournir un soutien essentiel aux populations marginalisées et vulnérables, notamment aux enfants des rues, aux femmes en situation de précarité et aux personnes 

                                        <span id="mission-card-plus" class="d-none">
                                            incarcérées. <br><br>
                                            Cette mission est réalisée à travers une approche holistique axée sur l'entraide, la solidarité et l'inclusion. <br><br>
                                            
                                            HOP FOR ALL ® s'engage à offrir un soutien concret pour l'autonomisation de ces populations en leur fournissant des opportunités éducatives, de réinsertion sociale, ainsi que des services de soutien psychosocial et de réhabilitation. <br><br>
                                            
                                            En sensibilisant la société aux défis rencontrés par ces groupes marginalisés et en plaidant pour des politiques plus inclusives, l'organisation cherche à créer un environnement où chaque individu a la possibilité de s'épanouir pleinement dans une société plus juste et plus inclusive. <br>
                                        </span>
                                    </p>
                                    
                                    <i class="h4 bi bi-chevron-double-down" id="mission-chev"
                                        onclick="missionFunc"
                                    ></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md" data-aos="zoom-out" data-aos-duration="2300"
                            data-aos-easing="ease-in-sine"
                        >
                            <h3 class="text-center montserrat-b text-uppercase">Valeurs</h3>
                            <div class="card bg-warning text-dark">
                                <div class="card-body">
                                    <div class="h1 mb-3 text-center">
                                        <i class="bi bi-heart-pulse"></i>
                                    </div>
                                    <p class="card-text text-justify">
                                        Au sein de <b>HOP FOR ALL</b>, nous sommes guidés par des valeurs fondamentales qui nous inspirent et nous motivent chaque jour : <br><br>
                                        <b class="italic">Solidarité : </b> Nous croyons en la forces

                                        <span id="valeur-card-plus" class="d-none">
                                            de la solidarité et en l'importance de nous soutenir mutuellement, quelle que soient nos différences. <br><br>
                                            <b class="italic">Inclusion : </b> Nous défendons un monde où chacun à sa place, sans discrimination ni exclusion. <br><br>
                                            <b class="italic">Empathie : </b> Nous nous efforçons de comprendre les besoins des autres et de répondre avec compassion et bienveillance. <br><br>
                                            <b class="italic">Engagement : </b> Nous sommes déterminés à agir concrètement pour créer un impact positif dans nos communautés et au-delà.
                                        </span>

                                    </p>
                                    
                                    <i class="h4 bi bi-chevron-double-down" id="valeur-chev"
                                        onclick="valeurFunc"
                                    ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- VISITS -->
            <section class="p-5 bg-light-blue" id="visits">
                <div class="container">
                    <div class="row text-center">
                        <h2 class="montserrat-sm text-uppercase">
                            Notre différence : Au-delà de l'ordinaire
                        </h2>
                    </div>
                    <div class="row my-5 g-4 text-center">
                        <div class="col-md">
                            <div class="card bg-light" data-aos="fade-up-right" data-aos-duration="1500"
                                data-aos-easing="ease-in-sine"
                            >
                                <!-- <img src="./img/sample.jpg" class="card-img-top" alt="Photo Test"> -->
                                <div class="card-body">
                                    <h6 class="card-title my-3 montserrat-b text-uppercase">Une Approche Unique</h6>
                                    <p class="card-text text-justify pb-5">
                                        Chez <b class="HOP FOR ALL"></b>, notre différence réside dans notre approche unique envers l'entraide et l'inclusion. Nous sommes pas simplement une organisation, nous sommes une communauté de coeurs généreux et engagés, unie par une vision commune de créer un monde où chaque individu, quel que soit son origine ou sa situation, à la possibilité de s'épanouir pleinement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card bg-light" data-aos="zoom-out" data-aos-duration="2500"
                                data-aos-easing="ease-in-sine"
                            >
                                <!-- <img src="./img/sample-2.jpg" class="card-img-top" alt="Photo Test"> -->
                                <div class="card-body">
                                    <h6 class="card-title my-3 montserrat-b text-uppercase">Un Engagement Inébranlable</h6>
                                    <p class="card-text text-justify">
                                        Ce qui nous distingue, c'est notre engagement inébranlable envers l'humain. Nous plaçons toujours les personnes que nous soutenons au centre de nos action, en reconnaissant et en respectant leur dignité et leur valeur intrinsèque. Nous ne cherchons pas à imposer des solutions toutes faites, mais plutôt à écouter attentivement, à comprendre et à répondre aux besoins uniques de chaque individu que nous servons.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card bg-light" data-aos="fade-up-left" data-aos-duration="2000"
                                data-aos-easing="ease-in-sine"
                            >
                                <!-- <img src="./img/sample.jpg" class="card-img-top" alt="Photo Test"> -->
                                <div class="card-body">
                                    <h6 class="card-title my-3 montserrat-b text-uppercase">Une Approche Holistique</h6>
                                    <p class="card-text text-justify pb-4">
                                        Notre approche holistique est également ce qui nous distingue. Nous comprenons que les défis auxquels sont confrontés les communautés que nous soutenons sont souvent interconnectés et complexes. C'est pourquoi nous adoptons une approche globale, en travaillant avec nos partenaires locaux pour aborder les causes profondes de l'injustice sociale, de la pauvreté et de l'exclusion.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- NEWSLETTER -->
            <section id="newsletter" class="bg-primary text-light p-5">
                <div class="container">
                    <div class="row d-md-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <h3 class="mb-3 mb-md-0">
                                Restez au courant de nos activités !
                            </h3>
                        </div>

                        <div class="col-md-6">
                            <form action="" method="post" id="newsForm">
                                <!--    DISPLAY RESULT  -->
                                <div id="result"></div>

                                <div class="input-group newsletter-input w-100">
                                    <input type="email" class="form-control" name="newsEmail"
                                        id="newsEmail" placeholder="Entrez votre email"
                                    >
                                    <button type="submit" name="subscribe" class="btn btn-dark btn-lg" id="subscribe">
                                        Souscrire
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            

            <!--  NOS CAUSES  -->
            <section id="section-4" class="p-5 my-5">
                <div class="container mb-5">
                    <div class="row mb-3">
                        <div class="col-md">
                            <h3 id="block-title">Nos domaines d'intervention</h3>
                            <div class="block-title-underline"></div>
                        </div>
                    </div>

                    
                    <!-- TEXT -->
                    <div class="row text-center">
                        <div class="col-md mb-5 mb-md-0" data-aos="zoom-out" data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"
                        >
                            <div class="row py-3 py-lg-3">
                                <h5 class="text-center montserrat-b text-uppercase">
                                    Kit de survie
                                </h5>
                            </div>
                            <div class="card bg-light text-dark">
                                <div class="card-body">
                                    <div class="h1 mb-3 text-center">
                                        <i class="bi bi-battery-charging"></i>
                                    </div>
                                    <p class="card-text text-justify">
                                        <b>Objectif : </b> Assurer la sécurité et la dignité des personnes dans l'urgence en leur fournissant les moyens de subvenir à leurs besoins fondamentaux.
                                        <br><br>

                                        Le Kit de Survie est conçu pour fournir des ressources essentielles aux personnes en situation de précarité ou de crise. Il contient des articles de première nécessité pour répondre aux besoins immédiats de survie (Nourriture non périssable et eau potable, vêtements chauds et couvertures, produits d'hygiène personnelle (savon, dentifrice, brosses à dents, serviettes hygiéniques, etc.), trousse de premiers soins avec médicaments de base accessoires de protection (masques, désinfectants)).
                                    </p>
                                    <a href="dons.php" class="btn btn-outline-dark btn-lg my-3 
                                        montserrat-sm"
                                    >
                                        Faire un don
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md mb-5 mb-md-0" data-aos="zoom-out" data-aos-duration="1800"
                            data-aos-easing="ease-in-sine"
                        >
                            <div class="row py-2 py-lg-3">
                                <h5 class="text-center montserrat-b text-uppercase">
                                    Accompagnement social
                                </h5>
                            </div>
                            <div class="card bg-primary text-light">
                                <div class="card-body">
                                    <div class="h1 mb-3 text-center">
                                        <i class="bi bi-balloon-heart-fill"></i>
                                    </div>
                                    <p class="card-text text-justify">
                                        <b>Objectif :</b> Améliorer la qualité de vie et l'autonomie des bénéficiaires en les aidant à trouver des solutions durables à leurs problèmes quotidiens.
                                        <br><br>

                                        L'Accompagnement Social offre un soutien personnalisé pour aider les individus et les familles à surmonter les difficultés sociales et économiques. 
                                        <br><br>
                                        
                                        Les services incluent : Conseils et orientation pour accéder aux aides publiques et privées, aide à la recherche de logement et à la prévention des expulsions, soutien psychologique et aide à la gestion du stress, médiation familiale et sociale pour résoudre les conflits, ateliers de développement personnel et professionnel.
                                    </p>
                                    <a href="dons.php" class="btn btn-outline-light btn-lg my-3 
                                        montserrat-sm"
                                    >
                                        Faire un don
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md" data-aos="zoom-out" data-aos-duration="2300"
                            data-aos-easing="ease-in-sine"
                        >
                            <div class="row py-3 py-lg-3">
                                <h5 class="text-center montserrat-b text-uppercase">
                                    Education & Santé
                                </h5>
                            </div>
                            <div class="card bg-danger text-light">
                                <div class="card-body">
                                    <div class="h1 mb-3 text-center">
                                        <i class="bi bi-brilliance"></i>
                                    </div>
                                    <p class="card-text text-justify">
                                        <b>Objectif :</b> Favoriser l'accès à l'éducation et à la formation pour tous, afin de promouvoir l'égalité des chances et l'insertion sociale et professionnelle.
                                        <br><br>

                                        Le domaine de l'Éducation vise à fournir des outils et des opportunités pour l'apprentissage et le développement des compétences.
                                        <br><br>

                                        <b>Objectif :</b> Assurer l'accès à des soins de santé de qualité pour tous, avec un accent particulier sur la prévention et l'éducation à la santé, afin d'améliorer la qualité de vie des individus et des communautés.
                                        <br>

                                        Le domaine de la Santé se concentre sur la promotion du bien-être physique et mental des personnes.
                                        
                                    </p>
                                    <a href="dons.php" class="btn btn-outline-light btn-lg my-3 
                                        montserrat-sm"
                                    >
                                        Faire un don
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <!--  PROJETS  -->
            <section id="section-6" class="my-5 bg-light-blue p-5">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md">
                            <h3 id="block-title">Les Personnes cibles</h3>
                            <div class="block-title-underline"></div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md">
                            <p class="montserrat-reg text-center">
                                
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 my-3 my-lg-0">
                            <a href="">
                                <div class="card">
                                    <img src="./img/orphelins.jpeg" alt="Enfants"class="card-img-top">

                                    <div class="card-body text-center">
                                        <h6 class="card-title my-3 montserrat-b text-uppercase">
                                            Les Enfants
                                        </h6>
                                        <p class="text-justify">
                                            (de la rue, Orphélins, délaissés, abandonnés, victimes du VIH etc…)
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 my-3 my-lg-0">
                            <a href="">
                                <div class="card">
                                    <img src="./img/precarite.jpeg" alt=""class="card-img-top">

                                    <div class="card-body text-center">
                                        <h6 class="card-title my-3 montserrat-b text-uppercase">
                                            Les femmes
                                        </h6>
                                        <p class="text-justify">
                                            Les femmes en situation de detrèsse et ou de précarité
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 my-3 my-lg-0">
                            <a href="">
                                <div class="card">
                                    <img src="./img/prison.jpeg" alt=""class="card-img-top">

                                    <div class="card-body text-center">
                                        <h6 class="card-title my-3 montserrat-b text-uppercase">
                                            Personnes incarcérées
                                        </h6>
                                        <p class="text-justify">
                                            Accompagnement dans la réinsertion des personnes incarcérées 
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-9 mt-5">
                <div class="container p-5">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h3 class="montserrat-b text-uppercase mb-5">
                                Appel aux dons
                            </h3>
                            <p class="montserrat-sm">Merci pour votre générosité</p>
                            <span class="montserrat-reg">
                                Grâce à vous nous pouvons agir chaque jour pour aider à l'amélioration de nombreuses vies humaines !
                            </span><br>
                            <a href="dons.php" class="btn btn-lg btn-outline-primary mt-5 montserrat-b">
                                Faire un don
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            


            <footer class="footer-block">
                <div class="container-fluid p-5">
                    <div class="row">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="https://www.facebook.com/hopforall?mibextid=ZbWKwL">
                                <i class="bi bi-facebook "></i>
                            </a>
                            <a href="https://x.com/hopforall">
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


        



        </section>


    </main>

    
    


    <script src="./js/jquery.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/cookiebanner.script.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/newsletterJS.js"></script>
    <script src="./js/aos.js"></script>
    <script>AOS.init();</script>
    <script>
        $(document).ready(function() {
            cookieBanner.init();
        });
    </script>
</body>
</html>