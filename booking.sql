-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2017 at 05:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `username` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`username`, `nama`, `password`, `status`, `jabatan`) VALUES
('Aditya', 'Aditya Wiguna', 'fe8a6c1f5d0a9c4399222ea89137e1f2', 'Master', 'Team Magang'),
('admin', 'Admin Utama', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Team Magang');

-- --------------------------------------------------------

--
-- Stand-in structure for view `master`
--
CREATE TABLE `master` (
`reservasi` int(11)
,`id_tamu` varchar(11)
,`nama_tamu` varchar(50)
,`id_room` varchar(11)
,`room` varchar(20)
,`id_karyawan` varchar(11)
,`nama` varchar(50)
,`tgl_reservasi` date
,`checkin` date
,`checkout` date
,`biaya` varchar(5)
,`keperluan` varchar(30)
,`status` varchar(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_tamu` varchar(11) NOT NULL,
  `id_room` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `biaya` varchar(5) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `status_res` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_tamu`, `id_room`, `id_karyawan`, `tgl_reservasi`, `checkin`, `checkout`, `biaya`, `keperluan`, `status_res`) VALUES
(8, '4', '7', 'admin', '2017-02-28', '2017-02-26', '2017-02-28', 'Yes', 'ML', '1'),
(9, '2', '8', 'admin', '2017-02-27', '2017-02-27', '2017-02-28', 'Yes', 'Test', '1'),
(10, '3', '7', 'admin', '2017-02-27', '2017-02-01', '2017-02-04', 'Yes', 'Test', '1'),
(11, '4', '6', 'admin', '2017-02-28', '2017-03-01', '2017-03-04', 'Yes', 'test', '1'),
(12, '4', '7', 'admin', '2017-02-28', '2017-02-01', '2017-02-04', 'Yes', 'bbb', '1'),
(13, '2', '7', 'admin', '2017-02-28', '2017-02-01', '2017-02-04', 'Yes', 'll', '1'),
(14, '2', '7', 'admin', '2017-02-28', '2017-02-01', '2017-02-04', 'Yes', 'aaa', '1'),
(15, '2', '7', 'admin', '2017-02-28', '2017-02-01', '2017-02-04', 'Yes', 'aaa', '1'),
(16, '2', '7', 'admin', '2017-02-28', '2017-02-01', '2017-02-04', 'Yes', 'a', '1'),
(17, '2', '6', 'admin', '2017-02-28', '2017-02-01', '2017-02-04', 'Yes', 'lll', '1'),
(18, '3', '6', 'admin', '2017-02-28', '2017-02-01', '2017-02-04', 'Yes', 'aaa', '1'),
(19, '2', '6', 'admin', '2017-02-28', '2017-02-01', '2017-02-04', 'Yes', 'aaaa', '1'),
(20, '2', '7', 'admin', '2017-03-01', '2017-03-01', '2017-03-04', 'Yes', 'a', '1'),
(21, '3', '8', 'admin', '2017-03-01', '2017-03-26', '2017-03-31', 'Yes', 'ml', '1'),
(22, '3', '7', 'admin', '2017-03-01', '2017-03-13', '2017-03-11', 'Yes', 'akslaks', '1'),
(23, '3', '7', 'admin', '2017-03-01', '2017-03-02', '2017-03-04', 'Yes', 'aaa', '1'),
(24, '3', '6', 'admin', '2017-03-01', '2017-03-01', '2017-03-04', 'Yes', 'l', '1'),
(25, '2', '6', 'admin', '2017-03-01', '2017-03-01', '2017-03-04', 'Yes', 'ASAS', '1'),
(26, '2', '7', 'admin', '2017-03-01', '2017-03-01', '2017-03-04', 'Yes', 'a', '1'),
(27, '3', '8', 'admin', '2017-03-01', '2017-03-01', '2017-03-04', 'Yes', 'v', '1'),
(28, '2', '8', 'admin', '2017-03-01', '2017-03-16', '2017-03-23', 'Yes', 'aaaaaaa', '1'),
(29, '2', '6', 'admin', '2017-03-01', '2017-03-01', '2017-03-04', 'Yes', 'asd', '1'),
(30, '2', '6', 'admin', '2017-03-01', '2017-03-01', '2017-03-04', 'Yes', 'aaaa', '1'),
(31, '4', '6', 'admin', '2017-03-01', '2017-03-01', '2017-03-03', 'Yes', 'aaaaaaaaaaaaaaaaaaaaaaaa', '1');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `room` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `image`, `type`, `room`, `status`) VALUES
(6, 'Danbo-danbo-31324032-500-333.jpg', 'Executive', 'Company Room', 'Available'),
(7, '12677481_960509610693338_730456744_n1.jpg', 'President or CEO', 'Premium', 'Available'),
(8, 'Danbo-danbo-31324032-500-3331.jpg', 'Double', 'Honey Moon', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `type`) VALUES
(1, 'Executive'),
(2, 'Classic'),
(3, 'Double'),
(4, 'Private'),
(5, 'President or CEO');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `noktp` varchar(18) NOT NULL,
  `jeniskelamin` varchar(2) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama`, `noktp`, `jeniskelamin`, `alamat`, `kota`, `telp`) VALUES
(2, 'Agus Dwipayana', '1234567890', 'L', 'Lorem Ipsum diame', 'Denpasar', '0999988888777'),
(3, 'Hendra Setiawan', '0987654321', 'L', 'lorem ipsum diame', 'Denpasar', '199990020002'),
(4, 'Glen Oka', '66667777277', 'L', 'lorem ipsum', 'Buleleng', '77778899990'),
(5, 'David Villa Sachez', '039993884', 'L', 'Espanya, 21', 'Catalunya', '0987766666');

-- --------------------------------------------------------

--
-- Structure for view `master`
--
DROP TABLE IF EXISTS `master`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `master`  AS  select `reservasi`.`id_reservasi` AS `reservasi`,`reservasi`.`id_tamu` AS `id_tamu`,`tamu`.`nama` AS `nama_tamu`,`reservasi`.`id_room` AS `id_room`,`room`.`room` AS `room`,`reservasi`.`id_karyawan` AS `id_karyawan`,`karyawan`.`nama` AS `nama`,`reservasi`.`tgl_reservasi` AS `tgl_reservasi`,`reservasi`.`checkin` AS `checkin`,`reservasi`.`checkout` AS `checkout`,`reservasi`.`biaya` AS `biaya`,`reservasi`.`keperluan` AS `keperluan`,`reservasi`.`status_res` AS `status` from (((`room` join `reservasi` on((`reservasi`.`id_room` = `room`.`id_room`))) join `karyawan` on((`karyawan`.`username` = `reservasi`.`id_karyawan`))) join `tamu` on((`reservasi`.`id_tamu` = `tamu`.`id_tamu`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
