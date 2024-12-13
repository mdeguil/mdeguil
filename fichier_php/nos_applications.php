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
    <header> <!-- Entête -->
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
            <div class="container-fluid">
                <img src="../img/logo_af_2.jpeg" alt="Logo d'accueil" style="width:50px;" class="rounded-pill">
                <?php echo $_SESSION["nom"]; ?>
                <!-- barre de navigation sur le site -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active " href="accueil.php"> Accueil </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" href="actualites.php"> Actualités </a>
                    </li>

                    <?php
                        if( $_SESSION['fct'] !== 'A' ){
                            echo '<li class="nav-item">';
                                echo '<a class="nav-link active" href="nos_applications.php">Nos applications </a>';
                            echo '</li>';
                            echo '<li class="nav-item">';
                                echo '<a class="nav-link active" href="">Blog </a>';
                            echo '</li>';
                        }else{
                            echo '<div class="dropdown">';
                                echo '<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Gestion </button>';
                                echo '<div class="dropdown-menu" aria-labelledby="dropdownMenu2">';
                                    echo '<button class="dropdown-item" type="button">Blog</button>';
                                    echo '<button class="dropdown-item" type="button">Applications</button>';
                                    echo '<button class="dropdown-item" type="button">Comptes</button>';
                                echo '</div>';
                            echo '</div>';
                        }
                    ?>
                        
                    </li>
                    <?php
                        if ($_SESSION['fct'] !== NULL && $_SESSION['fct'] !== 'V' ){
                            echo '<li class="nav-item"> ';
                                echo '<a class="nav-link active" href="">Contact </a>';
                            echo '</li>';
                        }
                    ?>
                    <li class="nav-item">
                        <?php 
                            if( $_SESSION['fct'] !== NULL){
                                echo '<a class="nav-link active" href="deconnexion.php">Déconnexion </a>';
                            } else {
                                echo '<a class="nav-link active" href="connexion.php">Connexion </a> ';
                            }
                        ?> 
                    </li>
                </ul>
            </div>
        </nav> 
    </header>
    <main class="container px-4"> <!-- Page central -->
        <br>
        <!-- Carouselle dynamique en PHP avec recherche d'image automatique dans un dossier -->
<div id="carouselExample" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $images = scandir('../aunis_photos');
        $i = 0;

        foreach ($images as $image) {
            // Ignorer les entrées spéciales '.' et '..' et vérifier que c'est un fichier image
            if ($image !== '.' && $image !== '..' && preg_match('/\.(jpg|jpeg|png|gif)$/i', $image)) {
                ?>
                <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                    <img src="../aunis_photos/<?php echo $image; ?>" class="d-block w-100" alt="Image <?php echo $i + 1; ?>">
                </div>
                <?php
                $i++;
            }
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
</div><br>
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
                if (($_SESSION['fct'] === 'A')){
                    echo '<div class="d-flex justify-content-end">';
                    echo '<button type="button" class="btn btn-success" id="downloadButton">Télécharger</button>';
                    echo '<a id="envoyer" href="historique.html"><button class=" btn border-danger btn-danger text-light">Historique</button></a>';
                    echo '</div>';
                }
            ?>

            <?php 
                if (($_SESSION['fct'] === 'V') or ($_SESSION['fct'] === 'M')){
                    echo '<div class="d-flex justify-content-end">';
                    echo '<button type="button" class="btn btn-success" id="downloadButton">Télécharger</button>';
                    echo '</div>';
                }
            ?> 
        
            <?php
                if (($_SESSION['fct'] === NULL))
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </main>
    <footer class="footer"> <!-- Pied de page -->
        <div class="row border border-success bg-success bg-opacity-50">
            <div class="col align-self-center">
                <a class="nav-link disabled black">Copyright Aunis Freeware</a>
            </div>
            <div class="col align-self-center">
                <a class="nav-link active" href="mentions_legales.php">Mentions légales</a>
            </div>
            <div class="col align-self-center">
                <img src="../img/facebook.jpg" alt="facebook" style="width:50px;">
            </div>
            <div class="col align-self-center">
                <img src="../img/instagram.png" alt="instagram" style="width:50px;">
            </div>
            <div class="col align-self-center">
                <a href="contactez-nous.php"><button class="btn border-secondary text-secondary">Contactez nous</button></a>
            </div>
        </div>
    </footer>   
</body>
</html>