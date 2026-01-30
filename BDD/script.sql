CREATE DATABASE mm;

use mm

CREATE TABLE utilisateur (
    
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(255),
    prenom VARCHAR(255),
    email VARCHAR(255),
    mdp VARCHAR(255) NOT NULL,
    date_naissance DATE,
    adresse VARCHAR(255),
    tel VARCHAR(10),
    professionnel BOOLEAN,
    admins BOOLEAN
);

CREATE TABLE sport (
    
    id INT AUTO_INCREMENT PRIMARY KEY,
    foot BOOLEAN,
    basket BOOLEAN,
    athle BOOLEAN,
    natation BOOLEAN,
    danse BOOLEAN;
    id_user int

);