`=============================================================================================================`
`=                     I  -   ETAPES A SUIVRE POUR CLONE ET DEMARRER LE PROJET `
`=   Ces etapes doivent etre executees si et eulement si vous n'avez pas le projet de base sur votre machine`
`=============================================================================================================`

## About online-marcket-api

Cette api represente le backend du projet online-marcket et va nous permettre de
fournir les donnees au format Json qui seront ensuite exploitees du cotee vu vec React Native et react.js.

La description qui suit vous montre comment recuper le projet chez vous et le lancer.

## Recuperer le projet en ligne

[1] Pour le faire vous dever aller sur le depot distant(depot sur lequel on vous aura inviter
au [prealable]).

[2] Cliquer sur le boutton clone et copier l'addresse https.

[3] En local ouvrez espace de travail laravel et lancer y un terminal

[4] Dans le terminal nouvellement ouvert, taper les commandes suivantes:

- `git clone -b master https://gitlab.com/TemateuRoslyn/online-market-api.git`
- Se deplacer dans le projet en faisant `cd online-market-api.git`

## Telecharger les dependances dans le projet recupere

[5] Une fois le projet telecharger, vous devez installer les dependances laravel manquante en faisant:

- Ouvrir un terminal dans le projet telecharge puis `composer install`
- Au cas ou cette commande echoue, mettre d'abord composer a jour en faisant : `composer update`

[6] Une fois toute les dependances telechargees, vous aller remarquer l'absence du fichier .env dans 
l'arboraissance du projet.
pour l'avoir de nouveau, vous devez copier et coller le fichier .env.example, renommer le fichier .env.example-copie en .env et donner les configuration local de votre base de donnees.

 [6.1] generer une cle d'application
 
 `php artisan key:generate`
 
 Dans le fichier .env que vous aurez obtenu, renseigner le nom de votre base de donnes:
 example: learning_space_db
 demarrer xampp ou wampp et creer une base de donnes du meme nom (learning_space_db pour notre exemple). Ajoutez l'encodage utf8_general_ci sur la base de donnees avant de la creer.


## Les configuration local du projet (BD, seeder et passport)

 [7] Apres avoir tout configuer au niveau de votre fichier .env et la creation de votre base de donnees.
 Il faut generer les migration et seeder de  votre application par la commande:

 `composer install`
 `composer update`
 `php artisan config:cache`
 `php artisan migrate:fresh --seed`

 [7.1] Apres les migration faire un storage link
 `php artisan storage:link`

 [8] gener les clients passport pour l'api

 `php artisan passport:install`


 [9] Lancer le projet

 Pour finir, pour lancer le projet,vous devez taper le commande:

`php artisan serve --port 8000`

votre projet laravel sera lance sur le port 8000, ansi vous pourrez le consulter en allant a l'addresse: (http://127.0.0.1:8000/)

`=============================================================================================================`
`=                     II  -   ETAPES A SUIVRE SE METTRE AJOUR (PULL) ET DEMARRER LE PROJET `
`=   Ces etapes doivent etre executees si vous souhaitz seulement mettre a jour le projet sur votre machine`
`=============================================================================================================`

## Recuperation et configuration
[1] on enregistre d'abord nos modification en local
    - `git add .`
    - `git commit -m "entrez le message de votre commit"`
[2] on recupere le travaille sur main
    - `git pull origin main`
[3] on install les dependances
    -  `composer install`
    - `composer update`
    - `php artisan config:cache`
[4] on effectue les migration et les seeding
    -   `php artisan migrate:fresh --seed`
[4.1] Apres les migration faire un storage link
 `php artisan storage:link`
[5] on install les clients passport pour securiser les echanges avec l'API
    - `php artisan passport:install`
[6] on Demarre le projet finalement
    - `php artisan serve`
