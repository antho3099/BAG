-- - Supprime la base de données si elle existe déjà
-- - Crée la base de données
-- - Mentionne le nom de la base de données à utiliser pour exécuter les commandes SQL qui suivent
USE `530-php-BAG-ANG`;DROP DATABASE IF EXISTS `530-php-BAG-ANG`;
CREATE DATABASE IF NOT EXISTS `530-php-BAG-ANG`;


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
    ,birth bigint(18) NOT NULL
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
    ,age bigint(18) NOT NULL
    ,plateforme varchar(100) NOT NULL
    ,prix varchar(100) NOT NULL
    ,story varchar(1000) NOT NULL
    ,avis varchar(1000) NOT NULL
    ,note bigint(18) NOT NULL
    ,critique varchar(100) NOT NULL
    ,idUser bigint(20) NOT NULL
    ,image_filename varchar(225)
    ,screenshot_filename varchar(255)
    ,screen_filename varchar(255)
    ,diapo_filename varchar(255)
    ,diapotwo_filename varchar(255)
    ,diapothree_filename varchar(255)
    ,diapofour_filename varchar(255)
    ,diapofive_filename varchar(255)
    ,diaposix_filename varchar(255)
);
CREATE TABLE article(
    id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
    ,une varchar(100) NOT NULL
    ,paragraph varchar(1000) NOT NULL
    ,minititle varchar(100) NOT NULL
    ,paragraphtwo varchar(1000) NOT NULL
    ,minititletwo varchar(100) NOT NULL
    ,paragraphthree varchar(1000) NOT NULL
    ,date varchar(100) NOT NULL
    ,idUser bigint(20) NOT NULL
    ,picture_filename varchar(255)
    ,picturetwo_filename varchar(255)
    ,picturethree_filename varchar(255)
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

ALTER TABLE article
ADD CONSTRAINT `u_article_une` UNIQUE (une)
,ADD CONSTRAINT `fk_article_user` FOREIGN KEY (idUser) REFERENCES user(id);
