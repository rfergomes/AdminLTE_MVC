-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Set-2021 às 03:53
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
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int(16) NOT NULL AUTO_INCREMENT,
  `id_regiao` int(11) DEFAULT NULL,
  `nome_estado` varchar(64) NOT NULL,
  `uf_estado` varchar(2) NOT NULL,
  `gentilico` varchar(60) NOT NULL,
  `capital` varchar(60) NOT NULL,
  PRIMARY KEY (`id_estado`),
  KEY `id_regiao` (`id_regiao`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id_estado`, `id_regiao`, `nome_estado`, `uf_estado`, `gentilico`, `capital`) VALUES
(1, 1, 'Acre', 'AC', 'acriano', 'Rio Branco'),
(2, 2, 'Alagoas', 'AL', 'Alagoano', 'Maceió'),
(3, 1, 'Amapá', 'AP', 'Amapaense', 'Macapá'),
(4, 1, 'Amazonas', 'AM', 'Amazonense', 'Manaus'),
(5, 2, 'Bahia', 'BA', 'Baiano', 'Salvador'),
(6, 2, 'Ceará', 'CE', 'Cearense', 'Fortaleza'),
(7, 3, 'Distrito Federal', 'DF', 'Brasiliense', 'Brasília'),
(8, 4, 'Espírito Santo', 'ES', 'Capixaba', 'Vitória'),
(9, 3, 'Goiás', 'GO', 'Goiano', 'Goiânia'),
(10, 2, 'Maranhão', 'MA', 'Maranhense', 'São Luís'),
(11, 3, 'Mato Grosso do Sul', 'MS', 'Matogrossense', 'Cuiabá'),
(12, 3, 'Mato Grosso', 'MT', 'Sul-Matogrossense', 'Campo Grande'),
(13, 4, 'Minas Gerais', 'MG', 'Mineiro', 'Belo Horizonte'),
(14, 5, 'Paraná', 'PR', 'Paraense', 'Belém'),
(15, 2, 'Paraíba', 'PB', 'Paraibano', 'João Pessoa'),
(16, 1, 'Pará', 'PA', 'Paranaense', 'Curitiba'),
(17, 2, 'Pernambuco', 'PE', 'Pernambucano', 'Recife'),
(18, 2, 'Piauí', 'PI', 'Piauiense', 'Teresina'),
(19, 4, 'Rio de Janeiro', 'RJ', 'Fluminense', 'Rio de Janeiro'),
(20, 2, 'Rio Grande do Norte', 'RN', 'Potiguar', 'Natal'),
(21, 5, 'Rio Grande do Sul', 'RS', 'Gaúcho', 'Porto Alegre'),
(22, 1, 'Rondônia', 'RO', 'Rondoniense', 'Porto Velho'),
(23, 1, 'Roraima', 'RR', 'Roraimense', 'Boa Vista'),
(24, 5, 'Santa Catarina', 'SC', 'Catarinense', 'Florianópolis'),
(25, 2, 'Sergipe', 'SE', 'Paulista', 'São Paulo'),
(26, 4, 'São Paulo', 'SP', 'Sergipano', 'Aracaju'),
(27, 1, 'Tocantins', 'TO', 'Tocantinense', 'Palmas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

DROP TABLE IF EXISTS `nivel`;
CREATE TABLE IF NOT EXISTS `nivel` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(60) NOT NULL,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
CREATE TABLE IF NOT EXISTS `regiao` (
  `id_regiao` int(11) NOT NULL AUTO_INCREMENT,
  `regiao` varchar(25) NOT NULL,
  PRIMARY KEY (`id_regiao`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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
CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_status` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_estado` (`uf_sigla`),
  KEY `id_status` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `nascimento`, `cpf`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf_sigla`, `id_nivel`, `telefone`, `celular`, `email`, `senha`, `token`, `foto`, `conta_verificada`, `id_status`) VALUES
(1, 'Administrador', '0000-00-00', '000.000.000-00', '00000-000', 'Rua do Bairro', '1000', 'Lado Par', 'Bairro', 'Cidade', 'AC', 1, '(00) 0000-0000', '(00) 00000-0000', 'admin@gmail.com', '$2y$10$.yF.lNaRJw7.btLO9VT23OkYPfibGzTo4y7qnqjVf9FZ8wGu4wXTG', NULL, 'usuario.png', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
