-- - Supprime la base de données si elle existe déjà
-- - Crée la base de données
-- - Mentionne le nom de la base de données à utiliser pour exécuter les commandes SQL qui suivent
DROP DATABASE IF EXISTS `530-php-BAG-ANG`;
CREATE DATABASE IF NOT EXISTS `530-php-BAG-ANG`;
USE `530-php-BAG-ANG`;

-- Créer des TABLES

CREATE TABLE role(
    id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
    ,code varchar(100) NOT NULL
    ,label varchar(100) NOT NULL 
);

CREATE TABLE user(
    id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
    ,nom varchar(100) NOT NULL
    ,prenom varchar(100) NOT NULL
    ,email varchar(100) NOT NULL
    ,pseudo varchar(100) NOT NULL
    ,password varchar(100) NOT NULL
    ,idRole bigint(20) NOT NULL
    ,avatar_filename varchar(255)  
);

CREATE TABLE jeu(
    id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
    ,titre varchar(100) NOT NULL
    ,studio varchar(100) NOT NULL
    ,sortie varchar (100) NOT NULL
    ,genre varchar(100) NOT NULL
    ,age varchar(100) NOT NULL
    ,plateforme varchar(100) NOT NULL
    ,prix varchar(100) NOT NULL
    ,story varchar(1000) NOT NULL
    ,avis varchar(100) NOT NULL
    ,note varchar(100) NOT NULL
    ,critique varchar(100) NOT NULL
    ,idUser bigint(20) NOT NULL
    ,image_filename varchar(225)
);

ALTER TABLE role
ADD CONSTRAINT `u_role_code` UNIQUE(code)
,ADD CONSTRAINT `u_role_label` UNIQUE(label);

ALTER TABLE user 
ADD CONSTRAINT `u_user_pseudo` UNIQUE (pseudo)
,ADD CONSTRAINT `fk_user_role` FOREIGN KEY (idRole) REFERENCES role(id);

ALTER TABLE jeu
ADD CONSTRAINT `u_jeu_titre` UNIQUE (titre)
,ADD CONSTRAINT `fk_jeu_user` FOREIGN KEY (idUser) REFERENCES user(id);
