-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 05:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`) VALUES
(8, 'Mengapa Olahraga Pagi Memberikan Manfaat Luar Biasa Bagi Kesehatan Anda', 'Olahraga pagi telah lama diakui sebagai kebiasaan yang bermanfaat bagi kesehatan fisik dan mental. Dalam artikel ini, kami akan menjelaskan mengapa memulai hari dengan aktivitas fisik dapat meningkatkan energi, memperbaiki mood, dan bahkan meningkatkan produktivitas Anda sepanjang hari. Kami akan menyoroti manfaat kesehatan yang terkait dengan olahraga pagi serta memberikan tips untuk memulai rutinitas olahraga yang sehat.', '2024-02-17 15:50:22'),
(9, 'Inovasi Terbaru dalam Teknologi Pendidikan: Membawa Pembelajaran ke Era Digital', 'Teknologi terus mengubah cara kita belajar dan mengajar. Dari platform pembelajaran daring hingga penggunaan augmented reality di kelas, inovasi dalam teknologi pendidikan telah membawa perubahan revolusioner dalam dunia pendidikan. Dalam artikel ini, kami akan menjelajahi beberapa inovasi terbaru dalam teknologi pendidikan dan bagaimana hal ini memengaruhi cara kita memperoleh pengetahuan dan keterampilan.', '2024-02-17 15:54:11'),
(10, 'Menjadi Pemimpin yang Efektif: Kunci-kunci Sukses dalam Memimpin Tim', 'Memimpin sebuah tim dengan efektif membutuhkan keterampilan dan pengetahuan yang tepat. Dalam artikel ini, kami akan membahas kunci-kunci sukses menjadi seorang pemimpin yang efektif, mulai dari komunikasi yang baik hingga kemampuan untuk menginspirasi dan memotivasi anggota tim Anda. Kami akan memberikan tips praktis yang dapat membantu Anda mengembangkan gaya kepemimpinan yang efektif dan memimpin tim menuju kesuksesan.', '2024-02-17 15:54:45'),
(11, 'Seni Memasak Sehat: Tips dan Resep untuk Hidup Lebih Seimbang', 'Memasak makanan sehat tidak hanya tentang nutrisi, tetapi juga tentang kreativitas dan kepuasan. Dalam artikel ini, kami akan membagikan tips dan resep untuk membantu Anda memasak makanan yang lezat dan sehat di rumah. Mulai dari penggunaan bahan-bahan segar hingga teknik memasak yang sehat, kami akan memberikan panduan praktis untuk membantu Anda menciptakan hidangan yang mendukung gaya hidup sehat.', '2024-02-17 15:55:05'),
(12, 'Menjelajahi Keindahan Alam: Destinasi Wisata Tersembunyi yang Harus Dikunjungi', 'Meskipun banyak destinasi wisata populer di seluruh dunia, masih ada banyak tempat tersembunyi yang menawarkan keindahan alam yang menakjubkan. Dalam artikel ini, kami akan menjelajahi beberapa destinasi wisata tersembunyi yang layak untuk dikunjungi, mulai dari pegunungan yang indah hingga pantai terpencil. Bersiaplah untuk merencanakan petualangan Anda berikutnya di alam liar!', '2024-02-17 15:55:23'),
(13, 'Mengelola Stres di Era Modern: Strategi Mengatasi Tekanan Hidup', 'Stres adalah bagian tak terpisahkan dari kehidupan modern, tetapi bagaimana cara kita mengelolanya bisa membuat perbedaan besar dalam kesejahteraan kita. Dalam artikel ini, kami akan menjelajahi berbagai strategi untuk mengatasi stres, mulai dari latihan pernapasan hingga meditasi dan olahraga. Temukan cara-cara yang efektif untuk mengelola stres dan mempertahankan keseimbangan dalam hidup Anda.', '2024-02-17 16:15:31'),
(14, 'Mengapa Literasi Finansial Penting: Menavigasi Dunia Keuangan dengan Bijaksana', 'Literasi finansial adalah kunci untuk mengelola keuangan Anda dengan bijaksana dan membangun masa depan yang stabil secara keuangan. Dalam artikel ini, kami akan membahas pentingnya literasi finansial, mulai dari memahami anggaran hingga investasi yang cerdas. Temukan cara meningkatkan pemahaman Anda tentang keuangan pribadi dan mengambil kontrol atas masa depan keuangan Anda.', '2024-02-17 16:15:47'),
(15, 'Kisah Sukses di Balik Startup Terkenal: Memahami Perjalanan Kewirausahaan', 'Startup-startup terkenal sering kali memiliki kisah-kisah inspiratif di balik kesuksesan mereka. Dalam artikel ini, kami akan menjelajahi perjalanan kewirausahaan beberapa startup terkenal, mulai dari ide awal hingga pertumbuhan yang mengesankan. Pelajari pelajaran berharga dari para pendiri tentang keberanian, ketekunan, dan visi yang dibutuhkan untuk menciptakan perubahan dalam dunia bisnis.', '2024-02-17 16:16:11'),
(16, 'Menjaga Kesehatan Mental di Tempat Kerja: Membangun Lingkungan Kerja yang Supportif', 'Kesehatan mental di tempat kerja semakin diakui sebagai bagian integral dari kesejahteraan karyawan dan produktivitas perusahaan. Dalam artikel ini, kami akan membahas pentingnya membangun lingkungan kerja yang supportif untuk kesehatan mental, mulai dari mengurangi stigmatisasi hingga menyediakan sumber daya yang tepat. Pelajari cara-cara untuk mendukung kesehatan mental di tempat kerja dan menciptakan budaya yang inklusif dan peduli.', '2024-02-17 16:16:29'),
(17, 'Merayakan Keragaman Budaya: Menghargai Tradisi dan Kebudayaan di Seluruh Dunia', 'Dunia kita diperkaya oleh keragaman budaya yang luar biasa. Dalam artikel ini, kami akan merayakan keindahan tradisi dan kebudayaan di seluruh dunia, mulai dari festival tahunan hingga upacara adat. Temukan cara menghargai dan memahami keberagaman budaya yang membuat dunia ini menjadi tempat yang menakjubkan untuk dijelajahi.', '2024-02-17 16:16:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
