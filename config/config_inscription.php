<?php
// Démarrer la session
session_start();
require_once 'config.php';

// Vérifier si le formulaire a été soumis
if (
    isset($_POST['NOM'])
    && isset($_POST['PRENOM'])
    && isset($_POST['E.mail'])
    && isset($_POST['Password'])
    && isset($_POST['Address'])
    && isset($_POST['Address 2'])
    && isset($_POST['City'])
    && isset($_POST['commentaire'])
) {
    // Récupérer les valeurs des champs du formulaire
    $nom = htmlspecialchars($_POST['NOM']);
    $prenom = htmlspecialchars($_POST['PRENOM']);
    $email = htmlspecialchars($_POST['E.mail']);
    $password  = htmlspecialchars($_POST['Password']);
    $address = htmlspecialchars($_POST['Address']);
    $address2 = htmlspecialchars($_POST['Address 2']);
    $city = htmlspecialchars($_POST['City']);
    $commentaire = htmlspecialchars($_POST['commentaire']);

    $check = $bdd->prepare('SELECT NOM, PRENOM, Password FROM users WHERE email = ?');
    $check->execute(array('email'));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 0) {
        if (strlen($nom) <= 100) {
            if (strlen($prenom) <= 100) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if (strlen($password) <= 7) {
                        $password = hash("sha256", $password);
                        $ip = $_SERVER["REMOTE_ADDR"];
                        echo "Votre mot de passe doit faire minimum 7 caractères";

                        $insert = $bdd->prepare("INSERT INTO formulaire(nom, prenom, email, password, address, address2, city, commentaire) VALUES (:NOM, :PRENOM , :E.mail, :Password, :Address, :Address 2, :City, :ip");
                        $insert->execute(array(
                            'NOM' => $nom,
                            'PRENOM' => $prenom,
                            'E.mail' => $email,
                            'password' => $password,
                            'Address' =>  $address,
                            'Address 2' => $address2,
                            'City' =>  $city,
                            'commentaire' => $commentaire
                        ));
                        header("Location: S'inscrire.php?reg_err=success");
                    } else header("Location: S'inscrire.php?reg_err=password");
                } else header("Location: S'inscrire.php?reg_err=email");
            } else header("Location: S'inscrire.php?reg_err=email_length");
        } else header("Location:S'inscrire.php?reg_err = nom_length");
    } else header("Location:S'inscrire.php?reg_err=already");
}
