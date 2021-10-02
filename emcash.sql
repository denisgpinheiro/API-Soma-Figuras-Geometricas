-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Out-2021 às 05:27
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `emcash`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formas_geometricas`
--

CREATE TABLE `formas_geometricas` (
  `id` int(11) NOT NULL,
  `tipo_figura` varchar(255) NOT NULL,
  `base` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formas_geometricas`
--

INSERT INTO `formas_geometricas` (`id`, `tipo_figura`, `base`, `altura`, `area`) VALUES
(5, 'Retangulo', 12, 4, 48),
(6, 'Retangulo', 12, 3, 36),
(8, 'Triangulo', 12, 12, 72),
(9, 'Retangulo', 2, 4, 8),
(10, 'Triangulo', 12, 5, 30),
(16, 'Retangulo', 2, 4, 8);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formas_geometricas`
--
ALTER TABLE `formas_geometricas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formas_geometricas`
--
ALTER TABLE `formas_geometricas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
