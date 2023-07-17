<section id="Vehicule" class="vehicule">
    <h1 class="heading">Voitures à Vendre</h1>
    <div class="swiper VehiculesSlider">
        <div class="swiper-wrapper">
            <?php
            // Inclusion du fichier de configuration de la base de données
            require_once "config/config.php";
            require "config/upload_image.php";

            // Récupération des données depuis la base de données
            $sql = "SELECT * FROM tb_voitures";
            $result = $conn->query($sql);

            // Vérification s'il y a des données à afficher
            if ($result->num_rows > 0) {
                foreach ($result as $row) {
            ?>
                    <div class="swiper-slide box">
                        <img src="data:image/jpeg;base64,<?php echo $row['Image']; ?>" alt="">
                        <div class="content">
                            <h3><?php echo $row['Model']; ?></h3>
                            <div class="price"><span>Prix</span><?php echo $row['Prix']; ?></div>
                            <p>
                                <span class="fas fa-circle"></span><?php echo $row['Année']; ?>
                                <span class="fas fa-circle"></span><?php echo $row['Boite']; ?>
                                <span class="fas fa-circle"></span><?php echo $row['Energie']; ?>
                                <span class="fas fa-circle"></span><?php echo $row['Puissance']; ?>
                            </p>
                        </div>
                    </div>

            <?php
                }
            } else {
                echo "Aucune donnée à afficher.";
            }

            // Fermeture de la connexion à la base de données
            $conn->close();
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>