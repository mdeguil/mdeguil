<?php

    $dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

    // Recuperation de valuers / implémentation
    $identifiant = $_POST['identifiant'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $mdp = hash("sha256", $mdp);
    $fonction = "V";


    // Création du compte
    $sql = $dbh-> prepare('INSERT INTO admin (identifiant, fonction, nom, prenom, email, mdp ) VALUES (:identifiant, :fonction, :nom, :prenom, :email, :mdp)');

    $sql->bindParam(":identifiant", $identifiant);
    $sql->bindParam(":fonction", $fonction);
    $sql->bindParam(":nom", $nom);
    $sql->bindParam(":prenom", $prenom);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":mdp", $mdp);

    // redirection vers une autre page
    if ($sql->execute()) {
        header("Location: accueil.php");
    } else {
        header("Location: creation_de_compte.php");
    };
?>