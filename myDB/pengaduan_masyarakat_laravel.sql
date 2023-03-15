-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 12:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `alamat`, `username`, `password`, `telp`, `foto_profile`) VALUES
('1', 'Alamahul', 'Cikarag', 'Alam101027', '12345678', '089437474734', 'foto_profile_5248d60040b6a1559490fdd50784676814-03-2023.jpg'),
('123', 'Alamahul BayanC', 'Kp. Cikarag Desa Mekarsari Kec. Cibatu Kab. Garut', 'Alam12345B', '12345678', '58568567', '0'),
('123456', 'Alamahul Bayan', 'Kp. Cikarag Desa Mekarsari Kec. Cibatu Kab. Garut', 'AlamBC', '12345678', '97665', 'foto_profile_76566f2d21af5f311f18ad1fccc83c9013-03-2023.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_03_05_070953_create_masyarakat_table', 1),
(2, '2023_03_05_072417_create_pengaduan_table', 1),
(3, '2023_03_05_073121_create_petugas_table', 1),
(4, '2023_03_05_073957_create_tanggapan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` bigint(20) UNSIGNED NOT NULL,
  `tgl_pengaduan` datetime NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_laporan` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_laporan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pengaduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','ditolak','proses','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `judul_laporan`, `isi_laporan`, `alamat_pengaduan`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(12, '2023-03-08 00:00:00', '123456', 'Lorem Ipsum_5', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis eos omnis recusandae ratione labore reprehenderit, sit assumenda natus ipsam ipsum quisquam laboriosam consectetur quidem corporis et officiis porro, odio inventore!</div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_123456_4c6882b0731519c009ab280dda8f9bad08-03-2023.png', 'selesai', '2023-03-08 02:07:47', '2023-03-13 06:11:01'),
(13, '2023-03-08 00:00:00', '123456', 'Lorem Ipsum', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis eos omnis recusandae ratione labore reprehenderit, sit assumenda natus ipsam ipsum quisquam laboriosam consectetur quidem corporis et officiis porro, odio inventore!</div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_123456_2f05c669ca275e0653dafe1a7de1391603_15_09_08-03-2023.png', 'ditolak', '2023-03-08 02:15:03', '2023-03-09 07:07:43'),
(14, '2023-03-09 00:00:00', '123456', 'Lorem Ipsum', '<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, ad quisquam dolores, minima eos vero porro maiores tenetur ipsa adipisci mollitia odit eaque perferendis possimus distinctio quaerat impedit enim consectetur libero commodi earum provident dolore, corporis laboriosam. Cupiditate, distinctio rem, id veniam unde neque consequuntur tempore non facere assumenda eius quaerat eaque accusamus cumque recusandae aliquid quod eos reprehenderit ad quidem nostrum voluptate molestias vel! Sed soluta a blanditiis numquam qui eius voluptate corrupti officiis iure modi. Minus, dolorem voluptas eius nesciunt debitis eum, pariatur expedita nobis velit nihil, eaque quam? Voluptatem quo tenetur, eos esse quibusdam itaque libero perspiciatis.</div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_123456_60264c4b5bf1f987b3b97cf92d49addb13-03-2023.jpeg', '0', '2023-03-09 07:23:37', '2023-03-13 01:49:36'),
(15, '2023-03-09 00:00:00', '123456', 'Lorem Ipsum', '<div>@else</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a class=\"tombolHapus\" href=\"{{ url(\'masyarakat/pengaduan/hapus\') }}\" data-id-ubah=\"&lt;?= $row-&gt;id_pengaduan ?&gt;\" data-toggle=\"modal\" data-target=\"#HapusPengaduanModal\"&gt;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;span class=\"fas fa-trash text-danger\"&gt;&lt;/span&gt;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/a&gt;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a class=\"tombolVerifikasi\" href=\"{{ url(\'masyarakat/pengaduan/Verifikasi\') }}\" data-id-ubah=\"&lt;?= $row-&gt;id_pengaduan ?&gt;\" data-toggle=\"modal\" data-target=\"#VerifikasiPengaduanModal\"&gt;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;span class=\"fas fa-trash text-danger\"&gt;&lt;/span&gt;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/a&gt;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_123456_6d8256224760e244a3116836705ded8721_30_14_09-03-2023.jpg', 'proses', '2023-03-09 07:30:21', '2023-03-10 06:10:55'),
(16, '2023-03-10 00:00:00', '123456', 'Lorem Ipsum_3', '<div>&nbsp; &nbsp; id_petugas: 2,<br>&nbsp; &nbsp; nama_petugas: \"Mega-chan\",<br>&nbsp; &nbsp; username_petugas: \"PETUGAS2\",<br>&nbsp; &nbsp; password: \"12345678\",<br>&nbsp; &nbsp; telp: \"09867567\",<br>&nbsp; &nbsp; level: \"admin\",<br>&nbsp; &nbsp; status: \"0\",<br>&nbsp; &nbsp; created_at: \"2023-03-07 14:00:03\",<br>&nbsp; &nbsp; updated_at: \"2023-03-07 14:00:03\",<br><br></div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_123456_6e85302167c6e456783c1811b46999fa44_33_06_10-03-2023.jpg', 'selesai', '2023-03-09 23:33:44', '2023-03-10 21:09:49'),
(17, '2023-03-13 00:00:00', '123456', 'Lorem Ipsum_8', '<div>L<em>orem i</em>psum dolor, sit amet consectetur adipisicing elit. Perferendis culpa enim, placeat, tempora adipisci nisi unde quod, minima distinctio repellendus nemo aperiam totam accusamus labore <del>nam possimus. Voluptatib</del>us recus<strong>andae voluptatem possimus officiis, ipsam blanditiis aspernatur! Natus et explicabo non. Aliquam soluta, iste, quis distinctio repudiandae quidem amet autem omnis, doloribus praesentium accusamus! Maxime deleniti expedita delectus sit blanditiis, distinctio soluta quas eius velit. Veniam aliquid </strong>temporibus minus distinctio nemo modi quidem fugiat voluptates alias ea cumque unde enim sint beatae, velit provident repudiandae et eius neque consequatur incidunt. Assumenda omnis magnam ex ullam distinctio facilis labore officia natus incidunt perspiciatis?</div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_123456_f4ec85004bb6591063c01c0ac959c82923_36_07_13-03-2023.jpeg', '0', '2023-03-13 00:36:23', '2023-03-13 00:36:23'),
(18, '2023-03-13 00:00:00', '123456', 'Lorem Ipsum_9', '<div>Lorem ipsu<em>m dolor, sit amet consectetur adipisicing elit. Perferendis culpa enim, placeat, tempora adipisci nisi unde quod, minima distinctio repellendus nemo aperiam totam accusamus labore nam possimus. Voluptatibus recusandae voluptatem possimus officiis, ipsam blanditiis aspernatur! Natus et explicabo non. Aliquam soluta, iste, quis distinctio re</em><em><del>pudiandae quidem amet autem omnis, doloribus praesentium accu</del></em><em>samus! Maxime deleniti expedita delectus sit blanditiis, distinctio soluta quas eius velit. Veniam aliqu</em>id temporibus minus distinctio nemo modi quidem fugiat volu<strong>ptates alias ea cumque unde enim sint beatae, velit provident repudiandae et eius neque consequatur incidunt. Assumenda om</strong>nis magnam ex ullam distinctio facilis labore officia natus incidunt perspiciatis?</div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_123456_bbad3cc6030f8c7c9394db9608a2637b12_38_07_13-03-2023.jpeg', '0', '2023-03-13 00:38:12', '2023-03-13 00:38:12'),
(19, '2023-03-13 00:00:00', '123456', 'Lorem Ipsum', '<div>igugguu</div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_123456_c114fc1cc07a670ffb717b403b25fe3651_45_07_13-03-2023.jpeg', '0', '2023-03-13 00:45:51', '2023-03-13 00:45:51'),
(20, '2023-03-13 00:00:00', '123456', 'Lorem Ipsum', '<div>dgrgdrgdgrr</div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_123456_bbad3cc6030f8c7c9394db9608a2637b40_56_07_13-03-2023.jpeg', 'proses', '2023-03-13 00:56:40', '2023-03-14 06:48:47'),
(21, '2023-03-14 00:00:00', '1', 'Lorem Ipsumm', '<div>duan\" =&gt; $pengaduan</div><div>&nbsp; &nbsp; &nbsp; &nbsp; ]);</div><div>&nbsp; &nbsp; }</div><div>&nbsp; &nbsp; public <em>function</em> lihatStatusVerifikasi()</div><div>&nbsp; &nbsp; {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; $pengaduan = <em>Pengaduan</em>::select()-&gt;where(\'nik\', \'123456\')-&gt;where(\'status\', \'proses\')-&gt;get();</div><div>&nbsp; &nbsp; &nbsp; &nbsp; //dd($pengaduan);</div><div>&nbsp; &nbsp; &nbsp; &nbsp; return view(\'masyarakat/lihat_pengaduan\', [</div>', 'kp. Cikarag Desa Mekarsari Kac. Cibatu Kab. Garut', 'foto_dari_1_93cf52a3d5fddf25d745d83d2f8e531e12_47_05_14-03-2023.jpg', 'proses', '2023-03-13 22:47:12', '2023-03-14 06:54:03'),
(22, '2023-03-14 00:00:00', '123456', 'bullet dan  number', '<div>&lt;html&gt;</div><ul><li>tsefsef</li><li>fseflksef</li><li>fselfs;\'ef</li></ul><ol><li>fklseflksefef</li><li>fsefllefs</li></ol><div>fskeflemflse</div>', 'kp. Cikarag Desa Mekarsari Kec. Cibatu Kab. Garut', 'foto_dari_123456_5248d60040b6a1559490fdd50784676828_03_13_14-03-2023.jpg', '0', '2023-03-14 06:03:28', '2023-03-14 06:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` bigint(20) UNSIGNED NOT NULL,
  `nama_petugas` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_petugas` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','petugas','super_admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','terverifikasi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username_petugas`, `password`, `telp`, `level`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Megawatt', 'Admin', '12345678', '0986756', 'admin', 'terverifikasi', '2023-03-07 07:00:03', '2023-03-13 06:28:10'),
(3, 'Alamahul Alamahul', 'Petugas', '12345678', '089437474734', 'petugas', 'terverifikasi', NULL, '2023-03-13 02:44:37'),
(5, 'ALAMAHUL', 'SuperAdmin', '12345678', '089437474734', 'super_admin', 'terverifikasi', NULL, '2023-03-13 07:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` bigint(20) UNSIGNED NOT NULL,
  `id_pengaduan` bigint(20) UNSIGNED NOT NULL,
  `tgl_tanggapan` datetime NOT NULL,
  `tanggapan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_petugas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`, `created_at`, `updated_at`) VALUES
(11, 16, '2023-03-11 00:00:00', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloremque possimus reiciendis saepe nostrum dolore illum, iusto ea expedita odio nobis sunt. Ullam nostrum harum sint aliquam in fugit nulla.', 2, '2023-03-10 21:09:49', '2023-03-14 06:53:57'),
(13, 12, '2023-03-13 00:00:00', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aperiam consectetur repudiandae veniam consequatur eum quo ad possimus dolor reprehenderit minus similique commodi non, sint, porro eos. Impedit, accusantiu.', 2, '2023-03-13 06:11:01', '2023-03-13 06:29:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `masyarakat_username_unique` (`username`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `pengaduan_nik_foreign` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `petugas_username_petugas_unique` (`username_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `tanggapan_id_pengaduan_foreign` (`id_pengaduan`),
  ADD KEY `tanggapan_id_petugas_foreign` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_id_pengaduan_foreign` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`),
  ADD CONSTRAINT `tanggapan_id_petugas_foreign` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
