/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : arsip

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 17/12/2024 14:03:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for diklat
-- ----------------------------
DROP TABLE IF EXISTS `diklat`;
CREATE TABLE `diklat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of diklat
-- ----------------------------
BEGIN;
INSERT INTO `diklat` (`id`, `tanggal`, `nama`, `tempat`, `pendidikan`, `waktu`, `nomor`, `pegawai_id`, `created_at`, `updated_at`) VALUES (2, '2024-12-17', 'pelatihan', 'BKD', '-', '9 wita', '-', 2, '2024-12-17 12:52:38', '2024-12-17 12:52:38');
COMMIT;

-- ----------------------------
-- Table structure for golongan
-- ----------------------------
DROP TABLE IF EXISTS `golongan`;
CREATE TABLE `golongan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pangkat` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `golongan` char(10) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of golongan
-- ----------------------------
BEGIN;
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (3, 'Juru Muda', '2021-04-13 08:36:45', '2021-04-13 08:36:45', 'I/A', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (4, 'Juru Muda Tingkat 1', '2021-04-13 08:36:48', '2021-04-13 08:36:48', 'I/B', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (6, 'Juru', '2021-04-13 08:36:50', '2021-04-13 08:36:50', 'I/C', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (7, 'Juru Tingkat 1', '2021-04-13 08:36:53', '2021-04-13 08:36:53', 'I/D', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (8, 'Pengatur Muda', '2021-04-13 08:37:03', '2021-04-13 08:37:03', 'II/A', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (9, 'Pengatur Muda Tingkat 1', '2021-04-13 08:37:06', '2021-04-13 08:37:06', 'II/B', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (10, 'Pengatur', '2021-04-13 08:37:09', '2021-04-13 08:37:09', 'II/C', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (11, 'Pengatur Tingkat 1', '2021-04-13 08:37:13', '2021-04-13 08:37:13', 'II/D', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (12, 'Penata Muda', '2021-04-13 08:37:28', '2021-04-13 08:37:28', 'III/A', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (13, 'Penata Muda Tingkat 1', '2021-04-13 08:37:31', '2021-04-13 08:37:31', 'III/B', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (14, 'Penata', '2021-04-13 08:37:35', '2021-04-13 08:37:35', 'III/C', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (15, 'Penata Tingkat 1', '2021-04-13 08:37:43', '2021-04-13 08:37:43', 'III/D', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (16, 'Pembina', '2021-04-13 08:37:47', '2021-04-13 08:37:47', 'IV/A', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (17, 'Pembina Tingkat 1', '2021-04-13 08:37:51', '2021-04-13 08:37:51', 'IV/B', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (18, 'Pembina Utama Muda', '2021-04-13 08:37:54', '2021-04-13 08:37:54', 'IV/C', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (19, 'Pembina Utama Madya', '2021-04-13 08:37:57', '2021-04-13 08:37:57', 'IV/D', NULL);
INSERT INTO `golongan` (`id`, `pangkat`, `created_at`, `updated_at`, `golongan`, `keterangan`) VALUES (20, 'Pembina Utama', '2021-04-13 08:38:00', '2021-04-13 08:38:00', 'IV/E', NULL);
COMMIT;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
BEGIN;
INSERT INTO `jabatan` (`id`, `nama`, `created_at`, `updated_at`, `keterangan`) VALUES (7, 'kepala bidang', '2024-12-17 13:03:38', '2024-12-17 13:04:19', '-');
INSERT INTO `jabatan` (`id`, `nama`, `created_at`, `updated_at`, `keterangan`) VALUES (8, 'kepala dinas', '2024-12-17 13:04:24', '2024-12-17 13:04:24', NULL);
INSERT INTO `jabatan` (`id`, `nama`, `created_at`, `updated_at`, `keterangan`) VALUES (9, 'kepala seksi', '2024-12-17 13:04:28', '2024-12-17 13:04:28', NULL);
COMMIT;

-- ----------------------------
-- Table structure for menjabat
-- ----------------------------
DROP TABLE IF EXISTS `menjabat`;
CREATE TABLE `menjabat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pegawai_id` int(11) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menjabat
-- ----------------------------
BEGIN;
INSERT INTO `menjabat` (`id`, `pegawai_id`, `jabatan_id`, `tanggal`, `created_at`, `updated_at`) VALUES (1, 1, 7, '2024-12-17', '2024-12-17 13:19:11', '2024-12-17 13:22:34');
COMMIT;

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `status_pegawai` varchar(255) DEFAULT NULL,
  `status_kawin` varchar(255) DEFAULT NULL,
  `gol_darah` varchar(255) DEFAULT NULL,
  `nomor_pegawai` varchar(255) DEFAULT NULL,
  `tmt_pegawai` date DEFAULT NULL,
  `golongan_id` int(11) DEFAULT NULL,
  `unit_kerja_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
BEGIN;
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `alamat`, `telp`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `agama`, `status_pegawai`, `status_kawin`, `gol_darah`, `nomor_pegawai`, `tmt_pegawai`, `golongan_id`, `unit_kerja_id`, `created_at`, `updated_at`) VALUES (1, '123456432', 'Budi Raharja', 'jnk', 'njkj', 'nkj', '2024-12-03', 'L', 'ISLAM', 'CPNS', 'BELUM KAWIN', 'A', 'sdfsdfsdfsdf', '2024-12-04', 3, 7, '2024-12-15 11:41:19', '2024-12-15 17:40:21');
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `alamat`, `telp`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `agama`, `status_pegawai`, `status_kawin`, `gol_darah`, `nomor_pegawai`, `tmt_pegawai`, `golongan_id`, `unit_kerja_id`, `created_at`, `updated_at`) VALUES (2, '324354654321', 'Rudi Arifin', '-', '-', '-', '2024-12-05', 'L', 'ISLAM', 'CPNS', 'BELUM KAWIN', 'B', '5676890', '2024-12-10', 6, 7, '2024-12-15 17:43:09', '2024-12-15 17:43:09');
COMMIT;

-- ----------------------------
-- Table structure for pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `pendidikan`;
CREATE TABLE `pendidikan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pendidikan
-- ----------------------------
BEGIN;
INSERT INTO `pendidikan` (`id`, `nama`, `nomor`, `tahun`, `pegawai_id`, `created_at`, `updated_at`) VALUES (2, 'STMIK Indonesia Banjarmasin', 'IZ-03435', '2023', 1, '2024-12-15 17:38:49', '2024-12-15 17:38:49');
INSERT INTO `pendidikan` (`id`, `nama`, `nomor`, `tahun`, `pegawai_id`, `created_at`, `updated_at`) VALUES (3, 'UNISKA', '342543', '2024', 1, '2024-12-15 17:40:32', '2024-12-15 17:40:32');
INSERT INTO `pendidikan` (`id`, `nama`, `nomor`, `tahun`, `pegawai_id`, `created_at`, `updated_at`) VALUES (4, 'SMA', '23456532', '2002', 2, '2024-12-15 17:43:33', '2024-12-15 17:43:33');
COMMIT;

-- ----------------------------
-- Table structure for pensiun
-- ----------------------------
DROP TABLE IF EXISTS `pensiun`;
CREATE TABLE `pensiun` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `keterangan` text,
  `tanggal` date DEFAULT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pensiun
-- ----------------------------
BEGIN;
INSERT INTO `pensiun` (`id`, `keterangan`, `tanggal`, `pegawai_id`, `created_at`, `updated_at`) VALUES (2, 'sd', '2024-12-16', 1, '2024-12-17 13:37:07', '2024-12-17 13:37:07');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1167, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'user', '2023-05-15 16:36:37', '2023-05-15 16:36:37');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (3, 'petugas', '2024-11-10 17:28:18', '2024-11-10 17:28:18');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (4, 'saksi', '2024-11-20 22:51:33', '2024-11-20 22:51:33');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (5, 'kelurahan', '2024-11-21 03:07:06', '2024-11-21 03:07:06');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (6, 'kecamatan', '2024-11-21 03:07:11', '2024-11-21 03:07:11');
COMMIT;

-- ----------------------------
-- Table structure for unit_kerja
-- ----------------------------
DROP TABLE IF EXISTS `unit_kerja`;
CREATE TABLE `unit_kerja` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of unit_kerja
-- ----------------------------
BEGIN;
INSERT INTO `unit_kerja` (`id`, `nama`, `created_at`, `updated_at`, `keterangan`) VALUES (7, 'Bidang A', '2024-12-15 11:30:16', '2024-12-15 11:30:16', '-');
INSERT INTO `unit_kerja` (`id`, `nama`, `created_at`, `updated_at`, `keterangan`) VALUES (8, 'Bidang B', '2024-12-15 11:30:21', '2024-12-15 11:30:39', '--');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  `pendaftar_id` char(36) DEFAULT NULL,
  `pengumpul_id` int(11) DEFAULT NULL,
  `suara_id` int(11) DEFAULT NULL,
  `kelurahan_id` int(11) DEFAULT NULL,
  `kecamatan_id` int(11) DEFAULT NULL,
  `nama_kec` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1168 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`, `pendaftar_id`, `pengumpul_id`, `suara_id`, `kelurahan_id`, `kecamatan_id`, `nama_kec`) VALUES (1, 'admin', NULL, 'admin', '2024-12-17 14:02:43', '$2y$10$E9xG1OtIFvBRbHqlwHCC3u48vO5eBf2OQ9wFNpi.qKOAzVqNDUdW2', NULL, 'ziA1DwVokoHhC0cg8Vs2dPAhDiwOX8MgQ5QI0il1uB6tKwJUPXtMA7oFrK9W', '2024-12-17 14:02:43', '2024-12-17 14:02:43', '$2y$10$tjMANlV25IUwvKuPxEODW.3qE3zPSKjwhmgTcZUgsPDZRGcpgGAN.', NULL, 0, NULL, 5, NULL, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`, `pendaftar_id`, `pengumpul_id`, `suara_id`, `kelurahan_id`, `kecamatan_id`, `nama_kec`) VALUES (1167, 'adi', NULL, 'adi', '2024-12-15 10:42:05', '$2y$10$Ob4EMKaI9dBMK544WkD/EefkDjj5MwllZ6LEcXhTskfnSCMGlcK1m', NULL, NULL, '2024-12-15 10:42:05', '2024-12-15 10:42:05', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
