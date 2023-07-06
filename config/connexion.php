<?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si l'utilisateur existe déjà dans la base de données
    $checkQuery = $bdd->prepare("SELECT COUNT(*) as count FROM utilisateurs WHERE email = ?");
    $checkQuery->execute([$email]);
    $count = $checkQuery->fetchColumn();

    if ($count > 0) {
        // L'utilisateur existe déjà, rediriger vers la page de connexion
        header('Location: login.php');
        exit();
    } else {
        // L'utilisateur n'existe pas, rediriger vers la page d'inscription
        header('Location: S\'inscrire.php');
        exit();
    }
}
