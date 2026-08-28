<?php

/*
* Configuration - ignorer par Git
*/

// Démarrage d'une session pour prévoir l'utilisation de session utilisateur
session_start();

// Chemin des templates
define("TEMPLATE_PATH_VIEW", "./templates/");

// Chemin de la template principale
define ("MAIN_TEMPLATE_PATH", TEMPLATE_PATH_VIEW . "main.php");

// Identifiant de connexion à la base de données (MAMP)
const DB_HOST = "localhost"; // Nom du serveur 
const DB_NAME = "bbd_name"; // Nom de la base de données
const DB_USER = "user"; // Nom d'utilisateur
const DB_PASS = "password"; // Mot de passe utilisateur