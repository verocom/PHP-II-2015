<?php
if (isset($_POST['nom'], $_POST['prenom']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    
    if ($nom == '')
    {
        $erreurNom = 'Nom invalide!';
    }
    if ($prenom == '')
    {
        $erreurPrenom = 'Prénom invalide!';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 4</title>
    </head>
    <body>
        <h1>
            POST: Envoi d'un formulaire de modification contenant des erreurs et 
            rechargement du formulaire en affichant à l'utilisateur un message 
            d'erreur pour chacun des champs invalides.
        </h1>
        <?php
        // put your code here
        ?>
        <form method="POST">
            <div>
                <label>
                    Nom:
                    <input type="text" name="nom">
                </label>
                <?php
                if (isset($erreurNom))
                {
                    ?>
                    <div><?= $erreurNom ?></div>
                    <?php
                }
                ?>
            </div>
            <div>
                <label>
                    Prénom:
                    <input type="text" name="prenom">
                </label>
                <?php
                if (isset($erreurPrenom)) {
                    ?>
                    <div><?= $erreurPrenom ?></div>
                    <?php
                }
                ?>
            </div>
            <button type="submit">POST!</button>
        </form>
    </body>
</html>
