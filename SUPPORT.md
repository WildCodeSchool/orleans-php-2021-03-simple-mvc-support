# Le Simple MVC

## Simple comme noyer un bœuf avant d'avoir vendu le poisson

#### Introduction

Le Simple MVC est un framework "maison" relativement facile à prendre en main qui utilise une architecture *"Modèle - Vue - Contrôleur"*. Ce framework est fourni avec un exemple qui illustre son fonctionnement : tous les fichiers/dossiers dont le nom contient le mot *"Item"*. Tu as déjà étudié ces principes dans de précédents ateliers, mais il est temps de pratiquer avec un cas concret. Ici, en t'inpirant des exemples du Simple MVC, tu créer une route afin de lister tous tes animaux de compagnie 🐈 🐕

#### Avant de commencer : les prérequis

1. Clone [le repo Github du Simple MVC](https://github.com/WildCodeSchool/simple-mvc) sur ta machine

2. Dans ton serveur MySQL, créé une database qui contient une table *"species"* (= espèce) avec 2 champs :

    * id
    * name
    * type = carnivorous

    Ajoute 2 valeurs dans cette table (*cat* 🐱 et *dog* 🐶).

    Et une table *"pet"* (= animal de compagnie) avec 3 champs :

    * id
    * name
    * species_id (clé étrangère)

    Ajoute quelques valeurs dans cette table.

> Note : n'oublie pas de configurer ton db.php avec les informations de connexion à ton serveur MySQL ❗.

#### Le but : afficher tes aniomaux de compagnie par espèces

À partir du code fourni, affiche tous tes animaux de compagnie dans ```Pet/index.html.twig```, à la route ```pet/index```, en les triant par espèce!