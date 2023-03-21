# Cahier des Charges

Création d'un site web pour une association d'acupuncture.

## 1 - Présentation générale du sujet d’étude

1. disposer d’un service en ligne leur permettant de consulter la liste des symptômes des principales pathologies en acupuncture.
   ![./images/typePatologie.png](./images/typePatologie.png) ;
2. pouvoir afficher que certaines des pathologies en fonction de différents critères (type de pathologie, choix des méridiens 1, etc.).
   ![./images/filtres.png](./images/filtres.png)
3. de rechercher les pathologies comportant certains symptômes.


## 2 - Contraintes techniques

1. Accessibilité et versions HTML
 - L’ensemble du site respectera les normes d’accessibilité de niveau AAA.
 -  Il sera écrit en HTML 5.
 -  De plus, toute page du site devra être accessible de la page d’accueil en 3 interac- tions au maximum (clic, raccourci, etc.).
 -  La navigation devra être possible sans souris ou sans clavier.

2. Environnement d’exécution
   - Linux
   - Apache
   - PHP
   - PostgreSQL

3. Base de connaissances
   - Utilisation d'un script SQL de génération de base de données: [lien de la base](https://prod.e-campus.cpe.fr/course/view.php?id=2188#section-3).
   - Interdiction de modifier les tables de cette base
   - on est libres d’ajouter de nouvelles tables si on en a besoin.
  
4. Graphisme
   - éviter les erreurs d’accessibilité et d’ergonomie
   - faire un site fonctionnel avant de se préoccuper de son aspect visuel


## 3 - Contraintes de réalisation

 - La page d’accueil doit disposer d’un menu et d’un formulaire d’identification pour les utilisateurs.
 - une page d’information présentant les développements que vous avez réalisés, vos sources, les auteurs, ainsi que les ressources bibliographiques et la webographie que vous avez utilisé.


## 4 - Fonctionnalités à implémenter

1. Consultation des pathologies, critères de filtrage
 - une page permettant d’afficher la liste des pathologies + filtrage comme indiqué en introduction
 - optimiser au maximum votre solution en limitant autant que pos- sible les requêtes sur le serveur MySQL
 - libres dans le choix de l’interface graphique.

2. Recherche de pathologies par mot–clef
 - Cette fonctionnalité ne sera accessible qu’aux utilisateurs authentifiés.

3. Compte utilisateur
 - système de gestion des utilisateurs (inscription, login, session, etc.). 