<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BTSSIO_WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
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
    <br>
    <main class="container px-4">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../aunis_photos/aix.jpg" class="d-block w-100" alt="aix">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Aix</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../aunis_photos/corderie-royale.jpg" class="d-block w-100" alt="corderie-royale">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Corderie Royale</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../aunis_photos/fort-boyard.jpg" class="d-block w-100" alt="fort-boyard">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fort Boyard</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../aunis_photos/ile-oleron.jpg" class="d-block w-100" alt="ile-oleron">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ile-oleron</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container-md">
            <article class="row gx -5">
                <div class="col p-3">
                    <div class="card mb-2 mt-2 " style="border-color: gray;">
                        <div class="card-header" style="border-color: gray;">
                            <h4 class="card-title">Connexion</h4>
                        </div>
                        <div class="card-body">
                            <p>Identifiant ou adresse email:</p>
                                <input class="col-12 border rounded" type="text" id="ID/mail" name="ID/mail" placeholder="ID ou mail"/></label>
                            <br></br>
                            <p>Mot de passe</p>
                                <input class="col-12 border rounded" type="text" id="mdp" name="mdp" placeholder="Mot de passe"/>
                            <br></br>
                            <div class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Annuler</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success">Connexion</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href=""><button class="btn border-secondary text-secondary">Mot de passe oublié</button></a>
                            <a href="creation_de_compte.php"><button class="btn border-success text-secondary">Création de compte</button></a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
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