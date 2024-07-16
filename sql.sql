CREATE database ePressing;

CREATE TABLE client(
    idclient INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    sexe VARCHAR(100),
    telephone CHAR(15)
);


CREATE TABLE article(
    idhabit INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100),
    nombre VARCHAR(100),
    categorie VARCHAR(15)
);

