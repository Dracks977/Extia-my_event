CREATE DATABASE Extia_Event CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Extia_Event;

CREATE TABLE User
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nom CHAR(32),
    Prenom CHAR(32),
    Mail varchar(255),
    Pass varchar(200),
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
    pass varchar(200),
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
    Cle varchar(200)
);

CREATE TABLE Feedback
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ID_event INT,
	ID_user INT, 
	Note INT,
    Commentaire VARCHAR(510),
    Date_creation DATE
);

CREATE TABLE Event_User
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ID_event INT,
	ID_user INT
);

INSERT INTO Admin (user, pass)VALUES ("Admin","06bd29e0206e7d373099fbf86f05efa8620b9eb32f9e7be6eb7ba39ed444e28b");
INSERT INTO CLE (cle) VALUES ("102cd17c1d549a032fe2eecceec44e59b744e4f382a0bd02ceea68e888e5e940c4c");