<div class="swiper featureslider">
    <div class="swiper-wrapper">
        <?php
        // Inclusion du fichier de configuration de la base de données
        require_once 'config/config.php';
        require 'config/upload_arrivage.php';

        // Récupération des données depuis la base de données
        $sql = "SELECT * FROM arrivages";
        $result = $conn->query($sql);

        // Vérification s'il y a des données à afficher
        if ($result->num_rows > 0) {
            foreach ($result as $row) {
        ?>
                <div class="swiper-slide box">
                    <img src="data:image/jpeg;base64,<?php echo $row['Image']; ?>" alt="">
                    <div class="content">
                        <h3><?php echo $row['Model']; ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price"><?php echo $row['Prix']; ?></div>
                        <a href="#Contact" class="btn">Commader</a>

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
</div>
</section>
<!--featured Section End