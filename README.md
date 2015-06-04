FAIT PAR JOREL AMTHOR && CHARLES-ÉLIE BÉDARD

Dans le cadre du projet final du cours de PHP à l'ISI, nous avons décidé, en collaboration, de faire un
site web de vente de jeu video.

Pour ce faire, nous avons mis en place un mécanisme d'ajout au panier,
permettant à l'utlisateur d'ajouter des items de son choix dans un panier virtuel. Celui ci reste
permanent, c'est à dire que même si l'utilisateur ferme la page ( volontairement ou non ) le panier
restera rempli avec les items qu'il a selectionnés.

Nous avons également mis en place un système de connexion/deconnexion, permettant a l'utlisateur
d'accéder a des potentielles informations sur son compte ou autres.

Nous avons également créer une page qui se rempli de jeux video en grâce à une base de données. Cette
page se rempli grâce à une boucle & une fonction qui va générer les jeux.

La page d'accueil fonctionne sous le même principe, c'est à dire qu'elle se rempli grâce à notre base de
données, mais comporte 1 paramètre supplémentaire : celui de la taille

L'utilisateur peut s'inscrire automatique via la page d'inscription. La validation se fait
automatiquement via le PHP : le pseudo, le mot de passe & la confirmation du mot de passe suivent des
règles précises. Si celles-ci ne sont pas respéctés, l'utilisateur sera renvoyé a la page
d'inscription avec un message d'erreur en rapport avec l'infraction commise au niveau de la validation.

Pour se connecter, vous devez entrer Jorel comme nom d'utilisateur et jorel12 comme mot de passe. Ces
info sont stocké dans le tableau $authorized à la page _loginform.php

Nous avons également mis en place un footer dans un soucis stylistique, cependant celui-ci contient
des liens vide

