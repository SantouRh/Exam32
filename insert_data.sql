-- insertion utilisateur
INSERT INTO `Utilisateur`( `Email`, `Nom`, `mdp`, `estAdmin`) VALUES ('admin@gmail.com','Admin','admin','1');
insert into `Utilisateur` (`Email`,`Nom`,`mdp`,`estAdmin`) values ('rindra@gmail.com','Rindra','rindra','0') ;
insert into `Utilisateur` (`Email`,`Nom`,`mdp`,`estAdmin`) values ('fameno@gmail.com','Fameno','fameno','0') ;
insert into `Utilisateur` (`Email`,`Nom`,`mdp`,`estAdmin`) values ('santatra@gmail.com','Santatra','santatra','0') ;


insert into `Categorie`(`categorie`) values ('Electro-menager');
insert into `Categorie`(`categorie`) values ('Vetement');
insert into `Categorie`(`categorie`) values ('Sport');
insert into `Categorie`(`categorie`) values ('Technologie');


insert into `Produit`(`nomProd`,`idCateg`,`idUtil`,`Prix`,`Descri`) values ('Ballon de foot','3','2','5000','Occassion') ;
insert into `Produit`(`nomProd`,`idCateg`,`idUtil`,`Prix`,`Descri`) values ('Galaxy S20','4','2','450000','reconditionne') ;
insert into `Produit`(`nomProd`,`idCateg`,`idUtil`,`Prix`,`Descri`) values ('Fer a repasser','1','3','12000','Neuf') ;
insert into `Produit`(`nomProd`,`idCateg`,`idUtil`,`Prix`,`Descri`) values ('T-shirt','2','3','2000','marque nike') ;

insert into `Photos` (`idProduit`,`nomPhoto`) values ('1','foot.jpg');
insert into `Photos` (`idProduit`,`nomPhoto`) values ('2','ferR.jpg');
insert into `Photos` (`idProduit`,`nomPhoto`) values ('3','T-shirt.jpg');
insert into `Photos` (`idProduit`,`nomPhoto`) values ('4','Galaxy.jpg');


insert into `Proposition` (`idUtil1`,`idUtil2`,`idProd1`,`idProd2`,`etat`,`datePropos`) values ('2','3','1','4','0','2023-02-06');
insert into `Proposition` (`idUtil1`,`idUtil2`,`idProd1`,`idProd2`,`etat`,`datePropos`) values ('3','2','3','2','0','2023-02-05');


