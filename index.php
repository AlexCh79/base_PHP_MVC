<?php

/*
* Routeur
*/

// Import des fichiers de configuration
require_once './config/config.php';
require_once './config/autoload.php';

// Action par défaut = retour à la page d'accueil
$action = Utils::request('action', 'home');

// Factorisation des controllers
$homeController = new HomeController();

try {

    switch ($action) {

        case 'home':
            $homeController->showHome();
            break;

        // à laisser après le dernier switch pour gérer tous les cas imprévus
        default:
            throw new Exception("La page demandée n'existe pas ou a été déplacée!");
    }
} catch (Exception $e) {

    // Renvoi les erreurs vers la page d'erreur
    $errorMessage = $e->getMessage();
    $view = new View('Erreur');
    $view->render('Error', ['errorMessage' => $errorMessage]);
}