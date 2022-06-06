-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2022 lúc 08:34 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `homegraden`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidangs`
--

CREATE TABLE `baidangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayDang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_ID` bigint(20) UNSIGNED NOT NULL,
  `Danhmuc_ID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caytrongs`
--

CREATE TABLE `caytrongs` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenCay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GianTien` decimal(8,2) NOT NULL,
  `GiaiDoanPhunThuoc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Loaicay_ID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `caytrongs`
--

INSERT INTO `caytrongs` (`id`, `TenCay`, `HinhAnh`, `GianTien`, `GiaiDoanPhunThuoc`, `GhiChu`, `Loaicay_ID`, `created_at`, `updated_at`) VALUES
(1, 'Cà Phê', 'cay_giong_ca_phe_xanh_lun_ts5.jpg', '150000.00', '<p>&nbsp;</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:1306px; top:1667px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', '<ol>\r\n	<li>asfasfa</li>\r\n	<li>afa</li>\r\n	<li>sf</li>\r\n	<li>asf</li>\r\n</ol>', 1, '2022-06-03 02:55:35', '2022-06-03 21:16:18'),
(2, 'Xoài', 'cay_giong_ca_phe_xanh_lun_ts5.jpg', '15000.00', '<p>dsDsad</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:1630px; top:1592px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', '<p>das</p>', 1, '2022-06-03 18:29:19', '2022-06-03 20:42:36'),
(3, 'xoài', 'cay_giong_ca_phe_xanh_lun_ts5.jpg', '1500.00', '<p>asdasdaandkajsdjkahkdshajksd</p>', '<ol>\r\n	<li>asdasd</li>\r\n	<li>asd</li>\r\n	<li>asd</li>\r\n	<li>assdasd</li>\r\n</ol>', 1, '2022-06-03 21:23:31', '2022-06-03 21:23:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucloaicays`
--

CREATE TABLE `danhmucloaicays` (
  `id` int(10) UNSIGNED NOT NULL,
  `Tenloaicay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucloaicays`
--

INSERT INTO `danhmucloaicays` (`id`, `Tenloaicay`, `created_at`, `updated_at`) VALUES
(1, 'Cây Nông Nghiệp', '2022-06-03 02:52:29', '2022-06-03 02:52:29'),
(2, 'Cây Ăn Trái', '2022-06-03 08:45:39', '2022-06-03 08:45:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `khus`
--

CREATE TABLE `khus` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenKhu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayTrongCay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayThuHoach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_ID` bigint(20) UNSIGNED NOT NULL,
  `Caytrong_ID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `SoLuongChet` int(11) NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhes`
--

CREATE TABLE `lienhes` (
  `id` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaCHi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDUng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_05_27_045950_create_quyens_table', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(5, '2019_08_19_000000_create_failed_jobs_table', 2),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(7, '2022_05_24_154912_create_danhmucloaicays_table', 2),
(8, '2022_05_24_175255_create_caytrongs_table', 2),
(9, '2022_05_27_050508_create_nhanviens_table', 2),
(10, '2022_05_27_051513_create_baidangs_table', 2),
(11, '2022_05_27_051900_create_khus_table', 2),
(12, '2022_05_27_052310_create_phunthuocs_table', 2),
(13, '2022_05_27_052814_create_xuats_table', 2),
(14, '2022_05_27_053251_create_nhaps_table', 2),
(15, '2022_05_30_150554_create_sessions_table', 2),
(16, '2022_05_30_181738_create_admins_table', 2),
(17, '2022_05_31_074842_create_lienhes_table', 2),
(18, '2022_05_31_145853_create_tinh_trang_khus_table', 2),
(19, '2022_06_03_121406_update_khus_table', 3),
(20, '2022_06_04_024026_add__so_luong_chet_table', 4),
(21, '2022_06_04_024319_add__ghi_chu_table', 4),
(22, '2022_06_04_035447_changecolum_caytrongstable', 5),
(23, '2022_06_04_041500_change_giatien', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanviens`
--

CREATE TABLE `nhanviens` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaps`
--

CREATE TABLE `nhaps` (
  `id` int(10) UNSIGNED NOT NULL,
  `SoLuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayNhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaNhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Caytrong_ID` int(10) UNSIGNED NOT NULL,
  `Khu_ID` int(10) UNSIGNED NOT NULL,
  `User_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `phunthuocs`
--

CREATE TABLE `phunthuocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `NgayPhunThuoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenThuoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LieuLuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_ID` bigint(20) UNSIGNED NOT NULL,
  `Khu_ID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyens`
--

CREATE TABLE `quyens` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenQuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quyens`
--

INSERT INTO `quyens` (`id`, `TenQuyen`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'NhanVien', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2n7gzobGG1QDlcq11JyscYlIgsFtLbMNTraifRiw', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV3lwRUJIUDVBN0xVMWliRHFkandwV3hKb0xzSDliWVhjdlpaazU1cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9raHUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkLlZwaEo4enJxcWttNkYvVTBuSVRvT0dzZDJENll6eWJEN3pKVml5clJWbW1ualNhZUwvMVMiO30=', 1654324210);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh_trang_khus`
--

CREATE TABLE `tinh_trang_khus` (
  `id` int(10) UNSIGNED NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Khu_ID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `sdt` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Quyen_ID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `sdt`, `remember_token`, `current_team_id`, `profile_photo_path`, `Quyen_ID`, `created_at`, `updated_at`) VALUES
(1, 'Trần Chí', 'tranchi20012000@gmail.com', NULL, '$2y$10$.VphJ8zrqqkm6F/U0nIToOGsd2D6YzybD7zJViyrRVmmnjSaeL/1S', NULL, NULL, NULL, 339599523, NULL, NULL, NULL, 1, NULL, '2022-06-03 04:31:12'),
(2, 'Anh Nguyên', 'anhnguyen@gmail.com', NULL, '$2y$10$lGW2ze8ftu5Y0yk2eSEpcOZjyp91gSGzuTgRz6FTc7e8QQ7SBXHp2', NULL, NULL, NULL, 339599522, NULL, NULL, NULL, 1, NULL, '2022-06-03 04:31:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuats`
--

CREATE TABLE `xuats` (
  `id` int(10) UNSIGNED NOT NULL,
  `SoLuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayXuat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaXuat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Caytrong_ID` int(10) UNSIGNED NOT NULL,
  `Khu_ID` int(10) UNSIGNED NOT NULL,
  `User_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Chỉ mục cho bảng `baidangs`
--
ALTER TABLE `baidangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baidangs_user_id_foreign` (`User_ID`),
  ADD KEY `baidangs_danhmuc_id_foreign` (`Danhmuc_ID`);

--
-- Chỉ mục cho bảng `caytrongs`
--
ALTER TABLE `caytrongs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caytrongs_loaicay_id_foreign` (`Loaicay_ID`);

--
-- Chỉ mục cho bảng `danhmucloaicays`
--
ALTER TABLE `danhmucloaicays`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `khus`
--
ALTER TABLE `khus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khus_user_id_foreign` (`User_ID`),
  ADD KEY `khus_caytrong_id_foreign` (`Caytrong_ID`);

--
-- Chỉ mục cho bảng `lienhes`
--
ALTER TABLE `lienhes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanviens`
--
ALTER TABLE `nhanviens`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhaps`
--
ALTER TABLE `nhaps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhaps_caytrong_id_foreign` (`Caytrong_ID`),
  ADD KEY `nhaps_khu_id_foreign` (`Khu_ID`),
  ADD KEY `nhaps_user_id_foreign` (`User_ID`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phunthuocs`
--
ALTER TABLE `phunthuocs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phunthuocs_user_id_foreign` (`User_ID`),
  ADD KEY `phunthuocs_khu_id_foreign` (`Khu_ID`);

--
-- Chỉ mục cho bảng `quyens`
--
ALTER TABLE `quyens`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `tinh_trang_khus`
--
ALTER TABLE `tinh_trang_khus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tinh_trang_khus_khu_id_foreign` (`Khu_ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_quyen_id_foreign` (`Quyen_ID`);

--
-- Chỉ mục cho bảng `xuats`
--
ALTER TABLE `xuats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xuats_caytrong_id_foreign` (`Caytrong_ID`),
  ADD KEY `xuats_khu_id_foreign` (`Khu_ID`),
  ADD KEY `xuats_user_id_foreign` (`User_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `baidangs`
--
ALTER TABLE `baidangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `caytrongs`
--
ALTER TABLE `caytrongs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danhmucloaicays`
--
ALTER TABLE `danhmucloaicays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khus`
--
ALTER TABLE `khus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `lienhes`
--
ALTER TABLE `lienhes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `nhanviens`
--
ALTER TABLE `nhanviens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhaps`
--
ALTER TABLE `nhaps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phunthuocs`
--
ALTER TABLE `phunthuocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `quyens`
--
ALTER TABLE `quyens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tinh_trang_khus`
--
ALTER TABLE `tinh_trang_khus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `xuats`
--
ALTER TABLE `xuats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baidangs`
--
ALTER TABLE `baidangs`
  ADD CONSTRAINT `baidangs_danhmuc_id_foreign` FOREIGN KEY (`Danhmuc_ID`) REFERENCES `danhmucloaicays` (`id`),
  ADD CONSTRAINT `baidangs_user_id_foreign` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `caytrongs`
--
ALTER TABLE `caytrongs`
  ADD CONSTRAINT `caytrongs_loaicay_id_foreign` FOREIGN KEY (`Loaicay_ID`) REFERENCES `danhmucloaicays` (`id`);

--
-- Các ràng buộc cho bảng `khus`
--
ALTER TABLE `khus`
  ADD CONSTRAINT `khus_caytrong_id_foreign` FOREIGN KEY (`Caytrong_ID`) REFERENCES `caytrongs` (`id`),
  ADD CONSTRAINT `khus_user_id_foreign` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `nhaps`
--
ALTER TABLE `nhaps`
  ADD CONSTRAINT `nhaps_caytrong_id_foreign` FOREIGN KEY (`Caytrong_ID`) REFERENCES `caytrongs` (`id`),
  ADD CONSTRAINT `nhaps_khu_id_foreign` FOREIGN KEY (`Khu_ID`) REFERENCES `khus` (`id`),
  ADD CONSTRAINT `nhaps_user_id_foreign` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `phunthuocs`
--
ALTER TABLE `phunthuocs`
  ADD CONSTRAINT `phunthuocs_khu_id_foreign` FOREIGN KEY (`Khu_ID`) REFERENCES `khus` (`id`),
  ADD CONSTRAINT `phunthuocs_user_id_foreign` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `tinh_trang_khus`
--
ALTER TABLE `tinh_trang_khus`
  ADD CONSTRAINT `tinh_trang_khus_khu_id_foreign` FOREIGN KEY (`Khu_ID`) REFERENCES `khus` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_quyen_id_foreign` FOREIGN KEY (`Quyen_ID`) REFERENCES `quyens` (`id`);

--
-- Các ràng buộc cho bảng `xuats`
--
ALTER TABLE `xuats`
  ADD CONSTRAINT `xuats_caytrong_id_foreign` FOREIGN KEY (`Caytrong_ID`) REFERENCES `caytrongs` (`id`),
  ADD CONSTRAINT `xuats_khu_id_foreign` FOREIGN KEY (`Khu_ID`) REFERENCES `khus` (`id`),
  ADD CONSTRAINT `xuats_user_id_foreign` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
