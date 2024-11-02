<meta http-equiv="refresh" content="0; URL=accueil.php">
<?php

    $filename = '../fichier_csv/admin.csv';

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $confmdp = $_POST['Confmdp'];

    $identifiant = "id";

    $fichier_ajout = fopen($filename, 'a');
        $list_ajout = array (
            array($identifiant, $email, $nom, $prenom ,"V", $mdp),
    );

    foreach ($list_ajout as $fields) {
        fputcsv($fichier_ajout, $fields);
    }

    fclose($filename);
?>