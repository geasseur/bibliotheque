-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 04 Décembre 2017 à 09:49
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `idBook` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `releaseDate` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `borrower` int(11) DEFAULT NULL,
  `dateReturn` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `book`
--

INSERT INTO `book` (`idBook`, `title`, `author`, `resume`, `releaseDate`, `category`, `available`, `borrower`, `dateReturn`) VALUES
(1, 'ravage', 'Barjavel', 'Ce livre raconte l\'épopée d\'un homme et de son groupe dans un paris post-apo suite à la disparition de l\'électricité. ', '1943-01-12', 'science fiction', 0, 1, '2017-12-11'),
(6, 'LORD OF THE RING', 'TOLKIEN', 'C EST CHIANT', '1955-05-15', 'FANTASY', 0, 3, '2017-12-14'),
(7, 'Sorceleur', 'sapkowsky', 'un chasseur de monstre élève une enfant', '1999-05-12', 'fantasy', 0, 4, '2017-12-14'),
(8, 'roi ubu', 'je sais plus', 'comédie déjanté sur un roi incapable', '1938-05-15', 'théatre', 0, 4, '2017-12-14'),
(9, 'dragon ball', 'toriyama', 'un garçon avec une queue de singe cours après des boules', '1984-10-23', 'science fiction', 0, 3, '2017-12-10'),
(11, 'test', 'test', 'test', '1992-01-12', 'test', 1, NULL, NULL),
(12, 'sherlock', 'conan doyles', 'c\'est un détective qui découvre des trucs', '1950-12-23', 'policier', 0, 4, '2017-12-11');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `dateSubscribe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `name`, `firstName`, `age`, `adress`, `dateSubscribe`) VALUES
(1, 'ventura', 'baptiste', 25, 'Roubaix', '2017-11-29'),
(2, 'jhgfds', 'fghjklm', 12, 'fghjkl', '2017-11-29'),
(3, 'jade', 'mara', 26, 'coruscant', '2017-11-29'),
(4, 'skywalker', 'luke', 23, 'tattoine', '2017-12-01');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`idBook`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `idBook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
