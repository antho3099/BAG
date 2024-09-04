-- Mentionne le nom de la base de données à utiliser pour exécuter les commandes SQL qui suivent.
USE `530-php-BAG-ANG`;

-- Insérer des données--
INSERT INTO role(id, code, label) VALUES
(1, 'ADMIN', 'Administrateur'),
(2, 'USER','Utilisateur');

INSERT INTO user(id, nom, prenom, birth, email, pseudo, password, idRole) VALUES
(1, 'Nguyen', 'Anthony', 24, 'antho.nguyen30pro@gmail.com', 'Silverhand95', '$2y$10$K.5fRt.Bhi0n5fJrMcMLnuHPCsD5E0v1T.hZLAsgnlhR3jqAakYCS', 1);

INSERT INTO jeu(id, titre, studio, sortie, genre, age, plateforme, prix, story, avis, note, critique, idUser) VALUES
(1, 'Tomb Raider' , 'Crystal Dynamics', '2013-03-23', 'aventure', '18', 'Playstation 4', '59,99 €', 'Lara...', 'Banger', '7', 'Metacritic:55/100', 1);

INSERT INTO article(id, une, paragraph, minititle, minititletwo, paragraphtwo, paragraphthree, date, idUser) VALUES
(100, 'Cyberpunk 2077: Qui est Johnny Silverhand ?', 'Johnny Silverhand est...', 'Un mercenaire', 'un f******', 'La vie de johnny est...','sa vie est basé etc...', '2024-09-04', 1);

