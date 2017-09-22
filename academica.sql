-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 17-Out-2015 às 21:03
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `academica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `acod` int(11) NOT NULL AUTO_INCREMENT,
  `anome` varchar(100) NOT NULL,
  `aendereco` varchar(300) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `acre` float NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `ainteresse` varchar(50) NOT NULL,
  PRIMARY KEY (`acod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`acod`, `anome`, `aendereco`, `aemail`, `acre`, `matricula`, `ainteresse`) VALUES
(3, 'Julianne Martins Cavalcanti de Moraes', 'Rua dos Pinheiros 55 Anatolia', 'wanessa_ufcg@hotmail.com', 8, '1234567', 'Redes e Sistemas DistribuÃ­dos'),
(4, 'Ricardo roberto', 'R Ana de FÃ¡tima Gama Cabral', 'alfredocarneiromn@gmail.com', 0, 'ki12345', ''),
(5, 'Helton', 'Rua Maria JosÃ© de Aguiar', 'heltoncavalcanti@hotmail.com.br', 9, '201117640023', 'Engenharia de Software'),
(6, 'Maria', 'Debaixo da ponte', 'teste@teste', 8, '2011', 'Redes e Sistemas DistribuÃ­dos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `pcodigo` int(11) NOT NULL AUTO_INCREMENT,
  `pmatricula` varchar(20) NOT NULL,
  `pnome` varchar(30) NOT NULL,
  `pendereco` varchar(80) NOT NULL,
  `pemail` varchar(30) NOT NULL,
  `ptitulacao` varchar(50) NOT NULL,
  `pdisciplina` text NOT NULL,
  `pinteresse` text NOT NULL,
  `pdescricao` text NOT NULL,
  PRIMARY KEY (`pcodigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`pcodigo`, `pmatricula`, `pnome`, `pendereco`, `pemail`, `ptitulacao`, `pdisciplina`, `pinteresse`, `pdescricao`) VALUES
(1, 'ki12345', 'Ricardo roberto', 'R Ana de FÃ¡tima Gama Cabral', 'janainamcavalcanti@hotmail.com', 'mestre', 'ProgramaÃ§Ã£o', 'Banco de Dados', ''),
(2, 'lo7896', 'Ricardo roberto', 'R Ana de FÃ¡tima Gama Cabral', 'teste4', 'mestre', 'ProgramaÃ§Ã£o', 'Banco de Dados', ''),
(3, '555', 'Jose', 'Ponte', 'teste2@teste', 'Doutor', 'Engenharia de Software', 'Redes e Sistemas DistribuÃ­dos', ''),
(4, '555e', 'Jose', 'Ponte', 'testee2@teste', 'Doutor', 'Engenharia de Software', 'Redes e Sistemas DistribuÃ­dos', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE IF NOT EXISTS `projeto` (
  `pjcodigo` int(11) NOT NULL AUTO_INCREMENT,
  `pjnome` varchar(1000) NOT NULL,
  `pjareaconc` varchar(500) NOT NULL,
  `pjdescricao` text NOT NULL,
  `pjaluno` varchar(100) NOT NULL,
  `pjprofessor` varchar(100) NOT NULL,
  PRIMARY KEY (`pjcodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(6) CHARACTER SET utf8 NOT NULL,
  `tipo` set('aluno','professor') CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `tipo`) VALUES
(1, 'jose', '1022', 'aluno'),
(4, 'helton', '2210', 'professor'),
(5, '22101989', '1989', 'professor'),
(6, '201117640023', '2210', 'aluno'),
(7, '2011', '12345', 'aluno'),
(8, '555', '123456', 'professor'),
(9, '555e', '123456', 'professor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
