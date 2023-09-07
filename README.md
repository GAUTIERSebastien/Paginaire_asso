# Paginaire_asso


## Dépendance

```bash
composer init
```

## Composer.json

```json
{
    "name": "digi/paginaire", // Attention le nom du projet doit être exactement identique 
    "type": "project",
    "autoload": {
        "psr-4": {
            "Digi\\Paginaire\\": "src/"
        }
    },
    "authors": [
        {
            "name": "Sébastien GAUTIER",
            "email": "sgautier034@gmail.com"
        }
    ],
    "minimum-stability": "stable",
    "require": {}
}
```

## SQL

[Création des tables](/asset/sql/Books.sql)

[Insertion des données](/asset/sql/population.sql)


## Lancer le serveur

```bash
php -S localhost:3000
```

## Query string => Delete


```html
index.php?controller=Book&method=delete&id=
```

## Rendu

![Rendu](/asset/img/display_paginaire.png)
