 <?php
    require_once 'config/upload_image.php';
    ?>
 <style>
     .box {
         margin: 40px 0;
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
 <!--
 <section id="Vehicule" class="vehicule">
     <h1 class="heading">Voitures a Vendre</h1>
     <div class="swiper VehiculesSlider">
         <div class="swiper-wrapper">

             <div class="swiper-slide box">
                 <img src="IMG-FILE\MAZDA 1.webp" alt="">
                 <div class="content">
                     <h3>New Model</h3>
                     <div class="price"><span>Price</span>$102.000</div>
                     <p>
                         <span class="fas fa-circle"></span>2022
                         <span class="fas fa-circle"></span>Automatic
                         <span class="fas fa-circle"></span>Electric
                         <span class="fas fa-circle"></span>200mph
                     </p>
                 </div>
             </div>
             <div class="swiper-slide box">
                 <img src="IMG-FILE\MAZDA 2.webp" alt="">
                 <div class="content">
                     <h3>New Model</h3>
                     <div class="price"><span>Price</span>$102.000</div>
                     <p>
                         <span class="fas fa-circle"></span>2022
                         <span class="fas fa-circle"></span>Automatic
                         <span class="fas fa-circle"></span>Electric
                         <span class="fas fa-circle"></span>200mph
                     </p>
                 </div>
             </div>
             <div class="swiper-slide box">
                 <img src="IMG-FILE\MAZDA 3.webp" alt="">
                 <div class="content">
                     <h3>New Model</h3>
                     <div class="price"><span>Price</span>$102.000</div>
                     <p>
                         <span class="fas fa-circle"></span>2022
                         <span class="fas fa-circle"></span>Automatic
                         <span class="fas fa-circle"></span>Electric
                         <span class="fas fa-circle"></span>200mph
                     </p>
                 </div>
             </div>
             <div class="swiper-slide box">
                 <img src="IMG-FILE\MAZDA 4.webp" alt="">
                 <div class="content">
                     <h3>New Model</h3>
                     <div class="price"><span>Price</span>$102.000</div>
                     <p>
                         <span class="fas fa-circle"></span>2022
                         <span class="fas fa-circle"></span>Automatic
                         <span class="fas fa-circle"></span>Electric
                         <span class="fas fa-circle"></span>200mph
                     </p>
                 </div>
             </div>
             <div class="swiper-slide box">
                 <img src="IMG-FILE\MAZDA 5.webp" alt="">
                 <div class="content">
                     <h3>New Model</h3>
                     <div class="price"><span>Price</span>$102.000</div>
                     <p>
                         <span class="fas fa-circle"></span>2022
                         <span class="fas fa-circle"></span>Automatic
                         <span class="fas fa-circle"></span>Electric
                         <span class="fas fa-circle"></span>200mph
                     </p>
                 </div>
             </div>
             <div class="swiper-slide box">
                 <img src="IMG-FILE\MAZDA 3.webp" alt="">
                 <div class="content">
                     <h3>New Model</h3>
                     <div class="price"><span>Price</span>$102.000</div>
                     <p>
                         <span class="fas fa-circle"></span>2022
                         <span class="fas fa-circle"></span>Automatic
                         <span class="fas fa-circle"></span>Electric
                         <span class="fas fa-circle"></span>200mph
                     </p>
                 </div>
             </div>
             <div class="swiper-pagination"></div>
         </div>
 </section>
                -->
 <!-- Vehicules Section end -->

 <script>
     document.addEventListener("DOMContentLoaded", function() {
         var swiper = new Swiper(".VehiculesSlider", {
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
             // Responsive breakpoints
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
     });
 </script>