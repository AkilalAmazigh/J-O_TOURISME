<?php

class Modele
{
    private $pdo;
    public function __construct($serveur, $bdd, $user, $mdp)
    {
        $this->pdo = null;

        try {
            //code qui peut poser des erreurs
            $this->pdo = new PDO("mysql:host=" . $serveur . ";dbname=" . $bdd, $user, $mdp);
        } catch (PDOException $exp) {
            //levée d'exception
            echo "Erreur de connexion au serveur";
            echo $exp->getMessage();
        }
    }
        
}
