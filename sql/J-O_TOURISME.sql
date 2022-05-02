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
    arrondissement int(5),
    primary key (idattraction)
);
create table parc (
    idparc int(3) not null auto_increment,
    nomParc varchar(50),
    description text,
    arrondissement int(5),
    primary key (idparc)
);
create table restaurant (
    idrestauant int(3) not null auto_increment,
    nomRestaurant varchar(50),
    arrondissement int(5),
    type varchar(50),
    horaires time, 
    capacite int(3)
    tel varchar(50),
    primary key (idrestauant)
);
create table bar (
    idbar int(3) not null auto_increment,
    nomBar varchar(50),
    capacite int(3),
    arrondissement int(5),
    type varchar(50),
    tel varchar(50),
    primary key (idbar)
);
create table centre_commercial (
    idcentre_commercial int(3) not null auto_increment,
    nomCentre varchar(50),
    nbBoutique varchar(50),
    arrondissement int(5),
    horaires time,
    primary key (idcentre_commercial)
);
create table metro (
    idmetro int(3) not null auto_increment,
    ligne varchar(10)
    stations varchar(50),
    prix float(2,2),
    horaires time,
    primary key (idmetro)
);
create table piscine (
    idpiscine int(3) not null auto_increment,
    nomPiscine varchar(50),
    arrondissement int(5), 
    horaires time,
    tel varchar(50),
    primary key (idpiscine)
);
create table salle_de_sport (
    idpsalle_de_sport int(3) not null auto_increment,
    nomSalle varchar(50),
    arrondissement int(5),
    capacite int(5),
    equipement varchar(50),
    tel varchar(50),
    primary key (idpiscine)
);
create table user (
    iduser int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(255),
    role enum("admin", "user"),
    primary key(iduser)
);
create table reservation (
    foreign key(client) references client(idclient),
    foreign key(monument) references monument(idmonument)
    foreign key(evenement) references evenement(idevenement)
    foreign key(hotel) references hotel(idhotel)
    foreign key(attraction) references attraction(idattravtion)
    foreign key(parc) references parc(idparc)
    foreign key(restaurant) references restaurant(idrestaurant)
    foreign key(bar) references bar(idbar)
    foreign key(centre_commercial) references centre_commercial(idcentre_commercial)
    foreign key(metro) references metro(idmetro)
    foreign key(salle_de_sport) references salle_de_sport(idsalle_de_sport)
    foreign key(user) references user(iduser)
);