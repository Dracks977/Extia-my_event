CREATE DATABASE Extia_Event CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Extia_Event;

CREATE TABLE User
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nom CHAR(32),
    Prenom CHAR(32),
    Mail varchar(255),
    Pass char(64),
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
    Region VARCHAR(255),
    Mail VARCHAR(255),
    Visio char(3),
    PoF varchar(510),
    Url VARCHAR(510),
    Darte DATETIME,
    Date_creation DATE,
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
    user CHAR(32)
);

CREATE TABLE Region
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Date_creation DATE,
    Libelle VARCHAR(255)
);

CREATE TABLE CLE
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Cle char(64)
);

INSERT INTO Admin (user, pass)VALUES ("Admin","06bd29e0206e7d373099fbf86f05efa8620b9eb32f9e7be6eb7ba39ed444e28b");