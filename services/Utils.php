<?php 

/*
* Classe de fonctions utilitaires
*/

class Utils {

    // Gère les redirections url
    public static function redirect(string $action, array $params = []) : void
    {
        $url = "index.php?action=" . urlencode($action); // construction de l'url de base
        foreach ($params as $paramName => $paramValue){
            $url .= "&" . urlencode($paramName) . "=" . urlencode($paramValue); // Ajout des paramètres à l'url avant redirection
        }
        header("Location: $url"); //renvoie l'url complète
        exit();
    }

    /*
    * Récupération de la superglobale $_REQUEST
    * Vide par défaut si la superglobale ne stocke rien
    */
    public static function request(string $variableName, mixed $defaultValue = null) : mixed
    {
        return $_REQUEST[$variableName] ?? $defaultValue;
    }
    
}