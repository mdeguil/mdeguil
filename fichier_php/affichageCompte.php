<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BTSSIO_WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <?php include 'entete.php';?>  
    <main class="container"> 
        <br>
        <h1 class="text-center">Compte crée</h1>
        <b><p>Voici tout les compte existant avec leurs fonction : </p></b>
        <br>
        <?php
            $dbh = new PDO('mysql:host=localhost;dbname=Site_Web_Aunis_Freeware', 'mysql', 'mysql');
            
            $req = $dbh->query('SELECT identifiant, fonction FROM admin');
            
            echo '<table class="table">';
            echo '<tr><th>Identifiant</th><th>Fonction</th></tr>';
            while ($requete = $req->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                    echo '<td>' . $requete['identifiant'] . '</td>' ;
                    echo '<td>' . $requete['fonction'] . '</td>' ;
                echo '</tr>';
            }
            echo '</table>';
        ?>
        
    </main>
    <?php include 'piedDePage.php';?>
    <?php include 'lienScript.php';?>   
</body>
</html>