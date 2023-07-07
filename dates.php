<?php
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/Templates/header.php";
?>
<style>
    body {
        margin-top: 15rem;
    }
</style>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 text-center">
                <h1>Liste des rendez-vous</h1>
            </div>
            <div class="col-10 ">
                <table class="table table-dark table-striped  fs-5 table-hover my-5">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Services</th>
                        <th>Message</th>
                    </tr>

                    <?php
                    // Connexion à la base de données
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "users";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Vérifier la connexion à la base de données
                    if ($conn->connect_error) {
                        die("La connexion à la base de données a échoué : " . $conn->connect_error);
                    }

                    // Récupérer les données de la table rendez_vous
                    $sql = "SELECT nom, prenom, email, services, message FROM rendez_vous";
                    $result = $conn->query($sql);

                    // Afficher les données dans le tableau
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["nom"] . "</td>";
                            echo "<td>" . $row["prenom"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["services"] . "</td>";
                            echo "<td>" . $row["message"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Aucun rendez-vous trouvé.</td></tr>";
                    }

                    // Fermeture de la connexion à la base de données
                    $conn->close();
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>
<?php
require_once "Templates/footer.php";
?>