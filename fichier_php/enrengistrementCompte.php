<?php

    function testMotDePasse($MotDePasse) {
        $choix = "FALSE";
        $longueur = strlen($MotDePasse);
        $force = 0;
        if ($longueur >= 8){
            for ($i = 0; $i < $longueur; $i++){
                $lettre = $MotDePasse[$i];
                if ($lettre>='a' && $lettre<='z'){
                    $minuscule = 1;                   
                }
                elseif ($lettre>='A' && $lettre <='Z'){
                    $majuscule = 1;
                }
                elseif ($lettre>='0' && $lettre<='9'){
                    $chiffre = 1;
                }else {
                    $caracterespecial = 1;
                }
            }

            $force = $minuscule + $majuscule + $chiffre + $caracterespecial;
            if ($force != 4){
                $choix = "FALSE";
            }else{
                $choix = "TRUE";
            }
        }

        return $choix;
    }

    include 'connexionBDD.php';

    $identifiant = $_POST['identifiant'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $confmdp = $_POST['Confmdp'];
    $fonction = "V";

    $res = $dbh-> prepare('SELECT COUNT(*) FROM admin WHERE email = :email or identifiant = :identifiant' );
    $res->bindParam(":email", $email);
    $res->bindParam(":identifiant", $identifiant);
    $res->execute();
    $resultat = $res->fetchColumn() > 0;

    $verif = testMotDePasse($mdp);    


    if ( $verif === "FALSE"){
        echo "Le mot de passe n'est pas assez fort !! ";
        echo '<meta http-equiv="refresh" content="5; URL=creationDeCompte.php">';
    }elseif ($mdp !== $confmdp){
        echo "Les mots de passe ne correspondent pas !! ";
        echo '<meta http-equiv="refresh" content="5; URL=creationDeCompte.php">';
    }elseif ($resultat) {
        echo "Email ou Identifiant deja existant !!";
        echo '<meta http-equiv="refresh" content="5; URL=creationDeCompte.php">';
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
            header("Location: creationDeCompte.php");
        };
    }
?>
