<?php
// Est-ce que nous avons reçu un pageNumber et un pageSize en GET
// et est-ce qu'ils sont numérique.
if(isset($_GET['pageNumber'], $_GET['pageSize']) && is_numeric($_GET['pageNumber']) && is_numeric($_GET['pageSize']))
{
    $pageNumber = $_GET['pageNumber'];
    $pageSize = $_GET['pageSize'];
}
else 
{
    // Initialisation de valeurs par défaut
    $pageNumber = 1;
    $pageSize = 10;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 2</title>
    </head>
    <body>
        <h1>
            GET: Récupération de deux paramètres de QueryString numériques 
            nommées "pageNumber" et "pageSize" représentant le numéro de la 
            page et le nombre d'enregistrements par page d'un système de 
            pagination.
        </h1>
        <div>
            <b>pageNumber</b>: <?= $pageNumber ?>
        </div>
        <div>
            <b>pageSize</b>: <?= $pageSize ?>
        </div>
        <p>
            <a href="index.php?pageNumber=2&amp;pageSize=20">Page 2 - 20 enregistrements par page</a><br>
            <a href="index.php?pageNumber=5&amp;pageSize=10">Page 5 - 10 enregistrements par page</a>
        </p>
    </body>
</html>
