 <!--Vehicules Section Start -->

 <section id="Vehicule" class="vehicule">
     <h1 class="heading">Voitures a Vendre</h1>
     <div class="swiper VehiculesSlider">
         <div class="swiper-wrapper">

             <div class="swiper-slide box">
                 <?php
                    // Connexion à la base de données
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "php_image";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Erreur de connexion à la base de données : " . $conn->connect_error);
                    }

                    // Récupération des données depuis la base de données
                    $sql = "SELECT * FROM tb_voitures";
                    $result = $conn->query($sql);

                    // Vérification s'il y a des données à afficher
                    if ($result->num_rows > 0) {
                        foreach ($result as $row) {
                            // Encodage de l'image en base64
                            $imageData = file_get_contents($row['Image']);
                            $base64Image = base64_encode($imageData);
                    ?>
                         <img src="data:image/jpeg;base64,<?php echo $base64Image; ?>" alt="Image">
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

 <!-- Vehicules Section end -->