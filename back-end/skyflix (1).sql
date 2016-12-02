-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2016 at 02:58 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyflix`
--
CREATE DATABASE IF NOT EXISTS `skyflix` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `skyflix`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `verifyDates` (IN `CurDate` DATE)  NO SQL
SELECT *FROM locacao 
WHERE GETDATE() > locacao.dateLocacao$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `acao`
--
CREATE TABLE IF NOT EXISTS `acao` (
`cod_filme` int(10)
,`titulo` varchar(50)
,`nome_categoria` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `ator`
--

CREATE TABLE IF NOT EXISTS `ator` (
  `nome_ator` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
  `cod_filme` int(10) NOT NULL,
  PRIMARY KEY (`nome_ator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ator`
--

INSERT INTO `ator` (`nome_ator`, `data_nasc`, `cod_filme`) VALUES
('Anne Jacqueline Hathaway', '1982-12-12', 1025),
('Charles Chaplin', '1889-04-16', 2548),
('Devon Gummersall', '1978-10-15', 9820),
('Elisha Cuthbert', '1982-11-30', 6548),
('Joshua Lee Holloway ', '1969-07-20', 1458),
('Leonardo Medeiros', '1964-11-20', 1023),
('Malu Mader', '1966-09-12', 2154);

-- --------------------------------------------------------

--
-- Stand-in structure for view `aventura`
--
CREATE TABLE IF NOT EXISTS `aventura` (
`cod_filme` int(10)
,`titulo` varchar(50)
,`nome_categoria` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `nome_categoria` varchar(30) NOT NULL,
  PRIMARY KEY (`nome_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`nome_categoria`) VALUES
('Acao'),
('Aventura'),
('Comedia'),
('Drama'),
('Ficcao cientifica'),
('Policial'),
('Romance'),
('Suspense'),
('Terror');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` int(10) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `telefone` int(14) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome_cliente`, `telefone`, `endereco`) VALUES
(1, 'Joana Machado da Silva', 99655485, 'Rua Zeca Dias,85'),
(2, 'Pedro Luiz de Almeida', 81154679, 'Rua Flores da Cunha,356'),
(3, 'Angela Pinheiro', 96457812, 'Rua dos Andradas,860'),
(4, 'Maria Aparecida do Amaral', 96145268, 'Avenida Rio Branco,235'),
(5, 'Joacir Andrade', 81457698, 'Rua Venancio Aires,98'),
(6, 'Lucio Weber', 99878802, 'Rua Jose Bonifacio,102'),
(7, 'Ana Maria Pereira', 81454500, 'Rua Fatima Fraga,85'),
(8, 'Vanessa Garcia', 96458871, 'Rua Pinheiro Machado,245'),
(9, 'Ariane Lamark', 81456565, 'Rua Roraima de Sousa,981'),
(10, 'Paulo Bourbon', 99877714, 'Rua Fernando Ferrari,456');

--
-- Triggers `cliente`
--
DELIMITER $$
CREATE TRIGGER `update_user` BEFORE DELETE ON `cliente` FOR EACH ROW BEGIN
INSERT INTO cliente_backup(`cod_cliente`, `nome_cliente`, `telefone`, `endereco`, `date_update`) VALUES (cliente.cod_cliente,cliente.nome_cliente,cliente.telefone,cliente.endereco,NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cliente_backup`
--

CREATE TABLE IF NOT EXISTS `cliente_backup` (
  `cod_cliente` int(10) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `telefone` int(14) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `date_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `comedia`
--
CREATE TABLE IF NOT EXISTS `comedia` (
`cod_filme` int(10)
,`titulo` varchar(50)
,`nome_categoria` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `drama`
--
CREATE TABLE IF NOT EXISTS `drama` (
`cod_filme` int(10)
,`titulo` varchar(50)
,`nome_categoria` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE IF NOT EXISTS `dvd` (
  `numero` int(10) NOT NULL,
  `cod_cliente` int(10) NOT NULL,
  `cod_filme` int(10) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`numero`, `cod_cliente`, `cod_filme`) VALUES
(1, 5, 1546),
(2, 5, 7701),
(3, 5, 2548),
(4, 10, 1023),
(5, 3, 1025),
(6, 7, 1025);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ficcao`
--
CREATE TABLE IF NOT EXISTS `ficcao` (
`cod_filme` int(10)
,`titulo` varchar(50)
,`nome_categoria` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `filmes`
--

CREATE TABLE IF NOT EXISTS `filmes` (
  `cod_filme` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_filme`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmes`
--

INSERT INTO `filmes` (`cod_filme`, `titulo`, `nome_categoria`) VALUES
(1023, 'Feliz Natal', 'Drama'),
(1025, 'Amor e inocencia', 'Romance'),
(1245, 'Sindicato de ladroes', 'Policial'),
(1458, 'Lost', 'Drama'),
(1546, 'A Aventura', 'Suspense'),
(2154, 'Casa da mae joana', 'Comedia'),
(2548, 'Luzes da Cidade', 'Comedia'),
(3654, 'Janela Indiscreta', 'Drama'),
(4586, 'Um segredo entre nos', 'Drama'),
(5445, 'O Poeta', 'Drama'),
(6548, 'Cativeiro', 'Suspense'),
(6987, 'Procurando Nemo', 'Aventura'),
(7701, 'Laranja Mecanica', 'Ficcao cientifica'),
(9820, 'Panico no deserto', 'Suspense');

-- --------------------------------------------------------

--
-- Table structure for table `locacao`
--

CREATE TABLE IF NOT EXISTS `locacao` (
  `_idFilme` int(11) NOT NULL,
  `_idLocacao` int(11) NOT NULL,
  `_idUsuario` int(11) NOT NULL,
  `dateLocacao` date NOT NULL,
  PRIMARY KEY (`_idFilme`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locadora`
--

CREATE TABLE IF NOT EXISTS `locadora` (
  `nome_locadora` varchar(10) NOT NULL,
  `telefone` int(14) NOT NULL,
  `website` varchar(40) NOT NULL,
  `endereco` char(50) NOT NULL,
  PRIMARY KEY (`nome_locadora`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `policial`
--
CREATE TABLE IF NOT EXISTS `policial` (
`cod_filme` int(10)
,`titulo` varchar(50)
,`nome_categoria` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `romance`
--
CREATE TABLE IF NOT EXISTS `romance` (
`cod_filme` int(10)
,`titulo` varchar(50)
,`nome_categoria` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `suspense`
--
CREATE TABLE IF NOT EXISTS `suspense` (
`cod_filme` int(10)
,`titulo` varchar(50)
,`nome_categoria` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `terror`
--
CREATE TABLE IF NOT EXISTS `terror` (
`cod_filme` int(10)
,`titulo` varchar(50)
,`nome_categoria` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `acao`
--
DROP TABLE IF EXISTS `acao`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `acao`  AS  select `filmes`.`cod_filme` AS `cod_filme`,`filmes`.`titulo` AS `titulo`,`filmes`.`nome_categoria` AS `nome_categoria` from `filmes` where (`filmes`.`nome_categoria` = 'Acao') ;

-- --------------------------------------------------------

--
-- Structure for view `aventura`
--
DROP TABLE IF EXISTS `aventura`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `aventura`  AS  select `filmes`.`cod_filme` AS `cod_filme`,`filmes`.`titulo` AS `titulo`,`filmes`.`nome_categoria` AS `nome_categoria` from `filmes` where (`filmes`.`nome_categoria` = 'Aventura') ;

-- --------------------------------------------------------

--
-- Structure for view `comedia`
--
DROP TABLE IF EXISTS `comedia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `comedia`  AS  select `filmes`.`cod_filme` AS `cod_filme`,`filmes`.`titulo` AS `titulo`,`filmes`.`nome_categoria` AS `nome_categoria` from `filmes` where (`filmes`.`nome_categoria` = 'Comedia') ;

-- --------------------------------------------------------

--
-- Structure for view `drama`
--
DROP TABLE IF EXISTS `drama`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `drama`  AS  select `filmes`.`cod_filme` AS `cod_filme`,`filmes`.`titulo` AS `titulo`,`filmes`.`nome_categoria` AS `nome_categoria` from `filmes` where (`filmes`.`nome_categoria` = 'Drama') ;

-- --------------------------------------------------------

--
-- Structure for view `ficcao`
--
DROP TABLE IF EXISTS `ficcao`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ficcao`  AS  select `filmes`.`cod_filme` AS `cod_filme`,`filmes`.`titulo` AS `titulo`,`filmes`.`nome_categoria` AS `nome_categoria` from `filmes` where (`filmes`.`nome_categoria` = 'Ficcao cientifica') ;

-- --------------------------------------------------------

--
-- Structure for view `policial`
--
DROP TABLE IF EXISTS `policial`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `policial`  AS  select `filmes`.`cod_filme` AS `cod_filme`,`filmes`.`titulo` AS `titulo`,`filmes`.`nome_categoria` AS `nome_categoria` from `filmes` where (`filmes`.`nome_categoria` = 'Policial') ;

-- --------------------------------------------------------

--
-- Structure for view `romance`
--
DROP TABLE IF EXISTS `romance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `romance`  AS  select `filmes`.`cod_filme` AS `cod_filme`,`filmes`.`titulo` AS `titulo`,`filmes`.`nome_categoria` AS `nome_categoria` from `filmes` where (`filmes`.`nome_categoria` = 'Romance') ;

-- --------------------------------------------------------

--
-- Structure for view `suspense`
--
DROP TABLE IF EXISTS `suspense`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `suspense`  AS  select `filmes`.`cod_filme` AS `cod_filme`,`filmes`.`titulo` AS `titulo`,`filmes`.`nome_categoria` AS `nome_categoria` from `filmes` where (`filmes`.`nome_categoria` = 'Suspense') ;

-- --------------------------------------------------------

--
-- Structure for view `terror`
--
DROP TABLE IF EXISTS `terror`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terror`  AS  select `filmes`.`cod_filme` AS `cod_filme`,`filmes`.`titulo` AS `titulo`,`filmes`.`nome_categoria` AS `nome_categoria` from `filmes` where (`filmes`.`nome_categoria` = 'terror') ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
