<!-- Service Section Start-->
<section id="Service" class="services">
    <h1 class="heading">Nos Services</h1>
    <div class="boxContainer">
        <?php
        // Connexion à la base de données
        require_once "config/config.php";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion à la base de données
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Préparer la requête pour récupérer les données depuis la table 'services'
        $stmt = $conn->prepare("SELECT Icon, Title, Paragraphe, Bouton FROM services");
        $stmt->execute();
        $stmt->bind_result($Icon, $title, $paragraphe, $Bouton);

        // Boucle pour afficher les données
        while ($stmt->fetch()) {
            // Afficher les données dans la balise <h3> et <p>
            echo '<div class="box">';
            echo '<i class="' . htmlspecialchars($Icon) . '"></i>';
            echo '<h3 name="Title">' . htmlspecialchars($title) . '</h3>'; // Utilisation de htmlspecialchars pour échapper les caractères spéciaux
            echo '<p name="Paragraphe">' . htmlspecialchars($paragraphe) . '</p>'; // Utilisation de htmlspecialchars pour échapper les caractères spéciaux
            echo '<button class="btn"><a href="#Contact">' . htmlspecialchars($Bouton) . '</a></button>';
            echo '</div>';
        }

        // Fermeture de la connexion à la base de données
        $stmt->close();
        $conn->close();
        ?>
    </div>
</section>
<!-- Service Section End-->