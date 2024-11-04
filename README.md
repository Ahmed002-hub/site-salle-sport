# Site Salle de Sport Associative

Ce projet est un site vitrine développé en Laravel pour une salle de sport associative. Il utilise le modèle MVC (Modèle-Vue-Contrôleur) et intègre des éléments front-end pour la mise en forme, ainsi qu’une carte Google Maps pour la localisation.

## Fonctionnalités

- **Accueil** : Présentation de la salle de sport avec des images (sous licence gratuite) et du texte d’accueil en Lorem Ipsum.
- **Cours** : Planning hebdomadaire des cours de sport avec le nom, le jour, et l’heure.
- **Tarifs** : Liste des tarifs d’adhésion et des options (séance unique, carnet de séances, abonnements).
- **Contact** : Formulaire de contact et informations de localisation (téléphone, adresse, et carte Google Maps intégrée).
- **Mentions Légales** : Informations légales obligatoires.

## Prérequis

Avant de démarrer, assurez-vous d’avoir installé les outils suivants :

- **PHP** (version 8.x ou supérieure)
- **Composer**
- **Node.js** et **npm**
- **Laravel** (installation en ligne de commande facultative, peut être installée via Composer)
- **VSCode** ou un autre éditeur de code

## Installation

Suivez ces étapes pour installer et lancer le projet en local :

1. **Cloner le dépôt :**
   ```bash
   git clone <url-du-depot>
   cd site-salle-sport

**Installer les dépendances PHP avec Composer :**
composer install

**Installer les dépendances front-end avec npm et compiler avec Vite :**
npm install
npm run dev

**Lancer le serveur de développement :**

php artisan serve
Accéder au site pour rendre visible vos modification.

**Structure des Pages**
accueil.blade.php : Vue pour la page d’accueil avec une présentation, des images, et un message de bienvenue.

cours.blade.php : Vue pour le planning des cours, listant les horaires et le type de cours.

tarif.blade.php : Vue pour la liste des tarifs d'adhésion et des options de cours.
contact.blade.php : Vue pour le formulaire de contact, incluant une carte Google Maps.

mentions-legales.blade.php : Vue pour les informations légales du site.
Routes et Contrôleurs

**Les routes principales sont définies dans routes/web.php :**

 : Accueil (Contrôleur AccueilController@index)

/cours : Planning des cours (Contrôleur CoursController@index)

/tarifs : Tarifs (Contrôleur TarifsController@index)

/contact : Page de contact (Contrôleur ContactController@index)

/mentions-legales : Mentions légales (Contrôleur MentionsLegalesController@index)

**Dépendances et Scripts**

Le projet utilise les dépendances suivantes :

Vite : pour la gestion des ressources front-end (compilation et bundling).
app.css : styles personnalisés ajoutés dans resources/css/app.css pour la mise en forme.
app.js : contient un simple console.log('Hello Laravel'); pour vérifier l'intégration du JS.

**Détails Techniques**
Template principal : base.blade.php est le template de base pour toutes les pages, incluant le header, la navigation, et le footer.

Section dynamique : Chaque page étend base.blade.php et personnalise le contenu de la balise <title> ainsi que le contenu principal.

Images : Les images de la page d’accueil sont stockées dans public/img et sont référencées dans le template accueil.blade.php.

**Auteurs**
Projet réalisé dans le cadre d’un exercice Laravel pour le CNAM.

**Licence**
Ce projet est sous licence et réalisé par Ahmed Belafkih.
