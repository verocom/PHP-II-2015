<?php
$messages = [
    'createSuccess' => 'La création c\'est effectuée avec succès.',
    'editSuccess' => 'La modification c\'est effectuée avec succès.',
    'deleteSuccess' => 'La suppression c\'est effectuée avec succès.'
];

$msg = '';
if (isset($_GET['msg']))
{
    $msgKey = $_GET['msg'];
    if (isset($messages[$msgKey])) // if (key_exists($msgKey, $messages))
    {
        $msg = $messages[$msgKey];
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 7 - Liste</title>
    </head>
    <body>
        <h1>
            POST --> GET: Envoi d'un formulaire de création et redirection 
            vers la liste en envoyant une clé de message en QueryString. 
            Le message est alors récupéré grâce à la clé, dans un array, 
            et affiché à l'utilisateur.
        </h1>
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
