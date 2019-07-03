-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/07/2019 às 17:48
-- Versão do servidor: 10.1.38-MariaDB
-- Versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(2) NOT NULL,
  `descricao` varchar(20) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descricao`, `valor`) VALUES
(1, 'SUV', 200),
(2, 'Passeio', 100),
(3, 'Van', 270),
(4, 'Pick Up', 300);

-- --------------------------------------------------------

--
-- Estrutura para tabela `exemplares`
--

CREATE TABLE `exemplares` (
  `id_exemplar` int(11) NOT NULL,
  `placa_veiculo` varchar(8) NOT NULL,
  `id_locacao` int(11) NOT NULL,
  `locado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `locacao`
--

CREATE TABLE `locacao` (
  `id_locacao` int(11) NOT NULL,
  `dataInicial` date NOT NULL,
  `dataFinal` date NOT NULL,
  `valor_total` float NOT NULL,
  `cpf_socio` varchar(11) NOT NULL,
  `id_veiculo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `locacao`
--

INSERT INTO `locacao` (`id_locacao`, `dataInicial`, `dataFinal`, `valor_total`, `cpf_socio`, `id_veiculo`) VALUES
(6, '2019-07-10', '2019-07-10', 360, '12312312312', 'GUI-9617'),
(9, '2019-07-03', '2019-07-03', 2814, '12312312312', 'DFT-2641'),
(10, '2019-07-03', '2019-07-03', 1330, '12312312312', 'TYU-4578');

-- --------------------------------------------------------

--
-- Estrutura para tabela `socios`
--

CREATE TABLE `socios` (
  `cpf` varchar(11) NOT NULL,
  `cnh` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `socios`
--

INSERT INTO `socios` (`cpf`, `cnh`, `nome`, `rg`, `endereco`, `telefone`, `email`, `senha`, `admin`) VALUES
('12312312312', '13212312312', 'Teste', '11111111111', 'rua teste', '(11) 11111-1111', 'glaucio.silva@gmail.com', '123', 0),
('12345678911', '32165498777', 'Admin', '123456', 'localhost', '91111-1111', 'admin@admin.com', 'admin', 1),
('14646546546', '65465465465', 'Teste', '1651651651', 'Rua dos Bobos, nÂº 8', '(19) 86196-8196', 'teste@teste.com', '123456', 0),
('19819819681', '98198198198', 'Teste 2 ', '198196819681', 'rua teste8', '(28) 33555-5554', 'test32@gmail.com', '123', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `user` text,
  `senha` text,
  `tipo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`user`, `senha`, `tipo`) VALUES
('venenatis@leoVivamusnibh.net', '4321', 'c'),
('miqueas@mail.com', '1234', 'a');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `placa` varchar(8) NOT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `anoFabricacao` int(10) UNSIGNED DEFAULT NULL,
  `fabricante` varchar(30) DEFAULT NULL,
  `opcionais` text,
  `motorizacao` varchar(50) NOT NULL,
  `valorBase` float NOT NULL,
  `idcategoria` int(2) NOT NULL,
  `locado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `veiculos`
--

INSERT INTO `veiculos` (`placa`, `modelo`, `anoFabricacao`, `fabricante`, `opcionais`, `motorizacao`, `valorBase`, `idcategoria`, `locado`) VALUES
('DFT-2641', 'Gol', 2019, 'Volkswagen', 'Ar condicionado', '1.6', 90, 2, 0),
('GUI-9617', 'Uno', 2019, 'Fiat', 'GPS', '1.0', 80, 2, 0),
('JYD-3792', 'Toro', 2018, 'Fiat', 'Ar condicionado', '1.8', 110, 4, 0),
('TYU-4578', 'Expert', 2018, 'Peugeot', 'Ar condicionado, TV', '1.5', 132, 3, 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `exemplares`
--
ALTER TABLE `exemplares`
  ADD PRIMARY KEY (`id_exemplar`);

--
-- Índices de tabela `locacao`
--
ALTER TABLE `locacao`
  ADD PRIMARY KEY (`id_locacao`);

--
-- Índices de tabela `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`placa`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `locacao`
--
ALTER TABLE `locacao`
  MODIFY `id_locacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
