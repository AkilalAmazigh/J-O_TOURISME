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

        public function selectAllEvenements(){
            $lesEvenements = $this->unModele->selectAllEvenements();

            // s'il y a des traitements à faire

            // on renvoie les evenements 
            return $lesEvenements;
        }

        # Service

        public function insertService($tab){
            // on controle la validité des données 

            //appel au modèle pour l'insertion 
            $this->unModele->insertService($tab);
        }

        public function selectAllServices(){
            $lesServices = $this->unModele->selectAllServices();

            // s'il y a des traitements à faire

            // on renvoie les evenements 
            return $lesServices;
        }
        public function deleteService($idservice)
        {
            $this->unModele->deleteService($idservice);
        }
        public function selectWhereService($idservice)
        {
            return $this->unModele->selectWhereService($idservice);
        }
        public function updateService($tab)
        {
            $this->unModele->updateService($tab);
        }

        # Typeservice

        public function insertTypeservice($tab){
            // on controle la validité des données 

            //appel au modèle pour l'insertion 
            $this->unModele->insertTypeservice($tab);
        }

        public function selectAllTypeservices(){
            $lesTypeservices = $this->unModele->selectAllTypeservices();

            // s'il y a des traitements à faire

            // on renvoie les evenements 
            return $lesTypeservices;
        }
        
    }

?>