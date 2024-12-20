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
</div>