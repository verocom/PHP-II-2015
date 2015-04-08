<?php
if (isset($_POST['nom'], $_POST['prenom']))
{
    // Traitement et validation ici ...
    header('Location:index.php?msg=createSuccess');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 7 - Création d'un enregistrement</title>
    </head>
    <body>
        <h1>
            POST --> GET: Envoi d'un formulaire de création et redirection 
            vers la liste en envoyant une clé de message en QueryString. 
            Le message est alors récupéré grâce à la clé, dans un array, 
            et affiché à l'utilisateur.
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
            </div>
            <div>
                <label>
                    Prénom:
                    <input type="text" name="prenom">
                </label>
            </div>
            <button type="submit">POST!</button>
        </form>
    </body>
</html>
