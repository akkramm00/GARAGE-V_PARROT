<style>
    .inscription {
        padding: 2rem;
        border-radius: 1.2rem;
        border: var(--border);
        box-shadow: var(--box_shadow);
        background: var(--main);
        color: white;
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


<div class="container" id="S'inscrire">
    <div class="row  fs-3 my-5">
        <div class="col-12">
            <h1 class="center text-center">S'INSCRIRE</h1>
        </div>
        <div class="col-9 mx-auto inscription">
            <form class="row g-3 " name="contact" method="post" data-netfy="true" action="">

                <div class="col-md-6">
                    <label for="inputnom" class="form-label">NOM</label>
                    <input type="text" class="form-control rounded-0" id="inputnom" placeholder="Leclerc">
                </div>
                <div class="col-md-6">
                    <label for="inputprenom" class="form-label">PRENOM</label>
                    <input type="text" class="form-control rounded-0" id="inputrenom" placeholder="Gérard">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">E.mail</label>
                    <input type="email" class="form-control rounded-0" id="inputEmail4" placeholder="test@example.com">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control rounded-0" id="inputPassword4" placeholder="Password" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control rounded-0" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control rounded-0" id="inputAddress2" placeholder="Apartement, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control rounded-0" id="inputCity" placeholder="Ville">
                </div>
                <div class="form-floating ">
                    <textarea class="form-control rounded-0" placeholder="laissez-nous un commentaire" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2"></label>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input rounded-0" type="checkbox" id="gridCheck" checked>
                        <label class="form-check-label" for="gridCheck">
                            J'accèpte les conditions générales.
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary Sign rounded-0 p-1 mb-3">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>