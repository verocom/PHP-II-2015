<?php
$messageErreur = '';
if (isset($_POST['toto']))
{
    $toto = $_POST['toto'];
    $estValide = false;
    //
    //validation du formulaire...
    //
    if ($estValide)
    {
        // action
    }
    else
    {
        // le formulaire est invalide.
        $messageErreur = 'Le formulaire est invalide.';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 3</title>
        <style>
            .erreur{
                background: #FCC;
                color: #C00;
                padding: 15px 7px;
                border: 1px solid #C00;
            }
        </style>
    </head>
    <body>
        <h1>
            POST: Envoi d'un formulaire de modification contenant des erreurs et 
            rechargement du formulaire en affichant à l'utilisateur un message 
            d'erreur global.
        </h1>
        
        <?php 
        if ($messageErreur != '') { 
            //echo '<div class="erreur">' . $messageErreur . '</div>';
            ?>
            <div class="erreur"><?= $messageErreur ?></div>
            <?php
        }
        ?>
        <!-- 
        L'attribut action est optionnel puisque le formulaire post à la page en cours
        -->
        <form method="POST" action="edit.php">
            <input type="text" name="toto">
            <button type="submit">POST!</button>
            <!--<input type="submit" value="POST!">-->
        </form>
    </body>
</html>
