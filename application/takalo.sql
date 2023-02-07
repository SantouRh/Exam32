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
    idCateg INTEGER REFERENCES Categorie(idCategorie),
    idUtil INTEGER REFERENCES Utilisateur(idUtil),
    Prix DECIMAL(10,2),
    Descri VARCHAR(150)
);
Create table Photos(
    idPhoto INTEGER PRIMARY KEY AUTO_INCREMENT,
    idProduit INTEGER REFERENCES Produit(idProd),
    nomPhoto VARCHAR(50)
);
Create table Proposition(
    idProposition INTEGER PRIMARY KEY AUTO_INCREMENT,
    idUtil1 INTEGER REFERENCES Utilisateur(idUtil),
    idUtil2 INTEGER REFERENCES Utilisateur(idUtil),
    idProd1 INTEGER REFERENCES Produit(idProd),
    idProd2 INTEGER REFERENCES Produit(idProd),
    etat    INTEGER,
    datePropos DATE
);