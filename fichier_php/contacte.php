<meta http-equiv="refresh" content="0; URL=accueil.php">
<?php

$filename = '../fichier_csv/contacte.csv';

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$demande = $_POST['demande'];

if (file_exists($filename)) {
    $fichier_ajout = fopen($filename, 'a');
    $list_ajout = array (
        array($prenom, $nom ,$email ,$demande),
    );
    
    foreach ($list_ajout as $fields) {
        fputcsv($fichier_ajout, $fields);
    }
    fclose($filename);
   
} else {
    $fichier_ouvert = fopen($filename, 'w');
    $list = array (
        array('prenom', 'nom', 'email', 'demande'),
        array($prenom, $nom ,$email ,$demande),
    );
    
    foreach ($list as $fields) {
        fputcsv($fichier_ouvert, $fields);
    }
    fclose($filename);
    
}

?>