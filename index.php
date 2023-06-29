<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http_equiv_query="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Swiper JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.css" />

    <!-- link Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <!-- link CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Garage parrot</title>
</head>

<body>
    <!-- header/Navbar start-->
    <header>
        <div id="MenuBtn" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>G</span>.ParroT</a>

        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#Vehicule">Vehicule</a>
            <a href="#featured">Featured</a>
            <a href="#Service">Services</a>
            <a href="#Review">Review</a>
            <a href="#Contact">Contact</a>
        </nav>

        <div id="LoginBtn">
            <button class="btn">SignUp</button>
            <i class="fas fa-user"></i>
        </div>
    </header>
    <!-- header/Navbar end-->

    <!--- Login form Container/Popup -->
    <div class="loginFormContainer">
        <span id="CloseLoginForm" class="fas fa-times"></span>
        <form action="">
            <h3>User Login</h3>
            <input type="email" placeholder="Email" required class="box">
            <input type="password" placeholder="Password" required class="box">
            <p>Mot de passe oublier <a href="#">Click Here</a></p>
            <button class="btn">Submit</button>
            <p>Or Login Width</p>
            <div class="buttons">
                <a href="#" class="btn">Google</a>
                <a href="#" class="btn">Facebook</a>
            </div>
        </form>
    </div>
    <!-- Login form Container/Popup -->
    <!--Home Section Start-->
    <section id="Home" class="home">
        <h3 data-speed="-2" class="homeParalexEffect"><span>G</span>.ParroT</h3>
        <img data-speed="5" class="homeParalexEffect" src="Présentation3.jpg" alt="">
        <a href="#" class="btn">View Cars</a>
    </section>
    <!--Home Section End-->

    <!-- Icons Container Start-->
    <section class="iconsContainer">
        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>100+</h3>
                <p>Branches</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>5800+</h3>
                <p>Voitures Vendues</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>2560+</h3>
                <p>Clients Satisfaits</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>1000+</h3>
                <p>New Launch</p>
            </div>
        </div>
    </section>
    <!-- Icons Container End-->

    <!-- Vehicules Section Start -->
    <section id="Vehicule" class="vehicule">
        <h1 class="heading">Voitures a Vendre</h1>
        <div class="swiper VehiculesSlider">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="MAZDA 1.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price</span>$102.000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="MAZDA 2.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price</span>$102.000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="MAZDA 3.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price</span>$102.000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="MAZDA 4.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price</span>$102.000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="MAZDA 5.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price</span>$102.000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="MAZDA 3.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="price"><span>Price</span>$102.000</div>
                        <p>
                            <span class="fas fa-circle"></span>2022
                            <span class="fas fa-circle"></span>Automatic
                            <span class="fas fa-circle"></span>Electric
                            <span class="fas fa-circle"></span>200mph
                        </p>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>

        </div>
    </section>
    <!-- Vehicules Section end -->

    <!-- Featured Section Start-->
    <section id="featured" class="feature">
        <h1 class="heading">Feature Cars</h1>
        <div class="swiper featureslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="PORCHE 3.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="PORCHE 2.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="PORCHE 1.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="ASTON 1.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="BMW 1.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- For second section -->
        <div class="swiper featureslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="mercedes 1.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="Bugatti 1.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="LOMBO 1.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="LOMBO 2.webp" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="BUGATTI_Mansory_Chiron_2019_Centuria_Front_White_561742_1280x720.jpg" alt="">
                    <div class="content">
                        <h3>New Model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$85.000/-</div>
                        <a href="#" class="btn">Commader</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End-->


    <!-- link JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>