<?php
$msg = '';
if (isset($_GET['msg']))
{
    $msg = $_GET['msg'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 6 - Liste</title>
    </head>
    <body>
        <div><?= $msg ?></div>
        <a href="create.php">Création d'un enregistrement</a>
        <ul>
            <li>Ma</li>
            <li>Liste</li>
            <li>De</li>
            <li>Données</li>
        </ul>
    </body>
</html>
