-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 05:46 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_article`
--
CREATE DATABASE IF NOT EXISTS `blog_article` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog_article`;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_berita`
--

DROP TABLE IF EXISTS `tabel_berita`;
CREATE TABLE `tabel_berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `gbr_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jam` time NOT NULL,
  `dibaca` int(5) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_berita`
--

REPLACE INTO `tabel_berita` (`id_berita`, `id_kategori`, `judul_berita`, `gbr_berita`, `isi_berita`, `penulis`, `hari`, `tanggal`, `jam`, `dibaca`, `status`) VALUES
(1, 4, 'Ironman 3', 'ironman.jpg', '                           <p>Iron Man 3\" menceritakan tentang seorang pengusaha milyuner yang nyentrik dan brilian Tony Stark/Iron Man yang kali ini harus melawan sebuah musuh baru yang sangat kuat. Saat semua yang dimiliki Stark tiba-tiba hancur di tangan musuh barunya tersebut, Ia pun kemudian memutuskan untuk meminta pertanggung jawaban kepada musuhnya itu.\n\n                            Petualangan yang akan dihadapinya nanti akan sangat menguji keberaniannya. Stark mencoba bertahan hanya dengan peralatan \'tempur\' yang dimilikinya. Perjalanan berat yang harus dilaluinya yang membuatnya menemukan jawaban dari pertanyaan yang selama ini menghantuinya. \"Apakah manusia yang menciptakan pakaian (kostum) untuk membentuk kepribadian mereka, ataukah sebenarnya kostum-lah yang membentuk kepribadian manusia?\"</p>', 'penulis', 'Selasa', '2017-07-25 11:50:05', '11:50:05', 22, 1),
(5, 5, 'Me Before You', '89me_before_u.jpg', '<p>Me Before You bercerita tentang seorang gadis desa yang menjalin hubungan dengan seorang pria kaya tapi lumpuh. Louisa Clark (Clarke) tinggal disebuah pedesaan di Inggris. Demi membantu perekonomian keluarga, wanita berusia 26 tahun itu bekerja dari sau pekerjaan ke pekerjaan lainnya. </p>', 'Saya', 'Selasa', '2017-08-01 12:43:54', '12:43:54', 25, 1),
(6, 5, 'Knight', '33knight.jpg', 'Drama korea \"Cinderella and Four Knights\" ini bercerita tentang Eun Ha Won (diperankan oleh Park So Dam) adalah seorang mahasiswa. Dia adalah gadis yang cerdas yang ingin menjadi seorang dokter hewan, tapi di rumah dia kesepian. Dia diisolasi dari anggota keluarganya. Eun Ha-Won tinggal bersama ayah, ibu iti dan adik tirisetelah ibunya meninggal dalam kecelakaan mobil. Suatu hari, ia membantu seorang pria tua misterius. Orang tua itu menyarankan padanya untuk tinggal di rumah besar dan mengejar impiannya menjadi seorang dokter hewan.', 'Tulis', 'Selasa', '2017-08-01 12:51:41', '12:51:41', 1, 1),
(8, 5, 'Jealousy Incarnate', '64jealousy.jpg', 'Drama tentang romantismedan persaingan yang ketat antara seorang pembaca berita dengan seorang pembawa prakiraan cuaca yang bekerja bersama-sama di sebuah acara berita televisi. Pyo Na Ri (Gong Hyo Jin) adalah seorang pembawa prakiraan cuaca yang berasal dari latar belakang keluarga yang rendah hati. Ia merasa nyaman setelah mendapatkan pekerjaan part time sebagai pembawa program prakiraan cuaca di sebuah stasiun televisi yang terkenal. Tapi ia segera menyadari bahwa ada kompetisi ketat dan kecembuaruan yang picik di sekelilingnya setiap hari. Sementara itu, Lee Hwa Shin (Jo Jung Suk) adalah seorang pembaca berita di stasiun televisi yang sama. Na Ri mulai jatuh cinta pada Hwa Shin. Tapi apakah Na Ri bisa mendapatkan yang diinginkannya dalam pekerjaan dan juga kehidupan pribadinya?', 'Tulis', 'Selasa', '2017-08-01 13:03:00', '13:03:00', 0, 1),
(9, 5, 'W - Two Worlds', '13w.jpg', 'Drama \"W\" menceritakan tentang kisah cinta dua insan yang menginjak usia 30. keduannya hidup di era yang sama namun di dunia yang berbeda. Oh Yun Joo (diperankan oleh Han Hyo Joo) adalah seorang dokter bedah sekaligus putri dari seorang penulis komik terkenal. suatu ketika, ayahnya menghilangkan. ia pun bergegas ke ruang kerja ayahnya untuk mencari keberadaan ayahnya. bukannya menemukan sang ayah, Yun Joo justru menemukan seorang pria aneh, Kang Chul (diperankan oleh Lee Jong Suk) yang bermandikan darah. Kang Chul pun dmenculik Yun Joo dan membawanya ke dimensi lain.', 'nulis', 'Selasa', '2017-08-01 13:04:09', '13:04:09', 9, 1),
(10, 5, 'Uncontrollably Fond', '84fond.jpg', 'Drama \"Uncontrollably Fond\" mengisahkan tentang Shin Joon-Young (Kim Woo-Bin) dan No Eul (Bae Suzy). Ketika masih kecil mereka dipisahkan hingga membuat hati mereka sangat sedih. Kemudian mereka berdua bertemu kembali ketika dewasa. Shin Joon-Young kini menjadi seorang aktor dan penyanyi top. Dia cerdas dan menarik. Sedangkan No Eul adalah seorang PD dokumenter. Dia sangat menghargai uang lebih dari sebuah keadilan.', 'nuis', 'Selasa', '2017-08-01 13:09:58', '13:09:58', 0, 1),
(11, 6, 'Jurassic World ', '31jurassicworld.jpg', 'Film Hollywood berjudul â€œJurassic Worldâ€ ini bercerita tentang taman Jurassic yang terdapat di suatu pulau yang sangat luas yang di dalam taman tersebut terdapat berbagai hewan dinosaurus. Dinosaurus merupakan hewan yang telah punah sehingga para ilmuwan melakukan rekayasa genetika untuk menghidupkan mereka kembali. Di taman tersebut para pengunjung dapat melihat berbagai macam spesies hewan purba tersebut. Tiba-tiba, suatu ketika salah satu spesies telah menghancurkan sebuah kendaraan dan memakan korban dan hadir Owen ( Chris Pratt ) salah satu pekerja yang tahu akan hal tersebut kemudian berinisiatif melakukan evakuasi dari pulau tersebut. Namun hal tersebut telah terlambat sehingga para pengunjung yang berada di sana harus bertahan dari makhluk T-rex yang melakukan teror dan membahayakan mereka semua.', 'user', 'Selasa', '2017-08-01 13:12:19', '13:12:19', 6, 0),
(13, 6, 'snk', '99already.jpg', 'haha', 'user', 'Selasa', '2017-08-01 13:31:45', '13:31:45', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

DROP TABLE IF EXISTS `tabel_kategori`;
CREATE TABLE `tabel_kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kategori`
--

REPLACE INTO `tabel_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Ekonomi'),
(2, 'Politik'),
(5, 'Keuangan'),
(6, 'Action'),
(7, 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_komentar`
--

DROP TABLE IF EXISTS `tabel_komentar`;
CREATE TABLE `tabel_komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

DROP TABLE IF EXISTS `tabel_user`;
CREATE TABLE `tabel_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

REPLACE INTO `tabel_user` (`id_user`, `username`, `password`, `level`, `tanggal_dibuat`) VALUES
(1, 'admin', 'admin', 'admin', '2017-07-31 09:32:10'),
(2, 'user', 'user', 'penulis', '2017-08-01 06:26:12'),
(3, 'editor', '1', 'editor', '2017-08-01 06:27:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
