<style>
    .container-fluid {
        margin: 11rem 0;
    }

    .inscription {
        padding: 2rem;
        border-radius: 1.2rem;
        border: var(--border);
        box-shadow: var(--box_shadow);
        background: var(--main);
        color: white;
    }

    .inscription:hover {
        background: #000;
    }

    .center {
        margin-top: 10rem;
        padding: 2rem;
        text-shadow: 10px 10px 10px var(--main);
    }

    .inscription input {

        font-size: 15px;
    }

    .inscription .btn {
        border: solid 2px white;
    }
</style>


<div class="container-fluid" id="S'inscrire">
    <div class="row  fs-3 my-5">
        <div class="col-12">
            <h1 class="center text-center">S'INSCRIRE</h1>
            <h2>
                <?php
                if (isset($_GET['reg_err'])) {
                    echo  $_GET['reg_err'];
                }
                ?>
            </h2>
        </div>
        <div class="col-9 mx-auto inscription">
            <form class="row g-3 " name="contact" method="post" data-netfy="true" action="config/inscription_traitement.php">

                <div class="col-md-12">
                    <label for="inputnom" class="form-label">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control rounded-0" id="inputnom" placeholder="Leclerc">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">E.mail</label>
                    <input type="email" name="email" class="form-control rounded-0" id="inputEmail4" placeholder="test@example.com" autocomplete="off">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control rounded-0" id="inputPassword4" placeholder="Mot de passe" required autocomplete="off">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Confirmer Mot de passe</label>
                    <input type="text" name="password_retype" class="form-control rounded-0" id="inputAddress" placeholder="Confirmer votre mot de passe" autocomplete="off">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary Sign rounded-0 p-1 my-5 mb-3">Inscription</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>