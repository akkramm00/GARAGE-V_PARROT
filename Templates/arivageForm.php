<!-- arrivage form style start-->

<style>
    * {
        font-size: 1.5rem;
    }

    header .logo {
        font-size: 2.5rem;
        font-weight: 700;
    }

    .h1 {
        text-shadow: 10px 10px 10px var(--main);
    }

    #Pictures {
        margin: 10rem 0;
    }

    .bg {
        background: var(--main);
        padding: 2rem;
        box-shadow: var(--box_shadow);
        border-radius: 1rem;
    }

    .bg:hover {
        background: #000;
    }

    .border {
        border: 2px solid #fff;
    }
</style>
<!-- arrivage form style end -->

<!-- arrivage form start -->
<main class="container-fluid" id="Pictures">
    <div class="row h1">
        <div class="col-12 text-center p-5 fw-bold">
            <h1>LES ARRIVAGES</h1>
        </div>
    </div>
    <div class="container bg col col-10 col-md-offset-3 ">
        <div class="panel panel-info ">
            <div class="panel-heading text-center  text-white fs-1 py-5">
                AJOUT DES ARTICLES
            </div>
            <div class="panel-body ">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 my-1">
                            <label class="col-sm-2 col-form-label text-white ">Model</label>
                            <input type="text" name="textmodel" class="form-control p-3">
                        </div>
                        <div class="col-sm-12 col-md-6 my-1">
                            <label class="col-sm-2 col-form-label text-white ">Prix</label>
                            <input type="text" name="textprix" class="form-control p-3">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 my-1">
                            <label class="col-sm-2 col-form-label text-white ">Photo</label>
                            <input type="file" name="img" class="form-control-file p-2 bg-white w-100 rounded-2 p-0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-12">
                            <input type="submit" name="btnAjout" class="btn btn-primary border rounded-0 p-2">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- arrivage form start -->