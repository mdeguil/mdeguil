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
    <form action="compte.php" method="post">
            <!-- Nom / Prenom -->
            <div class="row mb-2">
                <div class="col-1">
                   <label class="col" for="name">Nom&nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="text" id="nom" name="nom" placeholder="Votre nom"/>
                </div>
                <div class="col-1">
                    <label class="ligne" for="prenom">Prénom&nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="text" name="prenom" placeholder="Votre prenom"/>
                </div>
            </div>
            <!-- Adresse mail -->
            <div class="row mb-2">
                <div class="col-2">
                    <label class="col" for="mail">adresse mail&nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="email" name="email" placeholder="name@example.com"/>
                </div>
            </div>
            <!-- Mots de Passe -->
            <div class="row mb-2">
                <div class="col-3">
                    <label class="col" for="mail">Mot de passe &nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="password" name="mdp" placeholder="Entrer votre mot de passe"/>
                </div>
            </div>
            <!-- Conf Mots de Passe -->
            <div class="row mb-2">
                <div class="col-3">
                    <label class="col" for="mail">Confirmation du mot de passe &nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="password" name="Confmdp" placeholder="Entrer votre mot de passe"/>
                </div>
            </div>
            <br>
            <div class="row self-end">
                <div class="col-7"></div>
                <div class="col">
                    <a id="annuler" href=""><button id="BtAnnuler" class=" col-6 btn border-secondary btn-secondary text-light">Annuler</button></a>
                </div>
                <div class="col">
                    <a id="envoyer" href=""><button class=" col-6 btn border-primary btn-primary text-light">Envoyer</button></a>
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