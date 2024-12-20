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
    <main class="container px-4"> <!-- Page central -->
        <?php include 'carouselle.php';?> 
        <div class="container mt-4">
            <div class="card">
                <div class="card-header text-center text-primary">
                    <strong>Aunis Applications</strong>
                </div>
                <div class="card-body">
                    <form id="downloadForm">
                        <div class="mb-3">
                            <select class="form-select" id="applicationSelect" size="5" aria-label="Applications disponibles">
                            <?php $applications = scandir('../aunis_applications'); $i = 0;
                                foreach ($applications as $application) { 
                                    if ($application !== '.' && $application !== '..') { ?>
                                    <option value="<?= $application ?>"><?= $application ?> </option>
                                    <?php
                                    }
                                }
                            ?>
                            </select>
                        </div>
                        <?php
                            if ((isset($_SESSION['fct']) && $_SESSION['fct'] === 'A')){
                                echo '<div class="d-flex justify-content-end">';
                                echo '<button type="button" class="btn btn-success" id="downloadButton">Télécharger</button>';
                                echo '<a href="historique.php"<button class="btn btn-danger" type="button">Historique</button></a>';
                                echo '</div>';
                            }
                        ?>

                        <?php 
                            if ((isset($_SESSION['fct'])) && (($_SESSION['fct'] === 'V') or ($_SESSION['fct'] === 'M'))){
                                echo '<div class="d-flex justify-content-end">';
                                echo '<button type="button" class="btn btn-success" id="downloadButton">Télécharger</button>';
                                echo '</div>';
                            }
                        ?> 
                    
                        <?php
                            if ((!isset($_SESSION['fct'])))
                            echo '<h4>veuillez vous connectez ou créer un compte pour télécharger les logiciels</h4>';
                        ?>
                    </form>
                </div>
            </div>
        </div><br>

        <script>
            document.getElementById('downloadButton').addEventListener('click', function () {
            // Récupérer l'application sélectionnée
            const applicationSelect = document.getElementById('applicationSelect');
            const selectedFile = applicationSelect.value;

            // Créer un lien de téléchargement dynamique
            const downloadLink = document.createElement('a');
            // Chemin mis à jour pour correspondre à votre structure de dossier
            downloadLink.href = `../aunis_applications/${selectedFile}`;
            downloadLink.download = selectedFile;

            // Déclencher le téléchargement
            downloadLink.click();
            });
        </script>
    </main>
    <?php include 'piedDePage.php';?>
    <?php include 'lienScript.php';?>   
</body>
</html>