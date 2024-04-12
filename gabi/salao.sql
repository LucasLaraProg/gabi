-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Dez-2023 às 03:34
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `salao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `Id_Cliente` int(11) NOT NULL,
  `Nome` varchar(52) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Telefone` bigint(13) NOT NULL,
  `DescricaoServico` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `Nome`, `Endereco`, `Telefone`, `DescricaoServico`) VALUES
(2, 'lucas e', 'Rua José Aparecido Leme', 90, 'corte navalhado com desfarçe na 2 em cima 2 dedos na tesoura aasd asdasd asd asdasd as asd asd as                                                                            '),
(3, 'lucas emanuel', 'Rua José Aparecido Leme', 2147483647, 'corte navalhado com desfarçe na 2 em cima 2 dedos na tesoura'),
(4, 'lucas emanuel', 'Rua José Aparecido Leme', 2147483647, 'corte navalhado com desfarçe na 2 em cima 2 dedos na tesoura'),
(5, 'lucas emanuel', 'Rua José Aparecido Leme', 2147483647, 'corte navalhado com desfarçe na 2 em cima 2 dedos na tesoura'),
(6, 'lucas emanuel', 'Rua José Aparecido Leme', 2147483647, 'corte navalhado com desfarçe na 2 em cima 2 dedos na tesoura'),
(7, 'lucas emanuel', 'Rua José Aparecido Leme', 12345678910, 'corte navalhado com desfarçe na 2 em cima 2 dedos na tesoura'),
(8, 'lucas emanuel', 'Rua José Aparecido Leme', 14998636401, 'corte navalhado com desfarçe na 2 em cima 2 dedos na tesoura'),
(9, 'gabriela para', 'Rua Paraná', 14996273448, 'Corte feminino de 4 dedos repicado  '),
(12, 'lucreta', 'aisjdoiasj', 12390890, 'aoksjdoijasd'),
(15, 'lucretaaa', 'asodolkol', 123123123, 'cortes navalhado'),
(16, 'LUCAS EMANUEL BOTELHO ALVES DE L', 'Rua Paraná', 14996273448, 'asdasds'),
(17, 'LUCAS EMANUEL BOTELHO ALVES DE LARA', 'rua china', 123918273, 'alksdpasdas'),
(18, 'lucas emanuel', 'Rua José Aparecido Leme', 14998636401, 'pica atras'),
(19, 'lucas emanuel', 'Rua José Aparecido Leme', 14998636401, '234'),
(20, 'LUCAS EMANUEL BOTELHO ALVES DE LARA', 'Rua Paraná', 14996273448, '123123'),
(21, 'LUCAS EMANUEL BOTELHO ALVES DE LARA', 'Rua Paraná', 14996273448, '13123'),
(26, 'lucas', 'Rua Paraná', 14996273448, 'corte navalhado com desfarçe na 2 em cima 2 dedos na tesoura '),
(27, 'lucas emanuel botelho alves de lara', 'Rua Paraná', 14996273448, 'cortou a frente e picou atras'),
(28, 'lucas emanuel', 'Rua José Aparecido Leme', 14998636401, 'Corte feminino de 4 dedos repicado');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
