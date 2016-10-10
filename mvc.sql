-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/10/2016 às 09:38
-- Versão do servidor: 5.7.11
-- Versão do PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mvc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carro`
--

CREATE TABLE `carro` (
  `car_id` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `disponivel` int(1) NOT NULL,
  `placa` varchar(45) NOT NULL,
  `km` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `carro`
--

INSERT INTO `carro` (`car_id`, `categoria`, `disponivel`, `placa`, `km`) VALUES
(2, 'bronze', 0, 'kjh-9898w', 20012),
(3, 'ouro', 1, 'kjh-9898', 10000),
(1, 'prata', 0, 'gte-4545sdfasdf', 2000),
(4, 'ouro', 1, 'asd-2323', 12341349),
(5, 'ouro', 1, 'fof-4554', 3456000),
(6, 'prata', 1, 'eae-4343', 23000),
(7, 'prata', 1, 'eae-4343', 23000),
(8, 'prata', 1, 'eae-4343', 23000),
(9, 'prata', 1, 'eae-4343', 23000),
(10, 'prata', 1, 'eae-4343', 23000),
(11, 'bronze', 1, 'err-4343', 12000),
(12, 'bronze', 1, 'err-4343', 89000),
(13, 'bronze', 1, 'err-4343', 89000),
(16, 'ouro', 1, 'kjh-9898333', 60003333),
(17, 'ouro', 1, 'kjh-9898333', 20012);

-- --------------------------------------------------------

--
-- Estrutura para tabela `data`
--

CREATE TABLE `data` (
  `dataid` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `data`
--

INSERT INTO `data` (`dataid`, `text`) VALUES
(71, ''),
(70, ''),
(69, 'teste'),
(68, 'teste'),
(67, 'teste'),
(66, 'asdf'),
(65, 'aeae'),
(64, 'maisum teste'),
(63, 'test'),
(62, 'test'),
(61, ''),
(60, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `note`
--

CREATE TABLE `note` (
  `noteid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `note`
--

INSERT INTO `note` (`noteid`, `userid`, `title`, `content`, `date_added`) VALUES
(1, 1, 'Jesse', 'This is a note ', '0000-00-00 00:00:00'),
(2, 1, 'test', 'test\r\n', '2012-08-30 03:11:05'),
(3, 1, 'test2', 'test2', '2012-08-30 03:11:08'),
(4, 1, '', '', '2012-08-30 03:15:54'),
(5, 1, '', '', '2012-08-30 03:15:55'),
(6, 1, '', '', '2012-08-30 03:15:56'),
(7, 1, 'asdf', 'asdf', '2012-08-30 03:15:56'),
(8, 1, 'asdf233', 'asdf233', '2012-08-30 03:15:57'),
(9, 1, 'asdf', 'asdf', '2012-08-30 03:15:59'),
(10, 13, 'DOG FACE', '111', '2012-08-30 03:22:04'),
(11, 15, 'teste', 'teste', '2016-09-25 08:09:24'),
(12, 15, 'teste', 'teste', '2016-09-25 08:09:32'),
(13, 15, '', '', '2016-09-26 17:20:33');

-- --------------------------------------------------------

--
-- Estrutura para tabela `person`
--

CREATE TABLE `person` (
  `personid` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `age` int(3) UNSIGNED NOT NULL,
  `gender` varchar(1) NOT NULL,
  `personcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `person`
--

INSERT INTO `person` (`personid`, `name`, `sobrenome`, `age`, `gender`, `personcol`) VALUES
(1, 'JESSE', '', 24, 'm', NULL),
(2, 'joe', '', 22, 'm', NULL),
(3, 'jenny', '', 434, 'f', NULL),
(4, 'teste', '', 13, 'f', NULL),
(5, 'teste', '', 13, 'f', NULL),
(6, 'name', '', 12, 'm', NULL),
(7, 'name', '', 12, 'm', NULL),
(8, 'name2', 'Roberto Lima', 12, 'm', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE `reserva` (
  `reservaid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `car_id` int(10) DEFAULT NULL,
  `categoria` varchar(32) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_inicio` date NOT NULL,
  `date_fim` date NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `reserva`
--

INSERT INTO `reserva` (`reservaid`, `userid`, `car_id`, `categoria`, `date_added`, `date_inicio`, `date_fim`, `status`) VALUES
(13, 18, NULL, 'ouro', '2016-10-02 07:10:00', '2016-10-10', '2016-10-13', 'ativa'),
(14, 18, NULL, 'prata', '2016-10-02 07:10:00', '2016-10-04', '2016-10-05', 'ativa'),
(16, 18, NULL, 'prata', '2016-10-08 02:10:00', '2016-10-06', '2016-10-14', 'ativa'),
(17, 18, NULL, 'ouro', '2016-10-08 02:10:00', '2016-09-30', '2016-10-07', 'ativa'),
(18, 18, NULL, 'bronze', '2016-10-10 08:10:00', '2016-10-20', '2016-10-21', 'ativa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `user`
--

INSERT INTO `user` (`userid`, `login`, `password`, `role`) VALUES
(19, 'teste', '52a2d060f9fadf0a34e0b5bacdf8cdefd24f2744861cd9170d26e470f341037f', 'default'),
(20, '', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', 'default'),
(21, 'funcionario', '450ab1263842beb476d7472b3d5ff6e6d7fc588029b1ae2d3cbc81df27150b3b', 'owner'),
(22, '', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', 'default'),
(15, 'root', '2126e28ae7282a0254be3b19b7fb193829d6976c58793c1fe48d55876b14bea8', 'owner'),
(18, 'cliente', 'fa860cccb849804a4b84db37d6645709c97944b77adc70d71fdd97561e7e718b', 'default'),
(23, '', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', 'default'),
(24, '', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', 'default'),
(25, '', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', 'default'),
(26, 'fff', '3ca560c97162e22bcdc011d3a5956e9b262d7e176bf60aac5bb8dc21dd3370d4', 'default'),
(27, '666', '9468cb1ba112f98d9b05c459febd12444a2c791dfd8148fc684563729e4844c0', 'default'),
(28, '8', 'a64ca2a828263fafed8d713fac6e6819fdc8ad3ae54eda943919fbc724a7aa67', 'default'),
(29, 'bbbb', 'd2b9ec2a84954705c902f1520340c0a08bcd5f5f99542a874fba0eb2006e296b', 'default'),
(30, 'ff', '3ca560c97162e22bcdc011d3a5956e9b262d7e176bf60aac5bb8dc21dd3370d4', 'default'),
(31, 'ffff', '09be838ed95b966fad2f3d0aa9d9ab131a4059a123ac7a7488c4bbc5636d137b', 'default'),
(32, 'fffffffffffffff', '5e284bef1ea5ffdde61b0509a67b20f217176da932f8876abc32941589c01cf6', 'default'),
(33, '1234', '92d39c30ecd0c4eb89f1332fcdb8448b3d40374b329ef70fa34e4c67cc695fdb', 'default'),
(34, 'teste', '52a2d060f9fadf0a34e0b5bacdf8cdefd24f2744861cd9170d26e470f341037f', 'default'),
(35, 'rot', 'eda3d9c47dc07bf8088378f2a70de29796adfc3b84392fd521e7c47976f2e22d', 'default'),
(36, 'aulo', '85ef6e2cab3670e98426ee1e52578205237b362f69d8f4da361ed2efbf21428e', 'default'),
(37, 'ot', '34905c09bed389dc0c61161e67320585ad9ca6fc6c13548ebfa6bdfba9adf9bd', 'default');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`car_id`);

--
-- Índices de tabela `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`dataid`);

--
-- Índices de tabela `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`noteid`),
  ADD KEY `userid` (`userid`);

--
-- Índices de tabela `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personid`);

--
-- Índices de tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`reservaid`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `userid` (`userid`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de tabela `data`
--
ALTER TABLE `data`
  MODIFY `dataid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT de tabela `note`
--
ALTER TABLE `note`
  MODIFY `noteid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de tabela `person`
--
ALTER TABLE `person`
  MODIFY `personid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `reservaid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
