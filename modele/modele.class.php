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

    //////////// Evenements //////////////

    public function insertEvenement($tab)
    {
        $requete = "insert into evenement values (null, :type, :dateEvent, :nomEvenement, :description, :adresse, :horraireD, :horraireF, :capacite, :idcategorie)";
        $donnees = array(
            ":type" => $tab['type'],
            ":dateEvent" => $tab['dateEvent'],
            ":nomEvenement" => $tab['nomEvenement'],
            ":description" => $tab['description'],
            ":adresse" => $tab['adresse'],
            ":horraireD" => $tab['horraireD'],
            ":horraireF" => $tab['horraireF'],
            ":capacite" => $tab['capacite'],
            ":idcategorie" => $tab['idcategorie'],
        );
        if ($this->pdo != null) {
            // on prépare la requete 
            $insert = $this->pdo->prepare($requete);
            $insert->execute($donnees);
        }
    }


    public function selectAllEvenements()
    {
        $requete = "select * from evenement;";

        if ($this->pdo != null) {
            // on prépare la requete 
            $select  = $this->pdo->prepare($requete);
            $select->execute();
            //extraction de tous les clients
            return $select->fetchAll();
        } else {
            return null;
        }
    }

    //////////// Services //////////////
    
    public function insertService($tab)
    {
        $requete = "insert into service values (null, :libelle, :adresse, :prix, :tel, :email, :idtypeservices)";
        $donnees = array(
            ":libelle" => $tab['libelle'],
            ":adresse" => $tab['adresse'],
            ":prix" => $tab['prix'],
            ":tel" => $tab['tel'],
            ":email" => $tab['email'],
            ":idtypeservices" => $tab['idtypeservices'],
        );
        if ($this->pdo != null) {
            // on prépare la requete 
            $insert = $this->pdo->prepare($requete);
            $insert->execute($donnees);
        }
    }


    public function selectAllServices()
    {
        $requete = "select * from service;";

        if ($this->pdo != null) {
            // on prépare la requete 
            $select  = $this->pdo->prepare($requete);
            $select->execute();
            //extraction de tous les clients
            return $select->fetchAll();
        } else {
            return null;
        }
    }
    public function deleteService($idservice)
    {
        $requete = "delete from service where idservice = :idservice;";
        $donnees =array(":idservice"=>$idservice);
        if($this->pdo != null)
        {
           //on prepare la requete
           $delete = $this->pdo->prepare($requete);
           $delete->execute($donnees); 
        }

    }
    public function selectWhereService($idservice)
    {
        $requete = "select * from service where idservice = :idservice;";
        if($this->pdo != null)
        {
            $donnees =array(":idservice"=>$idservice);
            //on prepare la requete
            $select = $this->pdo->prepare($requete);
            $select->execute($donnees); 
            //extraction du service
            return $select->fetch();
        }
        else
        {
            return null;
        }

    }
    public function updateService($tab)
    {
        $requete = "update service set libelle=:libelle, adresse=:adresse, prix=:prix, tel=:tel, email=:email, idtypeservices=:idtypeservices  where idservice= :idservice;";
        $donnees = array
        (
        ":idservice"=>$tab['idservice'],
        ":libelle"=>$tab['libelle'],
        ":adresse"=>$tab['adresse'],
        ":prix"=>$tab['prix'],
        ":tel"=>$tab['tel'],
        ":email"=>$tab['email'],
        ":idtypeservices"=>$tab['idtypeservices']
        );
        if($this->pdo != null)
        {
            //on prepare la requete
            $insert = $this->pdo->prepare($requete);
            $insert->execute($donnees);
        }
    }


    //////////// Catégorie //////////////

    public function insertCategorie($tab)
    {
        $requete = "insert into service values (null, :libelle, :adresse, :prix, :tel, :email, :idtypeservices)";
        $donnees = array(
            ":libelle" => $tab['libelle'],
            ":adresse" => $tab['adresse'],
            ":prix" => $tab['prix'],
            ":tel" => $tab['tel'],
            ":email" => $tab['email'],
            ":idtypeservices" => $tab['idtypeservices'],
        );
        if ($this->pdo != null) {
            // on prépare la requete 
            $insert = $this->pdo->prepare($requete);
            $insert->execute($donnees);
        }
    }


    public function selectAllCategories()
    {
        $requete = "select * from service;";

        if ($this->pdo != null) {
            // on prépare la requete 
            $select  = $this->pdo->prepare($requete);
            $select->execute();
            //extraction de tous les clients
            return $select->fetchAll();
        } else {
            return null;
        }
    }

    //////////// Typeservices //////////////

    public function insertTypeservice($tab)
    {
        $requete = "insert into typeservice values (null, :libelle)";
        $donnees = array(
            ":libelle" => $tab['libelle'],
        );
        if ($this->pdo != null) {
            // on prépare la requete 
            $insert = $this->pdo->prepare($requete);
            $insert->execute($donnees);
        }
    }


    public function selectAllTypeservices()
    {
        $requete = "select * from typeservice;";

        if ($this->pdo != null) {
            // on prépare la requete 
            $select  = $this->pdo->prepare($requete);
            $select->execute();
            //extraction de tous les clients
            return $select->fetchAll();
        } else {
            return null;
        }
    }
}
