-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 16 oct. 2021 à 20:29
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myblogphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog_post`
--

DROP TABLE IF EXISTS `blog_post`;
CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `chapo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `last_update` varchar(45) DEFAULT NULL,
  `user_id_User` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_blog_post_user1` (`user_id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `url_image`, `chapo`, `content`, `last_update`, `user_id_User`) VALUES
(16, 'Projet PHP orienté objet sans framework', '811ff7d9b774bc2c3ee177b8f7752e81_php-1000x765px.png', 'Création d\'un blog php', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis pulvinar augue. Phasellus convallis, nisi ut mattis viverra, augue tellus rutrum ligula, eu faucibus massa felis ac lacus. Aliquam euismod commodo sem, sed laoreet ex. Mauris sollicitudin et erat eu gravida. Nam at dictum risus, lobortis semper elit. Quisque maximus, elit vitae porttitor ornare, sapien ipsum consequat odio, sit amet sodales lacus leo at tellus. Phasellus lacinia justo metus, ut pellentesque erat semper non. Nullam eget ex faucibus, tempor nisi ac, faucibus turpis. Praesent mollis dignissim odio, at consequat enim tincidunt sit amet. Donec tempus ex quis porttitor fermentum. Integer ornare quam vel enim imperdiet, tempor malesuada felis semper. Ut elementum lectus eu felis imperdiet feugiat. Aliquam quis auctor arcu. Sed egestas lacus sapien, sed posuere urna lobortis vitae. Nulla dapibus tortor vel urna dictum, eu lacinia urna vestibulum. Etiam congue orci id dignissim rhoncus.\r\n\r\nUt ipsum sapien, convallis non dolor et, pretium luctus velit. Maecenas id nulla sapien. Sed varius in magna et lacinia. Aliquam erat volutpat. Morbi facilisis vel lorem sit amet malesuada. Pellentesque eget porta purus, et consequat ipsum. Ut efficitur malesuada dolor eu blandit. In a fermentum lorem. Nam non dapibus libero. Integer efficitur lacus mi.', '2021-10-16 19:43:45', 1),
(18, 'Angular 11', '86d02f55ea0d5a26d28bdf682a0d844d_angular-logo-B76B1CDE98-seeklogo.com.png', 'Création d\'une application de gestion de livres dans une bibliothèque municipale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis pulvinar augue. Phasellus convallis, nisi ut mattis viverra, augue tellus rutrum ligula, eu faucibus massa felis ac lacus. Aliquam euismod commodo sem, sed laoreet ex. Mauris sollicitudin et erat eu gravida. Nam at dictum risus, lobortis semper elit. Quisque maximus, elit vitae porttitor ornare, sapien ipsum consequat odio, sit amet sodales lacus leo at tellus. Phasellus lacinia justo metus, ut pellentesque erat semper non. Nullam eget ex faucibus, tempor nisi ac, faucibus turpis. Praesent mollis dignissim odio, at consequat enim tincidunt sit amet. Donec tempus ex quis porttitor fermentum. Integer ornare quam vel enim imperdiet, tempor malesuada felis semper. Ut elementum lectus eu felis imperdiet feugiat. Aliquam quis auctor arcu. Sed egestas lacus sapien, sed posuere urna lobortis vitae. Nulla dapibus tortor vel urna dictum, eu lacinia urna vestibulum. Etiam congue orci id dignissim rhoncus.\r\n', '2021-10-16 17:49:44', 1);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `commentContent` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `commentValidate` tinyint DEFAULT NULL,
  `commentSignaled` tinyint DEFAULT NULL,
  `user_id_User` int NOT NULL,
  `blog_post_id_blog_post` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comment_blog_post1` (`blog_post_id_blog_post`),
  KEY `fk_comment_user1` (`user_id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `commentContent`, `commentValidate`, `commentSignaled`, `user_id_User`, `blog_post_id_blog_post`) VALUES
(14, 'Mon premier commentaire :-)', 1, 0, 1, 16),
(15, 'Mon deuxième commentaire ;-)', 1, 1, 1, 18),
(16, 'Un commentaire supplémentaire', 0, 0, 1, 16);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`, `admin`) VALUES
(1, 'lesage', 'laurent.lesage51@gmail.com', '$2y$10$UHFtns0nwbBemVwZFgjUmeSnu0SYpJTJD2ye79ofIMem7M8U9tIR2', 1),
(28, NULL, '66lolo@live.fr', '$2y$10$heaVtkErwD5oqYvKb1Nae.H.x1ksWcF1zXjrDPDdbOpTvxFYr6jS2', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blog_post`
--
ALTER TABLE `blog_post`
  ADD CONSTRAINT `fk_blog_post_user1` FOREIGN KEY (`user_id_User`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_blog_post1` FOREIGN KEY (`blog_post_id_blog_post`) REFERENCES `blog_post` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_comment_user1` FOREIGN KEY (`user_id_User`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
