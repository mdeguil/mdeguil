<?php

session_start();
$_SESSION["nom"]="Nom Prenom";

$dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

$identification = $_POST['identification'];
$mdp = $_POST['mdp'];

$req = ('SELECT COUNT(*) FROM admin WHERE mdp = :mdp AND identifiant LIKE :identification OR email LIKE :identification;');   
$res = $dbh->prepare($req);
$res->bindParam(":identification", $identification);
$res->bindParam(":mdp", $mdp);
$res->execute();

$resultat = $res->fetchColumn() > 0;

// Affichage du résultat
if ($resultat) {
    echo "Connexion reussi.";
    echo '<meta http-equiv="refresh" content="3; URL=accueil.php">';   
} else {
    echo "Identifiant incorrecte ou mot de passe incorrecte !";
    echo '<meta http-equiv="refresh" content="3; URL=connexion.php">';
}
?>