<?php

session_start();

$dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

$fonction = $_POST['fonction'];
$identifiant = $_POST['identifiant'];

$requete = ('UPDATE admin SET fonction = :fonction WHERE identifiant = :identifiant ;');
$result = $dbh->prepare($requete);
$result->bindParam(":fonction", $fonction);
$result->bindParam(":identifiant", $identifiant);
$validation = $result->execute(); 

if ($validation) {
    echo "Changer de la fonction de l'utilisateur effectuer !";
    echo '<meta http-equiv="refresh" content="3; URL=accueil.php">';   
} else {
    echo "Erreure impossible de changer la fonction de l'utilisateur !";
    echo '<meta http-equiv="refresh" content="3; URL=gestionCompte.php">';
}
?>