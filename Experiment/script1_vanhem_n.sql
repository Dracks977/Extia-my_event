CREATE DATABASE Extia_Event CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Extia_Event;

CREATE TABLE User
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nom CHAR(32),
    Prenom CHAR(32),
    Mail varchar(255),
    Pass varchar(1000),
    Date_creation DATE,
    Date_modification DATE
);

CREATE TABLE Event
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Libelle VARCHAR(255),
    Description VARCHAR(510),
    image varchar(510),
    Prix FLOAT,
    Place INT,
    Darte DATE,
    Date_creation DATE,
    Region INT,
    Date_modification DATE
);

CREATE TABLE Categories
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Libelle VARCHAR(255)
);

CREATE TABLE Admin
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    pass varchar(1000),
    user CHAR(32),
);

CREATE TABLE Region
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Date_creation DATE,
    Libelle VARCHAR(255)
);

CREATE TABLE Categorie_Event
(
    ID_categorie TINYINT,
    ID_Event INT
);

INSERT INTO Admin VALUES ("Admin","c1c224b03cd9bc7b6a86d77f5dace40191766c485cd55dc48caf9ac873335d6f");