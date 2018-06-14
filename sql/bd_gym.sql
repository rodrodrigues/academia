-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/06/2018 às 05:54
-- Versão do servidor: 10.1.32-MariaDB
-- Versão do PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_gym`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `matricula` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ocupacao` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `funcionario`
--

INSERT INTO `funcionario` (`matricula`, `nome`, `ocupacao`, `email`, `senha`) VALUES
(12345, 'Rodrigo dos Santos', 'Personal', 'rod@gym.com', 'e7d80ffeefa212b7c5c55700e4f7193e');

-- --------------------------------------------------------

--
-- Estrutura para tabela `treino`
--

CREATE TABLE `treino` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `data` varchar(11) NOT NULL,
  `hora` varchar(5) NOT NULL,
  `descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `treino`
--

INSERT INTO `treino` (`id`, `id_usuario`, `id_admin`, `data`, `hora`, `descricao`) VALUES
(4, 5, 12345, '01/01/1970', '9h', 'q'),
(5, 5, 12345, '01/01/1970', '9h', 'q');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `altura` decimal(10,2) NOT NULL,
  `cincunferenciaBraco` decimal(10,2) NOT NULL,
  `circunferenciaPeito` decimal(10,2) NOT NULL,
  `circunferenciaCintura` decimal(10,2) NOT NULL,
  `circunferenciaCoxa` decimal(10,2) NOT NULL,
  `circunferenciaPanturrilha` decimal(10,2) NOT NULL,
  `serie` longtext NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`matricula`, `nome`, `telefone`, `email`, `endereco`, `senha`, `peso`, `altura`, `cincunferenciaBraco`, `circunferenciaPeito`, `circunferenciaCintura`, `circunferenciaCoxa`, `circunferenciaPanturrilha`, `serie`, `status`) VALUES
(4, 'joao', '123456789', 'joaopedefeijao@gmail.com', 'rua do joaozin', 'e10adc3949ba59abbe56e057f20f883e', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0),
(5, 'Rodrigo', '23212321', 'rod@a.com', 'rua b', '827ccb0eea8a706c4c34a16891f84e7b', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `treino`
--
ALTER TABLE `treino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
