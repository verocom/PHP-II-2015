<?php
$estConnecte = false;
if (!$estConnecte){
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 8 - Page sécurisée</title>
    </head>
    <body>
        <h1>
            GET --> GET: Redirection sans paramètre.<br>
            - Exemple: un utilisateur non connecté tentant d'accéder à une page sécurisée.<br>
            - x.php --[lien vers]--> y.php --[redirige vers]--> z.php
        </h1>
        <?php
        // put your code here
        ?>
    </body>
</html>
