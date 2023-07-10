 <?php
    require 'config/upload_image.php';
    ?>
 <style>
     .box {
         margin-top: 5rem;
     }
 </style>

 <!--Vehicules Section Start -->
 <section id="Vehicule" class="vehicule">
     <h1 class="heading">Voitures a Vendre</h1>
     <div class="swiper VehiculesSlider">
         <div class="swiper-wrapper">

             <div class="swiper-slide box">
                 <?php
                    // Récupération des données depuis la base de données
                    $sql = "SELECT * FROM tb_voitures";
                    $result = $conn->query($sql);

                    // Vérification s'il y a des données à afficher
                    if ($result->num_rows > 0) {
                        foreach ($result as $row) {
                    ?>
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
         <div class="swiper-pagination"></div>
     </div>
 </section>
 <!--Vehicules Section Start -->

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

 <!-- Vehicules Section end -->