DROP TABLE IF EXISTS a_pour;
DROP TABLE IF EXISTS produit;
DROP TABLE IF EXISTS commande;
DROP TABLE IF EXISTS categorie;
DROP TABLE IF EXISTS origine;
DROP TABLE IF EXISTS type_prix;
DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS semaine;
DROP TABLE IF EXISTS lieu;
DROP TABLE IF EXISTS droit;

CREATE TABLE droit(
	IDdroit int not null auto_increment,
	description varchar(250),
	PRIMARY KEY(IDdroit))Engine=InnoDB;
	
CREATE TABLE lieu(
	IDlieu int not null auto_increment,
	description varchar(250),
	PRIMARY KEY(IDlieu))Engine=InnoDB;
	
CREATE TABLE semaine(
	IDsemaine int not null auto_increment,
	date_debut date,
	date_fin date,
	valide boolean,
	PRIMARY KEY(IDsemaine))Engine=InnoDB;

CREATE TABLE utilisateur(
	IDutilisateur int not null auto_increment,
	nom varchar(250),
	passkey varchar(250),
	email varchar(250),
	IDdroit int not null,
	PRIMARY KEY(IDutilisateur),
	FOREIGN KEY(IDdroit) references droit (IDdroit)
	)Engine=InnoDB;
	
CREATE TABLE type_prix(
		IDtype_prix int not null auto_increment,
		designation varchar(250),
		PRIMARY KEY(IDtype_prix))Engine=InnoDB;
		
CREATE TABLE origine(
		IDorigine int not null auto_increment,
		description varchar(250),
		PRIMARY KEY(IDorigine))Engine=InnoDB;
		
CREATE TABLE categorie(
		IDcategorie int not null auto_increment,
		description varchar(250),
		PRIMARY KEY(IDcategorie))Engine=InnoDB;
		
CREATE TABLE commande(
	IDcommande int not null auto_increment,
	date_commande date,
	prix_total int,
	IDutilisateur int not null,
	IDlieu int not null,
	IDsemaine int not null,
	PRIMARY KEY(IDCommande),
	FOREIGN KEY(IDutilisateur) references utilisateur (IDutilisateur),
	FOREIGN KEY(IDlieu) references lieu (IDlieu),
	FOREIGN KEY(IDsemaine) references semaine (IDsemaine)
	) Engine= InnoDB;
	
CREATE TABLE produit(
	IDproduit int not null auto_increment,
	designation varchar(250),
	commentaire varchar(250),
	prix int,
	code_produit int,
	disponible boolean,
	IDtype_prix int not null,
	IDorigine int not null,
	IDcategorie int not null,
	PRIMARY KEY(IDproduit),
	FOREIGN KEY(IDtype_prix) references type_prix(IDtype_prix),
	FOREIGN KEY(IDorigine) references origine(IDorigine),
	FOREIGN KEY(IDcategorie) references categorie(IDcategorie)
	)Engine=InnoDB;
	
	CREATE TABLE a_pour (
    IDcommande int not null,
    IDproduit int not null,
    quantite int ,
    prix int ,
    type_prix VARCHAR(50),
	primary key(IDcommande,IDproduit),
	foreign key(IDcommande) references commande(IDcommande),
	foreign key(IDproduit) references produit(IDproduit)
	)Engine=InnoDB;

INSERT INTO  droit	VALUES(null,'admin');
INSERT INTO  droit	VALUES(null,"utilisateur");
INSERT INTO  droit	VALUES(null,"visiteur");

INSERT INTO  lieu VALUES(1,"belfort");	
INSERT INTO  lieu VALUES(2,"sochaux");
	
INSERT INTO  semaine VALUES (1, '2013-12-09', '2014-01-20', 1);
INSERT INTO  semaine VALUES (2, '2008-11-18', '2014-04-20', 1);
INSERT INTO  semaine VALUES (3, '2010-12-09', '2011-01-20', 1);
INSERT INTO  semaine VALUES (4, '2011-12-09', '2012-01-20', 1);

INSERT INTO  utilisateur values(1,"nom1","pswd1","nom1@pswd1.com",1);
INSERT INTO  utilisateur values(2,"nom2","pswd2","nom2@pswd2.com",2);
INSERT INTO  utilisateur values(3,"nom3","pswd3","nom3@pswd3.com",2);
INSERT INTO  utilisateur values(4,"nom4","pswd4","nom4@pswd4.com",2);
INSERT INTO  utilisateur values(5,"nom5","pswd5","nom5@pswd5.com",3);
INSERT INTO  utilisateur values(6,"nom6","pswd6","nom6@pswd6.com",3);


INSERT INTO  type_prix values (1,"kg");
INSERT INTO  type_prix values (2,"piece");

INSERT INTO  origine values (1,"France");
INSERT INTO  origine values (2,"Espagne");
INSERT INTO  origine values (3,"Turquie");
INSERT INTO  origine values (4,"Italie");
INSERT INTO  origine values (5,"Bolivie");

INSERT INTO  categorie values(1, "Fruit");
INSERT INTO  categorie values(2, "Legume");
INSERT INTO  categorie values(3, "Fruit sec");

INSERT INTO  commande values(1,'2013-12-09',150,1,1,2);
INSERT INTO  commande values(2,'2010-05-15',150,1,1,2);
INSERT INTO  commande values(3,'2011-01-17',150,1,1,2);
INSERT INTO  commande values(4,'2013-09-03',150,1,1,2);
INSERT INTO  commande values(5,'2012-12-26',150,1,1,2);

INSERT INTO  produit values(1, "pomme", "verte", 1, 01, 1, 1, 1, 1);
INSERT INTO  produit values(2, "poire", "verte", 2, 01, 1, 1, 4, 1);
INSERT INTO  produit values(3, "fraise", "rouge", 1, 01, 1, 2, 3, 3);
INSERT INTO  produit values(4, "tomate", "rouge", 2, 01, 1, 1, 2, 2);
INSERT INTO  produit values(5, "haricots", "verts", 3, 01, 1, 2, 5, 2);
INSERT INTO  produit values(6, "pasteque", "verte", 10, 01, 1, 2, 3, 1);


INSERT INTO  a_pour values(1, 2, 1500, 2, 1);
INSERT INTO  a_pour values(2, 6, 10, 10, 2);
INSERT INTO  a_pour values(3, 3, 20000, 1, 2);
INSERT INTO  a_pour values(4, 1, 1000, 1, 1);
INSERT INTO  a_pour values(5, 1, 8888, 1, 1);