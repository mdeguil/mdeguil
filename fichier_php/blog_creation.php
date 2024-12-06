<?php
    session_start();

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BTSSIO_WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../fichier_javascript/contacte.js"></script>
</head>
<body class="container">
    <header>
        <nav class="navbar navbar-expand-sm bg-success navbar-dark">
            <div class="container-fluid">
                <img src="../img/logo_af_2.jpeg" alt="Logo d'accueil" style="width:50px;" class="rounded-pill">
            
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active " href="accueil.php"> Accueil </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" href="nos_applications.php">Nos applications </a>
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
    <br>
    <main class="container px-4">
    <form action="blog.php" method="post">
            <!-- titre -->
            <div class="row mb-2">
                <div class="col-1">
                   <label class="col" for="name">titre&nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="text" name="titre" placeholder="titre de l'article"/>
                </div>
            </div>
            <!-- auteurs -->
            <div class="row mb-2">
                <div class="col-2">
                    <label class="ligne" for="auteurs">auteurs&nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="text" name="auteurs" placeholder="nom des différents contributeurs"/>
                </div>
            </div>
            <!-- Theme -->
            <div class="row mb-2">
                <div class="col-1">
                    <label class="col" for="theme">theme&nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="text" name="thème" placeholder="différent thème"/>
                </div>
            </div>
            <!-- Contenu de l'article -->
            <div class="row mb-2">
                <div class="col-3">
                    <label class="col" for="article">contenu_article&nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="text" name="contenu_article" placeholder="ceci est mon article"/>
                </div>
            </div>
        </form> 
    </main>
    <br>
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