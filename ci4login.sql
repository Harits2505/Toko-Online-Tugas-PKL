-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2022 pada 08.12
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Site Administrator'),
(3, 'User', 'manage profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 11),
(1, 11),
(1, 11),
(1, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(14, '::1', 'atyla0555@gmail.com', 7, '2022-04-09 11:12:20', 1),
(15, '::1', 'damsadam70@gmail.com', 4, '2022-04-09 11:31:34', 1),
(16, '::1', 'atyla0555@gmail.com', 7, '2022-04-09 11:31:55', 1),
(17, '::1', 'damsadam70@gmail.com', 4, '2022-04-10 01:35:59', 1),
(18, '::1', 'atyla0555@gmail.com', NULL, '2022-04-10 01:42:47', 0),
(19, '::1', 'atyla0555@gmail.com', 7, '2022-04-10 01:43:00', 1),
(20, '::1', 'damsadam70@gmail.com', 4, '2022-04-10 01:46:56', 1),
(21, '::1', 'atyla0555@gmail.com', 7, '2022-04-10 01:47:50', 1),
(22, '::1', 'damsadam70@gmail.com', 4, '2022-04-10 01:48:34', 1),
(23, '::1', 'atyla0555@gmail.com', 7, '2022-04-10 01:55:27', 1),
(24, '::1', 'damsadam70@gmail.com', 4, '2022-04-10 01:58:46', 1),
(25, '::1', 'damsadam70@gmail.com', NULL, '2022-04-10 02:03:14', 0),
(26, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 02:04:35', 1),
(27, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 02:07:06', 1),
(28, '::1', 'atylauser@gmail.com', 9, '2022-04-10 02:21:05', 1),
(29, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 02:28:30', 1),
(30, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 02:34:34', 1),
(31, '::1', 'atylauser@gmail.com', 9, '2022-04-10 02:39:40', 1),
(32, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 02:42:20', 1),
(33, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 02:44:13', 1),
(34, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 02:46:02', 1),
(35, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 02:51:58', 1),
(36, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 03:05:30', 1),
(37, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 07:58:53', 1),
(38, '::1', 'atylauser@gmail.com', 9, '2022-04-10 08:12:44', 1),
(39, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 08:23:33', 1),
(40, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 08:29:03', 1),
(41, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 08:50:19', 1),
(42, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 08:59:07', 1),
(43, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 09:01:29', 1),
(44, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 09:07:35', 1),
(45, '::1', 'atylauser@gmail.com', 9, '2022-04-10 09:08:38', 1),
(46, '::1', 'atylauser@gmail.com', 9, '2022-04-10 09:21:31', 1),
(47, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 09:30:30', 1),
(48, '::1', 'atylauser@gmail.com', 9, '2022-04-10 09:41:45', 1),
(49, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 09:43:13', 1),
(50, '::1', 'admin2505', NULL, '2022-04-10 10:51:36', 0),
(51, '::1', 'atylauser@gmail.com', 9, '2022-04-10 10:52:09', 1),
(52, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 10:56:05', 1),
(53, '::1', 'atylauser@gmail.com', 9, '2022-04-10 10:56:55', 1),
(54, '::1', 'atylaadmin@gmail.com', 8, '2022-04-10 10:57:39', 1),
(55, '::1', 'atylaadmin@gmail.com', 8, '2022-04-11 05:27:40', 1),
(56, '::1', 'atylaadmin@gmail.com', 8, '2022-04-11 05:27:42', 1),
(57, '::1', 'atylauser@gmail.com', 9, '2022-04-11 05:54:05', 1),
(58, '::1', 'atylaadmin@gmail.com', 8, '2022-04-11 08:55:07', 1),
(59, '::1', 'atylaadmin@gmail.com', 8, '2022-04-11 09:03:57', 1),
(60, '::1', 'atylauser@gmail.com', 9, '2022-04-11 09:14:42', 1),
(61, '::1', 'atylaadmin@gmail.com', 8, '2022-04-11 09:18:37', 1),
(62, '::1', 'damsadam78@gmail,com', NULL, '2022-04-11 11:08:38', 0),
(63, '::1', 'damsadam78@gmail,com', NULL, '2022-04-11 11:09:55', 0),
(64, '::1', 'haritsadmin@gmail.com', 11, '2022-04-11 11:11:45', 1),
(65, '::1', 'haritsuser@gmail.com', 12, '2022-04-11 11:25:16', 1),
(66, '::1', 'haritsadmin@gmail.com', 11, '2022-04-12 04:00:29', 1),
(67, '::1', 'haritsadmin@gmail.com', 11, '2022-04-12 07:36:55', 1),
(68, '::1', 'haritsadmin@gmail.com', 11, '2022-04-12 08:31:45', 1),
(69, '::1', 'haritsadmin@gmail.com', 11, '2022-04-14 08:49:29', 1),
(70, '::1', 'haritsadmin@gmail.com', 11, '2022-04-14 09:07:31', 1),
(71, '::1', 'haritsuser@gmail.com', 12, '2022-04-14 09:57:11', 1),
(72, '::1', 'haritsuser@gmail.com', 12, '2022-04-14 10:06:30', 1),
(73, '::1', 'haritsadmin@gmail.com', 11, '2022-04-14 10:07:41', 1),
(74, '::1', 'haritsuser@gmail.com', 12, '2022-04-15 08:00:39', 1),
(75, '::1', 'haritsadmin@gmail.com', 11, '2022-04-15 08:02:12', 1),
(76, '::1', 'haritsuser@gmail.com', 12, '2022-04-15 08:03:05', 1),
(77, '::1', 'haritsuser@gmail.com', 12, '2022-04-15 08:06:29', 1),
(78, '::1', 'haritsuser2@gmail.com', 13, '2022-04-15 08:07:44', 1),
(79, '::1', 'haritsadmin', NULL, '2022-04-15 08:08:24', 0),
(80, '::1', 'haritsadmin@gmail.com', 11, '2022-04-15 08:08:40', 1),
(81, '::1', 'haritsuser', NULL, '2022-04-15 10:43:01', 0),
(82, '::1', 'haritsuser@gmail.com', 12, '2022-04-15 10:43:14', 1),
(83, '::1', 'haritsadmin@gmail.com', 11, '2022-04-15 12:14:00', 1),
(84, '::1', 'haritsadmin@gmail.com', 11, '2022-04-16 08:22:08', 1),
(85, '::1', 'haritsuser@gmail.com', 12, '2022-04-16 17:49:56', 1),
(86, '::1', 'haritsadmin@gmail.com', 11, '2022-04-16 17:59:00', 1),
(87, '::1', 'haritsadmin@gmail.com', 11, '2022-04-16 19:21:26', 1),
(88, '::1', 'haritsadmin@gmail.com', 11, '2022-04-17 05:20:51', 1),
(89, '::1', 'haritsuser@gmail.com', 12, '2022-04-17 05:29:20', 1),
(90, '::1', 'haritsadmin@gmail.com', 11, '2022-04-17 22:21:20', 1),
(91, '::1', 'haritsuser@gmail.com', 12, '2022-04-17 22:22:58', 1),
(92, '::1', 'haritsadmin@gmail.com', 11, '2022-04-17 22:54:14', 1),
(93, '::1', 'haritsadmin@gmail.com', 11, '2022-04-18 06:48:52', 1),
(94, '::1', 'haritsadmin@gmail.com', 11, '2022-04-19 21:18:44', 1),
(95, '::1', 'haritsadmin@gmail.com', 11, '2022-04-20 09:54:38', 1),
(96, '::1', 'haritsuser@gmail.com', 12, '2022-04-21 09:38:28', 1),
(97, '::1', 'haritsadmin@gmail.com', 11, '2022-04-21 09:52:48', 1),
(98, '::1', 'haritsadmin@gmail.com', 11, '2022-04-22 06:46:32', 1),
(99, '::1', 'haritsadmin@gmail.com', 11, '2022-04-22 06:46:35', 1),
(100, '::1', 'haritsuser@gmail.com', 12, '2022-04-22 08:35:42', 1),
(101, '::1', 'haritsuser@gmail.com', 12, '2022-04-22 11:15:55', 1),
(102, '::1', 'haritsuser@gmail.com', 12, '2022-04-23 07:17:04', 1),
(103, '::1', 'haritsadmin@gmail.com', 11, '2022-04-23 23:33:24', 1),
(104, '::1', 'haritsuser@gmail.com', 12, '2022-04-24 01:32:58', 1),
(105, '::1', 'haritsuser@gmail.com', 12, '2022-04-24 08:34:25', 1),
(106, '::1', 'haritsadmin@gmail.com', 11, '2022-04-24 08:59:36', 1),
(107, '::1', 'haritsadmin', NULL, '2022-04-25 10:10:30', 0),
(108, '::1', 'haritsadmin@gmail.com', 11, '2022-04-25 10:10:40', 1),
(109, '::1', 'haritsuser@gmail.com', 12, '2022-04-25 10:26:22', 1),
(110, '::1', 'haritsadmin@gmail.com', 11, '2022-04-25 11:36:17', 1),
(111, '::1', 'haritsuser@gmail.com', 12, '2022-04-26 09:30:38', 1),
(112, '::1', 'haritsadmin@gmail.com', 11, '2022-04-26 10:06:57', 1),
(113, '::1', 'haritsadmin@gmail.com', 11, '2022-04-27 08:31:55', 1),
(114, '::1', 'haritsadmin@gmail.com', 11, '2022-04-27 18:50:41', 1),
(115, '::1', 'haritsadmin@gmail.com', 11, '2022-04-29 07:29:07', 1),
(116, '::1', 'haritsadmin@gmail.com', 11, '2022-04-30 10:57:21', 1),
(117, '::1', 'haritsadmin', NULL, '2022-05-01 03:53:03', 0),
(118, '::1', 'haritsadmin@gmail.com', 11, '2022-05-01 03:53:16', 1),
(119, '::1', 'haritsadmin@gmail.com', 11, '2022-05-01 04:07:24', 1),
(120, '::1', 'haritsuser@gmail.com', 12, '2022-05-01 04:18:05', 1),
(121, '::1', 'haritsuser@gmail.com', 12, '2022-05-01 04:18:31', 1),
(122, '::1', 'haritsadmin@gmail.com', 11, '2022-05-01 04:20:52', 1),
(123, '::1', 'haritsadmin@gmail.com', 11, '2022-05-01 04:21:57', 1),
(124, '::1', 'haritsadmin@gmail.com', 11, '2022-05-02 02:46:24', 1),
(125, '::1', 'haritsadmin@gmail.com', 11, '2022-05-02 03:05:07', 1),
(126, '::1', 'haritsuser', NULL, '2022-05-02 03:08:03', 0),
(127, '::1', 'haritsuser@gmail.com', 12, '2022-05-02 03:08:20', 1),
(128, '::1', 'haritsadmin@gmail.com', 11, '2022-05-02 08:20:56', 1),
(129, '::1', 'haritsadmin@gmail.com', 11, '2022-05-02 10:13:15', 1),
(130, '::1', 'haritsuser@gmail.com', 12, '2022-05-02 10:13:34', 1),
(131, '::1', 'haritsuser@gmail.com', 12, '2022-05-02 10:32:31', 1),
(132, '::1', 'haritsadmin@gmail.com', 11, '2022-05-02 20:10:43', 1),
(133, '::1', 'haritsadmin@gmail.com', 11, '2022-05-02 23:58:33', 1),
(134, '::1', 'haritsadmin@gmail.com', 11, '2022-05-03 09:23:15', 1),
(135, '::1', 'haritsadmin@gmail.com', 11, '2022-05-03 10:13:53', 1),
(136, '::1', 'haritsadmin@gmail.com', 11, '2022-05-05 19:45:51', 1),
(137, '::1', 'haritsadmin@gmail.com', 11, '2022-05-05 21:10:16', 1),
(138, '::1', 'haritsadmin@gmail.com', 11, '2022-05-05 21:13:48', 1),
(139, '::1', 'haritsadmin', NULL, '2022-05-05 21:16:29', 0),
(140, '::1', 'haritsadmin@gmail.com', 11, '2022-05-05 21:16:51', 1),
(141, '::1', 'haritsuser@gmail.com', 12, '2022-05-05 22:53:30', 1),
(142, '::1', 'haritsadmin@gmail.com', 11, '2022-05-05 23:06:14', 1),
(143, '::1', 'haritsadmin@gmail.com', 11, '2022-05-07 20:17:11', 1),
(144, '::1', 'wkwkwkkw@gmail.com', 36, '2022-05-07 20:19:07', 1),
(145, '::1', 'wkwkwkkw@gmail.com', 36, '2022-05-07 20:20:06', 1),
(146, '::1', 'haritsadmin@gmail.com', 11, '2022-05-07 20:20:38', 1),
(147, '::1', 'wkwkwkkw@gmail.com', 36, '2022-05-07 20:22:28', 1),
(148, '::1', 'hahahah@gmail.com', 37, '2022-05-07 20:26:49', 1),
(149, '::1', 'haritsadmin@gmail.com', 11, '2022-05-07 20:27:43', 1),
(150, '::1', 'wkwkwkwk@gmail.com', 38, '2022-05-07 20:33:37', 1),
(151, '::1', 'haritsadmin@gmail.com', 11, '2022-05-07 20:34:13', 1),
(152, '::1', 'wkwkwkwk@gmail.com', 38, '2022-05-07 20:40:51', 1),
(153, '::1', 'haritsadmin@gmail.com', 11, '2022-05-12 21:38:11', 1),
(154, '::1', 'haritsadmin', NULL, '2022-05-12 21:41:46', 0),
(155, '::1', 'haritsadmin@gmail.com', 11, '2022-05-12 21:42:00', 1),
(156, '::1', 'haritsadmin@gmail.com', 11, '2022-05-17 07:57:05', 1),
(157, '::1', 'haritsadmin@gmail.com', 11, '2022-05-18 00:23:03', 1),
(158, '::1', 'haritsadmin@gmail.com', 11, '2022-05-20 10:16:16', 1),
(159, '::1', 'haritsadmin', NULL, '2022-05-20 23:15:54', 0),
(160, '::1', 'haritsadmin@gmail.com', 11, '2022-05-20 23:16:10', 1),
(161, '::1', 'haritsadmin@gmail.com', 11, '2022-05-21 23:36:08', 1),
(162, '::1', 'haritsadmin@gmail.com', 11, '2022-05-22 07:46:07', 1),
(163, '::1', 'haritsadmin', NULL, '2022-05-22 23:06:13', 0),
(164, '::1', 'haritsadmin@gmail.com', 11, '2022-05-22 23:06:28', 1),
(165, '::1', 'haritsadmin@gmail.com', 11, '2022-05-23 21:21:31', 1),
(166, '::1', 'haritsuser@gmail.com', 12, '2022-05-23 21:25:28', 1),
(167, '::1', 'haritsadmin@gmail.com', 11, '2022-05-24 01:20:30', 1),
(168, '::1', 'haritsuser@gmail.com', 12, '2022-05-24 01:21:10', 1),
(169, '::1', 'haritsadmin@gmail.com', 11, '2022-05-29 20:27:00', 1),
(170, '::1', 'haritsuser@gmail.com', 12, '2022-05-29 20:29:45', 1),
(171, '::1', 'haritsadmin@gmail.com', 11, '2022-05-29 20:31:34', 1),
(172, '::1', 'haritsadmin@gmail.com', 11, '2022-05-29 21:15:27', 1),
(173, '::1', 'haritsuser@gmail.com', 12, '2022-05-29 21:26:26', 1),
(174, '::1', 'haritsadmin@gmail.com', 11, '2022-05-29 21:28:35', 1),
(175, '::1', 'atylaazfa', NULL, '2022-05-29 21:37:00', 0),
(176, '::1', 'atylaazfa@gmail.com', 39, '2022-05-29 21:37:19', 1),
(177, '::1', 'haritsadmin@gmail.com', 11, '2022-05-29 21:38:29', 1),
(178, '::1', 'hwdgjegc@gmail.com', 40, '2022-05-29 21:56:21', 1),
(179, '::1', 'haritsadmin@gmail.com', 11, '2022-05-29 21:57:40', 1),
(180, '::1', 'ihwan12322@gmail.com', 41, '2022-05-29 22:04:09', 1),
(181, '::1', 'haritsadmin@gmail.com', 11, '2022-05-29 22:06:27', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage user\'s profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1649213612, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(15) NOT NULL,
  `namapenerima` varchar(255) NOT NULL,
  `notelepon` varchar(15) NOT NULL,
  `alamatpenerima` varchar(255) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `desain` varchar(255) NOT NULL,
  `size` varchar(15) NOT NULL,
  `opsi` varchar(15) NOT NULL,
  `bahan` varchar(15) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `metodepayment` varchar(15) NOT NULL,
  `jasaekspedisi` varchar(9) NOT NULL DEFAULT 'JNE',
  `total` varchar(255) NOT NULL DEFAULT 'Menghitung...',
  `info` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.png',
  `mutiara_image` varchar(255) NOT NULL DEFAULT 'mutiara.JPG',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `banner_image` varchar(255) NOT NULL DEFAULT 'banner.jpg',
  `sticker_image` varchar(255) NOT NULL DEFAULT 'sticker.jpg',
  `tshirt_image` varchar(255) NOT NULL DEFAULT 'tshirt.jpg',
  `jersey_image` varchar(255) NOT NULL DEFAULT 'jersey.jpg',
  `mug_image` varchar(255) NOT NULL DEFAULT 'mug.jpg',
  `poster_image` varchar(255) NOT NULL DEFAULT 'poster.jpg',
  `kunci_image` varchar(255) NOT NULL DEFAULT 'kunci.jpg',
  `sertifikat_image` varchar(255) NOT NULL DEFAULT 'sertifikat.jpg',
  `kartu_image` varchar(255) NOT NULL DEFAULT 'kartu.jpg',
  `tumbler_image` varchar(255) NOT NULL DEFAULT 'tumbler.jpg',
  `akrilik_image` varchar(255) NOT NULL DEFAULT 'akrilik.jpg',
  `facebook` varchar(255) NOT NULL DEFAULT 'facebook.png',
  `instagram` varchar(255) NOT NULL DEFAULT 'instagram.png',
  `whatsapp` varchar(255) NOT NULL DEFAULT 'whatsapp.png',
  `messenger` varchar(255) NOT NULL DEFAULT 'messenger.png',
  `youtube` varchar(255) NOT NULL DEFAULT 'youtube.png',
  `tiktok` varchar(255) NOT NULL DEFAULT 'tiktok.png',
  `github` varchar(255) NOT NULL DEFAULT 'github.png',
  `cod` varchar(10) NOT NULL DEFAULT 'Cod.png',
  `namapenerima` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `phonenumber`, `alamat`, `user_image`, `mutiara_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `banner_image`, `sticker_image`, `tshirt_image`, `jersey_image`, `mug_image`, `poster_image`, `kunci_image`, `sertifikat_image`, `kartu_image`, `tumbler_image`, `akrilik_image`, `facebook`, `instagram`, `whatsapp`, `messenger`, `youtube`, `tiktok`, `github`, `cod`, `namapenerima`) VALUES
(11, 'haritsadmin@gmail.com', 'haritsadmin', 'Atyla Azfa Al Harits', '081234567891', 'Jl. Raya Banjar-Sidaharja', 'default.png', 'mutiara.jpg', '$2y$10$ub6xzeAUXgDPnn3/M6kx0e4K20sn4LnO0ZSTLVxQYKhmGKrf98jFq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-04-11 11:11:25', '2022-04-11 11:11:25', NULL, 'banner.jpg', 'sticker.jpg', 'tshirt.jpg', 'jersey.jpg', 'mug.jpg', 'poster.jpg', 'kunci.jpg', 'sertifikat.jpg', 'kartu.jpg', 'tumbler.jpg', 'akrilik.jpg', 'facebook.png', 'instagram.png', 'whatsapp.png', 'messenger.png', 'youtube.png', 'tiktok.png', 'github.png', 'Cod.png', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
