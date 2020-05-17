-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2020 às 20:03
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
-- Database: `audienceexplorer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `COD_USUARIO` int(11) NOT NULL,
  `DES_USUARIO` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DES_EMAIL` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DES_SENHA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUM_CPF` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `COD_PLANO` int(11) NOT NULL,
  `TIP_ATIVO` tinyint(1) NOT NULL,
  `TIP_MASTER` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`COD_USUARIO`, `DES_USUARIO`, `DES_EMAIL`, `DES_SENHA`, `NUM_CPF`, `COD_PLANO`, `TIP_ATIVO`, `TIP_MASTER`) VALUES
(1, 'Administrador', 'admin@admin.com.br', '21232f297a57a5a743894a0e4a801fc3', '', 0, 1, 1),
(2, 'James', 'james@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '035.212.250-11', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`COD_USUARIO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `COD_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
