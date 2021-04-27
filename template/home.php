<?php
ob_start();
$title = 'Accueil';
?>
<section id="home" class="hautsection">
    <div class="container-fluid">
    <div class="col-sm-8 col-lg-4 profile-picture">
        <img src="../src/images/laurent.jpg" alt="photo laurent" class="rounded-circle w-50">
    </div>
    </div>

    <div class="heading">
        <h1>Laurent LESAGE</h1><br />
        <h3>Développeur web junior fullstack<br /><br /> JavaScript et PHP/Symfony</h3>
        <div class="row" id="objectif">
            <div class="col-12 col-sm-12 col-md-12 ">
                <p>"Actuellement j'effectue une formation en alternance <br /> de développeur d'application PHP/symfony
                        avec Openclassrooms"</p></br>
                <p><strong>Mes activités complémentaires en entreprise :</strong></br></p>        
                <p id="activite-entreprise"> 
                Wordpress pour site vitrine et e-commerce,</br> Angular 11 pour le front-end application.
                </p>
            </div>
        </div>
 
        <a href='../src/docs/2020_CV-laurentLESAGE.pdf' class='button-download' target='blank'>Télécharger CV</a>

    </div>











</section>
<?php

$content = ob_get_clean();

require('./template.php');