# PHP-II-2015
Code fait dans le cadre du cours de programmation II, printemps 2015. 

Ces démos, exercices ou autres bout de code ne sont pas fait pour être utilisé intégralement dans un environnement de production mais bien à permettre l'apprentissage de la programmation, en commençant par la base.

## Liste des projets
1. Scénarios fréquents (ScenariosFrequents)
2. Northwind

### Scénarios fréquents
Ce projet contient une liste de scénarios de redirection fréquemment utilisés, et ce, à leurs plus simple forme.

1. GET (récupération d'un ou plusieurs paramètre(s) de QueryString)
2. POST (envoi d'un formulaire de modification contenant erreurs et rechargement du formulaire)
3. POST --> GET (envoi d'un formulaire de modification et redirection vers la liste)
4. GET --> GET (redirection, par exemple, utilisateur non connecté tentant d'accéder à une page sécurisée)
5. POST --> SESSION --> GET (connexion dans un système, sauvegarde en session et redirection)
6. GET --> SESSION --> GET (déconnexion du système, suppression des données de la session et redirection)

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
