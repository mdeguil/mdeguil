<meta http-equiv="refresh" content="10; URL=connexion.php">
<p>Redirection sur la page Connexion !</p>

<?php

    $dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

    $identifiant = $_POST['identifiant'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $fonction = "V";

    $sql = $dbh-> prepare('INSERT INTO admin (identifiant, fonction, nom, prenom, email, mdp ) VALUES (:identifiant, :fonction, :nom, :prenom, :email, :mdp)');

    $sql->bindParam(":identifiant", $identifiant);
    $sql->bindParam(":fonction", $fonction);
    $sql->bindParam(":nom", $nom);
    $sql->bindParam(":prenom", $prenom);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":mdp", $mdp);

    if ($sql->execute()) {
        echo "Compte créer avec succes !! ";
    } else {
        echo "Erreur";
    }

?>