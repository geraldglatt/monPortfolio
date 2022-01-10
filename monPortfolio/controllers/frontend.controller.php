<?php
require_once "public/utile/formatage.php";

function getPageAccueil(){
    $title = "Page d'accueil";
    $description = "Page du portfolio de gérald Glatt";

    require_once "views/front/accueil.views.php";
}

function getPageContact(){
    $title = "Page Contact";
    $description = "Ceci est la page de contact";

    require_once "views/front/contact/contact.views.php";
}
