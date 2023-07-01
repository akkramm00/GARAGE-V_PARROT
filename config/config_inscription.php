<?php
// Démarrer la session
session_start();

// Connexion à la base de données 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs des champs du formulaire
    $nom = $_POST['inputnom'];
    $prenom = $_POST['inputprenom'];
    $email = $_POST['inputEmail4'];
    $password  = $_POST['inputPassword4'];
    $address = $_POST['inputAddress'];
    $address2 = $_POST['inputAddress2'];
    $city = $_POST['inputCity'];
    $commentaire = $_POST['floatingTextarea2'];

    //Conditions de saisi de données
    if (empty($nom) || empty($prenom)  || empty($email)  || empty($password)  || empty($address)  || empty($city)) {
        echo "Veillez saisir tous les champs du formulaire";
    } else {
        echo "Bienvenue, $prenom !";
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Votre adresse email est valide";
    } else {
        echo "Veuillez saisir une adresse email valide";
    }

    if (strlen($password) <= 7) {
        echo "Votre mot de passe doit faire minimum 7 caractères";
    } else {
        echo "Bienvenue" . $email;
    }

    // Stocker les valeurs dans la session
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['email'] = $email;
    // Ne stockez jamais le mot de passe dans la session !
    $_SESSION['address'] = $address;
    $_SESSION['address2'] = $address2;
    $_SESSION['city'] = $city;
    $_SESSION['commentaire'] = $commentaire;

    // Rediriger vers une autre page après la soumission du formulaire
    header('Location: index.php');
    exit();
}
