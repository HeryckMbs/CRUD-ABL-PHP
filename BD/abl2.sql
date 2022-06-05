-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2022 às 05:01
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `abl2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apartamento`
--

CREATE TABLE `apartamento` (
  `Id_Apt` int(11) NOT NULL,
  `Num_andar` int(11) NOT NULL,
  `Num_apt` int(11) NOT NULL,
  `Id_bloco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `apartamento`
--

INSERT INTO `apartamento` (`Id_Apt`, `Num_andar`, `Num_apt`, `Id_bloco`) VALUES
(10, 1, 101, 1),
(32, 8, 809, 6),
(55, 12, 1206, 1),
(66, 7, 701, 5),
(99, 15, 1509, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `CPF` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `tel1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`CPF`, `nome`, `tel1`) VALUES
(987741, 'Joãozinho', 77778888),
(12345678, 'Heryck', 65877),
(46464646, 'Gyovana', 629962),
(67676767, 'Mariazinha Alves', 655777);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_apt`
--

CREATE TABLE `usuario_apt` (
  `CPF_usu` int(11) NOT NULL,
  `Id_apt` int(11) NOT NULL,
  `Cod_contrato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario_apt`
--

INSERT INTO `usuario_apt` (`CPF_usu`, `Id_apt`, `Cod_contrato`) VALUES
(987741, 99, 33);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `apartamento`
--
ALTER TABLE `apartamento`
  ADD PRIMARY KEY (`Id_Apt`),
  ADD UNIQUE KEY `Id_Apt` (`Id_Apt`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices para tabela `usuario_apt`
--
ALTER TABLE `usuario_apt`
  ADD PRIMARY KEY (`Cod_contrato`),
  ADD KEY `CPF_usu` (`CPF_usu`),
  ADD KEY `Id_apt` (`Id_apt`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario_apt`
--
ALTER TABLE `usuario_apt`
  ADD CONSTRAINT `usuario_apt_ibfk_1` FOREIGN KEY (`CPF_usu`) REFERENCES `usuario` (`CPF`),
  ADD CONSTRAINT `usuario_apt_ibfk_2` FOREIGN KEY (`Id_apt`) REFERENCES `apartamento` (`Id_Apt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
