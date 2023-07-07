<?php
// Démarrer la session
session_start();
require_once __DIR__ . '/config.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs des champs du formulaire
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 0) {
        if (strlen($pseudo) <= 100) {
            if (strlen($email) <= 100) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if ($password == $password_retype) {
                        $password = hash('sha256', $password);
                        $ip = $_SERVER["REMOTE_ADDR"];

                        $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password, ip) VALUES(:pseudo, :email, :password, :ip)');
                        $insert->execute(array(
                            'pseudo' => $pseudo,
                            'email' => $email,
                            'password' => $password,
                            'ip' => $ip
                        ));
                        header("Location: ../S'inscrire.php?reg_err=Inscription avec succès");
                        exit();
                    } else {
                        header("Location: ../S'inscrire.php?reg_err=Mot de passe incorrecte");
                        exit();
                    }
                } else {
                    header("Location: ../S'inscrire.php?reg_err=Veuillez saisir un Email valide");
                    exit();
                }
            } else {
                header("Location: ../S'inscrire.php?reg_err=email_length");
                exit();
            }
        } else {
            header("Location: ../S'inscrire.php?reg_err=pseudo_length");
            exit();
        }
    } else {
        header("Location: ../S'inscrire.php?reg_err=already");
        exit();
    }
}
