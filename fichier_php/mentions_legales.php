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
    <?php include 'entete.php';?>
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
    <?php include 'piedDePage.php';?>
    <?php include 'lienScript.php';?>  
</body>
</html>