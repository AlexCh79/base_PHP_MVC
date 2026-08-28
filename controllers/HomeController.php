<?php

/*
* Controlleur pour afficher la page d'accueil
*/

class HomeController {

    public function showHome() {
        $view = new View('Accueil');
        $view->render('home');
    }
}