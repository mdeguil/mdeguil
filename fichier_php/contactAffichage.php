<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BTSSIO_WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="container">
    <?php include 'entete.php';?>
    <main class="container px-4"> <!-- Page central -->
        <?php include 'carouselle.php';?>                      


        <?php
        $dsn = 'mysql:host=localhost;dbname=Site_Web_Aunis_Freeware';
        $user = 'mysql';
        $pass = 'mysql';

        try {
        $pdo = new PDO($dsn, $user, $pass);
        } catch (PDOException $e) {
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }

        $reponse = $pdo->query('SELECT * FROM Contacte');

        echo '<br><h1>Demandes des utilisateurs</h1><br>';

        echo '<table class="table">';
        echo '<tr> <th>nom</th> <th>prenom</th> <th>email</th> <th>demande<th> </tr>';

        while ($requete = $reponse->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
                echo '<td>' . $requete['nom'] . '</td>' ;
                echo '<td>' . $requete['prenom'] . '</td>' ; 
                echo '<td>' . $requete['email'] . '</td>' ;
                echo '<td>' . $requete['demande'] . '</td>' ;
            echo '</tr>';
        }
        echo '</table>';
        ?>

        <br>

    </main>
    <?php include 'piedDePage.php';?>
    <?php include 'lienScript.php';?>
</body>
</html>
