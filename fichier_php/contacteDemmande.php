<meta http-equiv="refresh" content="2; URL=accueil.php">

<?php

    include 'connexionBDD.php';

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $demande = $_POST['demande'];

    $sql = $dbh-> prepare('INSERT INTO Contacte (nom, prenom, email, demande ) VALUES (:nom, :prenom, :email, :demande)');

    $sql->bindParam(":nom", $nom);
    $sql->bindParam(":prenom", $prenom);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":demande", $demande);

    if ($sql->execute()) {
        echo "Demmande envoyée !";
    } else {
        echo "Erreur";
    }

?>