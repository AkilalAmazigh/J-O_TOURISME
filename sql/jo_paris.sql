#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
Drop database if exists jo_paris; 
create database jo_paris;
use jo_paris;


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        idclient Int  Auto_increment  NOT NULL ,
        nom      Varchar (50) NOT NULL ,
        prenom   Varchar (50) NOT NULL ,
        email    Varchar (50) NOT NULL ,
        tel      Varchar (50) NOT NULL ,
        mdp      Varchar (50) NOT NULL
	,CONSTRAINT Client_PK PRIMARY KEY (idclient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Typeservice
#------------------------------------------------------------

CREATE TABLE Typeservice(
        idtypeservices Int  Auto_increment  NOT NULL ,
        libelle        Varchar (50) NOT NULL
	,CONSTRAINT Typeservice_PK PRIMARY KEY (idtypeservices)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Service
#------------------------------------------------------------

CREATE TABLE Service(
        idservice      Int  Auto_increment  NOT NULL ,
        libelle        Varchar (50) NOT NULL ,
        adresse        Varchar (50) NOT NULL ,
        prix           Float NOT NULL ,
        tel            Varchar (50) NOT NULL ,
        email          Varchar (50) NOT NULL ,
        idtypeservices Int NOT NULL
	,CONSTRAINT Service_PK PRIMARY KEY (idservice)

	,CONSTRAINT Service_Typeservice_FK FOREIGN KEY (idtypeservices) REFERENCES Typeservice(idtypeservices)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Categorie
#------------------------------------------------------------

CREATE TABLE Categorie(
        idcategorie Int  Auto_increment  NOT NULL ,
        libelle     Text NOT NULL
	,CONSTRAINT Categorie_PK PRIMARY KEY (idcategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Evenement
#------------------------------------------------------------

CREATE TABLE Evenement(
        idevenement  Int  Auto_increment  NOT NULL ,
        type         Varchar (50) NOT NULL ,
        dateEvent    Date NOT NULL ,
        nomEvenement Varchar (50) NOT NULL ,
        description  Text NOT NULL ,
        adresse      Varchar (50) NOT NULL ,
        horraireD    Time NOT NULL ,
        horraireF    Time NOT NULL ,
        capacite     Int NOT NULL ,
        idcategorie  Int NOT NULL
	,CONSTRAINT Evenement_PK PRIMARY KEY (idevenement)

	,CONSTRAINT Evenement_Categorie_FK FOREIGN KEY (idcategorie) REFERENCES Categorie(idcategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Media
#------------------------------------------------------------

CREATE TABLE Media(
        idmedia     Int  Auto_increment  NOT NULL ,
        url         Varchar (100) NOT NULL ,
        idevenement Int NOT NULL
	,CONSTRAINT Media_PK PRIMARY KEY (idmedia)

	,CONSTRAINT Media_Evenement_FK FOREIGN KEY (idevenement) REFERENCES Evenement(idevenement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Louer
#------------------------------------------------------------

CREATE TABLE Louer(
        idclient  Int NOT NULL ,
        idservice Int NOT NULL ,
        dateD     Date NOT NULL ,
        dateF     Date NOT NULL ,
        heureD    Time NOT NULL ,
        heureF    Time NOT NULL
	,CONSTRAINT Louer_PK PRIMARY KEY (idclient,idservice)

	,CONSTRAINT Louer_Client_FK FOREIGN KEY (idclient) REFERENCES Client(idclient)
	,CONSTRAINT Louer_Service0_FK FOREIGN KEY (idservice) REFERENCES Service(idservice)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commenter
#------------------------------------------------------------

CREATE TABLE Commenter(
        idevenement Int NOT NULL ,
        idclient    Int NOT NULL ,
        contenu     Text NOT NULL ,
        note        Int NOT NULL ,
        dateCom     Date NOT NULL
	,CONSTRAINT Commenter_PK PRIMARY KEY (idevenement,idclient)

	,CONSTRAINT Commenter_Evenement_FK FOREIGN KEY (idevenement) REFERENCES Evenement(idevenement)
	,CONSTRAINT Commenter_Client0_FK FOREIGN KEY (idclient) REFERENCES Client(idclient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Inscription
#------------------------------------------------------------

CREATE TABLE Inscription(
        idevenement Int NOT NULL ,
        idclient    Int NOT NULL ,
        dateD       Date NOT NULL ,
        commentaire Text NOT NULL ,
        statut      Varchar (50) NOT NULL
	,CONSTRAINT Inscription_PK PRIMARY KEY (idevenement,idclient)

	,CONSTRAINT Inscription_Evenement_FK FOREIGN KEY (idevenement) REFERENCES Evenement(idevenement)
	,CONSTRAINT Inscription_Client0_FK FOREIGN KEY (idclient) REFERENCES Client(idclient)
)ENGINE=InnoDB;

#---------------------------------------------------------
# insertion de Typeservice dans la table Typeservice
#--------------------------------------------------------
insert into Typeservice values (NULL, "Hotels");
insert into Typeservice values (NULL, "Bars & Restaurants");
insert into Typeservice values (NULL, "Culture");
insert into Typeservice values (NULL, "Sport");