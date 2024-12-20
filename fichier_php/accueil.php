<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BTSSIO_WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <?php include 'entete.php';?> 
    <main class="container px-4"> <!-- Page central -->
        <?php include 'carouselle.php';?>                             

        </div>  
        <div class="container-sm">
            <h1> Aunis Freeware : votre communauté de développeurs au service du numérique </h1>
            <h2>Nous créons, nous partageons, nous innovons.</h2>
            <p>Aunis Freeware est une association dynamique qui a pour objectif de :</p>
            <ul>
                <li>
                    <b>Développer des applications gratuites</b>pour tous : logiciels, outils en ligne, applications mobiles... Nous couvrons une large gamme de domaines, du pratique au ludique, en passant par l'éducatif.
                </li>
                <li>
                    <b>Former et accompagner</b> les particuliers dans leur utilisation du numérique. Des ateliers et formations sont régulièrement organisés pour vous aider à maîtriser les outils numériques.
                </li>
                <li>
                    <b>Accueillir des stagiaires</b> et leur permettre de découvrir le monde du développement en participant à des projets concrets.
                </li>
            </ul>
            <h2>Pourquoi nous rejoindre ? </h2>
            <ul>
                <li>
                    <b>Pour contribuer à un projet collectif :</b> En devenant membre, vous participerez à la création d'un écosystème numérique ouvert et accessible à tous.
                </li>
                <li>
                    <b>Pour développer vos compétences : </b>Que vous soyez développeur confirmé ou débutant, vous trouverez au sein de notre association l'occasion d'apprendre et de partager vos connaissances.
                </li>
                <li>
                    <b>Pour soutenir une cause qui vous tient à cœur :</b> En nous soutenant, vous contribuez à rendre le numérique plus accessible à tous.
                </li>
            </ul>
            <h2>Nos valeurs </h2>
            <ul>
                <li>
                    <b>La gratuité :</b> Tous nos développements sont proposés gratuitement.
                </li>
                <li>
                    <b>Le partage :</b> Nous encourageons le partage des connaissances et des compétences.
                </li>
                <li>
                    <b>L'innovation :</b> Nous sommes constamment à la recherche de nouvelles idées et de nouvelles technologies.
                </li>
                <li>
                    <b>La solidarité :</b> Nous soutenons les initiatives locales et les projets à impact social.
                </li>
            </ul>
            <h2>Rejoignez notre communauté ! </h2>
            <p>Que vous soyez développeur, utilisateur ou simple curieux, vous êtes les bienvenus au sein d'Aunis Freeware. </p>
        </div>
    </main>
    <?php include 'piedDePage.php';?>
    <?php include 'lienScript.php';?>  
</body>
</html>