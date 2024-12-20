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
    <?php include 'entete.php';?>
    <main class="container px-4">
        <?php include 'carouselle.php';?>
        <div class="container-md">
            <article class="row gx -5">
                <div class="col p-3">
                    <div class="card mb-2 mt-2 " style="border-color: gray;">
                        <div class="card-header" style="border-color: gray;">
                            <h4 class="card-title">Connexion</h4>
                        </div>
                        <div class="card-body">
                            <form action="se_connecter.php" method="POST">
                                <p>Identifiant ou adresse email:</p>
                                    <input class="col-12 border rounded" type="text" name="identification" placeholder="ID ou mail"/>
                                <br></br>
                                <p>Mot de passe</p>
                                    <input class="col-12 border rounded" type="password" name="mdp" placeholder="Mot de passe"/>
                                <br></br>
                                <div class="text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a><button type="button" class="btn btn-secondary">Annuler</button></a>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a id="envoyer" href=""><button class="btn btn-success">Envoyer</button></a>
                                    </div>
                                </div>
                            </form>  
                        </div>
                        <div class="card-footer text-center">
                            <a href=""><button class="btn border-secondary text-secondary">Mot de passe oublié</button></a>
                            <a href="creationDeCompte.php"><button class="btn border-success text-secondary">Création de compte</button></a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <?php include 'piedDePage.php';?>
    <?php include 'lienScript.php';?>
</body>
</html>