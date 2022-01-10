<!DOCTYPE HTML>
<html lang="fr">
    <head>     
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="<?= $description ?>">
        <title><?= $title ?></title>
        <link href="<?= URL ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= URL ?>public/css/main.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Copse&display=swap" rel="stylesheet"> 
    </head>
    <body>
    <!--début du header -->
    <?php require_once("views/commons/header.php") ?> 
    <!--fin du header -->        
    <!--début du contenu du site -->
    <div class="container border">
        <?= $content ?>
    </div>
    <!--fin du contenu du site -->
    <!--début du footer du site -->
    <?php require_once("views/commons/footer.php"); ?>
    <!--fin du footer du site -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="<?= URL ?>public/js/main.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>

