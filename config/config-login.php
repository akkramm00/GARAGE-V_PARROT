<?php
session_start();
require_once 'config.php';
// on verifie les informations du formulaires
if (isset($_POST["email"]) && isset($_POST["password"])) { //on vérifie si l'utilisateur a saisi des informations
    // créons des variables 
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Vérifions si les informations entrées sont correctes
    $check = $bdd->prepare('SELECT pseudo, email, password from users WHERE email = ?');
    $check->execute(array('email'));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $password = hash('sha256', $password);
            if ($data['password'] === $password) {
                $_SESSION['user'] = $data['pseudo'];
                header('Location:landing.php');
            } else header('Location:index.php?login_err=password');
        } else header('Location:index.php?login_err=email');
    } else header('Location:index.php?login_err=already');
} else header('Location:index.php');
