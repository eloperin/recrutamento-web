-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Mar-2017 às 21:34
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataclick`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clube`
--

CREATE TABLE `clube` (
  `id_clube` int(11) NOT NULL,
  `nome_clube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excluir_clube` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `socios`
--

CREATE TABLE `socios` (
  `id_socio` int(11) NOT NULL,
  `id_clube` int(11) NOT NULL,
  `nome_socio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excluir_socio` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clube`
--
ALTER TABLE `clube`
  ADD PRIMARY KEY (`id_clube`);

--
-- Indexes for table `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id_socio`),
  ADD KEY `id_clube` (`id_clube`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clube`
--
ALTER TABLE `clube`
  MODIFY `id_clube` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `socios`
--
ALTER TABLE `socios`
  MODIFY `id_socio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
