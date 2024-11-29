<?php

$dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

$identification = $_POST['identification'];
$mdp = $_POST['mdp'];

echo $identification;
echo "<br>";
echo $mdp;
echo "<br>";

$req = ('SELECT COUNT(*) FROM admin WHERE mdp = :mdp AND identifiant LIKE :identification OR email LIKE :identification;');   
$res = $dbh->prepare($req);
$res->bindParam(":identification", $identification);
$res->bindParam(":mdp", $mdp);
$res->execute();

$resultat = $res->fetchColumn() > 0;

echo $resultat;
echo "<br>";

// Affichage du résultat
if ($resultat) {
    echo "L'utilisateur existe.";
    echo '<meta http-equiv="refresh" content="2; URL=accueil.php">';
} else {
    echo "L'utilisateur n'existe pas.";
    echo '<meta http-equiv="refresh" content="2; URL=connexion.php">';
}
?>