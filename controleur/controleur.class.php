<?php

    require_once("modele/modele.class.php");

    class Controleur{
        //objet de la classe modele
        private $unModele;
    
        public function __construct($serveur, $bdd, $user, $mdp){
            // instanciation du modele
            $this->unModele = new Modele($serveur, $bdd, $user, $mdp);
        }

        # evenement

        public function insertEvenement($tab){
            // on controle la validité des données 

            //appel au modèle pour l'insertion 
            $this->unModele->insertEvenement($tab);
        }

        public function selectAllEvenement(){
            $lesEvenements = $this->unModele->selectAllEvenement();

            // s'il y a des traitements à faire

            // on renvoie les evenements 
            return $lesEvenements;
        }
    }

?>