-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/06/2023 às 04:04
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `autoria`
--

-- --------------------------------------------------------
create database `autoria`;
use `autoria`;
--
-- Estrutura para tabela `autor`
--

CREATE TABLE `autor` (
  `Cod_Autor` int(5) NOT NULL,
  `NomeAutor` varchar(50) NOT NULL,
  `Sobrenome` varchar(50) NOT NULL,
  `DataNasci` date NOT NULL,
  `Nacionalidade` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autor`
--

INSERT INTO `autor` (`Cod_Autor`, `NomeAutor`, `Sobrenome`, `DataNasci`, `Nacionalidade`, `Email`) VALUES
(1, 'William ', 'Shakespeare', '1920-10-20', 'Inglês', 'shakesperare_Official@gmail.com'),
(2, 'Machado', ' de Assis', '1820-03-05', 'Brasileiro', 'MachadodeAssisbr@outlook.com'),
(3, 'José ', 'Saramago', '1910-06-15', 'Português', 'SaramagoJose@hotmail.com'),
(4, 'Monteiro ', 'Lobato', '1924-06-22', 'Brasileiro', 'MonteiroEugeLobato@gmail.com'),
(5, 'Joanne', 'Rowling ', '1950-06-16', 'Britânica', 'JKPotter@magicofficial.com'),
(6, 'Stam', 'Lee', '1910-04-06', 'Estadunidense', 'StamMarveleous@gmail.com'),
(7, 'Stephen ', 'King', '1950-02-01', 'Estadunidense', 'StephenKingJr@outlook.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `autoria`
--

CREATE TABLE `autoria` (
  `Cod_Livro` int(11) NOT NULL,
  `Cod_Autor` int(11) NOT NULL,
  `Editora` varchar(50) NOT NULL,
  `Datalancamento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autoria`
--

INSERT INTO `autoria` (`Cod_Livro`, `Cod_Autor`, `Editora`, `Datalancamento`) VALUES
(1, 7, 'Panini', '2018-05-15'),
(4, 5, 'JBC Editora', '2019-08-10'),
(2, 6, 'Panini', '2022-12-22'),
(3, 2, 'JBC ', '2023-06-09'),
(5, 4, 'New Star', '2023-06-13'),
(4, 2, 'Panini', '2023-06-20'),
(1, 3, 'JBC', '2023-06-28'),
(2, 1, 'Italian Experience', '2022-06-07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `Cod_Livro` int(5) NOT NULL,
  `TituloLivro` varchar(30) NOT NULL,
  `ISBN` varchar(17) NOT NULL,
  `Categoria` varchar(30) NOT NULL,
  `Idioma` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`Cod_Livro`, `TituloLivro`, `ISBN`, `Categoria`, `Idioma`) VALUES
(1, 'IT', '12131224', 'Terror', 'Inglês'),
(2, 'Homem Aranha Sem Volta pra Cas', '4616512313123', 'Ação', 'Português'),
(3, 'Kimetsu no Yaiba', '142452345345', 'Ação', 'Japonês'),
(4, 'Harry Potter', '245245234354', 'Magia', 'Espanhol'),
(5, 'Gravity Falls', '165135132153', 'Mistério', 'Italiano');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Cod_Autor`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod_Livro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
