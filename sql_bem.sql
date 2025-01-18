-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2024 pada 09.17
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id` int(11) NOT NULL,
  `npm` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` enum('Sistem Informasi','Teknik Informatika','Teknologi Informasi') NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aspirasi`
--

INSERT INTO `aspirasi` (`id`, `npm`, `nama`, `prodi`, `email`, `tanggal`, `pesan`) VALUES
(2, 12522022, 'Muhammad Refa', 'Teknik Informatika', 'refafatur@gmail.com', '2024-08-05 22:01:16', 'hsbahsbkabkajs'),
(3, 12522033, 'Ziqi Raehan', 'Teknik Informatika', 'ziqiraehan@gmail.com', '2024-08-05 23:02:37', 'sbhbsjsk'),
(4, 12522022, 'vhbsabshja', 'Teknik Informatika', 'refafatur97@gmail.com', '2024-08-05 23:08:36', 'sotau'),
(5, 12522013, 'Egi', 'Teknik Informatika', 'egi@gmail.com', '2024-08-06 15:48:14', 'gvtfgvygbygb'),
(6, 12522054, 'Syawal', 'Teknik Informatika', 'syawal@gmail.com', '2024-08-08 16:24:00', 'sahbsjhbshjausygasu'),
(7, 1, 'Muhammad Refa', 'Sistem Informasi', 'refafatur@gmail.com', '2024-08-08 16:49:38', 'a jkanskasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('badru@gmail.com|127.0.0.1', 'i:1;', 1722847502),
('badru@gmail.com|127.0.0.1:timer', 'i:1722847502;', 1722847502);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(11) NOT NULL,
  `nama` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `alamat` longtext DEFAULT NULL,
  `telp` longtext DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id`, `nama`, `email`, `alamat`, `telp`, `tanggal`) VALUES
(4, 'Fatur', 'refafatur97@gmail.com', 'Kp.Bojong Rangkas', '081317490001', '2024-08-02 22:07:31'),
(5, 'Refaaaa', 'refafatur97@gmail.com', 'kp.bojong rangkas', '081317490001', '2024-08-02 23:10:27'),
(6, 'Apoyy', 'refafatur97@gmail.com', 'kp.bojong rangkas', '081317490001', '2024-09-01 03:09:41'),
(7, 'pyy', 'refafatur97@gmail.com', 'vhajbs', '124313', '2024-10-10 03:10:47'),
(8, 'ffff', 'refafatur97@gmail.com', 'Kp.Bojong Rangkas', '081317490001', '2024-08-03 11:10:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(1000) NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(1, 'Muhammad Refa', 'refafatur97@gmail.com', 'hjb', 'hahahah', '2024-08-13 21:24:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_03_102848_add_is_admin_to_users_table', 2),
(5, '2024_08_03_105328_add_status_to_users_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7nhA9dKmtQgng5xCAQBLlfWiSQxbHyUNrRrStktK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUmJzSkJlZ2NvNktuUlVGcm5nN0dzV0REbnRDU1JvMllKZ0RFdFIwSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9nYWxlcmkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1723652465);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_acara`
--

CREATE TABLE `tbl_acara` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `katakata` longtext NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_acara`
--

INSERT INTO `tbl_acara` (`id`, `judul`, `katakata`, `tempat`, `tanggal`, `foto`) VALUES
(12, 'Grand Launching Program Inovasi Mahasiswa BEM KM UNBIN 2024', 'BEM KM UNBIN 2024 akan segera mengadakan acara Grand Launching Program Inovasi Mahasiswa, yang bertujuan untuk mendorong kreativitas dan inovasi di kalangan mahasiswa.', 'Aula Finkom', '2024-08-15', 'acara1.png'),
(13, 'Workshop & Seminar Perkembangan Teknologi Informatika Menuju Indonesia Emas', 'Workshop & Seminar Perkembangan Teknologi Informatika Menuju Indonesia Emas yang diharapkan akan bisa membantu para penerus bangsa ini memiliki pemahaman teknologi secara mendalam diikuti sifat visioner.', 'Aula Fekbis', '2024-08-25', 'acara2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `katakata` longtext NOT NULL,
  `foto` varchar(100) NOT NULL,
  `info` enum('Akademik','Unit Kegiatan Mahasiswa','Festival','Teknologi','Workshop') NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `katakata`, `foto`, `info`, `tanggal`) VALUES
(3, 'OPENING CEREMONY RAPAT KERJA BEM KM UNBIN 2024', 'Pada tanggal 15 Juli 2024, Badan Eksekutif Mahasiswa (BEM) Keluarga Mahasiswa (KM) Universitas Binaniaga Indonesia (UNBIN) sukses menggelar acara Opening Ceremony Rapat Kerja BEM KM UNBIN 2024. Acara ini menjadi tonggak penting dalam perjalanan BEM KM UNBIN, menandai dimulainya serangkaian program kerja dan kegiatan yang telah direncanakan untuk satu tahun ke depan. Acara yang bertempat di Aula Utama UNBIN tersebut dihadiri oleh seluruh anggota BEM, perwakilan dari berbagai Unit Kegiatan Mahasiswa (UKM), Himpunan Mahasiswa Jurusan (HMJ), serta tamu undangan dari kalangan akademisi dan staf rektorat. Kehadiran berbagai pihak dalam acara ini menunjukkan dukungan yang kuat terhadap peran BEM dalam meningkatkan kualitas kehidupan kampus. Acara dimulai dengan pembukaan yang dipimpin oleh Ketua Pelaksana, yang dalam sambutannya menyampaikan rasa terima kasih kepada seluruh peserta dan tamu undangan. Ia menekankan bahwa Rapat Kerja ini adalah momen penting untuk menyatukan visi dan misi seluruh elemen BEM dalam satu tujuan bersama, yaitu menciptakan lingkungan kampus yang lebih progresif dan inklusif. Wakil Presiden Mahasiswa, dalam pidatonya, menyampaikan apresiasi atas kerja keras seluruh anggota BEM dalam mempersiapkan Rapat Kerja ini. Ia juga menggarisbawahi pentingnya kolaborasi antar kementerian dan organisasi mahasiswa lainnya dalam mencapai tujuan bersama. Menurutnya, tantangan yang dihadapi mahasiswa saat ini menuntut BEM untuk lebih kreatif dan inovatif dalam menjalankan program-programnya. Presiden Mahasiswa kemudian mengambil alih panggung dengan pidato yang inspiratif, mengajak seluruh anggota BEM untuk menjadikan tahun 2024 sebagai tahun perubahan yang nyata. Ia memaparkan visi besar BEM KM UNBIN, yaitu menjadi organisasi mahasiswa yang tidak hanya aktif dalam kegiatan internal kampus, tetapi juga mampu memberikan kontribusi nyata bagi masyarakat luas. Ia juga menegaskan komitmen BEM untuk terus beradaptasi dengan perubahan zaman dan menjawab tantangan yang ada dengan solusi-solusi yang inovatif. Salah satu segmen utama dalam acara ini adalah presentasi program kerja oleh masing-masing kementerian di dalam BEM. Setiap menteri mempresentasikan rencana strategis dan kegiatan unggulan yang akan dilaksanakan dalam periode kepengurusan ini. Beberapa program yang menarik perhatian antara lain adalah \"Gerakan Kampus Bersih\" yang digagas oleh Kementerian Lingkungan Hidup, dan \"Startup Academy\" oleh Kementerian Ekonomi Kreatif, yang bertujuan untuk mendorong jiwa kewirausahaan di kalangan mahasiswa. Kementerian Sosial juga memaparkan rencana mereka untuk memperkuat kegiatan pengabdian masyarakat melalui program \"BEM Mengabdi\" yang akan dilaksanakan di berbagai wilayah terpencil di Indonesia. Di sisi lain, Kementerian Pendidikan dan Pelatihan berencana untuk meningkatkan kualitas akademik mahasiswa melalui berbagai pelatihan dan workshop yang relevan dengan kebutuhan industri saat ini. Selain itu, Kementerian Komunikasi dan Informasi memaparkan strategi mereka dalam memperkuat branding dan komunikasi BEM melalui platform digital. Mereka berencana untuk lebih aktif di media sosial dan memanfaatkan teknologi terkini untuk menjangkau lebih banyak mahasiswa, termasuk peluncuran aplikasi mobile BEM yang akan memudahkan mahasiswa mengakses informasi kegiatan dan layanan yang disediakan oleh BEM. Setelah presentasi dari masing-masing kementerian, acara dilanjutkan dengan sesi tanya jawab yang interaktif. Peserta yang hadir, termasuk perwakilan UKM dan HMJ, diberikan kesempatan untuk memberikan masukan, bertanya, dan berdiskusi langsung dengan para pemimpin BEM mengenai program-program yang telah dipresentasikan. Sesi ini berjalan dengan dinamis dan menunjukkan antusiasme tinggi dari para peserta untuk terlibat aktif dalam kegiatan BEM. Acara kemudian ditutup dengan sesi foto bersama seluruh peserta, yang diiringi dengan suasana penuh keakraban dan semangat. Foto bersama ini bukan hanya menjadi dokumentasi, tetapi juga simbol kekompakan dan kebersamaan yang menjadi fondasi kuat bagi keberhasilan BEM di masa depan. Setelah itu, dilanjutkan dengan acara ramah tamah yang memberikan kesempatan bagi para peserta untuk berjejaring dan berdiskusi lebih lanjut tentang potensi kolaborasi antar organisasi mahasiswa di kampus. Opening Ceremony Rapat Kerja BEM KM UNBIN 2024 ini menjadi langkah awal yang penuh semangat untuk menjalankan berbagai program kerja yang telah dirancang dengan baik. BEM KM UNBIN berharap, dengan dukungan dan partisipasi aktif dari seluruh mahasiswa, tahun ini akan menjadi tahun yang penuh prestasi dan kontribusi positif bagi kampus dan masyarakat luas. BEM KM UNBIN siap untuk menghadapi tantangan yang ada dan terus berinovasi dalam menciptakan program-program yang relevan dengan kebutuhan mahasiswa dan zaman. Dengan semangat kebersamaan dan kolaborasi, BEM KM UNBIN berkomitmen untuk terus berperan sebagai motor penggerak perubahan di Universitas Binaniaga Indonesia.', 'artikell1.png', 'Workshop', '2024-07-30'),
(5, 'SEMINAR NASIONAL BEM KM UNBIN 2024', 'Pada tanggal 20 Agustus 2024, BEM KM UNBIN mengadakan Seminar Nasional dengan tema \"Inovasi Teknologi dan Dampaknya pada Pendidikan di Indonesia\", yang menghadirkan pembicara nasional dari berbagai bidang.', 'artikell2.png', 'Unit Kegiatan Mahasiswa', '2024-08-20'),
(6, 'KAMPANYE GREEN CAMPUS BEM KM UNBIN 2024', 'Pada tanggal 5 September 2024, BEM KM UNBIN meluncurkan Kampanye Green Campus untuk meningkatkan kesadaran lingkungan di kalangan mahasiswa dengan berbagai kegiatan seperti penanaman pohon dan daur ulang sampah.', 'artikell3.png', 'Unit Kegiatan Mahasiswa', '2024-09-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_beranda_judul`
--

CREATE TABLE `tbl_beranda_judul` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_beranda_judul`
--

INSERT INTO `tbl_beranda_judul` (`id`, `judul`, `keterangan`) VALUES
(1, 'Selamat Datang di BEM KM UNBIN', 'Website resmi Kabinet Sinergi Cita BEM KM UNBIN! Kami adalah wadah kreativitas dan kolaborasi mahasiswa Universitas Binaniaga Indonesia yang berkomitmen untuk mengubah Visi BEM KM UNBIN menjadi kenyataan.'),
(2, 'Mewujudkan Sinergi, Menggapai Cita', 'Dengan kerjasama yang kuat dan terarah di antara semua elemen BEM dan mahasiswa, kita dapat mencapai tujuan-tujuan besar dan mewujudkan impian bersama yang memberikan dampak positif bagi seluruh komunitas kampus.'),
(4, 'Membawa Inspirasi, Mencapai Prestasi', 'BEM KM UNBIN berkomitmen untuk menjadi sumber inspirasi bagi seluruh mahasiswa, mendorong mereka untuk berprestasi dan mencapai puncak kesuksesan melalui kegiatan dan program yang bermakna.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_beranda_testimoni`
--

CREATE TABLE `tbl_beranda_testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(1000) NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_beranda_testimoni`
--

INSERT INTO `tbl_beranda_testimoni` (`id`, `nama`, `jabatan`, `pesan`, `foto`) VALUES
(3, 'Muhammad Azrin Nahusy', 'Presiden Mahasiswa BEM KM UNBIN 2024', 'Bergabung dengan BEM adalah keputusan terbaik yang pernah saya buat selama kuliah. Pengalaman ini memberikan saya banyak pelajaran berharga yang tidak akan saya dapatkan di kelas.', 'Azrin2.jpeg'),
(5, 'Muhammad Refa Fatur Rahman', 'Wakil Presiden Mahasiswa BEM KM UNBIN 2024', 'Menjadi bagian dari BEM UNBIN adalah pengalaman yang tak terlupakan. Saya mendapatkan banyak wawasan baru dan dapat berkontribusi nyata untuk kampus.', 'egi.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `berkas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id`, `judul`, `berkas`) VALUES
(1, 'Kabinet Sinergi Cita BEM KM UNBIN', 'kabinet.jpeg'),
(2, 'Presiden Mahasiswa BEM KM UNBIN', 'Azrin.jpeg'),
(3, 'Presiden & Wakil Presiden BEM KM UNBIN', 'PresWapres.jpeg'),
(4, 'Wakil Presiden BEM KM UNBIN', 'Egi.jpeg'),
(5, 'Sekretaris Kabinet BEM KM UNBIN', 'Sekretaris.jpeg'),
(6, 'Kementerian Dalam Kampus BEM KM UNBIN', 'Kemenda.jpeg'),
(7, 'Kementerian Luar Kampus BEM KM UNBIN', 'Kemenlu.jpeg'),
(8, 'Kementerian Komunikasi & Informatika BEM KM UNBIN', 'Kominfo.jpeg'),
(9, 'Kementerian Komunikasi & Informatikan BEM KM UNBIN', 'Bella.jpeg'),
(10, 'Menteri Luar Kampus BEM KM UNBIN', 'Agil.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Admin', 'refafatur97@gmail.com', NULL, '$2y$12$gboxQRR7E7U1tn.bG4FJ0.Xi3NSf2bjk4YEyQinZ.M1rJ9Wl1UOmm', NULL, '2024-07-31 02:30:54', '2024-08-14 07:45:15', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `tbl_acara`
--
ALTER TABLE `tbl_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_beranda_judul`
--
ALTER TABLE `tbl_beranda_judul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_beranda_testimoni`
--
ALTER TABLE `tbl_beranda_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
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
-- AUTO_INCREMENT untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_acara`
--
ALTER TABLE `tbl_acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_beranda_judul`
--
ALTER TABLE `tbl_beranda_judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_beranda_testimoni`
--
ALTER TABLE `tbl_beranda_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
