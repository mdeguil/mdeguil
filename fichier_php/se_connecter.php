<?php

$dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

$identification = $_POST['ID/email'];
$mdp = $_POST['mdp'];

echo $identification;
echo $mdp;

$sql_ID = $dbh-> prepare('SELECT  ');
$sql_mdp = $dbh-> prepare('SELECT mdp FROM admin WHERE mdp = $mdp');


?>