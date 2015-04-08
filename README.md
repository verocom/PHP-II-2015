# PHP-II-2015
Code fait dans le cadre du cours de programmation II, printemps 2015. 

Ces démos, exercices ou autres bout de code ne sont pas fait pour être utilisé intégralement dans un environnement de production mais bien à permettre l'apprentissage de la programmation, en commençant par la base.

## Liste des projets
1. Scénarios fréquents (ScenariosFrequents)
2. Northwind

### Scénarios fréquents
Ce projet contient une liste de scénarios de redirection fréquemment utilisés, et ce, à leurs plus simple forme.

1. GET: Récupération d'un paramètre de QueryString numérique nommé "id" dans la page de détails.
2. GET: Récupération de deux paramètres de QueryString numériques nommées "pageNumber" et "pageSize" représentant le numéro de la page et le nombre d'enregistrements par page d'un système de pagination.
3. POST: Envoi d'un formulaire de modification contenant des erreurs et rechargement du formulaire en affichant à l'utilisateur un message d'erreur global.
4. POST: Envoi d'un formulaire de modification contenant des erreurs et rechargement du formulaire en affichant à l'utilisateur un message d'erreur pour chacun des champs invalides.
5. POST --> GET: Envoi d'un formulaire de création et redirection vers la liste.
6. POST --> GET: Envoi d'un formulaire de création et redirection vers la liste en envoyant un message personnalisé en QueryString.
7. POST --> GET: Envoi d'un formulaire de création et redirection vers la liste en envoyant une clé de message en QueryString. Le message est alors récupéré grâce à la clé, dans un array, et affiché à l'utilisateur.
8. GET --> GET: Redirection sans paramètre. 
	* Exemple: un utilisateur non connecté tentant d'accéder à une page sécurisée.
	* x.php --[lien vers]--> y.php --[redirige vers]--> z.php
9. GET --> GET: Redirection avec paramètre. 
	* Exemple: un utilisateur non connecté tentant d'accéder à une page sécurisée est redirigé vers une page et affiche un message d'information.
	* x.php --[lien vers]--> y.php --[redirige vers]--> z.php?message=Mon%20Message
10. POST --> SESSION --> GET: Connexion dans un système, sauvegarde en session et redirection.
11. GET --> SESSION --> GET: Déconnexion du système, suppression des données de la session et redirection.

### Northwind
Ce projet contient des exemples et l'infrastructure de gestion de la base de données exemple "Northwind", version MySQL, légèrement modifié. [Source intial de la base de données Northwind](https://code.google.com/p/northwindextended/).

#### Modules de gestion CRUD
* Catégories de produits (Categories)
* Fournisseurs (Suppliers)
* Produits (Products)
* Territoires (Territories)
* Associations entre Employés et Territoires (EmployeeTerritories)
* Clients (Customers)
* Expéditeurs (Shippers)
* Employé (Employees)

#### Modules de gestion spéciaux
* Commandes (Orders)
