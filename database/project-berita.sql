-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 07:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `isi`, `id_kategori`, `id_user`, `cover`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'hari guru', 'Hari guru mewakili sebuah kepedulian, pemahaman dan apresiasi yang ditampilkan demi peran vital seorang guru, yaitu mengajarkan ilmu pengetahuan dan membangun generasi. Hari guru adalah hari dimana kita memperingati jasa yang selama ini telah diberikan oleh sang pahlawan tanpa tanda jasa, siapa pahlawan tanpa tanda jasa itu? Siapa lagi melainkan seorang guru sosok yang sangat berilmu.\r\n\r\nMereka dengan ikhlas menyampaikan ilmu yang telah mereka peroleh semasa menuntut ilmu. Guru  mengamalkan ilmu mereka kepada penerus bangsa itu dan kita sebagai seorang siswa atau seorang murid janganlah pernah kita memandang sebelah mata karena pada hakikatnya ilmu itu wajib untuk diamalkan kepada sesama, mereka menyalurkan tenaga mereka kepada anak didiknya berharap anak didiknya bisa menjadi penerus yang lebih berpengetahuan luas. Betapa  mulianya seorang guru, maka dari itu kita harus menghormati guru kita dan mengamalkan ilmu yang telah kita dapat darinya sebagai bentuk balasan kepada guru yang telah mengajarkan kami semua.\r\n\r\nSmk Assalam sangat berapresiasi untuk merayakan hari guru. Antusias guru dan siswa pun sangat besar,bahkan Bapa kepala sekolah SMK Assalaam pun turut memberi kejutan kepada guru-guru di sekolah SMK Assalam. Antusias siswa tidak kalah besarnya untuk merayakan hari guru, ada yang merayakannya dengan memberi hadiah kepada masing masing guru atau pun kepada walikelasnya masing masing, ada yang memberi kejutan kepada guru dengan hal yang unik dan menyenangkan,ada yang mengucapkan lewat Sosmed bahkan masih banyak lagi yang dilakukan siswa-siswi SMK Assalaam.', 1, 1, '1453apple-icon.png', 'baik', '2021-12-02 09:23:00', '2021-12-02 17:48:29'),
(2, 'tips dan trik dalam memilih laptop untuk penyuka game', 'Permintaan laptop gaming semakin meningkat karena banyaknya turnamen game yang diadakan secara nasional maupun internasional.  Laptop gaming hadir dengan berbagai varian yang bisa Anda pilih. Namun, pastikan Anda memperhatikan detail setiap komponen laptop agar menemukan mana yang paling tepat dan sesuai dengan kebutuhan. Untuk itu, Anda perlu menyimak  tips memilih laptop gaming yang tepat. \r\n\r\n7 Tips Memilih Laptop Gaming Terbaik 2021\r\n\r\nAda banyak sekali merk laptop gaming yang diperjualbelikan dengan berbagai spesifikasinya. Anda bisa memulai dengan menyiapkan dana untuk mendapatkan laptop terbaik. Berikut tips yang bisa coba untuk memilih laptop gaming.', 2, 2, '8901bg-pricing.jpg', 'huu', '2021-12-02 10:23:24', '2021-12-02 17:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Sport', '2021-12-02 09:10:04', '2021-12-02 09:10:04'),
(2, 'Edukasi', '2021-12-02 09:10:18', '2021-12-02 09:10:18');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_01_040742_create_slides_table', 1),
(6, '2021_12_01_041951_create_iklans_table', 1),
(7, '2021_12_01_160125_create_kategoris_table', 1),
(8, '2021_12_01_160243_create_beritas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'putri perdana', 'putriperdana39@gmail.com', NULL, '$2y$10$Hl3.xjHV1pUr9Xy6RmAiJ.cbNRIMsbZQddN0dN134ypTX/fOiYunu', NULL, '2021-12-02 09:09:18', '2021-12-02 09:09:18'),
(2, 'silvia', 'sil@gmail.com', NULL, '$2y$10$mODPk.vn6WhrTxbKONV6VOhLFKsQXphRoUXUFPuFIWgvfXVN6B9Y6', NULL, '2021-12-02 16:44:33', '2021-12-02 16:44:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_id_kategori_foreign` (`id_kategori`),
  ADD KEY `beritas_id_user_foreign` (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`),
  ADD CONSTRAINT `beritas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
