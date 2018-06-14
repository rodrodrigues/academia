-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2018 às 00:20
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_gym`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
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
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `matricula` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ocupacao` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`matricula`, `nome`, `ocupacao`, `email`, `senha`) VALUES
(12345, 'Rodrigo dos Santos', 'Personal', 'rod@gym.com', 'e7d80ffeefa212b7c5c55700e4f7193e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `serie`
--

CREATE TABLE `serie` (
  `mat_usuario` int(11) DEFAULT NULL,
  `exercicio1` varchar(100) DEFAULT NULL,
  `exercicio2` varchar(100) DEFAULT NULL,
  `exercicio3` varchar(100) DEFAULT NULL,
  `exercicio4` varchar(100) DEFAULT NULL,
  `exercicio5` varchar(100) DEFAULT NULL,
  `exercicio6` varchar(100) DEFAULT NULL,
  `exercicio7` varchar(100) DEFAULT NULL,
  `exercicio8` varchar(100) DEFAULT NULL,
  `exercicio9` varchar(100) DEFAULT NULL,
  `exercicio10` varchar(100) DEFAULT NULL,
  `exercicio11` varchar(100) DEFAULT NULL,
  `exercicio12` varchar(100) DEFAULT NULL,
  `repeticao1` varchar(100) DEFAULT NULL,
  `repeticao2` varchar(100) DEFAULT NULL,
  `repeticao3` varchar(100) DEFAULT NULL,
  `repeticao4` varchar(100) DEFAULT NULL,
  `repeticao5` varchar(100) DEFAULT NULL,
  `repeticao6` varchar(100) DEFAULT NULL,
  `repeticao7` varchar(100) DEFAULT NULL,
  `repeticao8` varchar(100) DEFAULT NULL,
  `repeticao9` varchar(100) DEFAULT NULL,
  `repeticao10` varchar(100) DEFAULT NULL,
  `repeticao11` varchar(100) DEFAULT NULL,
  `repeticao12` varchar(100) DEFAULT NULL,
  `quantidade1` varchar(100) DEFAULT NULL,
  `quantidade2` varchar(100) DEFAULT NULL,
  `quantidade3` varchar(100) DEFAULT NULL,
  `quantidade4` varchar(100) DEFAULT NULL,
  `quantidade5` varchar(100) DEFAULT NULL,
  `quantidade6` varchar(100) DEFAULT NULL,
  `quantidade7` varchar(100) DEFAULT NULL,
  `quantidade8` varchar(100) DEFAULT NULL,
  `quantidade9` varchar(100) DEFAULT NULL,
  `quantidade10` varchar(100) DEFAULT NULL,
  `quantidade11` varchar(100) DEFAULT NULL,
  `quantidade12` varchar(100) DEFAULT NULL,
  `observacao` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `serie`
--

INSERT INTO `serie` (`mat_usuario`, `exercicio1`, `exercicio2`, `exercicio3`, `exercicio4`, `exercicio5`, `exercicio6`, `exercicio7`, `exercicio8`, `exercicio9`, `exercicio10`, `exercicio11`, `exercicio12`, `repeticao1`, `repeticao2`, `repeticao3`, `repeticao4`, `repeticao5`, `repeticao6`, `repeticao7`, `repeticao8`, `repeticao9`, `repeticao10`, `repeticao11`, `repeticao12`, `quantidade1`, `quantidade2`, `quantidade3`, `quantidade4`, `quantidade5`, `quantidade6`, `quantidade7`, `quantidade8`, `quantidade9`, `quantidade10`, `quantidade11`, `quantidade12`, `observacao`) VALUES
(5, 'rrr', '', '', '', '', '', '', '', '', '', '', '', '12', '', '', '', '', '', '', '', '', '', '', '', '111', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `treino`
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
-- Extraindo dados da tabela `treino`
--

INSERT INTO `treino` (`id`, `id_usuario`, `id_admin`, `data`, `hora`, `descricao`) VALUES
(6, 5, 12345, '1998-12-12', '10h', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
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
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`matricula`, `nome`, `telefone`, `email`, `endereco`, `senha`, `peso`, `altura`, `cincunferenciaBraco`, `circunferenciaPeito`, `circunferenciaCintura`, `circunferenciaCoxa`, `circunferenciaPanturrilha`, `serie`, `status`) VALUES
(4, 'joao', '123456789', 'joaopedefeijao@gmail.com', 'rua do joaozin', 'e10adc3949ba59abbe56e057f20f883e', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0),
(5, 'Rodrigo', '23212321', 'rod@a.com', 'rua b', '827ccb0eea8a706c4c34a16891f84e7b', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treino`
--
ALTER TABLE `treino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
