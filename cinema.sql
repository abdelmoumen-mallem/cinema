START TRANSACTION;


CREATE TABLE `film` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `nom` varchar(250) NOT NULL,
  `synopsis` varchar(255) CHARACTER SET utf8 NOT NULL,
  `duree_minute` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `url` varchar(250) CHARACTER SET utf8 NOT NULL
);

CREATE TABLE 'client'(
    `id` int(11) NOT NULL PRIMARY KEY,
  `nom_prenom` varchar(250) NOT NULL,
  'mail' varchar(255) NOT NULL,
)

CREATE TABLE 'cinema'(
    `id` int(11) NOT NULL PRIMARY KEY,
  `societe` varchar(250) NOT NULL,
  'ville' varchar(255) NOT NULL,
)

CREATE TABLE 'seance'(
    `id` int(11) NOT NULL PRIMARY KEY,
  `id_film` int(11) NOT NULL FOREIGN KEY REFERENCES film.id,
  'ville' int(11) NOT NULL FOREIGN KEY REFERENCES cinema.ville ,
  'date' datetime(255) NOT NULL  ,
)

CREATE TABLE 'billet'(
    `id` int(11) NOT NULL PRIMARY KEY,
  `id_client` int(11) NOT NULL FOREIGN KEY REFERENCES client.id,
  'place' varchar(250) NOT NULL ,
  'date' datetime(255) NOT NULL FOREIGN KEY REFERENCES seance.date  ,
  'prix' float(11) NOT NULL,
)

CREATE TABLE 'paiement'(
    `id` int(11) NOT NULL PRIMARY KEY,
  `id_client` int(11) NOT NULL FOREIGN KEY REFERENCES client.id,
  'prix'int(11) NOT NULL FOREIGN KEY REFERENCES billet.prix,
  'date' datetime(255) NOT NULL,
  'cb' numeric(250) NOT NULL,
)



INSERT INTO `film` (`id`,`nom`, `synopsis`, `duree_minute`, `genre`, `url`) VALUES
(1, 'SPIDERMAN 3', 'Pour la première fois dans son histoire cinématographique, Spider-Man, le héros sympa du quartier est démasqué et ne peut désormais plus séparer sa vie normale de ses lourdes responsabilités de super-héros.', '120', 'S.FICTION', '7w_w10HVa54'),
(2, 'DR STRANGE 2', 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d\'un monde caché de mysticisme et de dimensions alternatives.', '140', 'S.FICTION', 'i6zjrsyBhFU'),
(3, 'AMBULANCE', 'Will Sharp, un vétéran décoré fait appel à la seule personne indigne de confiance, son frère adoptif Danny pour trouver l’argent afin de couvrir les frais médicaux de sa femme.', '100', 'ACTION', 'rLBmeY-2EcA'),
(4, 'SONIC 2', 'Bien installé dans la petite ville de Green Hills, Sonic veut maintenant prouver qu’il a l’étoffe d\' un véritable héros. Un défi de taille se présente à lui quand le Dr Robotnik refait son apparition. ', '110', 'ANIMATION', 'SqH3-sCkZQw');


COMMIT TRANSACTION;