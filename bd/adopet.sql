-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2019 às 20:25
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adopet`
--
CREATE DATABASE IF NOT EXISTS `adopet` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `adopet`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(300) COLLATE latin1_general_ci DEFAULT NULL,
  `idade` int(11) NOT NULL,
  `sexo` char(1) COLLATE latin1_general_ci NOT NULL,
  `porte` int(11) NOT NULL,
  `especie` int(11) NOT NULL,
  `imagem` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `situacao` int(11) NOT NULL DEFAULT '1',
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`id`, `nome`, `descricao`, `idade`, `sexo`, `porte`, `especie`, `imagem`, `situacao`, `idusuario`) VALUES
(5, 'Frederico Jhonson', 'ManÃ§o', 1, 'M', 1, 2, '4_15606225975d05360570910.jpg', 2, 4),
(6, 'Bichano', 'Velocista', 1, 'M', 2, 1, '4_15606225315d0535c321859.jpg', 1, 4),
(7, 'Felix', 'Super brincalhÃ£o', 3, 'M', 3, 2, '4_15606224305d05355ee0a20.jpg', 1, 4),
(10, 'Princesa', 'NÃ£o late muito.', 84, 'F', 2, 1, '2_15606217965d0532e4e86ab.jpg', 1, 2),
(11, 'Mel', 'Ã© uma BB (Brincalhona e Bruta)', 12, 'F', 2, 1, '2_15606217045d0532881c5f0.png', 3, 2),
(12, 'Jarbas', 'fofo', 2, 'M', 3, 1, '3_15606173215d0521695eb2a.jpg', 1, 3),
(13, 'Fulanilson', 'RecÃ©m nascido.', 1, 'M', 1, 2, '2_15606219215d05336189608.jpg', 3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE `solicitacao` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idanimal` int(11) NOT NULL,
  `descricao` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `situacao` int(11) NOT NULL,
  `dt_transacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `aprovacao` varchar(300) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `solicitacao`
--

INSERT INTO `solicitacao` (`id`, `idusuario`, `idanimal`, `descricao`, `situacao`, `dt_transacao`, `aprovacao`) VALUES
(1, 4, 5, 'Porque vou me mudar para um ap.', 2, '2019-06-15 00:19:36', NULL),
(7, 4, 6, 'Tenho muitos dogs', 1, '2019-06-15 01:56:19', NULL),
(8, 4, 7, 'Tenho muitos gatos', 1, '2019-06-15 10:44:43', NULL),
(11, 2, 10, 'Estou mudando de casa e preciso dar a cachorra.', 1, '2019-06-15 12:13:49', NULL),
(12, 2, 11, 'Sem espaÃ§o no quintal', 1, '2019-06-15 12:14:53', NULL),
(13, 3, 12, 'sou uma pessima pessoa', 1, '2019-06-15 13:48:41', NULL),
(14, 2, 13, 'Doando porque a mÃ£e teve muitos filhotes', 1, '2019-06-15 14:41:07', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sobrenome` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(700) COLLATE latin1_general_ci NOT NULL,
  `acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `email`, `senha`, `acesso`) VALUES
(2, 'Tiago', 'Silva', 'tiago@adopet.com', 'MTIzNDU2Nzg=', 0),
(3, 'Beatriz', 'Silva', 'bia@adopet.com', 'MTIzNDU2Nzg=', 0),
(4, 'Pamela', 'Prado', 'pam@adopet.com', 'MTIzNDU2Nzg=', 0),
(5, 'Admin', 'Adopet', 'admin@adopet.com', 'MTIzNDU2Nzg=', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idanimal` (`idanimal`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD CONSTRAINT `solicitacao_ibfk_1` FOREIGN KEY (`idanimal`) REFERENCES `animal` (`id`),
  ADD CONSTRAINT `solicitacao_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
