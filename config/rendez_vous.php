<?php
require_once "config/config.php";

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $services = htmlspecialchars($_POST['services']);
    $message = htmlspecialchars($_POST['message']);

    // Vérification si tous les champs sont remplis
    if (empty($nom) || empty($prenom) || empty($email) || empty($services) || empty($message)) {
        echo "Veuillez remplir tous les champs.";
    } else {
        // Vérification la validité de l'adresse email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Veuillez saisir une adresse email valide.";
            header("Location:../#Contact");
        } else {
            // Connexion à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Vérification de la connexion à la base de données
            if ($conn->connect_error) {
                die("La connexion à la base de données a échoué : " . $conn->connect_error);
            }

            // Préparation de la requête d'insertion
            $stmt = $conn->prepare("INSERT INTO rendez_vous (nom, prenom, email, services, message) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nom, $prenom, $email, $services, $message);

            // Exécution de la requête d'insertion
            if ($stmt->execute()) {
                // Redirection vers index.php
                echo ('
                <div class="d-flex justify-content-center align-items-center w-100 bg-success text-white fs-3 p-3">
                Rendez-vous enregisté avec succé !
                </div>'
                );
            } else {
                echo "Une erreur s'est produite lors de l'envoi des données : " . $stmt->error;
            }

            // Suppression d'un rendez-vous
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                // Connexion à la base de données
                $conn = new mysqli('localhost', 'root', '', 'users');

                // Vérification de la connexion à la base de données
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
        }
    }
}
