-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Maio-2023 às 17:20
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `boteco_dieimes`
--
CREATE DATABASE IF NOT EXISTS `boteco_dieimes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `boteco_dieimes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `pedido` varchar(300) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `nome`, `endereco`, `telefone`, `pedido`) VALUES
(2, 'g xgd', 'fghfy', 'dffhfghfhg', 'yugygfyth'),
(3, 'Juanito Destruidor de SÃ³is', 'Rua Marechal Deodoro 900', 'dffhfghfhg', 'yugygfyth'),
(4, 'Juanito Destruidor de SÃ³is', 'Rua do Dieimes', 'dffhfghfhg', 'yugygfyth'),
(5, 'asdas', 'asdad', 'asdasd', 'asdad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_func`
--

DROP TABLE IF EXISTS `tabela_func`;
CREATE TABLE IF NOT EXISTS `tabela_func` (
  `nome_completo` varchar(200) NOT NULL,
  `data_nasc` varchar(100) NOT NULL,
  `habilidades` varchar(300) NOT NULL,
  `ocupacao` varchar(100) NOT NULL,
  `id_func` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_func`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela_func`
--

INSERT INTO `tabela_func` (`nome_completo`, `data_nasc`, `habilidades`, `ocupacao`, `id_func`) VALUES
('jraffis', '09052002', 'Bisonho', 'Zelador', 2),
('jraffis', '09/05/2022', 'Bisonho', 'Zelador', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_lanche`
--

DROP TABLE IF EXISTS `tabela_lanche`;
CREATE TABLE IF NOT EXISTS `tabela_lanche` (
  `preco` varchar(20) NOT NULL,
  `img` varchar(300) NOT NULL,
  `ingredientes` varchar(300) NOT NULL,
  `id_lanche` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  PRIMARY KEY (`id_lanche`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela_lanche`
--

INSERT INTO `tabela_lanche` (`preco`, `img`, `ingredientes`, `id_lanche`, `nome`) VALUES
('9.99', 'teste.jpg', 'Carne, pÃ£o, salada, presunto, molho', 2, 'HambÃºrguer Legal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
