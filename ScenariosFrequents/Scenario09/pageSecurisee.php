<?php
$estConnecte = false;
if (!$estConnecte){
    header('Location:login.php?source='.$_SERVER['PHP_SELF']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 9 - Page sécurisée</title>
    </head>
    <body>
        <h1>
            GET --> GET: Redirection avec paramètre.<br>
            - Exemple: un utilisateur non connecté tentant d'accéder à une page sécurisée est redirigé vers une page et affiche un message d'information.<br>
            - x.php --[lien vers]--> y.php --[redirige vers]--> z.php?message=Mon%20Message
        </h1>
        <?php
        // put your code here
        ?>
    </body>
</html>
