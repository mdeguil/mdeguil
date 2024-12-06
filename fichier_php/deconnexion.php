<?php
    session_destroy();
    unset($_SESSION['fct']);
    unset($_SESSION['nom']);
    echo '<meta http-equiv="refresh" content="0; URL=accueil.php">'; 
?>