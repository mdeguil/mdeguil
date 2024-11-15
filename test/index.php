<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BTSSIO_WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="container">
    <header> <!-- Entête -->
        <nav class="navbar navbar-expand-sm bg-success navbar-dark">
            <div class="container-fluid">
                <img src="../img/logo_af_2.jpeg" alt="Logo d'accueil" style="width:50px;" class="rounded-pill">
                <!-- barre de navigation sur le site -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active " href="accueil.php"> Accueil </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" href="">Nos applications </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" href="actualites.php"> Actualités </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" href="">Blog </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" href="connexion.php">Connexion </a>
                    </li>
                </ul>
            </div>
        </nav> 
    </header>
    <main class="container px-4"> <!-- Page central -->
        <br>

    
</head>

<!-- Carouselle dynamique en PHP avec recherche d'image automatique dans un dossier -->
<div id="carouselExample" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $images = scandir('../aunis_photos');
        $i = 0;

        foreach ($images as $image) {
            // Ignorer les entrées spéciales '.' et '..' et vérifier que c'est un fichier image
            if ($image !== '.' && $image !== '..' && preg_match('/\.(jpg|jpeg|png|gif)$/i', $image)) {
                ?>
                <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                    <img src="../aunis_photos/<?php echo $image; ?>" class="d-block w-100" alt="Image <?php echo $i + 1; ?>">
                </div>
                <?php
                $i++;
            }
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

 
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
    <footer class="footer"> <!-- Pied de page -->
        <div class="row border border-success bg-success bg-opacity-50">
            <div class="col align-self-center">
                <a class="nav-link disabled black">Copyright Aunis Freeware</a>
            </div>
            <div class="col align-self-center">
                <a class="nav-link active" href="mentions_legales.php">Mentions légales</a>
            </div>
            <div class="col align-self-center">
                <img src="../img/facebook.jpg" alt="facebook" style="width:50px;">
            </div>
            <div class="col align-self-center">
                <img src="../img/instagram.png" alt="instagram" style="width:50px;">
            </div>
            <div class="col align-self-center">
                <a href="contactez-nous.php"><button class="btn border-secondary text-secondary">Contactez nous</button></a>
            </div>
        </div>
    </footer>   
</body>
</html>
