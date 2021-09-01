-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Set-2021 às 04:24
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agora_adminlte`
--
CREATE DATABASE IF NOT EXISTS `agora_adminlte` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `agora_adminlte`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `id_estado` int(16) NOT NULL,
  `id_regiao` int(11) DEFAULT NULL,
  `nome_estado` varchar(64) NOT NULL,
  `uf_estado` varchar(2) NOT NULL,
  `codigo_estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id_estado`, `id_regiao`, `nome_estado`, `uf_estado`, `codigo_estado`) VALUES
(1, 1, 'Acre', 'AC', '12'),
(2, 2, 'Alagoas', 'AL', '27'),
(3, 1, 'Amapá', 'AP', '16'),
(4, 1, 'Amazonas', 'AM', '13'),
(5, 2, 'Bahia', 'BA', '29'),
(6, 2, 'Ceará', 'CE', '23'),
(7, 3, 'Distrito Federal', 'DF', '53'),
(8, 4, 'Espírito Santo', 'ES', '32'),
(9, 3, 'Goiás', 'GO', '52'),
(10, 2, 'Maranhão', 'MA', '21'),
(11, 3, 'Mato Grosso do Sul', 'MS', '50'),
(12, 3, 'Mato Grosso', 'MT', '51'),
(13, 4, 'Minas Gerais', 'MG', '31'),
(14, 5, 'Paraná', 'PR', '41'),
(15, 2, 'Paraíba', 'PB', '25'),
(16, 1, 'Pará', 'PA', '15'),
(17, 2, 'Pernambuco', 'PE', '26'),
(18, 2, 'Piauí', 'PI', '22'),
(19, 4, 'Rio de Janeiro', 'RJ', '33'),
(20, 2, 'Rio Grande do Norte', 'RN', '24'),
(21, 5, 'Rio Grande do Sul', 'RS', '43'),
(22, 1, 'Rondônia', 'RO', '11'),
(23, 1, 'Roraima', 'RR', '14'),
(24, 5, 'Santa Catarina', 'SC', '42'),
(25, 2, 'Sergipe', 'SE', '28'),
(26, 4, 'São Paulo', 'SP', '35'),
(27, 1, 'Tocantins', 'TO', '17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

DROP TABLE IF EXISTS `nivel`;
CREATE TABLE `nivel` (
  `id_nivel` int(11) NOT NULL,
  `nivel` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nivel`) VALUES
(1, 'Administrador'),
(2, 'Supervisor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `regiao`
--

DROP TABLE IF EXISTS `regiao`;
CREATE TABLE `regiao` (
  `id_regiao` int(11) NOT NULL,
  `regiao` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `regiao`
--

INSERT INTO `regiao` (`id_regiao`, `regiao`) VALUES
(1, 'Norte'),
(2, 'Nordeste'),
(3, 'Centro-Oeste'),
(4, 'Sudeste'),
(5, 'Sul');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'ATIVO'),
(2, 'INATIVO'),
(3, 'SUSPENSO'),
(4, 'BLOQUEADO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(120) NOT NULL,
  `nascimento` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `bairro` varchar(60) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `uf_sigla` varchar(2) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(16) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `token` varchar(60) DEFAULT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `conta_verificada` tinyint(1) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `nascimento`, `cpf`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf_sigla`, `id_nivel`, `telefone`, `celular`, `email`, `senha`, `token`, `foto`, `conta_verificada`, `id_status`) VALUES
(1, 'Administrador', '0000-00-00', '000.000.000-00', '00000-000', 'Rua do Bairro', '1000', 'Lado Par', 'Bairro', 'Cidade', 'AC', 1, '(00) 0000-0000', '(00) 00000-0000', 'admin@gmail.com', '$2y$10$.yF.lNaRJw7.btLO9VT23OkYPfibGzTo4y7qnqjVf9FZ8wGu4wXTG', NULL, 'usuario.png', 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `id_regiao` (`id_regiao`);

--
-- Índices para tabela `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Índices para tabela `regiao`
--
ALTER TABLE `regiao`
  ADD PRIMARY KEY (`id_regiao`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_estado` (`uf_sigla`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `regiao`
--
ALTER TABLE `regiao`
  MODIFY `id_regiao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `estados`
--
ALTER TABLE `estados`
  ADD CONSTRAINT `estados_ibfk_1` FOREIGN KEY (`id_regiao`) REFERENCES `regiao` (`id_regiao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
