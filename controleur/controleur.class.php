<?php

    require_once("modele/modele.class.php");

    class Controleur{
        //objet de la classe modele
        private $unModele;
    
        public function __construct($serveur, $bdd, $user, $mdp){
            // instanciation du modele
            $this->unModele = new Modele($serveur, $bdd, $user, $mdp);
        }
    }

?>