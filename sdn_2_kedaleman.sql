-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 30 Des 2022 pada 13.58
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
  `kode_file_arsip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_file_arsip` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_upload_arsip` date NOT NULL,
  `desc_file_arsip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `arsips`
--

INSERT INTO `arsips` (`id`, `nama_file_arsip`, `kode_file_arsip`, `jenis_file_arsip`, `tanggal_upload_arsip`, `desc_file_arsip`) VALUES
(2, 'File Testing', 'doc_231564587738_114833089483.pdf', 'Arsip Siswa', '2022-12-30', 'Ebook Panduan Lengkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_banner` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_banner` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `nama_banner`, `foto_banner`, `status_banner`, `created_at`, `updated_at`) VALUES
(3, 'Prestasi Siswa Teladan', 'image_28656857305_778288815600.jpg', 'Aktif', NULL, NULL);

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
  `status_event` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `judul_event`, `foto_event`, `tanggal_event`, `penyelenggara_event`, `penanggung_jawab_event`, `lokasi_event`, `desc_event`, `status_event`, `created_at`, `updated_at`) VALUES
(1, 'Selamat Tahun Baru 2023', 'image_673243625583_98039765034.jpg', '2022-12-30', 'SDN 2 Kedaleman', 'Koordinator', 'Sekolah', 'Deskripsi event dengan rinci', 'Aktif', NULL, NULL);

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
(5, 'Taufik Hidayat', 'image_187235257659_887891295180.jpg', '351811458771010', '123456', '32159753214715', 'Laki-laki', 'Banyuwangi', '2022-12-28', 'Kepala Sekolah', 'akutauf@gmail.com', '085265241598', 'Songgon, Banyuwangi', 'Aktif'),
(6, 'Nanda Awimbi Yahya Pratama', 'image_456595844171_425915399997.jpg', '3518117401071010', '123456789987', '987951753654', 'Laki-laki', 'Kediri', '2022-12-28', 'Guru Pengajar', 'nandaawimbi@gmail.com', '089676298218', 'Kebalenan, Banyuwangi', 'Aktif'),
(7, 'Rikiansyah Aris', 'image_622501338083_636470198133.jpg', '123456897987', '32165498779', '159987654321195', 'Laki-laki', 'Banyuwangi', '2022-12-28', 'Guru Pengajar', 'rikiansyah@gmail.com', '085221598741', 'Genteng, Banyuwangi', 'Aktif'),
(8, 'Aida Andinar', 'image_184262225485_775016217021.jpg', '123456789987654', '12345987897', '3216548744587', 'Perempuan', 'Banyuwangi', '2022-12-28', 'Guru Pengajar', 'aidaandinar@gmail.com', '085478954458', 'Srono, Banyuwangi', 'Aktif'),
(9, 'Sekar Ananta', 'image_409883130186_19138002394.jpg', '1235487965478', '123458974568', '32165498712', 'Perempuan', 'Banyuwangi', '2022-12-28', 'Guru Pengajar', 'sekarananta@gmail.com', '085478951235', 'Banyuwangi', 'Aktif');

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
(9, '2022_12_07_051326_create_arsips_table', 1),
(12, '2022_12_07_051306_create_pengumumans_table', 2),
(13, '2022_12_07_051335_create_events_table', 3),
(14, '2022_12_07_051346_create_prestasis_table', 4);

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
(3, 7, 'Jika Anda berpikir pendidikan itu mahal, coba perkirakan biaya ketidaktahuan', 'Aktif'),
(4, 6, 'Semakin banyak Anda membaca, semakin banyak hal yang akan Anda ketahui. Semakin banyak yang Anda pelajari, semakin banyak tempat yang akan Anda kunjungi.', 'Aktif'),
(5, 8, 'kalau bisa dilakukan besok kenapa harus sekarang', 'Non-aktif');

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
  `isi_pengumuman` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran_pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumumans`
--

INSERT INTO `pengumumans` (`id`, `judul_pengumuman`, `pembuat_pengumuman`, `penerima_pengumuman`, `perihal_pengumuman`, `tanggal_pengumuman`, `isi_pengumuman`, `lampiran_pengumuman`, `created_at`, `updated_at`) VALUES
(1, 'PPDB Tahun Ajaran 2023', 'Koordinator', 'Khalayak Umum dan Masyarakat Sekitar', 'Pembukaan Pendaftaran Siswa Baru Tahun 2023', '2022-12-30', 'Deskripsi pengumuman berkaitan dengan penjelasan pengumuman secara detail', 'doc_1261582339_929449834667.pdf', NULL, NULL);

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
  `desc_prestasi` varchar(2024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasis`
--

INSERT INTO `prestasis` (`id`, `judul_prestasi`, `foto_prestasi`, `nama_perlombaan`, `tanggal_prestasi`, `peraih_prestasi`, `desc_prestasi`, `created_at`, `updated_at`) VALUES
(1, 'Siswa SD Kelas 6 Memperoleh Prestasi Di tingkat Nasional', 'image_614062873285_89279677315.jpg', 'Lomba Menulis Puisi dan Pidato Tingkat Nasional', '2022-12-30', 'Ilham Nurisky dan Nanda Awimbi', 'Deskripsi prestasi lebih jelas', NULL, NULL);

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
(1, 'Admin Sekolah', 'sdn2kedaleman@gmail.com', NULL, '$2y$10$i4y5eRTZzO5rTtQsNQyHYuGjhsFlGRlf36OzAk/HutYQr25Ed9/lO', NULL, '2022-12-06 23:28:20', '2022-12-06 23:28:20');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `motivasis`
--
ALTER TABLE `motivasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengumumans`
--
ALTER TABLE `pengumumans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
