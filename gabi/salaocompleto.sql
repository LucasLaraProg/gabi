-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Abr-2024 às 22:06
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
  `Telefone` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `Nome`, `Endereco`, `Telefone`) VALUES
(45, 'lucas emanuel ', 'Rua Paraná', 14996273448),
(57, 'julio da silva', 'Rua José Aparecido Leme', 14998636401),
(58, 'marcao pereira', 'fundação casa', 13998238322),
(60, 'lucas emanuel', 'Rua José Aparecido Leme', 14998636401),
(61, 'miguel', 'rua marquin', 14998373733),
(62, 'burquetolas', 'lado do client', 12213123123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `Id_Servico` int(11) NOT NULL,
  `Descricao_Servico` varchar(300) DEFAULT NULL,
  `Debitos` varchar(70) DEFAULT NULL,
  `Data_Servico` date NOT NULL,
  `Id_Cliente` int(11) NOT NULL,
  `Id_TipoServico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`Id_Servico`, `Descricao_Servico`, `Debitos`, `Data_Servico`, `Id_Cliente`, `Id_TipoServico`) VALUES
(27, 'a', 'a', '2024-02-22', 57, 1),
(28, '', '', '2024-02-22', 57, 7),
(29, 'cortou progreesi', '50reais', '2024-02-22', 58, 3),
(30, '', '', '2024-02-22', 57, 1),
(31, '', '', '2024-02-22', 45, 2),
(32, '', '', '2024-02-22', 58, 3),
(33, '', '', '2024-02-22', 57, 2),
(34, '', '', '2024-02-22', 45, 1),
(35, 'calvao de cria', '50 conto em haver', '2024-02-23', 58, 9),
(36, 'zero e dois', '50 reais', '2024-02-23', 58, 10),
(37, 'asd', 'asd', '2024-03-02', 57, 1),
(38, 'corte 0', '10', '2024-04-12', 62, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposervico`
--

CREATE TABLE `tiposervico` (
  `Id_TipoServico` int(11) NOT NULL,
  `TipoServico` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tiposervico`
--

INSERT INTO `tiposervico` (`Id_TipoServico`, `TipoServico`) VALUES
(1, 'degrade'),
(2, 'luzes'),
(3, 'progressiva'),
(4, 'ladre'),
(5, 'a'),
(6, 'aa'),
(7, 'corte a'),
(8, 'corte feminino'),
(9, 'corte asd'),
(10, 'calvao de cria');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`Id_Servico`),
  ADD KEY `Id_Cliente` (`Id_Cliente`),
  ADD KEY `fk_TipoServico_Id` (`Id_TipoServico`);

--
-- Índices para tabela `tiposervico`
--
ALTER TABLE `tiposervico`
  ADD PRIMARY KEY (`Id_TipoServico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `Id_Servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `tiposervico`
--
ALTER TABLE `tiposervico`
  MODIFY `Id_TipoServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_TipoServico_Id` FOREIGN KEY (`Id_TipoServico`) REFERENCES `tiposervico` (`Id_TipoServico`),
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`Id_Cliente`) REFERENCES `clientes` (`Id_Cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
