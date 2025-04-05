-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11/12/2024 às 13:40
-- Versão do servidor: 10.4.19-MariaDB
-- Versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agitacao_toucas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabelas_toucas`
--

CREATE TABLE `tabelas_toucas` (
  `id` int(11) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `estoque` int(11) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `categoria_touca` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tabelas_toucas`
--

INSERT INTO `tabelas_toucas` (`id`, `cor`, `descricao`, `estoque`, `imagem`, `categoria_touca`) VALUES
(1, 'Vermelha', 'Touca de alta qualidade na cor Vermelha para adultos.', 90, 'assets/img/toucas/touca-vermelha.webp', 'Adulto'),
(2, 'Amarela', 'Touca resistente na cor amarela para adultos.', 26, 'assets/img/toucas/touca-amarela.webp', 'Adulto'),
(3, 'Verde', 'Touca esportiva na cor verde para adultos.', 15, 'assets/img/toucas/touca-verde.webp', 'Adulto'),
(4, 'Azul', 'Touca adicional na cor azul para adultos.', 19, 'assets/img/toucas/touca-azul.webp', 'Adulto'),
(5, 'Cinza', 'Touca confortável na cor cinza para crianças.', 1, 'assets/img/toucas/touca-amarela.webp', 'Infantil'),
(6, 'Branca', 'Touca macia na cor branca para crianças.', 18, 'assets/img/toucas/touca-amarela.webp', 'Infantil'),
(7, 'Preta', 'Touca durável na cor preta para crianças.', 10, 'assets/img/toucas/touca-amarela.webp', 'Infantil'),
(8, 'Lilas', 'Touca charmosa na cor lilás para crianças.', 34, 'assets/img/toucas/touca-amarela.webp', 'Infantil'),
(9, 'Marrom', 'Touca estilosa na cor marrom para crianças.', 21, 'assets/img/toucas/touca-amarela.webp', 'Infantil'),
(10, 'Rosa', 'Touca divertida na cor rosa para crianças.', 26, 'assets/img/toucas/touca-amarela.webp', 'Infantil'),
(11, 'Prata', 'Touca brilhante na cor prata para crianças.', 9, 'assets/img/toucas/touca-amarela.webp', 'Infantil'),
(12, 'Laranja', 'Touca extra na cor Laranja para crianças.', 99, 'assets/img/toucas/touca-amarela.webp', 'Infantil');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela_alunos`
--

CREATE TABLE `tabela_alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nascimento` date NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `sub_categoria` varchar(20) NOT NULL,
  `touca` varchar(10) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `cadastro_por` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tabela_alunos`
--

INSERT INTO `tabela_alunos` (`id`, `nome`, `nascimento`, `categoria`, `sub_categoria`, `touca`, `foto`, `data_cadastro`, `cadastro_por`) VALUES
(113, 'Aluno Adulto 5', '1987-01-10', 'Adulto', '35+', 'Amarela', 'foto5.jpg', '2024-12-09 15:01:50', ''),
(114, 'Aluno Adulto 6', '1992-03-18', 'Adulto', '30+', 'Vermelha', 'foto6.jpg', '2024-12-09 15:01:50', ''),
(115, 'Aluno Adulto 7', '1984-09-05', 'Adulto', '40+', 'Vermelha', 'foto7.jpg', '2024-12-09 15:01:50', ''),
(116, 'Aluno Adulto 8', '1991-05-25', 'Adulto', '30+', 'Vermelha', 'foto8.jpg', '2024-12-09 15:01:50', ''),
(117, 'Aluno Adulto 9', '1983-08-16', 'Adulto', '40+', 'Amarela', 'foto9.jpg', '2024-12-09 15:01:50', ''),
(118, 'Aluno Adulto 10', '1995-12-03', 'Adulto', '25+', 'Azul', 'foto10.jpg', '2024-12-09 15:01:50', ''),
(119, 'Aluno Adulto 11', '1986-04-12', 'Adulto', '35+', 'Vermelha', 'foto11.jpg', '2024-12-09 15:01:50', ''),
(120, 'Aluno Adulto 12', '1989-02-07', 'Adulto', '35+', 'Verde', 'foto12.jpg', '2024-12-09 15:01:50', ''),
(121, 'Aluno Adulto 13', '1993-09-22', 'Adulto', '30+', 'Amarela', 'foto13.jpg', '2024-12-09 15:01:50', ''),
(122, 'Aluno Adulto 14', '1981-10-05', 'Adulto', '40+', 'Azul', 'foto14.jpg', '2024-12-09 15:01:50', ''),
(123, 'Aluno Adulto 15', '1994-01-16', 'Adulto', '30+', 'Vermelha', 'foto15.jpg', '2024-12-09 15:01:50', ''),
(124, 'Aluno Adulto 16', '1980-06-30', 'Adulto', '40+', 'Verde', 'foto16.jpg', '2024-12-09 15:01:50', ''),
(125, 'Aluno Adulto 17', '1988-11-19', 'Adulto', '35+', 'Amarela', 'foto17.jpg', '2024-12-09 15:01:50', ''),
(126, 'Aluno Adulto 18', '1992-10-11', 'Adulto', '30+', 'Azul', 'foto18.jpg', '2024-12-09 15:01:50', ''),
(127, 'Aluno Adulto 19', '1983-07-01', 'Adulto', '40+', 'Vermelha', 'foto19.jpg', '2024-12-09 15:01:50', ''),
(128, 'Aluno Adulto 20', '1985-09-09', 'Adulto', '35+', 'Verde', 'foto20.jpg', '2024-12-09 15:01:50', ''),
(129, 'Aluno Adulto 21', '1990-03-21', 'Adulto', '30+', 'Amarela', 'foto21.jpg', '2024-12-09 15:01:50', ''),
(130, 'Aluno Adulto 22', '1984-11-11', 'Adulto', '40+', 'Azul', 'foto22.jpg', '2024-12-09 15:01:50', ''),
(131, 'Aluno Adulto 23', '1987-12-23', 'Adulto', '35+', 'Vermelha', 'foto23.jpg', '2024-12-09 15:01:50', ''),
(132, 'Aluno Adulto 24', '1992-06-16', 'Adulto', '30+', 'Verde', 'foto24.jpg', '2024-12-09 15:01:50', ''),
(133, 'Aluno Adulto 25', '1985-08-09', 'Adulto', '35+', 'Amarela', 'foto25.jpg', '2024-12-09 15:01:50', ''),
(134, 'Aluno Adulto 26', '1991-02-12', 'Adulto', '30+', 'Azul', 'foto26.jpg', '2024-12-09 15:01:50', ''),
(135, 'Aluno Adulto 27', '1983-03-22', 'Adulto', '40+', 'Vermelha', 'foto27.jpg', '2024-12-09 15:01:50', ''),
(136, 'Aluno Adulto 28', '1994-09-30', 'Adulto', '30+', 'Verde', 'foto28.jpg', '2024-12-09 15:01:50', ''),
(137, 'Aluno Adulto 29', '1989-07-05', 'Adulto', '35+', 'Amarela', 'foto29.jpg', '2024-12-09 15:01:50', ''),
(138, 'Aluno Adulto 30', '1992-10-27', 'Adulto', '30+', 'Azul', 'foto30.jpg', '2024-12-09 15:01:50', ''),
(139, 'Aluno Adulto 31', '1987-11-11', 'Adulto', '35+', 'Vermelha', 'foto31.jpg', '2024-12-09 15:01:50', ''),
(140, 'Aluno Adulto 32', '1981-03-06', 'Adulto', '40+', 'Verde', 'foto32.jpg', '2024-12-09 15:01:50', ''),
(141, 'Aluno Adulto 33', '1990-05-18', 'Adulto', '30+', 'Amarela', 'foto33.jpg', '2024-12-09 15:01:50', ''),
(142, 'Aluno Adulto 34', '1994-02-22', 'Adulto', '30+', 'Azul', 'foto34.jpg', '2024-12-09 15:01:50', ''),
(143, 'Aluno Adulto 35', '1984-01-11', 'Adulto', '40+', 'Vermelha', 'foto35.jpg', '2024-12-09 15:01:50', ''),
(144, 'Aluno Adulto 36', '1983-12-30', 'Adulto', '40+', 'Verde', 'foto36.jpg', '2024-12-09 15:01:50', ''),
(145, 'Aluno Adulto 37', '1988-07-02', 'Adulto', '35+', 'Amarela', 'foto37.jpg', '2024-12-09 15:01:50', ''),
(146, 'Aluno Adulto 38', '1995-09-20', 'Adulto', '25+', 'Azul', 'foto38.jpg', '2024-12-09 15:01:50', ''),
(147, 'Aluno Adulto 39', '1982-11-15', 'Adulto', '40+', 'Vermelha', 'foto39.jpg', '2024-12-09 15:01:50', ''),
(148, 'Aluno Adulto 40', '1989-03-02', 'Adulto', '35+', 'Verde', 'foto40.jpg', '2024-12-09 15:01:50', ''),
(149, 'Aluno Adulto 41', '1986-07-04', 'Adulto', '35+', 'Amarela', 'foto41.jpg', '2024-12-09 15:01:50', ''),
(150, 'Aluno Adulto 42', '1993-10-19', 'Adulto', '30+', 'Azul', 'foto42.jpg', '2024-12-09 15:01:50', ''),
(151, 'Aluno Adulto 43', '1991-04-25', 'Adulto', '30+', 'Vermelha', 'foto43.jpg', '2024-12-09 15:01:50', ''),
(152, 'Aluno Adulto 44', '1984-08-15', 'Adulto', '40+', 'Verde', 'foto44.jpg', '2024-12-09 15:01:50', ''),
(153, 'Aluno Adulto 45', '1987-06-09', 'Adulto', '35+', 'Amarela', 'foto45.jpg', '2024-12-09 15:01:50', ''),
(154, 'Aluno Adulto 46', '1992-09-28', 'Adulto', '30+', 'Azul', 'foto46.jpg', '2024-12-09 15:01:50', ''),
(155, 'Aluno Adulto 47', '1983-12-22', 'Adulto', '40+', 'Vermelha', 'foto47.jpg', '2024-12-09 15:01:50', ''),
(156, 'Aluno Adulto 48', '1988-11-07', 'Adulto', '35+', 'Verde', 'foto48.jpg', '2024-12-09 15:01:50', ''),
(157, 'Aluno Adulto 49', '1982-06-01', 'Adulto', '40+', 'Amarela', 'foto49.jpg', '2024-12-09 15:01:50', ''),
(159, 'Aluno Infantil 1', '2015-05-12', 'Infantil', 'Mirim', 'Cinza', 'foto51.jpg', '2024-12-09 15:01:50', ''),
(160, 'Aluno Infantil 2', '2013-06-15', 'Infantil', 'Petiz', 'Azul', 'foto52.jpg', '2024-12-09 15:01:50', ''),
(161, 'Aluno Infantil 3', '2016-07-21', 'Infantil', 'Pré-mirim', 'Preta', 'foto53.jpg', '2024-12-09 15:01:50', ''),
(162, 'Aluno Infantil 4', '2012-11-30', 'Infantil', 'Petiz', 'Lilas', 'foto54.jpg', '2024-12-09 15:01:50', ''),
(163, 'Aluno Infantil 5e', '2014-01-10', 'Infantil', 'Mirim', 'Laranja', 'foto55.jpg', '2024-12-09 15:01:50', ''),
(164, 'Aluno Infantil 6', '2017-03-18', 'Infantil', 'Pré-mirim', 'Marrom', 'foto56.jpg', '2024-12-09 15:01:50', ''),
(165, 'Aluno Infantil 7', '2011-09-05', 'Infantil', 'Infantil', 'Rosa', 'foto57.jpg', '2024-12-09 15:01:50', ''),
(166, 'Aluno Infantil 8', '2016-05-25', 'Infantil', 'Pré-mirim', 'Prata', 'foto58.jpg', '2024-12-09 15:01:50', ''),
(167, 'Aluno Infantil 9', '2013-08-16', 'Infantil', 'Petiz', 'Cinza', 'foto59.jpg', '2024-12-09 15:01:50', ''),
(168, 'Aluno Infantil 10', '2015-12-03', 'Infantil', 'Mirim', 'Branca', 'foto60.jpg', '2024-12-09 15:01:50', ''),
(169, 'Aluno Infantil 11', '2012-04-12', 'Infantil', 'Petiz', 'Preta', 'foto61.jpg', '2024-12-09 15:01:50', ''),
(170, 'Aluno Infantil 12', '2014-02-07', 'Infantil', 'Mirim', 'Lilas', 'foto62.jpg', '2024-12-09 15:01:50', ''),
(171, 'Aluno Infantil 13', '2011-09-22', 'Infantil', 'Infantil', 'Laranja', 'foto63.jpg', '2024-12-09 15:01:50', ''),
(172, 'Aluno Infantil 14', '2016-10-05', 'Infantil', 'Pré-mirim', 'Marrom', 'foto64.jpg', '2024-12-09 15:01:50', ''),
(173, 'Aluno Infantil 15', '2017-01-16', 'Infantil', 'Pré-mirim', 'Rosa', 'foto65.jpg', '2024-12-09 15:01:50', ''),
(174, 'Aluno Infantil 16', '2013-06-30', 'Infantil', 'Petiz', 'Prata', 'foto66.jpg', '2024-12-09 15:01:50', ''),
(175, 'Aluno Infantil 17', '2012-11-19', 'Infantil', 'Petiz', 'Cinza', 'foto67.jpg', '2024-12-09 15:01:50', ''),
(176, 'Aluno Infantil 18', '2014-10-11', 'Infantil', 'Mirim', 'Branca', 'foto68.jpg', '2024-12-09 15:01:50', ''),
(177, 'Aluno Infantil 19', '2015-07-01', 'Infantil', 'Mirim', 'Preta', 'foto69.jpg', '2024-12-09 15:01:50', ''),
(178, 'Aluno Infantil 20', '2013-09-09', 'Infantil', 'Petiz', 'Lilas', 'foto70.jpg', '2024-12-09 15:01:50', ''),
(179, 'Aluno Infantil 21', '2014-01-02', 'Infantil', 'Mirim', 'Laranja', 'foto71.jpg', '2024-12-09 15:01:50', ''),
(180, 'Aluno Infantil 22', '2015-05-19', 'Infantil', 'Mirim', 'Marrom', 'foto72.jpg', '2024-12-09 15:01:50', ''),
(181, 'Aluno Infantil 23', '2012-07-01', 'Infantil', 'Petiz', 'Rosa', 'foto73.jpg', '2024-12-09 15:01:50', ''),
(182, 'Aluno Infantil 24', '2011-03-22', 'Infantil', 'Infantil', 'Prata', 'foto74.jpg', '2024-12-09 15:01:50', ''),
(183, 'Aluno Infantil 25', '2016-02-09', 'Infantil', 'Pré-mirim', 'Cinza', 'foto75.jpg', '2024-12-09 15:01:50', ''),
(184, 'Aluno Infantil 26', '2013-08-10', 'Infantil', 'Petiz', 'Branca', 'foto76.jpg', '2024-12-09 15:01:50', ''),
(185, 'Aluno Infantil 27', '2012-05-25', 'Infantil', 'Petiz', 'Preta', 'foto77.jpg', '2024-12-09 15:01:50', ''),
(186, 'Aluno Infantil 28', '2014-11-06', 'Infantil', 'Mirim', 'Lilas', 'foto78.jpg', '2024-12-09 15:01:50', ''),
(187, 'Aluno Infantil 29', '2015-06-14', 'Infantil', 'Mirim', 'Laranja', 'foto79.jpg', '2024-12-09 15:01:50', ''),
(188, 'Aluno Infantil 30', '2016-03-27', 'Infantil', 'Pré-mirim', 'Marrom', 'foto80.jpg', '2024-12-09 15:01:50', ''),
(189, 'Aluno Infantil 31', '2012-10-12', 'Infantil', 'Petiz', 'Rosa', 'foto81.jpg', '2024-12-09 15:01:50', ''),
(190, 'Aluno Infantil 32', '2013-12-05', 'Infantil', 'Petiz', 'Prata', 'foto82.jpg', '2024-12-09 15:01:50', ''),
(191, 'Aluno Infantil 33', '2017-01-01', 'Infantil', 'Pré-mirim', 'Cinza', 'foto83.jpg', '2024-12-09 15:01:50', ''),
(192, 'Aluno Infantil 34', '2014-02-15', 'Infantil', 'Mirim', 'Branca', 'foto84.jpg', '2024-12-09 15:01:50', ''),
(193, 'Aluno Infantil 35', '2012-11-11', 'Infantil', 'Petiz', 'Preta', 'foto85.jpg', '2024-12-09 15:01:50', ''),
(194, 'Aluno Infantil 36', '2015-08-18', 'Infantil', 'Mirim', 'Lilas', 'foto86.jpg', '2024-12-09 15:01:50', ''),
(195, 'Aluno Infantil 37e', '2013-07-25', 'Infantil', 'Petiz', 'Laranja', 'foto87.jpg', '2024-12-09 15:01:50', ''),
(196, 'Aluno Infantil 38', '2017-02-20', 'Infantil', 'Pré-mirim', 'Marrom', 'foto88.jpg', '2024-12-09 15:01:50', ''),
(197, 'Aluno Infantil 39', '2014-09-13', 'Infantil', 'Mirim', 'Rosa', 'foto89.jpg', '2024-12-09 15:01:50', ''),
(198, 'Aluno Infantil 40', '2015-11-02', 'Infantil', 'Mirim', 'Prata', 'foto90.jpg', '2024-12-09 15:01:50', ''),
(199, 'Aluno Infantil 41', '2013-06-23', 'Infantil', 'Petiz', 'Cinza', 'foto91.jpg', '2024-12-09 15:01:50', ''),
(200, 'Aluno Infantil 42', '2014-03-17', 'Infantil', 'Mirim', 'Branca', 'foto92.jpg', '2024-12-09 15:01:50', ''),
(201, 'Aluno Infantil 43', '2012-01-08', 'Infantil', 'Petiz', 'Preta', 'foto93.jpg', '2024-12-09 15:01:50', ''),
(202, 'Aluno Infantil 44', '2016-04-11', 'Infantil', 'Pré-mirim', 'Lilas', 'foto94.jpg', '2024-12-09 15:01:50', ''),
(203, 'Aluno Infantil 45', '2015-10-02', 'Infantil', 'Mirim', 'Laranja', 'foto95.jpg', '2024-12-09 15:01:50', ''),
(204, 'Aluno Infantil 46', '2013-05-09', 'Infantil', 'Petiz', 'Marrom', 'foto96.jpg', '2024-12-09 15:01:50', ''),
(205, 'Aluno Infantil 47', '2017-03-13', 'Infantil', 'Pré-mirim', 'Rosa', 'foto97.jpg', '2024-12-09 15:01:50', ''),
(206, 'Aluno Infantil 48', '2012-10-26', 'Infantil', 'Petiz', 'Prata', 'foto98.jpg', '2024-12-09 15:01:50', ''),
(207, 'Aluno Infantil 49', '2014-02-04', 'Infantil', 'Mirim', 'Cinza', 'foto99.jpg', '2024-12-09 15:01:50', ''),
(208, 'Aluno Infantil 500', '2015-07-29', 'Infantil', 'Mirim', 'Branca', 'foto100.jpg', '2024-12-09 15:01:50', ''),
(212, 'teste', '2010-10-10', 'Adulto', 'Infantil', 'Vermelha', '', '2024-12-10 10:57:56', 'Osvaldo Rodrigues'),
(213, 'TESTE 2', '2010-01-01', 'Infantil', 'Infantil', 'Rosa', '', '2024-12-10 11:04:02', 'Administrador'),
(217, 'guria lilas', '2020-10-10', 'Infantil', 'Pré-mirim', 'Lilas', '', '2024-12-10 13:10:57', 'Osvaldo Rodrigues'),
(218, 'senhor Zé', '1954-01-01', 'Adulto', '70+', 'Amarela', '', '2024-12-10 13:23:30', 'Osvaldo Rodrigues'),
(219, 'LAIS ABESTALHADA™', '1966-10-10', 'Adulto', '55+', 'Vermelha', '', '2024-12-10 14:48:32', 'Osvaldo Rodrigues'),
(220, 'testre 545454', '2000-01-01', 'Adulto', 'Pré-Master', 'Vermelha', '', '2024-12-10 15:12:57', 'Osvaldo Rodrigues');

--
-- Gatilhos `tabela_alunos`
--
DELIMITER $$
CREATE TRIGGER `before_insert_tabela_alunos` BEFORE INSERT ON `tabela_alunos` FOR EACH ROW BEGIN
    SET NEW.sub_categoria = CASE
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) <= 8 THEN 'Pré-mirim'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 9 AND 10 THEN 'Mirim'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 11 AND 12 THEN 'Petiz'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 13 AND 14 THEN 'Infantil'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 15 AND 16 THEN 'Juvenil'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 17 AND 19 THEN 'Júnior'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 20 AND 24 THEN 'Pré-Master'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 25 AND 29 THEN '25+'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 30 AND 34 THEN '30+'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 35 AND 39 THEN '35+'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 40 AND 44 THEN '40+'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 45 AND 49 THEN '45+'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 50 AND 54 THEN '50+'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 55 AND 59 THEN '55+'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 60 AND 64 THEN '60+'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) BETWEEN 65 AND 69 THEN '65+'
        WHEN TIMESTAMPDIFF(YEAR, NEW.nascimento, CURDATE()) >= 70 THEN '70+'
        ELSE 'Outros'
    END;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `senha_hash` varchar(255) NOT NULL,
  `data_cadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `foto`, `username`, `senha_hash`, `data_cadastro`) VALUES
(1, 'Administrador', '', 'admin', '12345', '2024-12-08 10:35:28'),
(2, 'Osvaldo Rodrigues', 'assets/img/usuarios/osvaldo.png', 'osvaldo', '123456', '2024-12-08 10:52:05');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabelas_toucas`
--
ALTER TABLE `tabelas_toucas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tabela_alunos`
--
ALTER TABLE `tabela_alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabelas_toucas`
--
ALTER TABLE `tabelas_toucas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tabela_alunos`
--
ALTER TABLE `tabela_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
