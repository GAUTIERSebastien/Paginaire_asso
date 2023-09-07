# Paginaire_asso

## Dépendance

```bash
composer init
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
