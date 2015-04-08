<?php
$links = [
    [
        'url' => '/Scenario01/index.php',
        'text' => 'GET: Récupération d\'un paramètre de QueryString numérique nommé "id" dans la page de détails.'
    ],
    [
        'url' => '/Scenario02/index.php',
        'text' => 'GET: Récupération de deux paramètres de QueryString numériques nommées "pageNumber" et "pageSize" représentant le numéro de la page et le nombre d\'enregistrements par page d\'un système de pagination.'
    ],
    [
        'url' => '/Scenario03/edit.php',
        'text' => 'POST: Envoi d\'un formulaire de modification contenant des erreurs et rechargement du formulaire en affichant à l\'utilisateur un message d\'erreur global.'
    ],
    [
        'url' => '/Scenario04/index.php',
        'text' => 'POST: Envoi d\'un formulaire de modification contenant des erreurs et rechargement du formulaire en affichant à l\'utilisateur un message d\'erreur pour chacun des champs invalides.'
    ],
    [
        'url' => '/Scenario05/index.php',
        'text' => 'POST --> GET: Envoi d\'un formulaire de création et redirection vers la liste.'
    ],
    [
        'url' => '/Scenario06/index.php',
        'text' => 'POST --> GET: Envoi d\'un formulaire de création et redirection vers la liste en envoyant un message personnalisé en QueryString.'
    ],
    [
        'url' => '/Scenario07/index.php',
        'text' => "POST --> GET: Envoi d'un formulaire de création et redirection vers la liste en envoyant une clé de message en QueryString. Le message est alors récupéré grâce à la clé, dans un array, et affiché à l'utilisateur."
    ],
    [
        'url' => '/Scenario08/index.php',
        'text' => 'GET --> GET: Redirection sans paramètre.'
    ],
    [
        'url' => '/Scenario09/index.php',
        'text' => 'GET --> GET: Redirection avec paramètre.'
    ],
    [
        'url' => '/Scenario10/index.php',
        'text' => 'POST --> SESSION --> GET: Connexion dans un système, sauvegarde en session et redirection.'
    ],
    [
        'url' => '/Scenario11/index.php',
        'text' => 'GET --> SESSION --> GET: Déconnexion du système, suppression des données de la session et redirection.'
    ],
]

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ol>
        <?php
        foreach ($links as $link) {
            echo '<li><a href="'.$link['url'].'">'.$link['text'].'</a></li>';
        }
        ?>
        </ol>
    </body>
</html>
