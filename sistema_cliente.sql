-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2024 às 17:39
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_cliente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sexo`, `telefone`, `endereco`, `data_cadastro`) VALUES
(1, 'Felipe', 'masculino', '22021331', 'fabjabhba2131nndssdf', '2024-05-16 15:32:49'),
(2, '', '', '', '', '2024-05-16 15:33:23'),
(3, 'Felipe', 'masculino', '22021331', 'fabjabhba2131nndssdf', '2024-05-16 15:33:35'),
(4, 'Felipe', 'masculino', '22021331', 'fabjabhba2131nndssdf', '2024-05-16 15:34:03'),
(5, 'Felipe', 'masculino', '22021331', 'fabjabhba2131nndssdf', '2024-05-16 15:34:31'),
(6, '', '', '', '', '2024-05-16 15:34:40'),
(7, 'Felipe', 'masculino', '22021331', 'fabjabhba2131nndssdf', '2024-05-16 15:35:45'),
(8, '', '', '', '', '2024-05-16 15:36:06'),
(9, 'Felipe', 'masculino', '22021331', 'fabjabhba2131nndssdf', '2024-05-16 15:36:09'),
(10, 'Felipe', 'masculino', '22021331', 'fabjabhba2131nndssdf', '2024-05-16 15:36:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
