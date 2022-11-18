-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 09:51 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hongsanbio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `subtitle`, `text`, `tag`) VALUES
(1, 'Welcome to HSB', 'Klenteng Hong San Bio Gorontalo', '', 'Banner'),
(2, 'Latar Belakang Hong San Bio (Tentang Kami)', 'Klenteng Hong San Bio/Feng Shan Miao dibangun pada tahun 2003. Pembangunan Klenteng ini merupakan partisipasi dari Umat dan Para Donatur saat itu. ', '\nSejalan dengan perkembangan dan kemajuan zaman, Klenteng Hong San Bio/Feng Shan Miao dituntut dapat memenuhi kebutuhan umat. Umat semakin kritis dalam melihat segala aspek kehidupan; disamping itu, letak Klenteng Hong San Bio/Feng Shan Miao cukup strategis untuk dikunjungi karena memiliki daya tarik pemandangan laut dan suasana alami yang indah, tepatnya terletak diatas bukit Desa Tanjung Kramat, Kecamatan Hulondalangi, Kota Gorontalo\n\nKeberadaan dan kondisi Klenteng Hong San Bio/Feng Shan Miao saat ini secara fisik cukup sederhana, karena Klenteng tidak memiliki sarana dan prasarana yang memadai.\n\nUntuk menyikapi hal ini, dan dengan melihat kondisi Klenteng saat ini yang ada, kami Umat yang ada juga merupakan Panitia Pembangunan/Pembaruan Klenteng Hong San Bio/Feng Shan Miao mempunyai keinginan untuk memenuhi kebutuhan tersebut dengan mengadakan Klenteng yang memiliki sarana dan prasarana yang memadai, yaitu dengan jalan melakukan Pembangunan kembali / Renovasi Klenteng yang kami miliki.\n', 'Tentang Kami'),
(3, 'Maksud dan Tujuan', '', '\nBerdasarkan latar belakang di atas, kami bermaksud membangun kembali Klenteng dengan konstruksi yang lebih teratur, simetris, kuat dan lebih layak untuk digunakan. Oleh karena itu, kami membuka kesempatan bagi Semua Pihak (Umat, Saudara/i, Simpatisan, Rekan, Sahabat dan Siapapun yang terdorong hatinya) untuk dapat mengambil bagian atau berpartisipasi dalam pembangunan kembali Klenteng Hong San Bio/Feng Shan Miao Gorontalo\n\nTujuan dari pemugaran Klenteng Hong San Bio/Feng Shan Miao adalah:\n\nMenyediakan Klenteng yang aman dan nyaman bagi umat yang ada\n\nMeningkatkan kualitas sumber daya manusia (SDM) yang berdasarkan pada keyakinan terhadap ajaran kebenaran hakiki\n\nMemperlancar kegiatan umat beragama\ndan Melestarikan generasi umat terhadap ajaran kebenaran\n\nMenjadikan Klenteng Hong San Bio/Feng Shan Miao salah satu Ikon Budaya khususnya Tionghoa di daerah Gorontalo dalam ragam budaya nusantara.\n', 'Maksud dan Tujuan'),
(4, 'Tahapan Renovasi (Pembangunan Kembali)', '', 'Berhubung terbatasnya ketersediaan dana, kami membagi proses renovasi ini dalam 3 tahap.                  Tahap Pertama : Proses Cut and Fill dan Pembongkaran bangunan lama                 Tahap Kedua   : Pembangunan dimulai dari Bangunan Utama, kemudian ', 'Tahapan Renovasi'),
(5, 'Dokumentasi Progres Pembangunan Klenteng', 'Acara Pelaksanaan Peletakan Batu Pertama untuk Pembangunan/Renovasi Klenteng Pada Tanggal 4 Oktober 2018, Pukul 11.00 WITA. ', '', 'Dokumentasi'),
(6, '\r\nProgres Pembangunan Sampai 12 November 2018', NULL, NULL, '121018'),
(7, 'Progres Pembangunan Sampai 09 Desember 2018\r\n', 'Pembangunan Lanjutan Turap B', NULL, '91218'),
(8, 'Progres Pembangunan Sampai 24 Desember 2018\r\n', 'Pembangunan Lanjutan Turap B', NULL, '241218'),
(9, 'Progres Pembangunan Sampai 19 Maret 2019\r\n', 'Pembongkaran Bangunan Lama & Cutting Lahan Belakang', NULL, '190319'),
(10, 'Progres Pembangunan Sampai 07 Maret 2020\r\n', 'Pembongkaran Bangunan Lama & Cutting Lahan Belakang ', NULL, '70319'),
(11, 'Progres Pembangunan Sampai 7 April 2020\r\n', 'Pembongkaran Bangunan Lama & Cutting Lahan Belakang', '', '70420'),
(12, 'Progres Pembangunan Sampai 19 April 2020\r\n', 'Persiapan Pembangunan Bangunan Utama', 'Gambar Letak Bangunan Utama [Penggalian Pondasi] dan Pengadaan Material Bahan Bangunan ', '190420'),
(13, 'Progres Pembangunan Sampai 9 Agustus 2020\r\n', 'Pembangunan Bangunan Utama', 'Peletakan Batu Bangunan Utama dan Pembangunan Fondasi Bangunan ', '90820'),
(14, 'Progres Pembangunan Sampai 26 Agustus 2020\r\n', 'Pembangunan Bangunan Utama ', 'Pembangunan Fondasi Bangunan dan Lantai Dasar ', '260820'),
(15, 'Progres Pembangunan Sampai 12 September 2020\r\n', 'Pembangunan Bangunan Utama ', 'Pembangunan Lantai Dasar, Dinding dan Tiang Bangunan', '120920'),
(16, 'Progres Pembangunan Sampai 31 Desember 2020\r\n', 'Pembangunan Bangunan Utama dan Bangunan Pendaming Kiri ', 'Pembangunan Tiang Rangka Penutup Bangunan Utama dan Pembangunan Dinding Bangunan Pendamping', '311220'),
(17, 'Gambar Arsitek Bangunan Utama', NULL, NULL, 'Arsitek Bangunan Utama'),
(18, 'Gambar Arsitek Bangunan Pendamping', NULL, NULL, 'Arsitek Bangunan Pendamping'),
(19, 'PREVIEW 3D HSB', NULL, NULL, '3D Preview'),
(20, 'Call to Action', NULL, 'Jika Anda merasa terpanggil untuk memberikan donasi/sumbangan dalam bentuk apapun untuk Klenteng ini, Silahkan klik Tombol \"Call To Action\"', 'CtA'),
(21, 'Gambaran Luas dan Besaran Turap', 'Sketsa Gambaran Luas & Besaran Turap yang akan dibuat (Rencana)', NULL, 'Gambar Luas dan Besar Turap'),
(22, 'Letak/Posisi Klenteng Hong San Bio dari Digital Globe 2018', NULL, 'Letak/Posisi Klenteng Hong San Bio dari Digital Globe 2018', 'Digital Globe'),
(23, 'Hong San Bio on Digital Globe', 'Letak/Posisi Klenteng Hong San Bio dilihat dari atas (Aerial/Satellite)', NULL, 'map'),
(24, 'Yayasan Tanjung Naga', 'Perangkat Yayasan Tanjung Naga (Payung Hukum Klenteng)', NULL, 'Payung Hukum'),
(25, 'Klenteng Hong San Bio', 'Kepengurusan Inti Klenteng', NULL, 'Pengurus Inti');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `content_id` varchar(255) NOT NULL,
  `img_title` varchar(255) DEFAULT NULL,
  `img_subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `content_id`, `img_title`, `img_subtitle`, `image`) VALUES
(1, '1', '', '', '1657486984.png'),
(2, '2', '', '', '427624901.jpg'),
(3, '3', '', '', '593243728.png'),
(4, '5', 'Pembukaan Peletakan Batu', '', '1013675639.jpg'),
(5, '5', 'Sembayang', '', '2060934366.jpg'),
(6, '5', 'Sembayang', '', '1267077283.jpg'),
(7, '5', 'Peletakan Batu Pertama', '', '2018553487.jpg'),
(8, '5', 'Pembangunan Turap', '', '2082249274.jpg'),
(9, '5', 'Peletakan Batu Turap', '', '109864234.jpg'),
(10, '5', 'Lokasi Pembangunan Turap', '', '1719546550.jpg'),
(11, '5', 'Persiapan Pekerjaan Turap', '', '616062810.jpg'),
(12, '6', 'Turap A Tahap 1', '', '1622544118.jpg'),
(13, '6', 'Turap B Tahap 1', '', '1972205639.jpg'),
(14, '6', 'Turap A selesai sekitar 6m', '', '206456312.jpg'),
(15, '6', 'Turap B persiapan pengecoran', '', '1027252532.jpg'),
(16, '7', '', '', '757657272.jpg'),
(17, '7', '', '', '843932439.jpg'),
(18, '7', '', '', '766877340.jpg'),
(19, '7', '', '', '2032445388.jpg'),
(20, '8', '', '', '634005736.jpg'),
(21, '8', '', '', '1760894942.jpg'),
(22, '9', '', '', '293673752.jpg'),
(23, '9', '', '', '732800682.jpg'),
(24, '9', '', '', '2125626070.jpg'),
(25, '9', '', '', '153986013.jpg'),
(26, '9', '', '', '727012439.jpg'),
(27, '9', '', '', '2122643845.jpg'),
(28, '9', '', '', '1885397415.jpg'),
(29, '9', '', '', '52054356.jpg'),
(30, '10', '', '', '1994706679.jpg'),
(31, '10', '', '', '429247942.jpg'),
(32, '10', '', '', '1470807558.jpg'),
(33, '10', '', '', '106010819.jpg'),
(34, '11', '', '', '326708567.jpg'),
(35, '11', '', '', '1662206566.jpg'),
(37, '11', '', '', '1565204036.jpg'),
(38, '11', '', '', '1712852185.jpg'),
(39, '11', '', '', '758629476.jpg'),
(40, '11', '', '', '1957597462.jpg'),
(41, '11', '', '', '400728249.jpg'),
(42, '11', '', '', '1687199764.jpg'),
(43, '12', '', '', '1826033106.jpg'),
(44, '12', '', '', '1697562941.jpg'),
(45, '12', '', '', '1938398233.jpg'),
(46, '12', '', '', '2139535990.jpg'),
(47, '12', '', '', '104346261.jpg'),
(48, '12', '', '', '1785574810.jpg'),
(49, '12', '', '', '1313930222.jpg'),
(50, '12', '', '', '1414191719.jpg'),
(51, '13', '', '', '641562352.jpg'),
(52, '13', '', '', '1945670212.jpg'),
(53, '13', '', '', '2099595261.jpg'),
(54, '13', '', '', '1794115798.jpg'),
(55, '13', '', '', '1854612548.jpg'),
(56, '13', '', '', '958406442.jpg'),
(57, '13', '', '', '1856427682.jpg'),
(58, '14', '', '', '1627136372.jpg'),
(59, '14', '', '', '1557899342.jpg'),
(60, '14', '', '', '316023846.jpg'),
(61, '14', '', '', '2089589279.jpg'),
(62, '15', '', '', '2030663063.jpg'),
(63, '15', '', '', '709000326.jpg'),
(64, '15', '', '', '82816240.jpg'),
(65, '15', '', '', '1411466781.jpg'),
(66, '15', '', '', '1381383843.jpg'),
(67, '15', '', '', '459533670.jpg'),
(68, '16', '', '', '2099274944.jpg'),
(69, '16', '', '', '777972649.jpg'),
(70, '16', '', '', '241649575.jpg'),
(71, '16', '', '', '1072320141.jpg'),
(72, '16', '', '', '2112054539.jpg'),
(73, '16', '', '', '1164804512.jpg'),
(74, '16', '', '', '675286483.jpg'),
(75, '16', '', '', '768258176.jpg'),
(76, '17', 'Tampak Atas (Transparan)', '', '597256282.png'),
(77, '17', 'Tampak Depan', '', '549021791.png'),
(78, '17', 'Tampak samping (Transparan)', '', '1038982864.png'),
(79, '17', 'Tampak samping', '', '1785405965.png'),
(80, '17', 'Tampak Atas (Atap)', '', '1398991496.png'),
(81, '17', 'Tampak Belakang', '', '1353617909.png'),
(82, '18', 'Tampak Atas (Transparan)', '', '1885990929.png'),
(83, '18', 'Tampak Depan', '', '181415593.png'),
(84, '18', 'Tampak Samping', '', '1077935145.png'),
(85, '18', 'Tampak Belakang', '', '776336599.png'),
(86, '19', '', '', '115097809.png'),
(87, '21', '', '', '1272361100.jpg'),
(88, '21', '', '', '1571733369.png'),
(89, '21', '', '', '203354282.png'),
(90, '22', '', '', '1669398817.png'),
(91, '22', '', '', '1389412792.png'),
(92, '22', '', '', '1656400532.png'),
(93, '24', 'Henk Sampouw', 'Pembina Yayasan', '1924295979.png'),
(94, '24', 'Tatang Wuisana', 'Pembina Yayasan', '1265163980.png'),
(95, '24', 'Liang Gin Lung', 'Ketua Yayasan', '1409862039.png'),
(96, '24', 'Ary Sungkono', 'Sekretaris Yayasan', '33218373.png'),
(97, '24', 'Toni Tankilisan', 'Bendahara Yayasan', '1207907103.png'),
(98, '24', 'Jansen Leuw', 'Pengawas Yayasan', '962809127.png'),
(99, '24', 'Erwin Giasi', 'Pengawas Yayasan', '1659202062.png'),
(100, '25', 'Fanria Vana', 'Ketua Klenteng', '944298760.png'),
(101, '25', 'Martin Sampouw', 'Wakil Ketua 1', '16397055.png'),
(102, '25', 'Juliyanti Halieludin', 'Wakil Ketua 2', '2049694384.png'),
(103, '25', 'Meilina Horatian', 'Sekretaris', '300988940.png'),
(104, '25', 'Imelda', 'Bendahara', '157931456.png'),
(105, '8', '', '', '2025142765.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `password_reset_token` text DEFAULT NULL,
  `auth_key` varchar(50) DEFAULT NULL,
  `access_token` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `password_reset_token`, `auth_key`, `access_token`, `role`) VALUES
(88, 'admin', '$2y$13$5OJr921owk48vuUGQz3Te.iEb88uffkb91UiyaJckjsJhBO7543JW', '0', '0', '0', 'admin'),
(89, 'hikam', '$2y$13$U73WJboY43iPgVB/nxyrQ.uWJkNrN10O5zmxf4wGIVjdU4YzkUuPK', '0', '0', '0', 'admin'),
(90, 'coba', '$2y$13$nB3QSu6LYPOGv.SdOPEicOJwKchmLJ91dGv.xnPsMGbroIQ6yaM2e', NULL, NULL, NULL, 'admin'),
(91, 'dani', '$2y$13$0YWRdXcec4JBvXVlK/c4XurWbxOE3wL.HrPUETOjlSJU4Y1vUGdD.', NULL, NULL, NULL, 'guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
