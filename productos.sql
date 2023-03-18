-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 11:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productos`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos_crud`
--

CREATE TABLE `productos_crud` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `nstock` int(11) NOT NULL,
  `valor` double NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos_crud`
--

INSERT INTO `productos_crud` (`id`, `nombre`, `nstock`, `valor`, `descripcion`, `categoria`) VALUES
(1, 'Jagger Meister', 3001, 35, 'Muy alcoholico', 'Licores'),
(2, 'Duraznos en almibar', 4001, 10, 'Un alimento muy dulce', 'Alimentos'),
(3, 'asdas', 0, 0, 'asdsa', 'asdasdsa'),
(4, 'asdas', 0, 0, 'asdsa', 'asdasdsa'),
(5, 'asdas', 0, 0, 'asdsa', 'asdasdsa'),
(6, 'Arroz', 4002, 5, 'Un alimento nutritivo', 'Alimentos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos_crud`
--
ALTER TABLE `productos_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos_crud`
--
ALTER TABLE `productos_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
