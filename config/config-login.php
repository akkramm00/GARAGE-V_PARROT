<?php
// on verifie les informations du formulaires
if (isset($POST["email"]) && isset($POST["password"])) { //on vérifie si l'utilisateur a saisi des informations
    // créons des variables 
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Vérifions si les informations entrées sont correctes
    //connection à la base de données,
    $nom_serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $nom_base_données = "users";

    $con = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_données);
    // Autentification de l'utilisateur,

    $req = mysqli_query($con, "SELECT * FROM formulaire WHERE email ='$email' AND mot_passe = '$password");
    $num_ligne = mysqli_num_rows($req);
    if ($num_ligne > 1) {
        header("location : index.php");
    } else {
        header("S'inscrire.php");
    };
}
