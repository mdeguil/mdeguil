<?php

    $dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

    $identifiant = $_POST['identifiant'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $confmdp = $_POST['Confmdp'];
    $fonction = "V";

    if ($mdp !== $confmdp){
        echo "Les mots de passe ne correspondent pas !! ";
        echo '<meta http-equiv="refresh" content="5; URL=creation_de_compte.php">';
    }else {
        $sql = $dbh-> prepare('INSERT INTO admin (identifiant, fonction, nom, prenom, email, mdp ) VALUES (:identifiant, :fonction, :nom, :prenom, :email, :mdp)');

        $sql->bindParam(":identifiant", $identifiant);
        $sql->bindParam(":fonction", $fonction);
        $sql->bindParam(":nom", $nom);
        $sql->bindParam(":prenom", $prenom);
        $sql->bindParam(":email", $email);
        $mdp = hash("sha256", $mdp);
        $sql->bindParam(":mdp", $mdp);

        // redirection vers une autre page
        if ($sql->execute()) {
            header("Location: accueil.php");
        } else {
            header("Location: creation_de_compte.php");
        };
    }
?>