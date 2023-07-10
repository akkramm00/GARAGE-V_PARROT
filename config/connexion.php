<?php
session_start();
// Vérifier si le formulaire a été soumis
if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])) {
    // Récupérer les données du formulaire
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Vérifier si l'utilisateur existe déjà dans la base de données
    $checkQuery = $bdd->prepare("SELECT COUNT(*) as count FROM utilisateurs WHERE email = ?");
    $checkQuery->execute([$email]);
    $count = $checkQuery->fetchColumn();

    if ($count > 0) {
        // L'utilisateur existe déjà, rediriger vers la page de connexion
        header('Location: ../index.php');
        exit();
    } else {
        // L'utilisateur n'existe pas, rediriger vers la page d'inscription
        header("Location: S'inscrire.php");
        exit();
    }
}
