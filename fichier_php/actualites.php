<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BTSSIO_WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <?php include 'entete.php';?>
    <main class="container px-4"> <!-- Page central -->
        <?php include 'carouselle.php';?> 
        <article class="row gx -5">
            <div class="col p-3">
                <div class="card mb-2 mt-2 " style="border-color: green;">
                    <div class="card-header" style="border-color: green;">
                        <h4 class="card-title">actualité 1</h4>
                    </div>
                    <div class="card-body"> <!-- Actualité de gauche  -->
                        <h3>Naissance d'Aunis Freeware : Un vent d'innovation souffle sur la Charente Maritime !</h3>
                        <br>Fin mai dernier, une nouvelle association a vu le jour en Charente Maritime : <b>Aunis Freeware</b>. Portée par la volonté de partager et de développer des outils numériques gratuits, cette initiative a pour ambition de répondre aux besoins des particuliers et des associations locales.  
                        <br><br><b>Des applications gratuites au service de tous</b><br><br>
                        Aunis Freeware se consacre à la création d'applications variées, accessibles à tous et totalement gratuites. Que ce soit pour Windows, le web ou Android, les développeurs de l'association travaillent sur des projets aussi bien pratiques (gestion, organisation) que ludiques et éducatifs. L'objectif ? Faciliter le quotidien des utilisateurs et favoriser l'apprentissage numérique.
                        <br><br><b>Formation et partage des connaissances</b><br><br>
                        Au-delà de la création d'applications, Aunis Freeware souhaite également accompagner les particuliers dans leur utilisation du numérique. Des ateliers et formations seront régulièrement organisés pour permettre à chacun de développer ses compétences et de tirer pleinement parti des outils à sa disposition.
                        <br><br><b>Un tremplin pour les jeunes talents</b><br><br>
                        L'association ouvre également ses portes aux stagiaires. En accueillant des étudiants en informatique, Aunis Freeware leur offre l'opportunité de mettre en pratique leurs connaissances et de contribuer à des projets concrets.
                        <b>Dominique, le président d'Aunis Freeware, se confie</b> :"Nous sommes très enthousiastes à l'idée de lancer cette nouvelle aventure. Notre objectif est de créer une communauté de passionnés, où chacun pourra apporter ses compétences et bénéficier des connaissances des autres."
                        <br><br><b>Rejoignez-nous !</b><br><br>
                        Vous êtes développeur, formateur, ou simplement passionné par le numérique ? N'hésitez pas à nous contacter pour nous rejoindre ou pour suivre nos actualités.
                    </div>
                </div>
            </div>
            <div class="col p-3">
                <div class="card mb-2 mt-2" style="border-color: green;">
                    <div>
                        <div class="card-header" style="border-color: green;">
                            <h4 class="card-title">actualité 2</h4>
                        </div>
                        <div class="card-body"> <!-- Actualité de droite  -->
                            <h3>Aunis Freeware : Un duo de stagiaires lance le développement d'une application pour les passionnés de pétanque !</h3>
                            <br><b>Une belle collaboration entre les générations</b><br><br>
                            C'est avec enthousiasme que nous vous annonçons le lancement d'un nouveau projet au sein d'Aunis Freeware ! Laura et Baptiste, deux étudiants en BTS SIO, ont rejoint l'association en juin dernier pour un stage de plusieurs semaines. Sous la tutelle de Dominique, président de l'association, ils ont entrepris le développement d'une application web en PHP, dédiée à la gestion des tournois de pétanque.
                            <br><br><b>Une application pour faciliter l'organisation des tournois</b><br><br>
                            Cette nouvelle application a pour objectif de simplifier la vie des organisateurs de tournois de pétanque. Elle permettra de :
                            <ul>
                                <li><b>Gérer les inscriptions des joueurs</b>de manière dématérialisée.</li>
                                <li><b>Créer les tableaux de matchs</b>automatiquement.</li>
                                <li><b>Suivre les résultats en temps réel</b>et générer des classements.</li>
                                <li><b>Communiquer avec les participants</b>via des notifications.</li>
                            </ul>
                            <b>Un projet pédagogique et collaboratif</b><br><br>
                            Ce projet est une formidable opportunité pour Laura et Baptiste de mettre en pratique leurs connaissances et de découvrir le monde professionnel. Ils bénéficient de l'expérience de Dominique et des autres membres de l'association pour mener à bien ce développement.
                            <br><br><b>Un avenir prometteur</b><br><br>
                            Cette application est encore en cours de développement, mais nous sommes convaincus qu'elle sera un outil précieux pour tous les amateurs de pétanque. Nous vous tiendrons informés de l'avancée du projet et de sa mise à disposition.
                        </div>
                    </div>
                </div>
            </div>
        </article> 
    </main>
    <?php include 'piedDePage.php';?>
    <?php include 'lienScript.php';?>      
</body>
</html>