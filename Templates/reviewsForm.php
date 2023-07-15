<?php
require_once 'config/upload_reviews.php';
?>


<style>
    .bg {
        background: var(--main);
        padding: 2rem;
        box-shadow: var(--box_shadow);
        border-radius: 1rem;
    }

    .bg:hover {
        background: #000;
    }

    .Mtop {
        margin: 10rem 0;
    }
</style>

<!--Contact form Start-->
<div class="container-fluid ">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12">
            <section id="Contact" class="container contact">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class=" clo-12 panel-heading text-center fs-1 Mtop">
                        AJOUTER UN AVIS
                    </div>
                    <div class="col-8 d-flex justify-content-center align-items-center">
                        <form method="post" class="bg" enctype="multipart/form-data" action="">
                            <h3 class="text-white">Ajouter un Avis</h3>
                            <input type="text" name="nom" placeholder=" Votre Nom" required class="box">
                            <input type="text" name="prenom" placeholder="Votre Prénom" required class="box">
                            <textarea class="box" name="message" required placeholder="Votre Message" id="" cols="30" rows="5"></textarea>
                            <input type="file" name="img" class="box bg-white">
                            <input type="submit" name="btnAjout" class="btn btn-primary border rounded-0 p-2">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>