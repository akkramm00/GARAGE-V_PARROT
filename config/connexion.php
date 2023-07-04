<?php
session_start();
// On vérifie les informations du formulaire
if (isset($_POST["email"]) && isset($_POST["password"])) { // On vérifie si l'utilisateur a saisi des informations
    // Créons des variables
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Vérifions si les informations entrées sont correctes
    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $password = hash('sha256', $password);
            if ($data['password'] === $password) {
                $_SESSION['user'] = $data['pseudo'];
                header('Location: landing.php');
                exit();
            } else {
                header('Location: index.php?login_err=password');
                exit();
            }
        } else {
            header('Location: index.php?login_err=email');
            exit();
        }
    } else {
        header('Location: index.php?login_err=already');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
