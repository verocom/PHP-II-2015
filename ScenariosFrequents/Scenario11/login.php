<?php
// Les utilisateurs valide
$users = [
    'Bob' => 'asdf',
    'Toto' => 'ASDF',
    'Tata' => 'titi',
    'Bobjunior' => 'toto'
];

// Connexion
session_start();
if (isset($_POST['username'], $_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (key_exists($username, $users))
    {
        $expectedPassword = $users[$username];
        if ($expectedPassword == $password)
        {
            // Est connecté! 
            // Création de la variable de session contenatn le nom d'utilisateur
            $_SESSION['username'] = $username;
            header('Location:index.php');
        }
    }
}
// Déconnexion
if (isset($_GET['action'])){
    $action = $_GET['action'];
    if ($action == 'killsession'){
        header('Location: index.php'); /* Redirection vers la page de connexion */
        session_destroy();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 11 - Connexion</title>
    </head>
    <body>
        <h1>
            GET --> SESSION --> GET: Déconnexion du système, suppression des données de la session et redirection.
        </h1>
        <form method="post">
            <p>
                <label>
                    Nom d'utilisateur:
                    <input type="text" name="username">
                </label>
            </p>
            <p>
                <label>
                    Mot de passe:
                    <input type="password" name="password">
                </label>
            </p>
            <p>
                <button type="submit">Connexion</button>
            </p>
        </form>
    </body>
</html>
