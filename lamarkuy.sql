-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2025 at 02:37 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamarkuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int UNSIGNED NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tahun_lulus` varchar(255) NOT NULL,
  `nama_perusahaan_terakhir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `lama_kerja` varchar(255) NOT NULL,
  `keahlian` text NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `tanggal_lahir`, `jenis_kelamin`, `status_perkawinan`, `nomor_telepon`, `alamat`, `pendidikan_terakhir`, `jurusan`, `tahun_lulus`, `nama_perusahaan_terakhir`, `jabatan`, `lama_kerja`, `keahlian`, `posisi`, `user_id`) VALUES
(1, '2025-11-11', 'Laki-laki', 'single', '1234567890', 'snbsa xs sa', 'sma', 'shkhksbckbsac', '2022', 'cc  dc dn c', 'jcbsac sa', 'caa cm adc', 'a csa ac a', 'marketing', 47),
(2, '2025-11-30', 'Laki-laki', 'married', '1234567890', 'sabbc dc d', 'sma', 'nc nc nd cds', '2022', 'ccnd c dsc', 'd cd c jsdc ds', 'cdnn nc sdc', 'cdsmnnds  dsc', 'staff', 48),
(3, '2025-11-07', 'Laki-laki', 'married', '1234567890', 'jdhchjj c sd', 'sma', 'c cd cd', '2022', 'cnnbcd cd', 'csbcsdc ds c', 'csddsnc ds', 'cdsc ds cd', 'staff', 49),
(4, '2025-10-31', 'Perempuan', 'married', '1234567890', 'cbnbcnad nc', 'sma', 'cadcsdcd', '2020', 'cdbjdsccdn,c', 'cnsd ncdsc', 'cds,c dnc', 'cdw,nc ndc', 'staff', 50),
(5, '2025-11-09', 'Laki-laki', 'married', '1234567890', 'caskn cna sca', 'diploma', 'csacasc', '2022', 'cadcadc', 'cdacdscd', 'cdacdc', 'ccadcdac', 'staff', 51),
(6, '2025-11-02', 'Laki-laki', 'single', '1234567890', 'shbhscbdc', 'sma', 'ckbd c dc', '2022', 'cdjbj cd', 'ckdjkcbdjc d', 'cjbdcdbbcjdbc', 'jckbdjbcdb', 'staff', 53);

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `perusahaan`, `bidang`, `lokasi`, `deskripsi`) VALUES
(1, 'ASRI', 'Industri', 'Jl. Pantai Indah Kapuk Boulevard, Kamal Muara, Penjaringan, Jakarta Utara', NULL),
(2, 'Bank Mandiri', 'Keuangan', 'Jl. Pantai Indah Kapuk Boulevard, Kamal Muara, Penjaringan, Jakarta Utara', NULL),
(3, 'Tokopedia', 'Design UI/UX', 'Jl. Pantai Indah Kapuk Boulevard, Kamal Muara, Penjaringan, Jakarta Utara', NULL),
(4, 'Pertamina', 'Akuntansi', 'Jl. Pantai Indah Kapuk Boulevard, Kamal Muara, Penjaringan, Jakarta Utara', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, '', 'selvinagustino248@gmail.com', '$2y$10$Sxc9sRfYyrGzLiOlb35OzubYKiT0IppBVMOGU8td7PlKXcGfXXdt2'),
(3, '', 'ru@gmail.com', '$2y$10$eCskR4wEFNhj1bG5LxqNlOsoQRKEQcU.xFoojM76QC/1Lo92L4fGC'),
(5, '', 'selvin.001@ski.sch.id', '$2y$10$ukkqR9rZoPM0yIco9dfdUOBn/M.iDqzJ6JjYQZXoo4qeWGLfbNMXa'),
(6, '', 'selvinrist@gmail.com', '$2y$10$i7CwhV0.CLeQpRKTt2eWCewNMwKuNOw6CdUXHRCRz/ibdBhZdNNSK'),
(7, '', 'richard.marcell8888@gmail.com', '$2y$10$pOkLeYB5b6ekiAt34gehKeVVbbujmB7WhS1YV6sgYHkQ6tladMwRK'),
(9, '', 'ppp@gmail.com', '$2y$10$rONLBdw4P/iSsV1lNoksLukHPCQ60nmapK55PZUuQG4ww8DCSvGLa'),
(12, '', 'fdfd@dfdf', '$2y$10$Xrr03qA8C8i7zh0JU8f95ubI.YXXtsj4fsETqKMVVztbeyU7ZblZe'),
(16, '', 'dfdsfdsf@ddff', '$2y$10$.vqpYkNSIbHVJYgpqb9Sr.Njy32Xh9rfSi6bakC0wy8hLL//.J9vu'),
(17, '', 'sbdksbjd@jdjjd', '$2y$10$DwwdzryvLvlBBmujQfR70OBJEhM2GtAAgwcvfKq8GgjQZuFALvh9y'),
(19, '', 'ouuiu@vfyfy', '$2y$10$ChSkS3CzkJp8bL9LQ4budebkH7BalecTRgyQRSnbelaj8mv6QaUYa'),
(20, '', 'jdbedjb@emdbjebd', '$2y$10$.vz.kMEQSLJBgf0z6JmnPeOmF9CQ/.2XWq2VIocNYYBuBHtG3pcGi'),
(21, '', 'richard.marcell@gmail.com', '$2y$10$vPQjnxIPUWmP.1qKDZUHCeOOwDZJB88GUZdFfBbCuW9c6WCfFao6G'),
(27, 'iefjioeioewjfjew', 'wjfiowef@wefoiwejf', '$2y$10$hjSaU4e0MCaTJFkjrLxYgOzZc/WeUwXYoLyKBX1pCc9mLJ/rjg5sq'),
(31, 'evan', 'evan@gmail.com', '$2y$10$zyC2h5l3x4vkaFWC/oCpT.b9kn2.bA3sH84vdhyLX07nYXlZm9/i.'),
(32, 'Selvin Agustino', 'abc@gmail.com', '$2y$10$g7Q8XJ6AM2J0piCljHO6yOuny7ENXI8ItsYKx3xc8XRjO7jxl6ZD6'),
(34, 'Selvin Agustino', 'adc@gmail.com', '$2y$10$ypfh.KdRpypsrxhVM8Gw9OPKAds2sb6aFKmCdK8vywYxtwJv0lpz.'),
(35, 'ryu', 'ryu@gmail.com', '$2y$10$TVhl0vvgwM6X1MfSccXR2OZ1RBhsGXV4PClcfk8qt8KevhGKC0PMC'),
(38, 'dfdfd', 'sdsa@dsdsd', '$2y$10$0sTAPNlWfdCc9JMrACspaea1mAOJkVvM2XZI5Va1zp5Km6hOkiwuW'),
(41, 'Selvin Agustino', 'selvin@gmail.com', '$2y$10$UMVB1wvC95CHzUlwu/8U7uU766s0DSLpRpkP7zFYSwqJbua4ZC6ey'),
(42, 'Selvin Agustino', 'Harry@gmail.com', '$2y$10$MsIYvE9vpI0eEpHT4wvUa.uxLRs/msdSmaoXHtlt4Tc2cOjC2wgUu'),
(43, 'asep', 'ok@gmail.com', '$2y$10$tftsTYp0WfBwSA0m1EtVru1JaDZW5V1l/.lk/3VHsoDdjhl1TBMZS'),
(45, 'pakde', 'pakde@gmail.com', '$2y$10$1X59ft32.jBWEh4QvCsBDe5fIfzNTX4ecdVy1KLd9st8766Kep2cC'),
(47, 'olip', 'olip@gmail.com', '$2y$10$Fd5dlfepD/bUtyOfUtN55uQAav5h8zxNGuLGGD9MGdr9STsyqW08W'),
(48, 'ameng', 'ameng@gmail.com', '$2y$10$1CNiCWZxyV2atUEpvvsg6OHv/sCHV9/Qqazvu8yy243Bvlm1f0NKu'),
(49, 'hansen', 'hansen@gmail.com', '$2y$10$OH01Pw3C8awrNndaS1Jq0O.uY67tDQX4ROpIw0SvXD2VJ3bXfJ6hu'),
(50, 'santi', 'santi@gmail.com', '$2y$10$ll8T9ZlAbb5M8YtoBTalY.bAhUTwex2wqI5..U8H6/jrAGc4Lvl/6'),
(51, 'Venan', 'venan@gmail.com', '$2y$10$FvQI9f9qULLtSMI54xCScugSLKGkTNpypYqJcDXN6OHYMZbuijYvq'),
(53, 'gerva', 'gerva@gmail.com', '$2y$10$DY1mEcHrmlO6amoYObkbgOupAs5Da/y/LyWWo7jIyfrw4RBOch0IC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
