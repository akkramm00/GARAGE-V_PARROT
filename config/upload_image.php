<?php
require_once "db.php";

$photo = "";
$valid = "";
//Bouton Ajouter :
if (isset($_POST['btnAjout'])) {
    //echo "Ok";

    // variable 
    $nom = $_POST['txtnom'];
    $info = $_POST['txtinfo'];

    // Ajout image :
    $photo = $_FILES['img']['name'];
    $upload = "IMG-FILE/" . $photo;

    move_uploaded_file($_FILES['img']['tmp_name'], $upload);

    //requete ajout query exercute
    $sql = "INSERT INTO tb_image(nom,info,photo) VALUES('$nom', '$info' , '$photo')";
    if (mysqli_query($conn, $sql)) {
        // echo "image Ajoutée avec succé.";
        $valid = "<div class='alert alert-success'>
                    <a href='#' class='close'
                    data-dismiss='alert'
                    aria-label='close'>&times;</a><b>Image Ajout avec success.</b>
                </div>";
    } else {
        //echo "Erreur ajout image !";
        $valid = "<div class='alert alert-dabger'>
                    <a href='#' class='close'
                    data-dismiss='alert'
                    aria-label='close'>&times;</a><b>Erreur ajout image !</b>
                </div>";
    }
}
