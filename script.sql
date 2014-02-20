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
	validationAdmin boolean,
	primary key(IDcommande,IDproduit),
	foreign key(IDcommande) references commande(IDcommande),
	foreign key(IDproduit) references produit(IDproduit)
	)Engine=InnoDB;


ALTER TABLE  `lieu` ADD UNIQUE (
`description`
);

