<?php
ob_start();
$title = 'Connexion';
?>
<section id="home" class="hautsection">
    <div class="container-fluid">
        <p style="color: white; font-weight: bold; font-size: 3rem; text-align: center;">contenu se connecter</p>
    </div>
</section>
<?php

$content = ob_get_clean();

require('./template.php');