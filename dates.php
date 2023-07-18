<?php
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/Templates/header.php";

// Fonction pour supprimer un rendez-vous
function supprimerRendezVous($id)
{
    // Connexion à la base de données
    $conn = new mysqli('localhost', 'root', '', 'users');

    // Vérification la connexion à la base de données
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Préparation de la requête de suppression
    $stmt = $conn->prepare("DELETE FROM rendez_vous WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Exécution de la requête de suppression
    if ($stmt->execute()) {
        echo "Rendez-vous supprimé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de la suppression du rendez-vous : " . $stmt->error;
    }

    // Fermeture de la connexion à la base de données
    $stmt->close();
    $conn->close();
}

?>

<style>
    body {
        margin-top: 15rem;
    }

    .txt-w {
        text-decoration: none;
        color: white;
    }
</style>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 d-flex justify-content-center align-items-center text-center">
                <h1>Liste des rendez-vous</h1>
            </div>
            <div class="col-10 d-flex justify-content-center align-items-center ">
                <table class="table table-dark table-striped  fs-5 table-hover my-5">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Services</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                    // Connexion à la base de données
                    $conn = new mysqli('localhost', 'root', '', 'users');

                    // Vérifier la connexion à la base de données
                    if ($conn->connect_error) {
                        die("La connexion à la base de données a échoué : " . $conn->connect_error);
                    }

                    // Récupérer les données de la table rendez_vous
                    $sql = "SELECT id, nom, prenom, email, services, message FROM rendez_vous";
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
                            echo "<td>";
                            echo "<form method='post' action=''>";
                            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                            echo "<button class='btn btn-primary t-decoration-none txt-w mx-1 p-0 fs-0.5rem' type='submit' name='ajouter'><a href='../#Contact'>Ajouter</a></button>";
                            echo "<button class='btn btn-danger  mx-1 p-0 fs-0.5rem text-white text-decoration-none' type='submit' name='supprimer'>Supprimer</button>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Aucun rendez-vous trouvé.</td></tr>";
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

// Traitement de la soumission du formulaire de suppression
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['supprimer'])) {
    $id = $_POST['id'];
    supprimerRendezVous($id);
}
?>