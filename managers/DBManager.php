<?php 

/*
* Connexion à la base de données dont les identifiants sont placés dans le fichier "config/config.php"
*/

class DBManager 
{
    //Propriétés
    private static $instance;
    private $db;

    // Constructeur de la classe
    private function __construct()
    {
        $this->db = new PDO ('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS); // Connexion à la BDD
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs
    }

    // Méthode pour récupérer l'instance de la classe
    public static function getInstance() : DBManager
    {
        if (!self::$instance) {
            self::$instance = new DBManager();
        }

        return self::$instance;
    }

    // Méthode pour récupérer l'objet PDO
    public function getPDO() : PDO
    {
        return $this->db;
    }
}