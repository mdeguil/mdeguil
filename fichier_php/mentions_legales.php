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
    <header>
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
            <div class="container-fluid">
                <img src="../img/logo_af_2.jpeg" alt="Logo d'accueil" style="width:50px;" class="rounded-pill">
                <?php echo $_SESSION["nom"]; ?>
                <!-- barre de navigation sur le site -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active " href="accueil.php"> Accueil </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" href="actualites.php"> Actualités </a>
                    </li>

                    <?php
                        if( $_SESSION['fct'] !== 'A' ){
                            echo '<li class="nav-item">';
                                echo '<a class="nav-link active" href="nos_applications.php">Nos applications </a>';
                            echo '</li>';
                            echo '<li class="nav-item">';
                                echo '<a class="nav-link active" href="page_contact.php">Blog </a>';
                            echo '</li>';
                        }else{
                            echo '<div class="dropdown">';
                                echo '<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Gestion </button>';
                                echo '<div class="dropdown-menu" aria-labelledby="dropdownMenu2">';
                                    echo '<a href="blog.php"<button class="dropdown-item" type="button">Blog</button></a>';
                                    echo '<a href="nos_applications.php"<button class="dropdown-item" type="button">Applications</button></a>';
                                    echo '<a href="gestion_compte.php"<button class="dropdown-item" type="button">Comptes</button></a>';
                                echo '</div>';
                            echo '</div>';
                        }
                    ?>
                        
                    </li>
                    <?php
                        if ($_SESSION['fct'] !== NULL && $_SESSION['fct'] !== 'V' ){
                            echo '<li class="nav-item"> ';
                                echo '<a class="nav-link active" href="">Contact </a>';
                            echo '</li>';
                        }
                    ?>
                    <li class="nav-item">
                        <?php 
                            if( $_SESSION['fct'] !== NULL){
                                echo '<a class="nav-link active" href="deconnexion.php">Déconnexion </a>';
                            } else {
                                echo '<a class="nav-link active" href="connexion.php">Connexion </a> ';
                            }
                        ?> 
                    </li>
                </ul>
            </div>
        </nav> 
    </header>
    <main>
        <ul style="list-style-type:none;">
            <li>
                <b>identité :</b> 
                <br>nom prénom
            </li>
            <li>
                <br><b>vos coordonées :</b>
                <br>adresse du dommicile :
                <br>adresse de courrier électronique ou numéro de téléphone pour contacter votre entreprise
            </li>
            <li>
                <br><b>Les mentions relatives à la propriété intellectuelle</b>
                <br>si vous utilisez des images, illustrations, photographies :  vous devez faire figurer leur propriété intellectuelle 
                <br>pour les textes qui ne sont pas les vôtres, vous devez recueillir l’autorisation de l’auteur ou tout du moins citer la source du texte 
            </li>
            <li>
                <br><b>Les mentions relatives à l’hébergement du site</b>
                <br>vous devez prévoir une page de mentions légales qui doit inclure des informations relatives à l’hébergement du site (même si le site est hébergé à titre gratuit). 
                <br>Ces mentions portent sur : 
                <br>• le nom de l’hébergeur 
                <br>• la raison sociale 
                <br>• l’adresse 
                <br>• le numéro de téléphone. 
            </li>
        </ul>
    </main>
    <footer class="footer">
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