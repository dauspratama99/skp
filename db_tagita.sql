-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2021 pada 06.50
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tagita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_numbers`
--

CREATE TABLE `auto_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_03_055212_create_auto_numbers', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_09_19_165240_create_roles_table', 1),
(6, '2021_04_23_090810_create_outputs_table', 1),
(7, '2021_04_23_090856_create_periodes_table', 1),
(8, '2021_04_23_090926_create_units_table', 1),
(9, '2021_04_23_091243_create_rank_groups_table', 1),
(10, '2021_04_23_091314_create_positions_table', 1),
(11, '2021_04_23_091354_create_skps_table', 1),
(12, '2021_04_23_091419_create_targets_table', 1),
(13, '2021_04_23_091520_create_realiations_table', 1),
(14, '2021_09_19_165613_add_relation_to_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `outputs`
--

CREATE TABLE `outputs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `outputs`
--

INSERT INTO `outputs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Pejabat', '2021-10-13 02:33:58', '2021-10-13 02:33:58'),
(3, 'Pegawai', '2021-10-13 22:03:59', '2021-10-13 22:03:59'),
(4, 'Admin', '2021-10-13 22:04:09', '2021-10-13 22:04:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `periodes`
--

CREATE TABLE `periodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `periodes`
--

INSERT INTO `periodes` (`id`, `start_date`, `finish_date`, `created_at`, `updated_at`) VALUES
(1, '2021-09-14', '2021-09-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `positions`
--

INSERT INTO `positions` (`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Rektor', NULL, NULL),
(2, 1, 'WR 1', NULL, NULL),
(3, 1, 'WR 2', NULL, NULL),
(4, 1, 'WR 3', NULL, NULL),
(5, 2, 'Dekan', NULL, NULL),
(6, 5, 'Ketua Jurusan', NULL, NULL),
(7, 6, 'Dosen ', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rank_groups`
--

CREATE TABLE `rank_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rank_groups`
--

INSERT INTO `rank_groups` (`id`, `name`, `group`, `created_at`, `updated_at`) VALUES
(1, 'Penata Muda', 'Gol. III/a', NULL, NULL),
(2, 'Penata Muda Tk. I', 'Gol. III/b', NULL, NULL),
(3, 'Penata', 'Gol. III/c', NULL, NULL),
(4, 'Penata Tk. I', 'Gol. III/d', NULL, NULL),
(5, 'Penata Tk. I', 'Gol. IV/a', NULL, NULL),
(6, 'Pembina', 'Gol. IV/b', NULL, NULL),
(7, 'Pembina Tk. I', 'Gol. IV/a', NULL, NULL),
(8, 'Pembina Utama Muda', 'Gol. IV/b', NULL, NULL),
(9, 'Pembina Utama Madya', 'Gol. IV/c', NULL, NULL),
(10, 'Pembina Utama', 'Gol. IV/d', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `realiations`
--

CREATE TABLE `realiations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kuantitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kredit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mutu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `realiations`
--

INSERT INTO `realiations` (`id`, `kuantitas`, `kredit`, `mutu`, `biaya`, `waktu`, `created_at`, `updated_at`) VALUES
(19, '75', '69', '86', '-', '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Pegawai', NULL, NULL),
(3, 'Pejabat', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skps`
--

CREATE TABLE `skps` (
  `nip_rated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode_id` bigint(20) UNSIGNED NOT NULL,
  `rated_unit_id` bigint(20) UNSIGNED NOT NULL,
  `rated_position_id` bigint(20) UNSIGNED NOT NULL,
  `rated_rankgroup_id` bigint(20) UNSIGNED NOT NULL,
  `commitment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cooperation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leadership` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `integrity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_oriented` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objection_rated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `response_evaluator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `superior_decision` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recommendation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `date_given_to_superiors` date NOT NULL,
  `evaluator_rankgroup_id` bigint(20) UNSIGNED NOT NULL,
  `nip_evaluator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evaluator_unit_id` bigint(20) UNSIGNED NOT NULL,
  `evaluator_position_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skps`
--

INSERT INTO `skps` (`nip_rated`, `periode_id`, `rated_unit_id`, `rated_position_id`, `rated_rankgroup_id`, `commitment`, `discipline`, `cooperation`, `leadership`, `integrity`, `service_oriented`, `objection_rated`, `response_evaluator`, `superior_decision`, `recommendation`, `start_date`, `date_given_to_superiors`, `evaluator_rankgroup_id`, `nip_evaluator`, `evaluator_unit_id`, `evaluator_position_id`, `created_at`, `updated_at`) VALUES
('12345', 1, 1, 3, 8, '87', '89', '65', '55', '90', '70', 'yhcyur', 'fghdhg', 'B', 'A', '2012-12-12', '2013-12-12', 10, '222', 4, 1, '2021-10-21 21:15:21', '2021-10-21 21:15:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `targets`
--

CREATE TABLE `targets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activities` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mutu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip_rated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Parent_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Approve','Not Approve') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `targets`
--

INSERT INTO `targets` (`id`, `activities`, `credit_number`, `ak`, `quantity`, `output_id`, `mutu`, `time`, `cost`, `nip_rated`, `periode_id`, `type`, `Parent_id`, `status`, `created_at`, `updated_at`) VALUES
(19, 'Lulus 150 Orang', '100', '95', '80', 2, '85', '12', '-', '12345', 1, 'Kreativitas', '1', 'Not Approve', '2021-10-21 02:21:04', '2021-10-21 02:21:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `units`
--

INSERT INTO `units` (`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Unand', NULL, NULL),
(2, 1, 'FTI', NULL, NULL),
(3, 1, 'Hukum', NULL, NULL),
(4, 1, 'Teknik', NULL, NULL),
(5, 2, 'SI', NULL, NULL),
(6, 2, 'SK', NULL, NULL),
(7, 3, 'Hukum Perdata', NULL, NULL),
(8, 3, 'Hukum Perdana', NULL, NULL),
(9, 4, 'Teknik Lingkungan', NULL, NULL),
(10, 4, 'Teknik Industri', NULL, NULL),
(11, 4, 'Teknik Sipil', NULL, NULL),
(12, 4, 'Teknik Mesin', NULL, NULL),
(13, 4, 'Teknik Elektro', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nip` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `rank_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nip`, `name`, `unit_id`, `position_id`, `rank_id`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
('111', 'Admin', 1, 1, 1, 'amaik@gmail.com', NULL, '$2y$10$WQUN8gTDhKdpt.VU.SKLbuMxbEIeqQ90q1NRCghX9DRQdagL2o0fO', 1, NULL, '2021-10-06 20:02:26', '2021-10-06 20:02:26'),
('123', 'Jillian Ayala', 3, 2, 9, 'wefi@mailinator.com', NULL, '$2y$10$HoiLzRGo0iGhebWmHzqjfuuYFkITHOFBBltAlQ1WoQhqlHWNtPMgG', 2, NULL, '2021-09-23 07:19:29', '2021-09-23 07:19:29'),
('12345', 'Pegawai', 1, 1, 1, 'gmai@mail.com', NULL, '$2y$10$P7jEFdfzOD.UtYEiyAv9HO4iYIF56nznhqNYA7CyYyo.6I6WoxBC6', 2, NULL, '2021-10-06 19:56:33', '2021-10-06 19:56:33'),
('1919030322889', 'Dr. Isra Mulyani', 1, 1, 10, 'gmai11@mail.com', NULL, '$2y$10$iVeu4I7rGq7ensWU4Ndp7uwdai7hf3IMeYjidWET7MTn0fA5ceIvK', 1, NULL, '2021-10-20 21:55:00', '2021-10-20 21:55:00'),
('222', 'Pejabat Penilai', 1, 1, 1, 'amaik1@gmail.com', NULL, '$2y$10$6keMJKWbNjUoJ5SdFoFGCeob99RnTuwbs0PDqTC4mAc0w6R4a8wG2', 3, NULL, '2021-10-06 20:06:18', '2021-10-06 20:06:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `outputs`
--
ALTER TABLE `outputs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `periodes`
--
ALTER TABLE `periodes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `positions_parent_id_foreign` (`parent_id`);

--
-- Indeks untuk tabel `rank_groups`
--
ALTER TABLE `rank_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `realiations`
--
ALTER TABLE `realiations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skps`
--
ALTER TABLE `skps`
  ADD PRIMARY KEY (`nip_rated`),
  ADD KEY `skps_periode_id_foreign` (`periode_id`),
  ADD KEY `skps_rated_unit_id_foreign` (`rated_unit_id`),
  ADD KEY `skps_rated_position_id_foreign` (`rated_position_id`),
  ADD KEY `skps_rated_rankgroup_id_foreign` (`rated_rankgroup_id`),
  ADD KEY `skps_nip_evaluator_foreign` (`nip_evaluator`),
  ADD KEY `skps_evaluator_unit_id_foreign` (`evaluator_unit_id`),
  ADD KEY `skps_evaluator_position_id_foreign` (`evaluator_position_id`),
  ADD KEY `skps_evaluator_rankgroup_id_foreign` (`evaluator_rankgroup_id`);

--
-- Indeks untuk tabel `targets`
--
ALTER TABLE `targets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `targets_nip_rated_foreign` (`nip_rated`),
  ADD KEY `targets_periode_id_foreign` (`periode_id`);

--
-- Indeks untuk tabel `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `units_parent_id_foreign` (`parent_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_unit_id_foreign` (`unit_id`),
  ADD KEY `users_position_id_foreign` (`position_id`),
  ADD KEY `users_rank_id_foreign` (`rank_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `outputs`
--
ALTER TABLE `outputs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `rank_groups`
--
ALTER TABLE `rank_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `realiations`
--
ALTER TABLE `realiations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `targets`
--
ALTER TABLE `targets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `positions_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `realiations`
--
ALTER TABLE `realiations`
  ADD CONSTRAINT `realiations_id_foreign` FOREIGN KEY (`id`) REFERENCES `targets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `skps`
--
ALTER TABLE `skps`
  ADD CONSTRAINT `skps_evaluator_position_id_foreign` FOREIGN KEY (`evaluator_position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skps_evaluator_rankgroup_id_foreign` FOREIGN KEY (`evaluator_rankgroup_id`) REFERENCES `rank_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skps_evaluator_unit_id_foreign` FOREIGN KEY (`evaluator_unit_id`) REFERENCES `units` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skps_nip_evaluator_foreign` FOREIGN KEY (`nip_evaluator`) REFERENCES `users` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skps_nip_rated_foreign` FOREIGN KEY (`nip_rated`) REFERENCES `users` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skps_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periodes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skps_rated_position_id_foreign` FOREIGN KEY (`rated_position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skps_rated_rankgroup_id_foreign` FOREIGN KEY (`rated_rankgroup_id`) REFERENCES `rank_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skps_rated_unit_id_foreign` FOREIGN KEY (`rated_unit_id`) REFERENCES `units` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `targets`
--
ALTER TABLE `targets`
  ADD CONSTRAINT `targets_nip_rated_foreign` FOREIGN KEY (`nip_rated`) REFERENCES `users` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `targets_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periodes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `units` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_rank_id_foreign` FOREIGN KEY (`rank_id`) REFERENCES `rank_groups` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
