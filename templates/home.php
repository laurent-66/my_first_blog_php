<?php
ob_start();
$title = 'Accueil';
?>
<div class="container-fluid" id="home">
    <div class="row">
        <div class="heading col-sm-12 col-md-6 col-lg-6">
            <h1>Laurent LESAGE</h1></br>
            <h3>Développeur web junior fullstack<br /><br /> JavaScript et PHP/Symfony</h3>
            <p>"Actuellement j'effectue une formation en alternance <br /> de développeur d'application PHP/symfony
                        avec Openclassrooms"</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 profile-picture">
            <img src="../src/images/laurent.jpg" alt="photo laurent" class="rounded-circle w-50">
        </div>
    </div>    
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div id="objectif">
                <div class="border border-white rounded">
                    <p><strong>Mes activités complémentaires en entreprise :</strong></br></p>        
                    <p id="activite-entreprise"> 
                        Wordpress pour site vitrine et e-commerce,</br> Angular 11 pour le front-end application.
                    </p>
                </div>
            </div>
            <a href='../src/docs/2020_CV-laurentLESAGE.pdf' class='button-download' target='blank'>Télécharger CV</a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <form id="contact-form border border-white rounded" method="post" action="" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstname"><strong>Prénom</strong><span class="blue"> *</span></label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="votre prénom">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-md-6">
                        <label for="name"><strong>Nom</strong><span class="blue"> *</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="votre nom">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <label for="Email"><strong>Email</strong><span class="blue"> *</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="votre email">
                        <p class="comments">Message d'erreur</p>
                    </div>
                        <div class="col-md-6">
                        <label for="phone"><strong>Téléphone</strong></label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="votre téléphone">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-md-12">
                        <label for="message"><strong>Message</strong><span class="blue"> *</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre message" row="4"></textarea>
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-md-12">
                        <p class="blue"><strong>* Ces informations sont requises</strong></p>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="button-send" value="Envoyer">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php

$content = ob_get_clean();

require('./template.php');