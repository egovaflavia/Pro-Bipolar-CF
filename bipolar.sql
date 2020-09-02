-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 05:12 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bipolar`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(5) NOT NULL,
  `nm_gejala` varchar(100) NOT NULL,
  `cf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nm_gejala`, `cf`) VALUES
('G01', ' Deperatif', '0.6'),
('G02', 'Maniâ€™', '0.5'),
('G03', 'Over Aktivitas Fisik', '0.5'),
('G04', 'Banyak Bicara', '0.3'),
('G05', 'Penurunan Kebutuhan Tidur', '0.4'),
('G06', 'Lepas Kendali', '0.3'),
('G07', 'Kurang Semangat', '0.4'),
('G08', 'Hipersonia', '0.4'),
('G09', 'Gangguan Tidur', '0.4'),
('G10', 'Siklus hipo-mania', '0.3'),
('G11', 'Merasa terlal bahagia dan bersemangat', '0.3'),
('G12', 'Sangat sensitive dan mudah tersinggung', '0.3'),
('G13', 'Banyak makan', '0.2'),
('G14', 'Mengubah topic pebicaraan dengan cepat', '0.3'),
('G15', 'Tidak bisa mengambil keputusan', '0.3'),
('G16', 'Halusinasi', '0.2'),
('G17', 'Merasa sangat sedih', '0.3'),
('G18', 'Kehilangan ketertarikan untuk melakukan kegiatan', '0.3'),
('G19', 'Makan lebih sedikit', '0.2'),
('G20', 'Merasa mengatuk dan lemas', '0.3'),
('G21', 'Sulit berinterasi', '0.3'),
('G22', 'Ingin bunuh diri', '0.4'),
('G23', 'Emosional meningkat', '0.3'),
('G24', 'Merasa gelisah', '0.2'),
('G25', 'Detak jantung tidak normal', '0.3'),
('G26', 'Kurang focus', '0.3'),
('G27', 'Dilusi/waham', '0.1'),
('G28', 'Pesimis dalam segala hal', '0.1'),
('G29', 'Merasa bersalah', '0.2'),
('G30', 'Merasa kesepian', '0.2'),
('G31', 'Sering lupa', '0.3'),
('G32', 'Tidak percaya diri', '0.2');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `id_penyakit` varchar(11) NOT NULL,
  `hasil_max` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES
(3, 'Devi Andriani ', '28', 'Perempuan', 'Pangkalan', '02-05-2019', 'P08', '99.4'),
(4, 'Devi Andriani ', '28', 'Perempuan', 'Pangkalan', '02-05-2019', 'P01', '77'),
(5, 'Devi Andriani ', '28', 'Perempuan', 'Pangkalan', '02-05-2019', 'P02', '50'),
(6, 'zaki', '21', 'Laki-laki', 'Padang', '06-11-2019', 'P01', '63');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(5) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nm_penyakit`, `ket`) VALUES
('P01', 'Bipolar I', 'Terjadi episode mania atau episode campuran serta diikuti episode depresi mayor.'),
('P02', 'Bipolar II', 'Terjadi episode depresi mayor dan diikuti satu atau lebih episode hipomania atau episode campuran.'),
('P03', 'Siklotimik (Cyclothymic)', 'Ditandai dengan sejumlah periode tanda depresi tetapi tidak mengarah pada kriteria episode depresi mayor. Setidaknya 2 tahun mengalami gejala yang disertai episode hipomania.'),
('P04', 'Bipolar non-spesifik', 'Ditandai dengan episode mania tetapi kriterianya tidak sama dengan bipolar I, bipolar II atau Siklotimik. (Hirschfeld, dkk., 2002)');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` varchar(5) NOT NULL,
  `id_penyakit` varchar(50) NOT NULL,
  `solusi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `id_penyakit`, `solusi`) VALUES
('S01', 'P01,P02', 'Obat penstabil mood ( litium,natrium divalproex, karbamazepin)'),
('S02', 'P01,P02,P04', 'Antipsikotic (olanzapine,risperidone,quetiapine)'),
('S03', 'P01,P02,P03,P04', 'Antidepresan'),
('S04', 'P01,P02', 'Psikoterapi'),
('S05', 'P02', 'Stategi manajemen diri dan rehabilitasi'),
('S06', 'P03', 'Obat anti kejang/antikonvulusan (divalproex sodium, lamotrigini,dan valproic acid)'),
('S07', 'P03', 'Obat anti kecemasan (benzodiazepine)'),
('S08', 'P03', 'Obat anti epilepsy (carbamazepine,oxcarbazepine atau sodium valproate)'),
('S09', 'P04', 'Cognitive Behavioral therapy (CPT)'),
('S10', 'P04', 'Psychoeducation');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `level` varchar(11) NOT NULL,
  `tgl` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `umur`, `jk`, `email`, `alamat`, `level`, `tgl`) VALUES
(1, 'admin', '$2y$10$OL28w5EEWZ19zRkWaWnmAeNfMtZPHOIFV3bazkgHHr7tpWL0mkQwq', 'Humairo Ilsanty, S.Psi, M.Psi', '30', 'Perempuan', 'humairo2727@gmail.com', 'Jalan Raya Padang-Tapan', 'admin', ''),
(17, 'user', '$2y$10$bmspBQu/U3ArW0gIOkVeQOB0cdqjP.0LNG/PFs/lyHIPlzx6Lg5Ga', 'zaki', '21', 'Laki-laki', 'zakikhairi@gmail.com', 'Padang', 'user', '06-11-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
