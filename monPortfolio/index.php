<?php

require_once "controllers/frontend.controller.php";
require_once "config/Securite.class.php";
require_once "config/config.php";

try{
  if(isset($_GET['page']) && !empty($_GET['page'])){
    $page = Securite::secureHTML($_GET['page']);

    switch($page){
      case "accueil" : getPageAccueil();
      break;
      case "contact" : getPageContact();
      break;
      case "error301" :
      case "error302" :
      case "error400" :
      case "error401" :
      case "error402" :
      case "error405" :
      case "error500" :
      case "error505" : throw new Exception('Erreur de type : '.$page);
      break;
      case "error403" : throw new Exception('Vous n\'avez pas le droit d\'accès à ce fichier !');
      break;
      case "error404" : throw new Exception("Lapage n'existe pas erreur 404");
      default : throw new Exception("Cette page ne vous est pas accessible !!!");
    }
    

    }else {
      getPageAccueil();
    }
  }catch(Exception $e){
    $title = "error";
    $description = "Page de gestion des erreurs";
  }
?>
