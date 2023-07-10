<?php
require_once "config/config.php";

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $services = htmlspecialchars($_POST['services']);
    $message = htmlspecialchars($_POST['message']);

    // Vérifier si tous les champs sont remplis
    if (empty($nom) || empty($prenom) || empty($email) || empty($services) || empty($message)) {
        echo "Veuillez remplir tous les champs.";
    } else {
        // Vérifier la validité de l'adresse email
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

            // Vérifier la connexion à la base de données
            if ($conn->connect_error) {
                die("La connexion à la base de données a échoué : " . $conn->connect_error);
            }

            // Préparer la requête d'insertion
            $stmt = $conn->prepare("INSERT INTO rendez_vous (nom, prenom, email, services, message) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nom, $prenom, $email, $services, $message);

            // Exécuter la requête d'insertion
            if ($stmt->execute()) {
                // Redirection vers index.php
                header("Location:../index.php");
                exit();
            } else {
                echo "Une erreur s'est produite lors de l'envoi des données : " . $stmt->error;
            }

            // Fermeture de la connexion à la base de données
            $stmt->close();
            $conn->close();
        }
    }
}
