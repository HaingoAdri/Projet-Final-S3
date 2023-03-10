drop database Echanges;
create database Echanges;
use Echanges;

Create table utilisateurs(
    idUsers int  auto_INCREMENT not null PRIMARY key,
    Nom VARCHAR(250),
    prenom VARCHAR(250),
    email VARCHAR(250),
    password VARCHAR (250) unique,
    isAdmin boolean DEFAULT FALSE
);
insert into  utilisateurs values
            (default,'Adrienne','Haingotiana','haingo@gmail.com','haingo',true);
insert into utilisateurs values 
            (default,'Rova','fleurys','rova@gmail.com','rova',false);
insert into utilisateurs values
            (default,'Sarobidy','Propla','sarobidy@gmail.com','sarobidy',true);


create table Categories(
    idCategories int auto_increment not null PRIMARY KEY,
    nom VARCHAR(250)
);
insert into  Categories values
        (default, 'Voiture');
insert into Categories VALUES
        (default,'Armes');
insert into Categories VALUES
        (default,'ordinateurs');
insert into Categories Values 
        (default,'Moto');
insert into Categories VALUES
        (default,'Fleurs');
insert into Categories values
        (default,'Animaux');


create table objets(
    idObjet int auto_INCREMENT not null PRIMARY KEY,
    nom VARCHAR(250),
    prix DOUBLE PRECISION,
    descriptions VARCHAR(250),
    idUsers int not null,
    FOREIGN key (idUsers) REFERENCES utilisateurs(idUsers)
);
insert into objets values
        (default,'Hyundai Veloster Turbo','32000000','Neufs','1');
insert into objets values 
        (default,'Dodge Ram','100000000','Neufs','1');
insert into objets values 
        (default,'Toyota Tundra','59000000','Occassion','1');
insert into objets values 
        (default,'Golf 8','50000000','Neufs','2');
insert into objets values 
        (default,'ccxr Trevita','500000000','Neufs','2');
insert into objets values 
        (default,'BMW X7','100000000','Neufs','2');
insert into objets values 
        (default,'Isuzu D Max','95000000',' Neufs','3');
insert into objets values
        (default,'Mp5','25000000',' Arme Mini Porte',1);
insert into objets values
        (default,'FN P90','26000000','Produit nouveau',1);
insert into objets values(
          default,'Uzi','10000000','Mini Mitraillete',1);
insert into objets values
        (default,'AK-47','150000000','Plus utiliser des Militaires',2);
insert into objets values(
          default,'Grenade','200000','Bombe',2);
insert into objets values(
         default,'M16','25000000','Mitrailleuse',3);
insert into objets values(
          default,'Revolver','130000000','Meilleur que la Pistolet',3);
insert into objets values(
          default,'Militairy Knife','1500000','Mortelle',3);
insert into objets values(
          default,'Thompson Gun','20000000','Corps a corps',2);
insert into oBjets values(
          default,'dragonov','500000000','Sniper',1);
insert into objets values
        (default,'Asus E510','3000000','En stock',1);
insert into objets values 
        (default,'Asus VivoBook E510MA','3200000','Meilleur Produit',1);
insert into objets values
        (default,'Samsung Galaxy Book Go','3300000','Equipe d une puce ARM',2);
insert into objets values 
        (default,'SamsungNotebook Pen','3500000','Le PC Portable se dote d un Stylet',2);
insert into objets values 
        (default, 'Acer Aspire','2000000','Full HD',3);


create table fusionObjets(
    idfusionObjets int auto_increment not null PRIMARY KEY,
    idObjet int not null,
    idCategories int not null,
    FOREIGN key(idObjet) REFERENCES objets(idObjet),
    FOREIGN key(idCategories) REFERENCES Categories(idCategories)
);

insert into fusionObjets VALUES
        (default,1,1 );
insert into fusionObjets VALUES
        (default,2,1 );
insert into fusionObjets VALUES
        (default,3,1 );
insert into fusionObjets VALUES
        (default,4,1 );
insert into fusionObjets VALUES
        (default,5,1 );
insert into fusionObjets VALUES
        (default,6,1 );
insert into fusionObjets VALUES
        (default,7,1 );
insert into fusionObjets VALUES
        (default,1,2 );
insert into fusionObjets VALUES
        (default,2,2 );
insert into fusionObjets VALUES
        (default,3,2 );
insert into fusionObjets VALUES
        (default,4,2 );
insert into fusionObjets VALUES
        (default,5,2 );
insert into fusionObjets VALUES
        (default,6,2 );
insert into fusionObjets VALUES
        (default,7,2 );
insert into fusionObjets VALUES
        (default,8,2 );
insert into fusionObjets VALUES
        (default,9,2 );
insert into fusionObjets VALUES
        (default,10,2 );
insert into fusionObjets VALUES
        (default,1,3 );
insert into fusionObjets VALUES
        (default,2,3 );
insert into fusionObjets VALUES
        (default,3,3 );
insert into fusionObjets VALUES
        (default,4,3 );
insert into fusionObjets VALUES
        (default,5,3 );

create table lien_image(
    idImage int auto_increment primary KEY not null,
    idObjet int not null,
    lienImage VARCHAR(250) not null,
    FOREIGN KEY(idObjet) REFERENCES objets(idObjet)
);
insert into lien_image VALUES
        (default,1,'HYUNDAI-VELOSTER-01.jpg');

insert into lien_image VALUES
        (default,2,'Dodge Ram.jpg');

insert into lien_image VALUES
        (default,3,'Toyota Tundra.jpg');

insert into lien_image VALUES
        (default,4,'Golf8_1.jpg');

insert into lien_image VALUES
        (default,5,'CCXR Trevita.jpg');

insert into lien_image VALUES
        (default,6,'BMW X71.jpg');

insert into lien_image VALUES
        (default,7,'isuzu-d-max-1.jpg');

insert into lien_image VALUES
        (default,8,'Mp5.jpg');

insert into lien_image VALUES
        (default,9,'P90-.png');

insert into lien_image VALUES
        (default,10,'uzi1.jpg');

insert into lien_image VALUES
        (default,11,'AK-47.jpg');

insert into lien_image VALUES
        (default,12,'Grenade.jpg');
insert into lien_image VALUES
        (default,13,'M16-.jpg');

insert into lien_image VALUES
        (default,14,'Revolver1.jpg');

insert into lien_image VALUES
        (default,15,'Kniffe1.jpg');

insert into lien_image VALUES
        (default,16,'Thompson.jpg');

insert into lien_image VALUES
        (default,17,'dragunov1.png');

insert into lien_image VALUES
        (default,18,'Asus E510.jpg');

insert into lien_image VALUES
        (default,19,'asus1.jpg');

insert into lien_image VALUES
        (default,20,'GalaxSamsung.jpg');

insert into lien_image VALUES
        (default,21,'Samsung1.jpg');


create table Proposition(
    idProposition int auto_increment PRIMARY KEY not null,
    idProposer int not null,
    idMpandray int not null,
    idObjet_proposer int not null,
    idObjet_demander int not null,
    timeExchange datetime default null,

    FOREIGN KEY (idProposer) REFERENCES utilisateurs(idUsers),
    FOREIGN KEY (idMpandray) REFERENCES utilisateurs(idUsers),
    FOREIGN key (idObjet_proposer) REFERENCES objets(idObjet),
    FOREIGN key (idObjet_demander) REFERENCES objets(idObjet)
);

CREATE TABLE echange(
        idEchange int auto_increment PRIMARY KEY,
        idUsers int not null,
        idObjets int not null,
        FOREIGN KEY (idUsers) REFERENCES utilisateurs(idUsers),
        FOREIGN key(idObjets) REFERENCES objets(idObjet)
);

create table refused(
        idRefused int auto_increment primary key,
        idProposition int not null,
        foreign key(idProposition) REFERENCES Proposition(idProposition)
);

create table historique(
        idHistorique int auto_increment primary key,
        idOld int not null,
        idObject int not null,
        finAppartenance datetime not null,
        FOREIGN key(idOld) REFERENCES utilisateurs(idUsers),
        FOREIGN key (idObject) REFERENCES objets(idObjet)
);
