<!-- Review section Start -->
<section id="Review" class="review">
    <h1 class="heading">Avis de Nos clients</h1>
    <div class="swiper ReviewSlider">
        <div class="swiper-wrapper">

            <?php
            // Inclusion du fichier de configuration de la base de données
            require "config/config.php";
            require "config/upload_reviews.php";

            // Récupération des données depuis la base de données
            $sql = "SELECT * FROM reviews";
            $result = $conn->query($sql);

            // Vérification s'il y a des données à afficher
            if ($result->num_rows > 0) {
                foreach ($result as $row) {
            ?>

                    <div class="swiper-slide box">
                        <img src="data:image/jpeg;base64,<?php echo $row['Image']; ?>" width="180px" height="180px">
                        <div class="content">
                            <span class="fs-3"><?php echo $row['Nom']; ?></span>
                            <span class="fs-3"><?php echo $row['Prenom']; ?></span>
                            <p><?php echo $row['Message']; ?></p>
                            <h3>Satisfait</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
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

<!-- Review section End-->