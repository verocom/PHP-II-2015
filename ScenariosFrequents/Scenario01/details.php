<?php
$id = $_GET['id'];
if (is_numeric($id)){
    // Traitement...
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Détails</title>
    </head>
    <body>
        <h1>GET: Récupération d'un paramètre de QueryString numérique nommé "id" dans la page de détails.</h1>
        <?php
        echo 'ID: ' . $id;
        ?>
        <br>
        <a href="index.php">Retour à la liste</a>
    </body>
</html>
