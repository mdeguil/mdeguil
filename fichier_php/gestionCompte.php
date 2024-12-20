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
    <main class="container"> 
        <br>
        <h1 class="text-center">Gestion des comptes</h1>
        <br>
        <b><p>Entrer l'identifiant de la personne puis sa nouvelle fonction afin de la changer !</p></b>
        <a href="affichageCompte"> Voir tout les comptes ! </a>
        <br><br>
        <form action="changerFonction.php" method="post">
           <label for="identifiant">Identifiant :</label> 
           <br>
           <input class="rounded" type="text" name="identifiant">
           <br><br>
           <label for="identifiant">Fonction :</label> 
           <br>
           <input class="rounded" type="text" name="fonction">
           <br><br>
           <button class="btn border-black bg-secondary submit text-white"> Changer </button>
           <br><br>
        </form>
        
    </main>
    <?php include 'piedDePage.php';?>
    <?php include 'lienScript.php';?>   
</body>
</html>