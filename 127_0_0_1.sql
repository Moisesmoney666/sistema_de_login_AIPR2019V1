-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Set-2019 às 16:39
-- Versão do servidor: 10.3.15-MariaDB-log
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemadelogin`
--
DROP DATABASE IF EXISTS `sistemadelogin`;
CREATE DATABASE IF NOT EXISTS `sistemadelogin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `sistemadelogin`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `nomeUsuario` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `senha` char(40) COLLATE utf8mb4_bin NOT NULL,
  `dataCriacao` datetime NOT NULL,
  `imagens` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `token` char(10) COLLATE utf8mb4_bin NOT NULL,
  `tempo_de_vida` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `nomeUsuario`, `email`, `senha`, `dataCriacao`, `imagens`, `token`, `tempo_de_vida`) VALUES
(1, 'moises', 'gamer', 'moisesgome1122@gamil', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2019-09-06 13:28:13', '', '', '2019-09-12 19:32:49'),
(2, 'moises', 'gamer11', 'moises@gamies', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2019-09-06 15:38:28', 'https://pm1.narvii.com/7288/028f937644af4d07678fd6412f1bd561b43cac1dr1-256-256v2_00.jpg', '', '2019-09-12 19:32:49'),
(3, 'moises', 'piuzinho', 'piuzinhi@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2019-09-06 16:09:10', 'https://media.giphy.com/media/cztB1jXXhNqWA/giphy.gif', '', '2019-09-12 19:32:49'),
(4, 'piuzinho', 'piuzinha', 'piuzinho@gamil.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2019-09-06 16:15:19', 'https://media.giphy.com/media/dScVH2piwOUiP12GPG/giphy.gif', '', '2019-09-12 19:32:49'),
(5, 'piuzinho', 'piuzinh0666', 'piuzinho@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2019-09-06 16:15:53', 'https://media.giphy.com/media/dScVH2piwOUiP12GPG/giphy.gif', '', '2019-09-12 19:32:49'),
(6, 'Moises', 'Moises', 'moisesgome1122@gamil.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2019-09-12 16:36:11', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhMWFhUXGBgYFhcYFxUXGBcXFRUWFxUXFxUYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0lHyUtLS0tLSstLS0tLS0tLS0tLS0tLSstLS0tLS0tL', '', '2019-09-12 19:36:11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
