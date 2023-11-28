-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2023 às 15:58
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `concurso`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidatos`
--

CREATE TABLE `candidatos` (
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `identidade` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cargo_pretendido` varchar(100) NOT NULL,
  `sala_prova` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `candidatos`
--

INSERT INTO `candidatos` (`nome`, `cpf`, `identidade`, `email`, `cargo_pretendido`, `sala_prova`) VALUES
('Maria', '111.111.111-11', '123', 'maria@gmail.com', 'professor', 2),
('Luan', '123.123.123-12', '234', 'luan@gmail.com', 'medicina', 4),
('Joao', '546.546.546-54', '567', 'joao@gmail.com', 'diretor', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `fiscais`
--

CREATE TABLE `fiscais` (
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `sala_prova` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fiscais`
--

INSERT INTO `fiscais` (`nome`, `cpf`, `sala_prova`) VALUES
('Luciano', '123.456.789-12', 4),
('Ana', '987.654.432-21', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `fiscais`
--
ALTER TABLE `fiscais`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
