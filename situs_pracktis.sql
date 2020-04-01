-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 10:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apsi_db05`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pracktis` varchar(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `order_data`
--
DELIMITER $$
CREATE TRIGGER `decrease_stock` AFTER UPDATE ON `order_data` FOR EACH ROW BEGIN
IF New.payment_status != Old.payment_status
THEN
    IF New.payment_status = "Accepted" 
    THEN
    UPDATE pracktis SET stock = stock-NEW.amount WHERE id_pracktis=NEW.id_pracktis;
    ELSEIF NEW.payment_status = "Waiting for payment" 
    THEN
    UPDATE pracktis SET stock = stock+NEW.amount WHERE id_pracktis=NEW.id_pracktis;
    END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pracktis`
--

CREATE TABLE `pracktis` (
  `id_pracktis` varchar(11) NOT NULL,
  `engine_name` varchar(255) NOT NULL,
  `dimension` int(11) NOT NULL,
  `output` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pracktis`
--

INSERT INTO `pracktis` (`id_pracktis`, `engine_name`, `dimension`, `output`, `price`, `stock`) VALUES
('pr_01', 'pracktis X', 240, 20, 3000000, 100),
('pr_02', 'pracktis Y', 360, 40, 5000000, 100),
('pr_03', 'pracktis Z', 420, 60, 6000000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `phone`, `address`, `username`, `password`, `role`) VALUES
(1, 'Ramadhani Aditya Kudrat', '081329099099', 'Gg. PGA No. 33, Lengkong, Kab. Bandung', 'admin_ram', '123456', 'Admin'),
(2, 'Cahya Rully Ardianto', '082126750138', 'Kordon City', 'admin_ensyse', '123456', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pracktis`
--
ALTER TABLE `pracktis`
  ADD PRIMARY KEY (`id_pracktis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
