<header> <!-- Entête -->   
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <div class="container-fluid">
            <img src="../img/logo_af_2.jpeg" alt="Logo d'accueil" style="width:50px;" class="rounded-pill">
            <div class="text-white">
                <?php 
                    if (isset($_SESSION["nom"])) {
                        echo $_SESSION["nom"];
                    }
                ?>
            </div>
            <!-- barre de navigation sur le site -->
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active " href="accueil.php"> Accueil </a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link active" href="actualites.php"> Actualités </a>
                </li>

                <?php
                    if (isset($_SESSION['fct']) && $_SESSION['fct'] === 'A'){
                        echo '<div class="dropdown">';
                            echo '<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Gestion </button>';
                            echo '<div class="dropdown-menu" aria-labelledby="dropdownMenu2">';
                                echo '<a href="blog.php"<button class="dropdown-item" type="button">Blog</button></a>';
                                echo '<a href="nosApplications.php"<button class="dropdown-item" type="button">Nos applications</button></a>';
                                echo '<a href="gestion_compte.php"<button class="dropdown-item" type="button">Comptes</button></a>';
                            echo '</div>';
                        echo '</div>';
                    }else{
                        echo '<li class="nav-item">';
                            echo '<a class="nav-link active" href="nosApplications.php">Nos applications </a>';
                        echo '</li>';
                        echo '<li class="nav-item">';
                            echo '<a class="nav-link active" href="blog.php">Blog </a>';
                        echo '</li>';
                    }
                ?>
                    
                </li>
                <?php
                    if (isset($_SESSION['fct']) && $_SESSION['fct'] !== 'V' ){
                        echo '<li class="nav-item"> ';
                            echo '<a class="nav-link active" href="contactAffichage.php">Contact </a>';
                        echo '</li>';
                    }
                ?>
                <li class="nav-item">
                    <?php 
                        if( isset($_SESSION['fct'])){
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