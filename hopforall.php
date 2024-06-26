<?php
    
    /* START SESSION */
    if(!isset($_SESSION)) {
        session_start();
    }

    require_once('includes/autoloader.inc.php');

?>


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
    <link rel="stylesheet" href="./css/styles.css">
    <title>HOP FOR ALL - HOP FOR ALL</title>
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
                        <a href="./hopforall.php" class="nav-link active">HOP FOR ALL</a>
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

        <section id="hopforall">
            <div class="container-fluid p-5">
                <div id="main-content">
                    <div id="menu-tab">
                        <ul id="menu-wrap">
                            <li class="active-tab" id="about-item">
                                <a href="javascript:;" id="about-link">Qui sommes-nous</a>
                            </li>
                            <li class="" id="causes-item">
                                <a href="javascript:;" id="causes-link">Nos causes</a>
                            </li>
                            <li class="" id="what-item">
                                <a href="javascript:;" id="what-link">Que faisons-nous</a>
                            </li>
                            <li class="" id="docs-item">
                                <a href="javascript:;" id="docs-link">Nous soutenir</a>
                            </li>
                            <li class="" id="partner-item">
                                <a href="javascript:;" id="partner-link">Nos partenaires</a>
                            </li>
                            <li class="" id="organigram-item">
                                <a href="javascript:;" id="organigram-link">Organigramme</a>
                            </li>
                            <li class="" id="fondateur-item">
                                <a href="javascript:;" id="fondateur-link">Mot du fondateur</a>
                            </li>
                        </ul>
                    </div>
                    <div id="text-tab" class="p-2 p-md-3 p-lg-5">
                        <!-- Button 1 -->
                        <section id="about-text" class="d-block">
                            <h6 class="montserrat-sm text-uppercase">À PROPOS DE HOP FOR ALL</h6>

                            <div class="montserrat-reg mt-4 text-justify">
                                <p>
                                    HOP FOR ALL est bien plus qu'une simple association, c'est une communauté de cœurs généreux et engagés, unissant leurs forces pour apporter un soutien essentiel aux Enfants (de la rue, délaissés, abandonnés, victimes du VIH etc…), aux Femmes en situation de précarité et/ou d'exclusion et des Personnes incarcérées etc…). Depuis sa création en 2016, HOP FOR ALL s’est consacrée à l'entraide, à la solidarité et à l'inclusion, plaçant l'humain au cœur de toutes ses actions.
                                    <br><br>

                                    À travers une approche holistique, nous nous engageons à fournir un soutien concret pour l'autonomisation des populations marginalisées et en situation de vulnérabilité. Nos programmes sont conçus pour répondre aux besoins spécifiques des enfants de la rue et/ou orphelins, des femmes confrontées à la précarité et/ou à l'exclusion sociale, ainsi que des personnes incarcérées.
                                    <br><br>

                                    En collaboration avec d'autres organisations, les autorités locales et les communautés, HOP FOR ALL ®️ s'efforce de créer un environnement où chaque individu a la possibilité de s'épanouir pleinement. 
                                    <br><br>

                                    Ces objectifs guident nos actions au quotidien et reflètent notre engagement envers une société plus juste et plus inclusive pour tous.
                                    <br><br>

                                    <span class="italic montserrat-sm">
                                        Rejoignez-nous dans notre mission de bâtir un monde où l'inclusion et la justice sociale sont une réalité pour tous.
                                    </span>
                                    <br><br>
                                </p>

                                <h6 class="montserrat-b">
                                    NOTRE VISION
                                </h6>
                                <p>
                                    Notre vision est celle d'un monde où chaque individu, quel que soit son origine ou sa situation, a la possibilité de s'épanouir pleinement. Nous croyons en une société où la solidarité et l'inclusion sont des valeurs fondamentales, où personne n'est laissée pour compte. En unissant nos cœurs généreux et nos efforts, nous aspirons à créer un environnement où les enfants de la rue et/ou orphelins, les femmes en situation de précarité ou d'exclusion, ainsi que les personnes incarcérées, trouvent le soutien essentiel dont ils ont besoin pour reconstruire leurs vies. Nous sommes déterminés à œuvrer chaque jour pour promouvoir l'entraide, la solidarité et l'inclusion, plaçant toujours l'humain au cœur de nos actions. Ensemble, nous construisons un avenir meilleur pour tous
                                </p>
                                <br>

                                <h6 class="montserrat-b">
                                    NOTRE MISSION
                                </h6>
                                <p>
                                    Notre mission est simple mais puissante : offrir un rayon de lumière dans la vie des personnes les plus vulnérables (Enfants de la rue et/ou orphelins, des Femmes en situation de précarité et ou d'exclusion et des Personnes incarcérées). Que ce soit en fournissant un appui matériel, en apportant un sourire ou en tendant une main secourable, nous sommes là pour soutenir nos semblables dans les moments difficiles. Parce que chaque geste compte, nous croyons en l'impact positif que nous pouvons avoir ensemble.
                                </p><br>

                                <h6 class="montserrat-b">
                                    NOS VALEURS
                                </h6>
                                <p class="italic mt-3">
                                    Au sein de HOP FOR ALL, nous sommes guidés par des valeurs fondamentales qui nous inspirent et nous motivent chaque jour :
                                </p>
                                <p>
                                    <span class="montserrat-sm">Solidarité : </span>
                                    Nous croyons en la force de la solidarité et en l'importance de nous soutenir mutuellement, quelles que soient nos différences.
                                </p>
                                <p>
                                    <span class="montserrat-sm">Inclusion : </span>
                                    Nous défendons un monde où chacun a sa place, sans discrimination ni exclusion.
                                </p>
                                <p>
                                    <span class="montserrat-sm">Empathie : </span>
                                    Nous nous efforçons de comprendre les besoins des autres et de répondre avec compassion et bienveillance.
                                </p>
                                <p>
                                    <span class="montserrat-sm">Engagement : </span>
                                    Nous sommes déterminés à agir concrètement pour créer un impact positif dans nos communautés et au-delà.
                                </p>
                            </div>
                        </section>

                        <!-- Button 2 -->
                        <section id="causes-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Nos causes : Piliers de notre action associative</h6>

                            <div class="montserrat-red mt-4 text-justify">
                                <ol>
                                    <li>
                                        <span class="montserrat-sm">Kit de Survie : </span>
                                        Notre programme "HopeKit" vise à fournir un soutien vital aux personnes les plus vulnérables lorsqu'elles sont confrontées à des situations d'urgence et de crise. Grâce à des kits de survie soigneusement conçus, nous offrons des articles essentiels tels que de la nourriture, de l'eau, des vêtements chauds et des articles d'hygiène, permettant ainsi aux individus de faire face aux défis immédiats et de retrouver un semblant de normalité dans des moments de détresse.
                                    </li>
                                    <br>

                                    <li>
                                        <span class="montserrat-sm">Accompagnement Social : </span>
                                        Notre initiative "Solidarité Ensemble" vise à lutter contre l'isolement et à promouvoir l'intégration sociale en offrant un soutien émotionnel, pratique et communautaire. Nous mettons en place des programmes de soutien individuel et de groupe, des activités sociales et des événements visant à créer des liens solides au sein de la communauté. En offrant une écoute attentive et un accompagnement personnalisé, nous visons à renforcer le tissu social et à favoriser un sentiment d'appartenance pour tous.
                                    </li>
                                    <br>

                                    <li>
                                        <span class="montserrat-sm">Éducation & Santé : </span>
                                        Notre engagement envers "Harmonie Vitalité" consiste à promouvoir l'éducation et la santé pour tous, en donnant aux individus les connaissances et les outils nécessaires pour prendre en charge leur bien-être physique et mental. À travers des programmes éducatifs, des ateliers de sensibilisation et des initiatives de promotion de la santé, nous visons à autonomiser les individus à prendre des décisions éclairées concernant leur santé et à accéder à des soins de qualité. En investissant dans l'éducation et la santé, nous contribuons à bâtir des communautés plus fortes et plus résilientes.
                                    </li>
                                </ol>
                                <br>

                                <h6 class="montserrat-b text-uppercase">Ce qui fait notre particularité</h6>
                                <p>
                                    Chez HOP FOR ALL ®️, notre différence réside dans notre approche unique envers l'entraide et l'inclusion. Nous ne sommes pas simplement une organisation ; nous sommes une communauté de cœurs généreux et engagés, unie par une vision commune de créer un monde où chaque individu, quel que soit son origine ou sa situation, a la possibilité de s'épanouir pleinement.
                                    <br><br>

                                    Ce qui nous distingue, c'est notre engagement inébranlable envers l'humain. Nous plaçons toujours les personnes que nous soutenons au centre de nos actions, en reconnaissant et en respectant leur dignité et leur valeur intrinsèque. Nous ne cherchons pas à imposer des solutions toutes faites, mais plutôt à écouter attentivement, à comprendre et à répondre aux besoins uniques de chaque individu que nous servons.
                                    <br><br>

                                    Notre approche holistique est également ce qui nous distingue. Nous comprenons que les défis auxquels sont confrontées les communautés que nous soutenons sont souvent interconnectés et complexes. C'est pourquoi nous adoptons une approche globale, en travaillant avec nos partenaires locaux pour aborder les causes profondes de l'injustice sociale, de la pauvreté et de l'exclusion.
                                    <br><br>

                                    De plus, notre engagement envers l'impact durable est au cœur de tout ce que nous faisons. Nous ne cherchons pas simplement à apporter un soulagement temporaire ; nous aspirons à créer des changements durables qui permettent aux individus et aux communautés de prospérer à long terme. Cela signifie investir dans l'éducation, le renforcement des capacités et le développement économique, tout en veillant à ce que nos programmes soient adaptés aux besoins évolutifs des populations que nous servons.
                                    <br><br>

                                    Enfin, ce qui nous rend vraiment différents, c'est notre passion et notre détermination. Nous croyons fermement en notre capacité à faire une grande différence, un acte de bonté à la fois. Nous nous levons chaque jour avec l'espoir et la conviction que nos actions peuvent avoir un impact positif sur le monde qui nous entoure.
                                    <br><br>

                                    Ensemble, grâce à notre approche unique, notre engagement envers l'humain, notre approche holistique et notre passion pour le changement, nous sommes différents. Et c'est cette différence qui nous permet de créer un avenir meilleur pour tous.
                                </p>
                            </div>
                        </section>

                        <!-- Button 3 -->
                        <section id="what-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Que faisons-nous ?</h6>

                            <div class="montserrat-reg mt-4 text-justify">
                                <p>
                                    HOP FOR ALL concrétise sa vision en mettant en place diverses initiatives ciblées et inclusives pour soutenir les enfants de la rue et/ou orphelins, les femmes en situation de précarité et/ou d'exclusion, ainsi que les personnes incarcérées.
                                    <br><br>

                                    <span>
                                        Nos initiatives englobent un large éventail de programmes et de services, notamment :
                                    </span>
                                </p>
                                <ol>
                                    <li>
                                        <span class="montserrat-sm">Programme Éducation et Réinsertion : </span>
                                        Nous offrons des opportunités éducatives et de réinsertion sociale aux Enfants (de la rue, délaissés, abandonnés, victimes du VIH etc…). Grâce à des programmes sur mesure, nous leur assurons un accès à l'éducation, à la formation professionnelle et à un soutien psychosocial pour les aider à sortir de la marginalisation.
                                    </li>
                                    <br>

                                    <li>
                                        <span class="montserrat-sm">Soutien aux Femmes en situation de vulnérabilité : </span>
                                        Nous proposons des programmes spécifiques pour soutenir les femmes en situation de précarité et d'exclusion. De la formation professionnelle à des services de conseil en passant par des initiatives pour renforcer leur autonomie économique et sociale, nous les aidons à se reconstruire et à s'épanouir.
                                    </li>
                                    <br>

                                    <li>
                                        <span class="montserrat-sm">Projets de Réhabilitation en Milieu Carcéral : </span>
                                        Notre engagement se poursuit derrière les barreaux, ou nous intervenons dans les prisons en offrant des programmes de réhabilitation et de réinsertion. De la formation professionnelle au soutien psychologique, nous préparons les détenus à une réintégration réussie dans la société après leur libération. De plus, nous organisons des distributions régulières de denrées alimentaires, de vêtements et d'articles essentiels pour améliorer leurs conditions de vie.
                                    </li>
                                    <br>

                                    <li>
                                        <span class="montserrat-sm">Sensibilisation et Plaidoyer : </span>
                                        Nous ne nous contentons pas d'agir, nous cherchons également à sensibiliser la société aux défis rencontrés par ces groupes marginalisés. À travers des campagnes de sensibilisation et de plaidoyer, nous œuvrons pour des politiques plus inclusives et une société plus solidaire.
                                    </li>
                                </ol>
                                <br>

                                <p>
                                    En collaboration avec d'autres organisations, les autorités locales et les communautés, HOP FOR ALL ®️ s'efforce de créer un environnement où chaque individu a la possibilité de s'épanouir pleinement. Ces objectifs guident nos actions au quotidien et reflètent notre engagement envers une société plus juste et plus inclusive pour tous.
                                    <br><br>

                                    <span class="montserrat-sm">
                                        Rejoignez-nous dans notre mission de bâtir un monde où l'inclusion et la justice sociale sont une réalité pour tous.
                                    </span>
                                </p>
                            </div>
                        </section>

                        <!-- Button 4 -->
                        <section id="docs-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Comment nous soutenir ?</h6>

                            <div class="montserrat-reg mt-4 text-justify">
                                <p>
                                    Rejoignez-nous dans notre mission ! Que vous souhaitiez faire un don, devenir bénévole ou simplement partager notre message, chaque geste compte et fait la différence. Ensemble, nous pouvons accomplir de grandes choses et créer un avenir meilleur pour tous.
                                </p>
                                <span class="montserrat-b">
                                    Vous pouvez soutenir notre association de différentes manières :
                                </span>
                                <br><br>
                                <ul style="list-style-type: none;">
                                    <li>
                                        <i class="bi bi-dash-lg"></i>
                                        <span class="montserrat-b">En devenant membre : </span>
                                        <span>
                                            Vous pouvez adhérer à notre association en remplissant un bulletin d'adhésion et en payant une cotisation annuelle. Vous bénéficierez ainsi de nos services et de nos informations. Vous pourrez également participer à nos assemblées générales et à nos activités.
                                        </span>
                                    </li>
                                    <br>

                                    <li>
                                        <i class="bi bi-dash-lg"></i>
                                        <span class="montserrat-b">En devenant bénévole : </span>
                                        <span>
                                            Vous pouvez nous offrir de votre temps, de votre compétence et de votre énergie pour nous aider à réaliser nos actions. Vous pourrez ainsi visiter les personnes détenues, animer des ateliers, accompagner les personnes sortant de prison, etc.
                                        </span>
                                    </li>
                                    <br>

                                    <li>
                                        <i class="bi bi-dash-lg"></i>
                                        <span class="montserrat-b">En devenant donateur : </span>
                                        <span>
                                            Vous pouvez nous faire un don ponctuel ou régulier, par chèque, par virement ou par prélèvement automatique. 
                                        </span>
                                    </li>
                                    <br>

                                    <li>
                                        <i class="bi bi-dash-lg"></i>
                                        <span class="montserrat-b">En devenant partenaire : </span>
                                        <span>
                                            Vous pouvez nouer un partenariat avec notre association, que vous soyez une entreprise, une fondation, une collectivité ou une autre association. Vous pourrez ainsi nous apporter un soutien financier, matériel ou logistique, ou encore nous confier des missions ou des projets. 
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </section>

                        <!-- Button 5 -->
                        <section id="partner-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Nos partenaires</h6>

                            <div class="montserrat-reg mt-4 text-justify">

                            </div>
                        </section>

                        <!-- Button 6 -->
                        <section id="organigram-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Organigramme de HOP FOR ALL</h6>

                            <div class="montserrat-reg mt-5 text-center">
                                <img src="./images/organigramme.jpeg" alt="Organigramme de HOP FOR ALL" class="img-fluid">
                            </div>
                        </section>

                        <!-- Button 7 -->
                        <section id="fondateur-text" class="d-none">
                            <h6 class="montserrat-sm text-uppercase">Mot du Fondateur</h6>

                            <div class="montserrat-reg mt-5 text-justify">
                                <img src="./images/romain_dingao.jpeg" alt="Photo de romain dingao" class="img-fluid rounded mb-3" width="150px" height="150px" />
                                <p>
                                    Chers visiteurs, 
                                    <br><br>
                                    Bienvenue sur le site de HOP FOR ALL. C'est avec une immense gratitude et
                                    un profond engagement que je vous écris aujourd'hui en tant que Fondateur de
                                    HOP FOR ALL . Notre mission est simple mais puissante : offrir un soutien
                                    essentiel aux populations marginalisées et vulnérables, notamment aux enfants des rues, aux
                                    femmes en situation de précarité et aux personnes incarcérées.
                                    <br><br>

                                    L'idée de créer HOP FOR ALL est née d'une conviction profonde que chaque individu,
                                    indépendamment de son parcours ou de ses circonstances, mérite une chance équitable de
                                    s'épanouir et de contribuer positivement à la société. Au fil des années, j'ai été témoin de
                                    nombreuses injustices et de nombreuses vies brisées par l'exclusion et le manque de soutien. Ce
                                    constat m'a poussé à agir et à réunir une équipe de personnes passionnées et déterminées à faire
                                    la différence.
                                    <br><br>

                                    Chez HOP FOR ALL, nous croyons fermement en la puissance de l'entraide, de la
                                    solidarité et de l'inclusion. Notre approche holistique nous permet de fournir des opportunités
                                    éducatives, des programmes de réinsertion sociale et des services de soutien psychosocial et de
                                    réhabilitation à notre population cible. Ces actions concrètes visent à autonomiser les personnes
                                    que nous accompagnons, leur permettant ainsi de retrouver espoir et dignité.
                                    <br><br>

                                    Nous travaillons en étroite collaboration avec d'autres organisations, des institutions
                                    éducatives et des services publics pour maximiser l'impact de nos initiatives. Ensemble, nous
                                    sensibilisons la société aux défis rencontrés par les groupes marginalisés et plaidons pour des
                                    politiques plus inclusives.
                                    <br>
                                    Notre objectif est de créer un environnement où chaque personne a la possibilité des'épanouir pleinement dans une société plus solidaire et plus inclusive.
                                    <br><br>

                                    Je vous invite chaleureusement à vous joindre à nous dans cette mission. Que vous
                                    souhaitiez devenir bénévole, faire un don, ou établir un partenariat, votre soutien est crucial pour
                                    nous permettre de continuer notre travail et d'atteindre encore plus de personnes dans le besoin.
                                    <br><br>

                                    Pour finir, Je m'appelle Romain DINGAO, né le 7 février 1986 à Yaoundé. Je suis de
                                    nationalité tchadienne. J’ai consacré une grande partie de ma vie à l'étude et au travail dans diversdomaines académiques et professionnels. Je suis titulaire d'une maîtrise en sciences et
                                    techniques de gestion de l'université de Ngaoundéré (Cameroun) et j'ai obtenu un diplôme en
                                    gestion de projet à l'Académie canadienne de management et de technologie. Par la suite, j'ai
                                    complété un Master 2 en santé publique avec une spécialisation en épidémiologie à l'université de
                                    Douala (Cameroun) et un Master 2 en cultures et religions à l'Institut universitaire de
                                    développement international. En outre, j'ai obtenu une certification en marketing digital délivrée par
                                    The Open University, Google, et IAB (USA), ainsi que des certificats en économie et gestion de l'environnement et des ressources naturelles, en droit et protection de l'environnement, et en
                                    développement durable, tous obtenus à l'Institut de la Francophonie pour le développement
                                    durable. Mon parcours professionnel inclut divers postes à l'Institut universitaire La Fraternité de
                                    Yaoundé.
                                    <br><br>

                                    Mon parcours académique diversifié et riche en expériences a été déterminant dans la
                                    conception et le développement de HOP FOR ALL®. Chaque étape de mon parcours a renforcé ma
                                    compréhension des défis complexes auxquels sont confrontées les populations marginalisées et
                                    m'a doté des compétences nécessaires pour aborder ces défis de manière efficace et holistique.
                                    <br>
                                    
                                    Ensemble, nous pouvons construire un avenir meilleur pour tous.<br><br>

                                    Merci pour votre visite et votre soutien. <br><br>

                                    Avec gratitude.
                                </p>

                                <p>
                                    DINGAO Romain
                                   <br>
                                   <span>Fondateur de HOP FOR ALL</span> 
                                </p>
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
                    <a href="">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright p-3">
            <p>All rights reserved. © HOP for ALL, 2024</p>
        </div>
    </footer>



    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/hopforall.js"></script>
    
</body>
</html>