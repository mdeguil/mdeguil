<?php

$dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

$identification = $_POST['ID/email'];
$mdp = $_POST['mdp'];

$req = ('SELECT COUNT(*) FROM admin WHERE identifiant LIKE :identification OR email LIKE  :identification');
$res = $dbh->prepare($req);

if ($res->execute(['identification' => $identification]) = 1) {
    echo "Compte existant !";
} else {
    echo "Compte inexistant !";
} 
   
?>