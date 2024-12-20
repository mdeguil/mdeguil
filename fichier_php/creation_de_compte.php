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
    <main class="container px-4">
        <br>
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
            <!-- identifiant -->
            <div class="row mb-2">
                <div class="col-2">
                    <label class="col" for="identifiant">identifiant&nbsp;</label>
                </div>
                <div class="col">
                    <input class="col-12 border rounded" type="text" name="identifiant" placeholder="Votre identifiant"/>
                </div>
            </div>
            <!-- Mots de Passe -->
            <div class="row mb-2">
                <div class="col-3">
                    <label class="col" for="mdp">Mot de passe &nbsp;</label>
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
    <?php include 'piedDePage.php';?>
    <?php include 'lienScript.php';?>
</body>
</html>