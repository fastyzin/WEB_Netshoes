-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 11/05/2023 às 22h27min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `netshoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tenis`
--

CREATE TABLE IF NOT EXISTS `tenis` (
  `codigo` int(4) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `descricao` longtext NOT NULL,
  `cor` varchar(20) NOT NULL,
  `tamanho` int(2) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `foto1` varchar(150) NOT NULL,
  `foto2` varchar(150) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tenis`
--

INSERT INTO `tenis` (`codigo`, `marca`, `modelo`, `descricao`, `cor`, `tamanho`, `preco`, `foto1`, `foto2`) VALUES
(1, 'Nike', 'Air MAX', 'Air Max SC White', 'Branco', 40, '599.00', 'images/airmax_white.png', 'images/airmax_whiteF2.png'),
(2, 'Nike', 'Air Force Utility', 'Air Force utility Branco', 'Branco', 40, '499.00', 'images/airforce_utility1.png', 'images/airforce_utility2.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
