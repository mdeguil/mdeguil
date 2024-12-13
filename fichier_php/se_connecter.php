<?php

session_start();

$dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');

$identification = $_POST['identification'];
$mdp = $_POST['mdp'];



$requete = ('SELECT * FROM admin WHERE mdp = :mdp AND identifiant LIKE :identification OR email LIKE :identification;');
$result = $dbh->prepare($requete);
$result->bindParam(":identification", $identification);
$result->bindParam(":mdp", $mdp);
$result->execute();  

$resultat_global= $result->fetch(PDO::FETCH_ASSOC);

# Recupération des nom est prenom 
$_SESSION["nom"]= $resultat_global['nom'] . " " . $resultat_global['prenom'];

# Recupération la fonction 
$_SESSION["fct"]= $resultat_global['fonction'];

# Recherche de compte existant
$req = ('SELECT COUNT(*) FROM admin WHERE mdp = :mdp AND identifiant LIKE :identification OR email LIKE :identification;');   
$res = $dbh->prepare($req);
$res->bindParam(":identification", $identification);
$res->bindParam(":mdp", $mdp);
$res->execute();
$resultat = $res->fetchColumn() > 0;

# /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// #
# Connexion au site en fonction des parametre 

if ($resultat) {
    echo '<meta http-equiv="refresh" content="0; URL=accueil.php">';   
} else {
    echo "Identifiant incorrecte ou mot de passe incorrecte !";
    echo '<meta http-equiv="refresh" content="3; URL=connexion.php">';
}
?>