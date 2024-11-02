<!DOCTYPE html><
<html lang="fr"></html>
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
    <main class="container m-2">
        <h1 class="border rounded border-success bg-success text-light text-center">Formulaire de contact</h1>

        <form action="contacte.php" method="post">
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
                    <input class="col-12 border rounded" type="text" id="prenom" name="prenom" placeholder="Votre prenom"/>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-2">
                    <label class="col" for="mail">adresse mail&nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="email" id="email" name="email" placeholder="name@example.com"/>
                </div>
            </div>
            <div class="row mb-2">
                <label for="msg">Votre demmande&nbsp;</label>
            </div>
            <div class="row">
                <textarea id="demande" name="demande" rows="6" class="mb-2 border rounded"></textarea>
            </div>
            <div class="row self-end">
                <div class="col-7"></div>
                <div class="col">
                    <a id="annuler" href=""><button class=" col-6 btn border-secondary btn-secondary text-light">Annuler</button></a>
                </div>
                <div class="col">
                    <a id="envoyer" href=""><button class=" col-6 btn border-primary btn-primary text-light">Envoyer</button></a>
                </div>
            </div>
        </form>             
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
                <a href=""><button class="btn btn-light border-secondary text-secondary">Contactez nous</button></a>
            </div>
        </div>
    </footer>    
</body>
</html>