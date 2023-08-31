# Paginaire_asso


TP noté php-PDO


L’association de quartier « Paginaire » met à disposition des livres gratuitement.

Son activité connaît un certain succès et elle vous demande de créer un site web qui va permettre de répertorier les ouvrages qui lui sont donnés régulièrement.

Pour commencer, il s’agit de pouvoir voir, ajouter, modifier et supprimer des livres.

A noter que l’identifiant est un ISBN qui contient 13 chiffres.

Vous créez une base de données « paginaire » puis vous créez la table books. Cf commande SQL en bas de page pour la création de la table books.

Le site web contient au moins deux pages :

· Une page d’accueil qui répond à l’url http://localhost :3000/

· Une page pour voir et gérer les livres qui répond à l’url

o http://localhost :3000/livres ou

o http://localhost :3000/index.php?page=livres


### Répartition des points :

· Le fait de gérer un « CRUD » en utilisant PDO vous rapportera 13 points.

· Le fait d’afficher seulement 10 résultats par page et de gérer la pagination (boutons « résultats suivants » et « résultats précédents ») vous rapportera 2 points.

· Le fait de mettre en place un mécanisme de routes (utilisant le chemin et/ou la query string) dans un pattern MVC vous rapportera 3 points.

· Le fait de mettre en place un pattern singleton pour gérer la connexion et les appels à la base de données vous rapportera 2 points.

· Le fait d’utiliser correctement bootstrap vous rapportera 1 point.


```sql
CREATE TABLE `Books` (

`id` BIGINT NOT NULL,

`title` varchar(250) NOT NULL,

`author` varchar(25) NOT NULL,

`type` varchar(50) NOT NULL,

`image` varchar(255),

`description` text NOT NULL,

PRIMARY KEY (`id`)

) ENGINE = InnoDB DEFAULT CHARSET = utf8;
```
