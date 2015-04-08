<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 11 - Index</title>
    </head>
    <body>
        <h1>
            GET --> SESSION --> GET: Déconnexion du système, suppression des données de la session et redirection.
        </h1>
	<?php if (isset($_SESSION['username'])) { ?>
	    <a href="login.php?action=killsession" class="myButton">Me déconnecter</a>
	    
	<?php } else { ?>
        <a href="login.php">Connexion</a>
	<?php } ?>
	
    </body>
</html>
