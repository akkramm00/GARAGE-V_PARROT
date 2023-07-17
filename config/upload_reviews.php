<?php
require_once "config/config.php";

$photo = "";
$valid = "";

// Créer une connexion à la base de données
$conn = mysqli_connect('localhost', 'root', '', 'users');

// Vérifier si la connexion a échoué
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['btnAjout'])) {
    // Récupérer les données du formulaire
    $nom =  htmlspecialchars($_POST['nom']);
    $prenom =  htmlspecialchars($_POST['prenom']);
    $message =  htmlspecialchars($_POST['message']);

    // Vérifier si un fichier a été sélectionné
    if (isset($_FILES['img'])) {
        $file = $_FILES['img'];

        // Vérifier s'il n'y a pas d'erreur lors de l'upload du fichier
        if ($file['error'] === UPLOAD_ERR_OK) {
            $filename = $file['name'];
            $tempPath = $file['tmp_name'];

            // Obtenir le contenu de l'image encodé en base64
            $imageData = base64_encode(file_get_contents($tempPath));

            // Insérer les données dans la base de données
            if ($conn) {
                $sql = "INSERT INTO reviews (Nom, Prenom , Message, Image) 
                        VALUES ('$nom', '$prenom','$message', '$imageData')";

                if (mysqli_query($conn, $sql)) {
                    $valid = "<div class='alert alert-success'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <b>Image ajoutée avec succès.</b>
                            </div>";
                } else {
                    $valid = "<div class='alert alert-danger'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <b>Erreur lors de l'ajout de l'image dans la base de données.</b>
                            </div>";
                }
            } else {
                $valid = "<div class='alert alert-danger'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <b>Erreur de connexion à la base de données.</b>
                        </div>";
            }
        } else {
            $valid = "<div class='alert alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <b>Erreur lors de l'upload du fichier.</b>
                    </div>";
        }
    } else {
        $valid = "<div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Aucun fichier sélectionné.</b>
                </div>";
    }
}
