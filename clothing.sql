-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 06:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloating`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` varchar(15) NOT NULL,
  `event` varchar(255) NOT NULL,
  `diskon` int(11) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `event_status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event`, `diskon`, `deskripsi`, `event_status`, `image`) VALUES
('6103', 'Mid Year Sale', 50, 'Diskon pertengahan tahun', 1, '6103.jpg'),
('61059952ba1e7', 'Summer Sale', 70, 'Katanya ini event Summer Sale yang biasa ada di Steam', 0, '61059952ba1e7.png');

-- --------------------------------------------------------

--
-- Table structure for table `event_product`
--

CREATE TABLE `event_product` (
  `id` varchar(15) NOT NULL,
  `diskon` int(11) NOT NULL,
  `id_produk` varchar(15) NOT NULL,
  `id_event` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_product`
--

INSERT INTO `event_product` (`id`, `diskon`, `id_produk`, `id_event`) VALUES
('1', 50, '6101ae537db5d', '6103'),
('2', 70, '6101af87a1804', '61059952ba1e7'),
('6106', 50, '6101101cc7751', '6103');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'T-Shirt'),
(2, 'Sweatshirt'),
(3, 'Pants'),
(4, 'Hoodie');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `koor_x` varchar(50) NOT NULL,
  `koor_y` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` varchar(15) NOT NULL,
  `nama_produk` varchar(144) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `featured` int(1) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `deskripsi`, `harga`, `kategori`, `featured`, `image`) VALUES
('10', 'PSYK', 'Black 20s cotton short sleeve T-shirts, tubular fit, seamless double needle 2cm collar, taped neck and shoulders, satin & cotton label,\r\ndouble needle sleeve and bottom hem, white color plastisol ink screen print.', 1499000, 'Shirt', 0, '10.jpg'),
('6101101cc7751', 'Adjure', 'awdasdawsd', 159000, 'Shirt', 1, '6101101cc7751.jpg'),
('61011e54e6c6e', 'Magi', 'djawhdkjashkjdwa', 359000, 'Sweatshirt', 1, '61011e54e6c6e.jpg'),
('6101ae537db5d', 'Conbird', 'adwasdwasdwasdwa', 169000, 'Shirt', 1, '6101ae537db5d.jpg'),
('6101af3165d84', 'Death Bed', 'dawsdwadsafhgawddaw', 149000, 'Shirt', 0, '6101af3165d84.jpg'),
('6101af87a1804', 'Intorno', 'lkdjlaksjdlkjalkjwkds', 119000, 'Shirt', 0, '6101af87a1804.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `email`, `username`, `password`, `level`, `image`) VALUES
(1, 'Bukan Gian Gifarly', 'gifarlygian@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500', 1, 'default.png'),
(3, 'Ini siapa', 'ngajicode09@gmail.com', '10120278', '6f79c77fc078abbf894d619eed36e8c1', 2, 'default.png'),
(4, 'Musik Becek', 'musikbecek@gmail.com', 'admin', '6f79c77fc078abbf894d619eed36e8c1', 2, 'default.png'),
(5, 'Ajay Belak', 'ajayblak09@gmail.com', 'ajay', '6f79c77fc078abbf894d619eed36e8c1', 2, 'default.png'),
(6, 'Katanya Sih Member', 'member@member.com', 'member', 'aa08769cdcb26674c6706093503ff0a3', 2, 'default.png'),
(7, 'Gian Gifarly', 'gifarlygian@gmail.com', 'giangifarly', '27d32cb3f2750495a9fd3565a2fd36c4', 2, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_product`
--
ALTER TABLE `event_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_product`
--
ALTER TABLE `event_product`
  ADD CONSTRAINT `event_product_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `event_product_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
