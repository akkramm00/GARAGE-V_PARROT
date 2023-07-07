<?php
// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$services = $_POST['services'];
$message = $_POST['message'];

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

//vérification des champs de saisi
// Validation des champs (exemple simple)
if (empty($nom) || empty($prenom) || empty($email) || empty($message) || empty($services)) {
    echo "Veuillez remplir tous les champs.";
} else {
    // Tous les champs sont remplis, vous pouvez effectuer d'autres opérations ici
    echo "Bienvenue , $nom !";
}
// Condition de saisie d'une adresse email valide:
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "votre adresse email est valide";
} else {
    "Veuillez saisir ene adresse email valide";
}

//Condition de saisi de message :
if ($message === 0) {
    echo "veuillez séléctionner un service ";
} else {
    echo "message pris en compte";
}
//Condition de selectionner un service:
if ($services === 0) {
    echo "veuillez séléctionner un service ";
} else {
    echo "message pris en compte";
}

// Insertion des données dans la table rendez_vous
$sql = "INSERT INTO rendez_vous (nom, prenom, email,services, message) VALUES ('$nom', '$prenom', '$email',$services, '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Les données ont été envoyées avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'envoi des données : " . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
