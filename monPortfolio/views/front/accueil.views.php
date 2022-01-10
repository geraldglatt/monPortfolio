<?php 
ob_start();

?>
<!-- section 1 -->
<?php require_once("views/front/sections_accueil/section1.php") ?>
<!-- fin section 1 -->
<!-- section 2 -->
<?php require_once("views/front/sections_accueil/section2.php") ?>
<!-- fin section 2 -->
<!-- section 3 -->
<?php require_once("views/front/sections_accueil/section3.php") ?>
<!-- fin section 3 -->
<!-- section 4 -->
<?php require_once("views/front/sections_accueil/section4.php") ?>
<!-- fin section 5 -->
<?php require_once("views/front/sections_accueil/section5.php") ?>
<!-- fin section 5 -->
<?php 
    $content = ob_get_clean();
    require "views/commons/template.php";
?>