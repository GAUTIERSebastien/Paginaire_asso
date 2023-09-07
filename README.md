# Paginaire_asso

## Dépendance

```bash
composer install
```

## Composer.json

```json
{
    "name": "digi/paginaire",
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

## Rendu

![Rendu](/asset/img/display_paginaire.png)
