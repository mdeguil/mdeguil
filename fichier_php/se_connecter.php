<?php

$dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

$identification = $_POST['identification'];
$mdp = $_POST['mdp'];

$req = ('SELECT COUNT(*) FROM admin WHERE identifiant LIKE :identification OR email LIKE :identification;');
$res = $dbh->prepare($req);
$res->execute(['identification' => $identification]);

$resultat = $res->fetchColumn() > 0;

// Affichage du résultat
if ($resultat) {
    echo "L'utilisateur existe.";
} else {
    echo "L'utilisateur n'existe pas.";
}
?>