-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Fev-2022 às 16:24
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produtos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `nome_produto` varchar(150) NOT NULL,
  `codigo_produto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`nome_produto`, `codigo_produto`) VALUES
('Data Show', '321'),
('Mp3', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `nome_funcionario` varchar(150) NOT NULL,
  `matricula_funcionario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`nome_funcionario`, `matricula_funcionario`) VALUES
('Gabriel Henrique', 'TD0FK'),
('Layla Cecilia', 'kjnkjn');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivelacesso`
--

CREATE TABLE `nivelacesso` (
  `matricula` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nivelacesso`
--

INSERT INTO `nivelacesso` (`matricula`, `senha`, `acesso`) VALUES
('afrah', '654321', 0),
('veqcu', '123456', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registrosaida`
--

CREATE TABLE `registrosaida` (
  `nome_produto_emprestado` varchar(150) NOT NULL,
  `nome_funcionario_emprestado` varchar(150) NOT NULL,
  `data_emprestado` varchar(150) NOT NULL,
  `hora_emprestado` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`nome_produto`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`nome_funcionario`);

--
-- Índices para tabela `nivelacesso`
--
ALTER TABLE `nivelacesso`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `registrosaida`
--
ALTER TABLE `registrosaida`
  ADD PRIMARY KEY (`nome_produto_emprestado`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `registrosaida`
--
ALTER TABLE `registrosaida`
  ADD CONSTRAINT `registrosaida` FOREIGN KEY (`nome_produto_emprestado`) REFERENCES `equipamento` (`nome_produto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
