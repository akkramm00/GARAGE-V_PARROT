<style>
    /* Vehicules Section Start */
    .vehicule {
        margin-bottom: 250px;
    }

    .VehiculesSlider {
        padding-bottom: 5rem;
    }

    .VehiculesSlider .box {
        text-align: center;
        margin-bottom: 6rem;
    }

    .vehicule img {
        width: 70%;
        opacity: 0.5;
        transform: scale(0.5);
    }

    .VehiculesSlider .swiper-slide-active img {
        opacity: 1;
        transform: scale(1.5);
    }

    .VehiculesSlider .box .content {
        padding-top: 1rem;
        transform: scale(0);
    }

    .VehiculesSlider .swiper-slide-active .content {
        transform: scale(1);
    }

    .VehiculesSlider .box .content h3 {
        font-size: 2.5rem;
    }

    .VehiculesSlider .box .content .price {
        color: var(--main);
        font-weight: 600;
        padding: 1rem 0;
        font-size: 2.2rem;
    }

    .VehiculesSlider .box .content .price span {
        color: var(--main);
        font-size: 1.5rem;
        font-weight: 500;
    }

    .VehiculesSlider .box .content p {
        font-size: 1.6rem;
        padding: 1rem 0;
        padding-top: 1.5rem;
        border-top: var(--border);
        color: var(--main);
    }

    .VehiculesSlider .box .content span {
        color: var(--main);
        font-size: 1rem;
        padding: 0 0.5rem;
    }

    .swiper-pagination-bullet-active {
        background: var(--main);
    }

    /* Vehicules Section End*/
</style>

<section id="Vehicule" class="vehicule">
    <h1 class="heading">Voitures à Vendre</h1>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            // Inclusion du fichier de configuration de la base de données
            require 'config/db.php';
            require 'config/upload_image.php';

            // Récupération des données depuis la base de données
            $sql = "SELECT * FROM tb_voitures";
            $result = $conn->query($sql);

            // Vérification s'il y a des données à afficher
            if ($result->num_rows > 0) {
                foreach ($result as $row) {
            ?>
                    <div class="swiper-slide">
                        <img src="data:image/jpeg;base64,<?php echo $row['Image']; ?>" alt="">
                        <h3><?php echo $row['Model']; ?></h3>
                        <div class="price"><span>Prix</span><?php echo $row['Prix']; ?></div>
                        <p>
                            <span class="fas fa-circle"></span><?php echo $row['Année']; ?>
                            <span class="fas fa-circle"></span><?php echo $row['Boite']; ?>
                            <span class="fas fa-circle"></span><?php echo $row['Energie']; ?>
                            <span class="fas fa-circle"></span><?php echo $row['Puissance']; ?>
                        </p>
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

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        grabCursor: true,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // This is For Responsive
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3
            },
        },
    });
</script>


<section id="Vehicule" class="vehicule">
    <h1 class="heading">Voitures a Vendre</h1>
    <div class="swiper VehiculesSlider">
        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="IMG-FILE\mazda-MX-1.png" alt="">
                <div class="content">
                    <h3>MAZDA MX</h3>
                    <div class="price"><span>Prix</span>60 000 €</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Essence
                        <span class="fas fa-circle"></span>180 CV
                    </p>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="IMG-FILE\mazda-MX-2.png" alt="">
                <div class="content">
                    <h3>MAZDA MX</h3>
                    <div class="price"><span>Prix</span>80 000 €</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Essence
                        <span class="fas fa-circle"></span>190 CV
                    </p>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="IMG-FILE\mazda-MX-3.jpg" alt="">
                <div class="content">
                    <h3>MAZDA MX</h3>
                    <div class="price"><span>Prix</span>100 000 €</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Essence
                        <span class="fas fa-circle"></span>180 CV
                    </p>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="IMG-FILE\mazda-MX-4-.jpg" alt="">
                <div class="content">
                    <h3>MAZDA MX</h3>
                    <div class="price"><span>Prix</span>102 000 €</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Electric
                        <span class="fas fa-circle"></span>180 CV
                    </p>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="IMG-FILE\mazda-MX-5.jpg" alt="">
                <div class="content">
                    <h3>MAZDA MX</h3>
                    <div class="price"><span>Prix</span>102 000 €</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Diesel
                        <span class="fas fa-circle"></span>200 CV
                    </p>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="IMG-FILE\mazda-MX-6.jpg" alt="">
                <div class="content">
                    <h3>MAZDA MX</h3>
                    <div class="price"><span>Prix</span>102 000 €</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Electric
                        <span class="fas fa-circle"></span>190 CV
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
</section>
</main>

<!-- Vehicules Section end -->