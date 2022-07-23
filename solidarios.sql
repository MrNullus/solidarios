-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2021 às 06:15
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `solidarios`
--
CREATE DATABASE IF NOT EXISTS `solidarios` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `solidarios`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(1055) NOT NULL,
  `nasc` date NOT NULL,
  `cep` varchar(9) NOT NULL,
  `num` varchar(5) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fixo` varchar(13) DEFAULT NULL,
  `cel` varchar(14) DEFAULT NULL,
  `senha` varchar(15) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `imgperfil` varchar(260) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `nasc`, `cep`, `num`, `email`, `fixo`, `cel`, `senha`, `nick`, `imgperfil`) VALUES
(1, 'FabrÃ­cio JosÃ© Brito de Oliveira', '2005-01-25', '07956-040', '660', 'fabricio.oliveira100@etec.sp.gov.br', '(11)4609-4559', '(11)94609-4559', 'magico10', 'Caos', 'Caos.png'),
(2, 'FabrÃ­cio JosÃ© Brito de Oliveira', '2005-12-25', '07956-040', '660', 'fabricio.oliveira100@etec.sp.gov.br', '(11)4609-4559', '(11)94609-4559', 'senha', 'blaxprism', 'blaxprism.png'),
(12, 'Fabrício José Brito de Oliveira', '2005-01-25', '07956-040', '52a', 'fabricio.jose426@gmail.com', '(11)4609-4559', '(11)96017-3795', '123456789', 'poder', 'poder.png'),
(13, 'rei', '2021-12-08', '07956-040', '660', 'fabricio.oliveira100@etec.sp.gov.br', '(11)4609-4559', '(11)96017-3795', 'magico10', 'rei', NULL),
(14, 'fabricio josé', '3123-12-28', '07956-040', '660', 'fabricio@gmail.com', '(11)4609-4559', '(11)96017-3795', 'sangue', 'diabo', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
