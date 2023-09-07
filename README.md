# Paginaire_asso

## Dépendance

```bash
composer init
```

## Lancer le serveur

```bash
php -S localhost:3000
```

## Composer.json

```json
{
    "name": "digi/paginaire",
    "description": "min framework",
    "type": "project",
    "autoload": {
        "psr-4": {
            "Digi\\Paginaire\\": "src/"
        }
    },
    "authors": [
        {
            "name": "hc"
        }
    ],
    "minimum-stability": "stable",
    "require": {}
}
```


## Query string => Delete


```html
index.php?controller=Book&method=delete&id=
```

## Rendu

![Rendu](/asset/img/display_paginaire.png)
