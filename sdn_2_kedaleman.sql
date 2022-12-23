-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 23 Des 2022 pada 02.25
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdn_2_kedaleman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsips`
--

CREATE TABLE `arsips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file_arsip` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_file_arsip` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_file_arsip` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_upload_arsip` date NOT NULL,
  `desc_file_arsip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_banner` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_banner` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_event` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_event` date NOT NULL,
  `penyelenggara_event` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penanggung_jawab_event` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_event` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_event` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_guru` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_guru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_guru` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nuptk_guru` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip_guru` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_guru` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_guru` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_guru` date NOT NULL,
  `jabatan_guru` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_guru` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp_guru` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_guru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_guru` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`id`, `nama_guru`, `foto_guru`, `nik_guru`, `nuptk_guru`, `nip_guru`, `gender_guru`, `tempat_lahir_guru`, `tanggal_lahir_guru`, `jabatan_guru`, `email_guru`, `no_telp_guru`, `alamat_guru`, `status_guru`) VALUES
(1, 'Taufik Hidayat', 'image_473706986250_629260154579.jpg', '3510131209010003', '362055401019', '362055401019', 'Laki-laki', 'Banyuwangi', '2001-09-12', 'Guru Pengajar', 'taufikhidayat09121@gmail.com', '082332743884', 'Dusun Puspan Desa Kedaleman RT 01 Rw 01 Kecamatan Rogojampi', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_07_051226_create_gurus_table', 1),
(6, '2022_12_07_051244_create_motivasis_table', 1),
(7, '2022_12_07_051255_create_banners_table', 1),
(8, '2022_12_07_051306_create_pengumumans_table', 1),
(9, '2022_12_07_051326_create_arsips_table', 1),
(10, '2022_12_07_051335_create_events_table', 1),
(11, '2022_12_07_051346_create_prestasis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `motivasis`
--

CREATE TABLE `motivasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` bigint(20) UNSIGNED NOT NULL,
  `pesan_motivasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_motivasi` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `motivasis`
--

INSERT INTO `motivasis` (`id`, `id_guru`, `pesan_motivasi`, `status_motivasi`) VALUES
(2, 1, 'Belajar adalah sesuatu hal yang menyenangkan, jika kita menemukan satu tujuan yang sama.', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumumans`
--

CREATE TABLE `pengumumans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_pengumuman` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembuat_pengumuman` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima_pengumuman` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal_pengumuman` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pengumuman` date NOT NULL,
  `isi_pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran_pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_prestasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_prestasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_perlombaan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_prestasi` date NOT NULL,
  `peraih_prestasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_prestasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Sekolah', 'sdn2kedaleman@gmail.com', NULL, '$2y$10$i4y5eRTZzO5rTtQsNQyHYuGjhsFlGRlf36OzAk/HutYQr25Ed9/lO', NULL, '2022-12-06 23:28:20', '2022-12-06 23:28:20'),
(2, 'Admin Sekolah', 'adminsekolah@gmail.com', NULL, '$2y$10$3v11R56Qqj/OYCyInQ12leB5rDWRqoEdLyKVA7V.LSTepkV8j778G', NULL, '2022-12-13 19:39:01', '2022-12-13 19:39:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsips`
--
ALTER TABLE `arsips`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `motivasis`
--
ALTER TABLE `motivasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motivasis_id_guru_foreign` (`id_guru`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengumumans`
--
ALTER TABLE `pengumumans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsips`
--
ALTER TABLE `arsips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `motivasis`
--
ALTER TABLE `motivasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengumumans`
--
ALTER TABLE `pengumumans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `motivasis`
--
ALTER TABLE `motivasis`
  ADD CONSTRAINT `motivasis_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `gurus` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
