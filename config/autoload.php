<?php

/*
* Autoload pour charger les classes sans y penser
*/

spl_autoload_register(function ($className) {
    
    // Recherche des classes du dossier "controllers"
    if (file_exists('./controllers/' . $className . '.php')) {
        require_once './controllers/'. $className . '.php';
    }

    // Recherche des classes du dossier "managers"
    if (file_exists('./managers/' . $className . '.php')) {
        require_once './managers/'. $className . '.php';
    }

    // Recherche des classes du dossier "models"
    if (file_exists('./models/' . $className . '.php')) {
        require_once './models/'. $className . '.php';
    }

    // Recherche des classes du dossier "services"
    if (file_exists('./services/' . $className . '.php')) {
        require_once './services/'. $className . '.php';
    }    
});