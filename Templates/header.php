<?php
require_once "config/config.php";
?>
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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link CSS -->
    <link rel="stylesheet" href="Templates/style.css">
    <title>Garage parrot</title>
</head>

<body>
    <!-- header/Navbar start-->
    <header>
        <div id="MenuBtn" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>G</span>.ParroT</a>

        <nav class="navbar">
            <a href="./#Home">Home</a>
            <a href="./#Vehicule">Vehicule</a>
            <a href="./#featured">Nos Arrivages</a>
            <a href="./#Service">Services</a>
            <a href="./#Review">Review</a>
            <a href="./#Contact">Contact</a>

            <!-- <a href="./Pictures.php">Ad.Articles</a>
            <a href="./S'inscrire.php">S'inscrire</a>
            <a href="./dates.php">R.vous</a> -->
        </nav>
        <div class="dropdown">
            <button class="btn dropdown-toggle m-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                Action
            </button>
            <ul class="dropdown-menu Action">
                <li><a class="dropdown-item" href="./Pictures.php">Ajouter Articles</a></li>
                <li><a class="dropdown-item" href="./Arrivages.php">Les Arrivages</a></li>
                <li><a class="dropdown-item" href="./reviews.php">Ajouter des avis</a></li>
                <li><a class="dropdown-item" href="./S'inscrire.php">S'inscrire</a></li>
                <li><a class="dropdown-item" href="./dates.php">Les Rendez-vous</a></li>
            </ul>
        </div>

        <div id="LoginBtn">
            <button class="btn">SignUp</button>
            <i class="fas fa-user"></i>
        </div>
    </header>
    <!-- header/Navbar end-->
    <main>