# Guide d'installation :

Ceci est un guide d'installation du projet, vous pouvez suivre les étapes afin d'obtenir un projet prêt à l'emploi.
Le projet utilise le framework Vue pour le front (vue 3) et Symfony (4.4) pour le back.
Le projet utilise également bootstrap parfois, axios pour l'ajax, font-awesome pour les icônes et webpack pour le
build du front (webpack encore).
Les fichiers du front se trouvent dans le dossier "assets".
Les images uploadées sont à retrouver dans le dossier "public/uploads"

# Création du fichier d'environnement ".env"

A la racine du projet, créer un fichier et nommez-le ".env" .
Voici un exemple de fichier préconfigurer, à adapter selon les besoins et votre base de données.

```
APP_ENV=dev

APP_SECRET=a19f04db675d7db4a38ba269ced17604

DATABASE_URL="mysql://root:@127.0.0.1:3306/Event?serverVersion=13&charset=utf8"
```

# Installation des dépendances

Placez-vous à la racine du projet et lancez les commandes suivantes afin d'installer les dépendances nécessaires au fonctionnement du projet.

```
composer install
```

```
npm install
```

# Création de la base de donnée, des tables et build

Placez-vous à la racine du projet et lancez les commandes suivantes afin de créer la base de données ainsi que les tables nécessaires au fonctionnement du projet.

```
php bin/console doctrine:database:create
```

```
php bin/console make:migration
```

Appuyer sur entrée si vous obtenez le message :

```
 [WARNING] You have 1 available migrations to execute.
 Are you sure you wish to continue? (yes/no) [yes]:
```

Lancer ensuite la commande suivante :

```
php bin/console doctrine:migrations:migrate
```

Si vous obtenez un message rouge, cela n'a aucune incidence sur le projet.
Puis pour finir lancer la commande :

```
npm run dev
```

# Lancement du projet

L'installation est dorénavant terminée, vous pouvez lancer le serveur en rentrant la commande :

```
php bin/console server:run
```

Le site est accessible par défaut à l'adresse : http://127.0.0.1:8000
Pour rappel toutes les commandes doivent être lancer à la racine du projet.
Si vous rencontrez un problème lors de l'installation ou que le guide n'est pas assez clair n'hésiter pas à me contacter.
