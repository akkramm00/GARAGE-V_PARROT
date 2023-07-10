<?php
require_once "config/rendez_vous.php";
?>
<!--Contact form Start-->
<section id="Contact" class="contact">
    <h1 class="heading">Nous Contacter</h1>

    <div class="row">
        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.950066895727!2d1.4107371762735332!3d43.56592355807125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebbcf48268f93%3A0x3a982bed4911e80e!2s226%20Rte%20de%20Seysses%2C%2031100%20Toulouse!5e0!3m2!1sfr!2sfr!4v1687799117781!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <form method="post" enctype="multipart/form-data" action="">
            <h3>Rendez-Vous</h3>
            <input type="text" name="nom" placeholder=" Votre Nom" required class="box">
            <input type="text" name="prenom" placeholder="Votre Prénom" required class="box">
            <input type="email" name="email" placeholder="Votre Email" required class="box">
            <select id="services" name="services" required class="box">
                <option value="service">Séléctionner un service ...</option>
                <option value="service1">Mécanique</option>
                <option value="service2">Carosserie</option>
                <option value="service3">Vidange et filtres</option>
                <option value="service4">Climatisation</option>
            </select>
            <textarea class="box" name="message" required placeholder="Votre Message" id="" cols="30" rows="5"></textarea>
            <button class="btn" type="submit">Envoyer</button>
        </form>
    </div>
    <div class="utilities">
        <div class="col-12 py-3 location d-flex justify-content-around fs-2 my-5 align-items-center">
            <a href="mailto:G.parrot@yahoo.fr"><i class="fas  fa-envelope m-3"></i>G.parrot@yahoo.fr</a>
            <a href="https://www.google.fr/maps/place/226+Rte+de+Seysses,+31100+Toulouse/@43.5659236,1.4107372,17z/data=!3m1!4b1!4m6!3m5!1s0x12aebbcf48268f93:0x3a982bed4911e80e!8m2!3d43.5659197!4d1.4133121!16s%2Fg%2F11c1kgb22g?entry=ttu" target="_blank"><i class="fas fa-location-dot m-3"></i>Garage V.Parrot<br>226 route de seyesses<br>31250 Toulouse</a>
            <a href="tel:(+33) 123456789"><i class="fas  fa-phone m-3"></i></i>(+33) 123456789</a>
        </div>
    </div>
</section>
<!--Contact form End-->