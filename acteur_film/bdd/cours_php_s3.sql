-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 déc. 2021 à 12:55
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cours php s3`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id_acteur` int(11) NOT NULL,
  `nom_acteur` varchar(255) NOT NULL,
  `prenom_acteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `nom_acteur`, `prenom_acteur`) VALUES
(1, 'Morgane', 'Clara'),
(2, 'DiCarpio', 'Leonardo'),
(3, 'Smith', 'Will'),
(4, 'Ferrara', 'Manuel'),
(5, 'Antoine', 'adjamidis'),
(8, 'Alan', 'Sergent'),
(9, 'Lucas', 'leboso'),
(10, 'test', 'test'),
(11, 'Ludo', 'Fayolle'),
(12, 'bourde', 'salut'),
(13, 'Nikita', 'Beluchi'),
(14, 'Kaitlyn', 'Michelle');

-- --------------------------------------------------------

--
-- Structure de la table `casting`
--

CREATE TABLE `casting` (
  `film_id` int(11) NOT NULL,
  `acteur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `casting`
--

INSERT INTO `casting` (`film_id`, `acteur_id`) VALUES
(13, 2),
(13, 3),
(3, 1),
(31, 2);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nom_film` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `score` float NOT NULL,
  `nbVotants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `nom_film`, `annee`, `score`, `nbVotants`) VALUES
(1, 'Star Wars', 1977, 8.9, 14211),
(2, 'Pulp Fiction', 1994, 8.4, 11694),
(3, 'Blade Runner', 1982, 8.6, 8678),
(4, 'Titanic', 1997, 9.2, 8132),
(5, 'Braveheart', 1995, 8.4, 8074),
(6, 'Empire Strikes Back, The', 1980, 8.5, 8050),
(7, 'Shawshank Redemption, The', 1994, 8.8, 7850),
(8, 'Independence Day', 1996, 7, 7138),
(9, 'Usual Suspects, The', 1995, 8.7, 6981),
(10, 'Raiders of the Lost Ark', 1981, 8.4, 6488),
(11, '2001: A Space Odyssey', 1968, 8.4, 6435),
(12, 'Forrest Gump', 1994, 7.8, 6269),
(13, 'Alien', 1986, 8.3, 5816),
(14, 'Silence of the Lambs, The', 1991, 8.3, 5715),
(15, 'Princess Bride, The', 1987, 8.4, 5522),
(16, 'Terminator 2: Judgment Day', 1991, 8, 5513),
(17, 'Casablanca', 1942, 8.7, 5489),
(18, 'Monty Python and the Holy Grail', 1974, 8.4, 5319),
(19, 'Star Trek: First Contact', 1996, 8.2, 5298),
(20, 'Fargo', 1996, 8.2, 5293),
(21, 'Twelve Monkeys', 1995, 8, 5287),
(22, 'Trainspotting', 1996, 8.1, 5233),
(23, 'Godfather, The', 1972, 8.7, 5211),
(24, 'Se7en', 1995, 8.1, 5107),
(25, 'Back to the Future', 1985, 7.8, 5103),
(26, 'Rock, The', 1996, 8, 4938),
(27, 'Reservoir Dogs', 1992, 8.3, 4861),
(28, 'Apocalypse Now', 1979, 8.3, 4860),
(30, 'Apollo 13', 1995, 7.8, 4778),
(31, 'Clockwork Orange, A', 1971, 8.4, 4768),
(32, 'Jurassic Park', 1993, 7.4, 4707),
(33, 'English Patient, The', 1996, 8.1, 4689),
(34, 'One Flew Over the Cuckoo\'s Nest', 1975, 8.5, 4545),
(35, 'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb', 1963, 8.6, 4451),
(39, 'Terminator, The', 1984, 7.8, 4225),
(48, 'True Lies', 1994, 7.3, 3601),
(94, 'Total Recall', 1990, 7.1, 2305),
(180, 'Predator', 1987, 7.2, 1604),
(263, 'Conan the Barbarian', 1981, 6.9, 1271),
(321, 'Twins', 1988, 6.3, 1126),
(334, 'Last Action Hero', 1993, 5.9, 1107),
(410, 'Dave', 1993, 7.4, 962),
(440, 'Kindergarten Cop', 1990, 6.2, 894),
(471, 'Running Man, The', 1987, 6.3, 856),
(629, 'Commando', 1985, 6.1, 673),
(746, 'Conan the Destroyer', 1984, 5.4, 542),
(932, 'Red Heat', 1988, 5.8, 402),
(960, 'Terminator 2: 3-D', 1996, 8.7, 384),
(1106, 'Junior', 1994, 5.9, 329),
(1339, 'Jingle All the Way', 1996, 6, 262),
(1551, 'Raw Deal', 1986, 5, 215),
(1622, 'Batman and Robin', 1997, 3.9, 1925),
(1623, 'damn', 911, 69, 420),
(1633, 'les bronzés aux soleil', 1990, 258, 987),
(1634, 'wuwu', 789, 456, 123),
(1635, 'uwuuuw', 987, 654, 321);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `type` varchar(255) DEFAULT 'user',
  `pseudo` varchar(25) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `type`, `pseudo`, `mdp`) VALUES
(11, 'admin', 'a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(12, 'user', 'b', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d'),
(23, 'user', 'Sidem', '890523735ec725c4aaf06adbccb91ac0629572a1be4de308fd3deb1d4dfd03a2'),
(24, 'user', 'UwUwUwU', 'e70a3b51606960373cbffa5e096e4cb3c500d34672de03937bb58ac16e9f222c');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `casting`
--
ALTER TABLE `casting`
  ADD KEY `etrangere_film` (`film_id`),
  ADD KEY `etrangere_acteur` (`acteur_id`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1636;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `casting`
--
ALTER TABLE `casting`
  ADD CONSTRAINT `etrangere_acteur` FOREIGN KEY (`acteur_id`) REFERENCES `acteur` (`id_acteur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etrangere_film` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
