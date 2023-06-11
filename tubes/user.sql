-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 09:44 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `img` varchar(100) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `sinopsis` varchar(500) NOT NULL,
  `isi` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `img`, `judul`, `sinopsis`, `isi`) VALUES
(8, 'img1.jpeg', 'Thailand Open 2023: Korea Rebut 3 Gelar', 'Korea sempurna di final Thailand Open 2023. Wakil-wakil Korea memenangi semua pertandingannya untuk meraih tiga gelar, sedangkan Indonesia bertangan hampa.', 'Jakarta - Korea sempurna di final Thailand Open 2023.\r\n                Wakil-wakil Korea memenangi semua pertandingannya untuk meraih tiga gelar,\r\n                sedangkan Indonesia bertangan hampa.\r\nGelar pertama Korea diraih di nomor tunggal putri. Unggulan teratas An Se Young berhasil mengalahkan\r\n                pebulutangkis China unggulan ketiga He Bing Jiao 21-10, 21-19 di Stadion Huamark, Minggu (4/6).\r\n                Ganda campuran Kim Won Ho/Jeong Na Eun memenangi gelar kedua Korea. Memainkan partai kedua,\r\n                unggulan kelima ini sukses menjungkalkan unggulan pertama sekaligus wakil tuan rumah Dechapol\r\n                Puavaranukroh/Sapsiree Terattachanai dalam duel seru tiga gim.\r\nKim/Jeong comeback dari kekalahan telak di gim pertama, lalu berbalik untuk\r\n                mengalahkan lawan usai melewati dua gim yang ketat. Kim/Jeong akhirnya menang dengan skor akhir 11-21, 21-19, 22-20.\r\n                Korea menempatkan ganda putri sebagai wakil terakhirnya di final Thailand Open 2023. Unggulan pertama Kim Se Yeong/Kong\r\n                Hee Yong sukses menang relatif mudah atas ganda Thailand Benyapa Aimsaard/Nuntakarn Aimsaard 21-13, 21-17.\r\n                Ganda putra Bagas Maulana/Muhammad Shohibul Fikri menjadi satu-satunya wakil Indonesia.\r\n                Sayang sekali Bagas/Fikri tak kuasa membendung unggulan ketiga Liang Wei Keng/Wang Chang sehingga kalah dua gim langsung 10-21, 15-21.'),
(9, 'img2.jpeg', 'Nacho Akan Hengkang dari Madrid, Menuju Inter Milan', 'Jakarta - Kejuaraan internasional AIDA akan digelar di Korea Selatan bertema World Championship. Ada enam atlet Indonesia yang akan berkompetisi!', 'Jakarta - Kejuaraan internasional AIDA akan digelar di Korea\r\n                Selatan bertema World Championship. Ada enam atlet Indonesia yang akan berkompetisi!\r\nAIDA (International Association for the Development of Apnea) sudah menggelar perlombaan\r\n                dunia freediving sejak tahun 1992. Kali ini di tahun 2023 tepatnya pada 10-17 Juni mendatang,\r\n                ajang Kejuaraan Dunia AIDA Pool World Championship akan digelar di Jeju, Korea Selatan.\r\n                Deniel Victorius selaku presiden AIDA Indonesia akan mengirim enam atlet untuk kejuaraan tersebut.\r\n                Mereka adalah Nike Inayah ,Windy A Burhan, Ernaldo Sanyoto, Jovan Giovani, Mikhael Dominico, serta Safir Abadi.\r\nMereka akan bersaing dengan para atlet dari 28 negara. Selasa (6/6), mereka berenam akan terbang ke Jeju.\r\n                &quot;Semoga saja dengan prestasi yang membanggakan pulang dari Jeju, pemerintah terbuka memberikan fasilitas\r\n                yang baik untuk kami dan junior-junior ke depannya,&quot; harap Deniel Victorius.'),
(10, 'img3.jpeg', 'Final NBA 2023: Nuggets Bungkam Heat untuk Rebut Gim 1', 'Jakarta - Real Madrid dikabarkan akan melepas satu pemain seniornya lagi. Nacho Fernandez disebut-sebut segera bergabung dengan Inter Milan. ', 'Jakarta - Real Madrid dikabarkan akan melepas satu pemain seniornya lagi. Nacho Fernandez\r\n                disebut-sebut segera bergabung dengan Inter Milan.\r\n                Masa depan bek berusia 33 tahun itu santer dipertanyakan karena kontraknya di Madrid akan\r\n                habis pada akhir bulan ini. Sampai sekarang belum ada tanda-tanda Nacho akan mendapatkan kontrak baru.\r\nSementara itu Inter membutuhkan pemain bertahan berpengalaman untuk musim depan. Nerazzurri\r\n                segera ditinggalkan Milan Skriniar, yang akan menyeberang ke Paris Saint-Germain.\r\n                Menurut sejumlah sumber di Spanyol, Inter Milan akan menggaet Nacho secara cuma-cuma setelah kontraknya selesai.\r\n                Kabarnya Nacho telah menyepakati kontrak selama tiga tahun alias sampai musim panas 2026.\r\n                Jika rumor itu benar adanya maka sudah lima pemain Real Madrid yang angkat kaki dari Santiago Bernabeu. Sebelumnya\r\n                Madrid lebih dulu melepas Marco Asensio, Mariano Diaz, Eden Hazard, dan terakhir bintang sepakbola Prancis Karim Benzema.\r\n                Nacho Fernandez adalah segelintir dari one man club di masa sepakbola modern. Nacho merintis karier dari tim junior Madrid,\r\n                lalu Madrid Castilla, sebelum menjalani musim penuh pertamanya pada 2013/14.\r\nSecara keseluruhan Nacho Fernandez telah membuat 318 penampilan untuk Real Madrid dengan sumbangan 16 gol dan sembilan assist.\r\n               '),
(11, 'img4.jpeg', 'Final NBA 2023: Nuggets Bungkam Heat untuk Rebut Gim 1', 'Denver Nuggets membungkam Miami Heat untuk merebut gim pertama final NBA 2022/2023. Penampilan kolektif Nuggets memenangkan...', 'Denver - Denver Nuggets membungkam Miami Heat untuk merebut gim pertama final NBA 2022/2023.\r\n                Penampilan kolektif Nuggets memenangkan mereka 104-93\r\n                Partai pertama final NBA musim ini digelar di Ball Arena, Denver, Jumat (2/6/2023).\r\n                Nuggets memulai dengan apik dan hanya kehilangan kuarter terakhir.\r\n                Nuggets tampil disiplin dan secara kolektif mendulang poin-poin.\r\n                Sementara Miami Heat kewalahan dan kesulitan menembak.\r\nCaleb Martin hanya mencatatkan satu tembakan berhasil dari tujuh upaya.\r\n                Sementara Max Strus malah tak berhasil mencetak angka dari 10 tembakan,\r\n                yang sembilan di antaranya dari upaya three point.\r\n                Kemenangan Nuggets dipimpin kegemilangan Nikola Jokic,\r\n                yang mencetak triple-double. Pemain center itu membukukan 27 poin, 10 rebound, dan 14 assist.\r\n                Kecuali Kentavious Caldwell-Pope, seluruh starter Nuggets menembus dua digit poin.\r\n                Jamal Murray mencatatkan 26 angka dan 10 assist.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(15, 'qwer', 'qwerty@ajja', '$2y$10$d.IYLSduWL0x/5TRTTYCUez2xxt25GYwVradKkndkRPSHLbkuJ8P2', 'user'),
(16, 'admin', 'admin@gmail.com', '$2y$10$V3amWX.985slT1xaB89QnuUmkzQ7l6l0P3oJrpta2UHharbkuU.JW', 'admin'),
(17, 'urel', 'urel@gmail.com', '$2y$10$xgXQxOeUn09hSurvhFih9eRz7/HKr3ipcRXSPIEMbz973E3gUyDu2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
