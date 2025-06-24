/*
 Navicat Premium Dump SQL

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : _chandra

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 24/06/2025 14:59:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for aset
-- ----------------------------
DROP TABLE IF EXISTS `aset`;
CREATE TABLE `aset` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aset
-- ----------------------------
BEGIN;
INSERT INTO `aset` (`id`, `kode`, `nama`, `jenis`, `lokasi`, `status`, `created_at`, `updated_at`) VALUES (2, '001', 'TV', 'elektronik', '-', '-', '2025-06-24 06:26:01', '2025-06-24 06:27:12');
COMMIT;

-- ----------------------------
-- Table structure for instalasi
-- ----------------------------
DROP TABLE IF EXISTS `instalasi`;
CREATE TABLE `instalasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `expired` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aset_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of instalasi
-- ----------------------------
BEGIN;
INSERT INTO `instalasi` (`id`, `kode`, `tanggal`, `jenis`, `expired`, `created_at`, `updated_at`, `aset_id`) VALUES (1, 'sdf2', '2025-06-24', 'asd', '2025-06-24', '2025-06-24 06:36:43', '2025-06-24 06:36:48', 2);
COMMIT;

-- ----------------------------
-- Table structure for kerusakan
-- ----------------------------
DROP TABLE IF EXISTS `kerusakan`;
CREATE TABLE `kerusakan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `aset_id` int(11) unsigned DEFAULT NULL,
  `keluhan` varchar(255) DEFAULT NULL,
  `penanganan` varchar(255) DEFAULT NULL,
  `biaya` varchar(255) DEFAULT NULL,
  `aksi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kerusakan
-- ----------------------------
BEGIN;
INSERT INTO `kerusakan` (`id`, `tanggal`, `kode`, `aset_id`, `keluhan`, `penanganan`, `biaya`, `aksi`, `created_at`, `updated_at`) VALUES (1, '2025-06-24', '001', 2, 'df', 'sdf', '43354', 'ds', '2025-06-24 06:41:29', '2025-06-24 06:41:29');
COMMIT;

-- ----------------------------
-- Table structure for pemeliharaan
-- ----------------------------
DROP TABLE IF EXISTS `pemeliharaan`;
CREATE TABLE `pemeliharaan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `aset_id` int(11) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `biaya` varchar(255) DEFAULT NULL,
  `aksi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`aset_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pemeliharaan
-- ----------------------------
BEGIN;
INSERT INTO `pemeliharaan` (`id`, `tanggal`, `kode`, `aset_id`, `jenis`, `keterangan`, `biaya`, `aksi`, `created_at`, `updated_at`) VALUES (1, '2025-06-24', 'sdf', 2, 'sdf.', 'asfdsdf', '50000', 'ok', '2025-06-24 06:49:33', '2025-06-24 06:49:37');
COMMIT;

-- ----------------------------
-- Table structure for pengadaan
-- ----------------------------
DROP TABLE IF EXISTS `pengadaan`;
CREATE TABLE `pengadaan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `aset_id` int(11) unsigned DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `spesifikasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pengadaan
-- ----------------------------
BEGIN;
INSERT INTO `pengadaan` (`id`, `tanggal`, `kode`, `aset_id`, `jenis`, `spesifikasi`, `created_at`, `updated_at`) VALUES (1, '2025-06-24', 'sdfsdf', 2, 'asd', 'dsf', '2025-06-24 06:51:55', '2025-06-24 06:51:55');
COMMIT;

-- ----------------------------
-- Table structure for penghapusan
-- ----------------------------
DROP TABLE IF EXISTS `penghapusan`;
CREATE TABLE `penghapusan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `aset_id` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of penghapusan
-- ----------------------------
BEGIN;
INSERT INTO `penghapusan` (`id`, `tanggal`, `kode`, `aset_id`, `keterangan`, `created_at`, `updated_at`) VALUES (1, '2025-06-24', '09766', 2, 'rusak berat', '2025-06-24 06:44:42', '2025-06-24 06:44:48');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `kode`, `telp`, `email`, `status`) VALUES (1, 'chandra', 'chandra', '$2y$12$r0HAFQIZdiAabhk3HwCdVub716cax1jMnmwKnv76nJz8sJx0M3TB6', NULL, NULL, '2025-06-22 06:53:39', 'superadmin', '002', '98765', 'agus@gmail.com', NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
