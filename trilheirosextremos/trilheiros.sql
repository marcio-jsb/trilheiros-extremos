-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Fev-2023 às 07:55
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trilheiros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `data_nasc`, `rg`, `cpf`, `endereco`, `estado`, `email`, `telefone`, `usuario`, `senha`) VALUES
(1, 'Marcio Jose da Silva Bizerra', '0000-00-00', '', '', '109 Rua Pinto de Campos', 'RJ', 'matmarciojsb@gmail.com', '', 'marcio', 'mat'),
(2, 'Carolina machado', '0000-00-00', '', '', '', '', 'carolina@gmail', '', 'carolina', '123'),
(3, 'Marcelo da Silva Bizerra', '1983-01-25', '', '', '', '', 'marcelo@gmail.com', '', 'marcelo', 'bicudo'),
(4, 'Ivan costa', '0000-00-00', '', '', '', '', 'ivan@gmail.com', '', 'ivan', '666');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`nome`, `email`) VALUES
('Marcio Jose da Silva Bizerra', 'matmarciojsb@gmail.com'),
('Carolina machado', 'carolina@gmail'),
('Marcelo da Silva Bizerra', 'marcelo@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
