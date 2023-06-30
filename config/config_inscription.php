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
    $password = $_POST['inputPassword4'];
    $address = $_POST['inputAddress'];
    $address2 = $_POST['inputAddress2'];
    $city = $_POST['inputCity'];
    $commentaire = $_POST['floatingTextarea2'];

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
