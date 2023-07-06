<?php
require_once __DIR__ . "/db.php";

$photo = "";
$valid = "";



// Vérifier si le formulaire a été soumis
if (isset($_POST['btnAjout'])) {
    // Récupérer les données du formulaire
    $model = $_POST['textmodel'];
    $prix = $_POST['textprix'];
    $annee = $_POST['textannee'];
    $boite = $_POST['textboite'];
    $energie = $_POST['textenergie'];
    $puissance = $_POST['textpuissance'];
    //$imageData = $_POPST['img'];

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
            $sql = "INSERT INTO tb_voitures (Model, Prix, Année, Boite, Energie, Puissance, Image) 
                    VALUES ('$model', '$prix', '$annee', '$boite', '$energie', '$puissance', '$imageData')";

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
