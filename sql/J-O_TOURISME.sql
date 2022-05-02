drop database if exists J_O_Tourisme;
create database J_O_Tourisme;
use J_O_Tourisme;

create table client(
    idclient int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    mdp varchar(50),
    primary key (idclient)
);
create table monument (
    idmonument int(3) not null auto_increment,
    nomMonument varchar(50),
    adresseMonument varchar(50),
    arrondissement int(5),
    primary key (idmonument)
);
create table evenement (
    idevenement int(3) not null auto_increment,
    nomEvenement varchar(50),
    description text,
    arrondissement int(5),
    tel varchar(50),
    primary key (idevenement)
);
create table hotel (
    idhotel int(3) not null auto_increment,
    nomHotel varchar(50),
    arrondissement int(5),
    nbJours int(2),
    terrasse varchar(50),
    etage int(2)
    primary key (idhotel)
);
create table attraction (
    idattraction int(3) not null auto_increment,
    nomAttraction varchar(50),
    prix varchar(50),
    arrondissement varchar(50),
    primary key (idattraction)
);
create table parc (
    idparc int(3) not null auto_increment,
    nomParc varchar(50),
    description text,
    arrondissement varchar(50),
    primary key (idparc)
);
create table restaurant (
    idrestauant int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    mdp varchar(50),
    primary key (idrestauant)
);
create table bar (
    idbar int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    mdp varchar(50),
    primary key (idbar)
);
create table centre_commercial (
    idcentre_commercial int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    mdp varchar(50),
    primary key (idcentre_commercial)
);
create table metro (
    idmetro int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    mdp varchar(50),
    primary key (idmetro)
);
create table piscine (
    idpiscine int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    mdp varchar(50),
    primary key (idpiscine)
);
create table salle_de_sport (
    idpiscine int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    mdp varchar(50),
    primary key (idpiscine)
);
create table user (
    iduser int(3) not null auto_increment,
    nom varchar(50), 
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    mdp varchar(50),
    primary key (iduser)
);