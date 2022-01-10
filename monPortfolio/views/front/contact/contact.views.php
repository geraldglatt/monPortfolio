<?php 
ob_start();
 
?>

<?php 
    if(isset($_POST['mail'])){
        $to = "geraldglatt89@gmail.com";
        $from =  $_POST['mail'];
        $object =  $_POST['objet'];
        $message =  $_POST['message'];
        mail($to,$object,$message,$from);
?>
            <div class="alert alert-success text-center" role="alert">
                Message envoyé !
            </div>
<?php  } ?>

<div class="container text-center ">
    <?= formatageTitre("Mes informations personnelles"); ?>
    <!-- <h2 class="m-5 perso_bgBlue text-white rounded-lg p-3 "> >Mes informations personnelles< </h2> -->
    <table class="table table-borderless">
        <thead>
                <tr>
                    <td>
                        <img src="<?= URL ?>sources/images/contact/tel.png" width="100px"/>
                    </td>
                    <td>
                        <img src="<?= URL ?>sources/images/contact/linkedin.png" width="100px"/>
                    </td>
                    <td>
                        <img src="<?= URL ?>sources/images/contact/fb.png" width="100px"/>
                    </td>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-primary">06 29 05 76 12</td>
                    <td><a href="https://www.linkedin.com/in/gerald-glatt-b0a736ab</td>S" target="blank">www.linkedin.com</a></td>
                    <td><a href="https://www.facebook.com/gerald.glatt.7/" target="blank">www.facebook.com</a></td>
                </tr>
            </tbody>
    </table>
</div>
<div class="container text-center ">
<?= formatageTitre("Formulaire de contact"); ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse Mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre mail">
            </div>
            <div class="form-group">
                <label for="objet">Objet :</label>
                <select class="form-control" id="objet" name="objet">
                    <option value="question">Question</option>
                    <option value="remarque">Remarque</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea class="form-control" id="message" rows="3" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>

<?php 
    $content = ob_get_clean();
    require "views/commons/template.php";
    
?>