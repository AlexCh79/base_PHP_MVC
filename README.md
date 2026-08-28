Dossier pouvant servir de base à la création d'un projet PHP POO

#1 - Comment l'utiliser
1) Enregistrer et extraire le fichier depuis GitHub
2) Dans le fichier config/config.php, modifier les paramètres de connexion à la base de données souhaitée (serveur, nom, utilisateur et mot de passe)
3) Dans le fichier .gitignore, transformer "_config/config.php" en "config/config.php" pour que le fichier soit ignore lors du prochain commit
4) Familiarisez-vous avec l'arborescence de fichiers
5) À vous de jouer !

#2 - Informations Importantes
1) La classe "AbstractManager" doit être parent de toutes les classes "Managers" que vous créerez, elle gère la connexion avec DBManager et donc à la base données.
2) La classe "AbstractEntity" doit être parent de toutes les classes "Models" que vous créerez, elle gère les constructeurs, les id et les hydratations des instances.

#3 - L'arborescence 
Racine du dossier : 
    - README.md (le fichier que vous êtes actuellement en train de lire ;) ) : Informations sur le code
    - .gitignore : permet de ne pas charger un dossier ou un fichier via Git (vous n'avez pas envie de donner vos identifiants de base de données à tout le monde, si ?)
    - index.php : le routeur du site

./assets/ : Les fichiers accessoires du site
    - images/ : les images nécessaires au bon fonctionnement du site (logo par exemple). Vous pouvez y ajouter des sous-dossiers pour les images uploadées qui seront à ajouter au .gitignore pour ne pas surcharger les commits.
    - scripts/ : les fichiers de scripts JavaScript 
    - styles/ : les feuilles de style CSS

./config/ : Dossier pour la configuration du site
    - config.php : que vous devrez ajouter au .gitignore par sécurité, gère les constantes et les identifiants du site
    - autoload.php : gère la recherche de classe d'objet partout dans les dossiers du site sans avoir à les renseigner un par un manuellement

./controllers/ : Dossiers contenant les controllers des classes
    - HomeController.php : le seul controlleur fournit par défaut permettant juste d'afficher la page d'accueil

./managers/ : Dossier contenant les managers des classes
    - DBManager.php : lance la connexion à la base de données
    - AbstractManager.php : sert de pont pour se connecter à la base de données en une seule fois (histoire d'éviter d'avoir 4 connexions en même temps pour un seul utilisateur)

./models/ : Dossier contenant les classes d'objets
    - AbstractEntity.php : sert de base à tous les objets : constructeur, setter et getter d'id et hydratation des instances

./services/ : Dossier contenant les fonctions générales et utiles à l'ensemble du site
    - Utils : Les fonctions générales
    - View : La génération des différentes templates

./templates/ : Dossier contenant les templates du site
    - error.php : La page d'affichage des erreurs
    - home.php : La page d'accueil par défaut
    - main.php : La template principale
    - header.php : L'en-tête du site
    - footer.php : Le bas de page du site

#4 - Copyright
    Projet réalisé par Alexandra Chanteloup - 2026 - sur la base des enseignements d'OpenClassrooms.