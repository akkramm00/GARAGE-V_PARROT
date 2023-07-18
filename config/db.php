<?php
// connexion au serveur localhost :
$conn = mysqli_connect("localhost", "root", "", "php_image");

// Erreur connexion au serveur :
if ($conn === false) {
    die("Erreur: Non connécté au serveur ." . mysqli_connect_error());
}
