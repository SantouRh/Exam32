Create table Utilisateur(
    idUtil INTEGER PRIMARY KEY AUTO_INCREMENT,
    Email VARCHAR(50),
    Nom VARCHAR(75),
    mdp VARCHAR(25),
    estAdmin INTEGER
);
Create table Categorie(
    idCategorie INTEGER PRIMARY KEY AUTO_INCREMENT,
    categorie VARCHAR(75)
);
Create table Produit(
    idProd INTEGER PRIMARY KEY AUTO_INCREMENT,
    nomProd VARCHAR(50),
    idCateg INTEGER ,
    idUtil INTEGER ,
    Prix DECIMAL(10,2),
    Descri VARCHAR(150),
    FOREIGN KEY (idCateg) REFERENCES Categorie(idCategorie),
    FOREIGN KEY (idUtil) REFERENCES Utilisateur(idUtil)

);
Create table Photos(
    idPhoto INTEGER PRIMARY KEY AUTO_INCREMENT,
    idProduit INTEGER ,
    nomPhoto VARCHAR(50),
    FOREIGN KEY(idProduit) REFERENCES Produit(idProd)

);
Create table Proposition(
    idProposition INTEGER PRIMARY KEY AUTO_INCREMENT,
    idUtil1 INTEGER ,
    idUtil2 INTEGER ,
    idProd1 INTEGER ,
    idProd2 INTEGER ,
    etat    INTEGER,
    datePropos DATE,
    FOREIGN KEY(idUtil1) REFERENCES Utilisateur(idUtil),
    FOREIGN KEY(idUtil2) REFERENCES Utilisateur(idUtil),
    FOREIGN KEY(idProd1) REFERENCES Produit(idProd),
    FOREIGN KEY(idProd2) REFERENCES Produit(idProd)
);