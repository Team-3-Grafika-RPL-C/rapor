-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 07:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raports`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `academic_year` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `academic_year`, `is_active`) VALUES
(1, '2023-02-19 14:08:18', NULL, '2023-03-01 11:39:36', NULL, NULL, NULL, 0, ' 2024/2025', 1),
(6, '2023-02-27 11:47:48', NULL, '2023-02-27 11:47:48', NULL, NULL, NULL, 1, '2021/2022', 0),
(7, '2023-02-28 12:01:45', NULL, '2023-03-01 02:29:34', NULL, NULL, NULL, 1, ' 2022/2023', 0),
(8, '2023-03-01 02:28:19', NULL, '2023-03-01 02:28:19', NULL, NULL, NULL, 1, ' 2023/2024', 0),
(9, '2023-03-01 02:31:13', NULL, '2023-03-01 02:31:13', NULL, NULL, NULL, 1, ' 2025/2026', 0),
(10, '2023-03-01 11:52:36', NULL, '2023-03-08 06:08:38', NULL, NULL, NULL, 0, '2023/2024', 0),
(11, '2023-03-01 13:53:15', NULL, '2023-03-01 13:53:15', NULL, NULL, NULL, 0, ' 2022/2023', 0),
(12, '2023-03-01 14:26:36', NULL, '2023-03-08 06:08:58', NULL, NULL, NULL, 0, '2019/2020', 0),
(13, '2023-03-01 14:27:24', NULL, '2023-03-01 14:27:24', NULL, NULL, NULL, 1, ' 2021/2023', 0);

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `is_teacher` tinyint(1) DEFAULT 0,
  `is_admin` tinyint(1) DEFAULT 0,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `username`, `password`, `is_teacher`, `is_admin`, `token`) VALUES
(2, '2023-02-14 04:31:18', 'Vira', NULL, NULL, NULL, NULL, 0, 'admin', '1ed76b66486946dad2875917620304fe37f3ae4a202e792fb0972ebcb22f7415', 0, 1, '12h21kkn2huygttyt76t76fytfyfyffhghfgvgvgg'),
(3, '2023-02-15 02:21:09', 'Vira', NULL, NULL, NULL, NULL, 0, '196709301995121002', '9914dc3297783ea7c7b34b404e89b55d905185641835c8417aec1069ef863f02', 1, 0, 'fsgah264281jhsbnamksjhygw7829jhgvgvgfcgcwhg'),
(4, '2023-02-15 02:22:06', 'Vira', NULL, NULL, NULL, NULL, 0, 'nabila', '76346c10e04d15c426435b828da6ac00d79705bb406a5ded4ea9ec260f1e899d', 0, 0, 'agey1728jnb23dfvghyesdsscfgvuhbjhgfjh8769ggfgvg');

-- --------------------------------------------------------

--
-- Table structure for table `choose_subject_list`
--

CREATE TABLE `choose_subject_list` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `id_class_students` int(11) NOT NULL,
  `id_subject_childs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `class_name` varchar(100) NOT NULL,
  `class` int(11) NOT NULL,
  `student_count` int(11) DEFAULT NULL,
  `id_teachers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `created_at`, `created_by`, `is_deleted`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `class_name`, `class`, `student_count`, `id_teachers`) VALUES
(13, '2023-02-20 12:11:04', NULL, 0, '2023-03-08 04:57:20', NULL, NULL, NULL, '1A', 1, 28, 14),
(14, '2023-02-20 12:17:09', NULL, 0, '2023-02-20 12:17:09', NULL, NULL, NULL, '1B', 1, 30, 15),
(15, '2023-02-22 04:40:55', NULL, 1, '2023-02-23 04:22:44', NULL, NULL, NULL, '2A', 2, 30, 14),
(16, '2023-02-23 04:20:50', NULL, 1, '2023-02-23 04:20:50', NULL, NULL, NULL, '2B', 2, 29, 17),
(17, '2023-02-27 11:53:50', NULL, 0, '2023-03-06 01:45:17', NULL, NULL, NULL, '2A', 2, 30, 16),
(18, '2023-02-27 11:54:13', NULL, 0, '2023-03-06 01:45:31', NULL, NULL, NULL, '2B', 2, 29, 22),
(19, '2023-03-01 00:40:06', NULL, 1, '2023-03-01 00:43:05', NULL, NULL, NULL, 'Aldrin', 7, 30, 14),
(20, '2023-03-01 00:44:11', NULL, 0, '2023-03-06 01:59:13', NULL, NULL, NULL, '4A', 4, 28, 28),
(21, '2023-03-01 00:45:25', NULL, 1, '2023-03-01 00:45:25', NULL, NULL, NULL, '6A', 2, 32, 15),
(22, '2023-03-02 01:01:13', NULL, 0, '2023-03-02 01:01:13', NULL, NULL, NULL, '3A', 3, 30, 25),
(23, '2023-03-02 01:26:25', NULL, 1, '2023-03-02 01:26:55', NULL, NULL, NULL, '6A', 6, 30, 16),
(24, '2023-03-06 01:44:54', NULL, 0, '2023-03-06 01:45:50', NULL, NULL, NULL, '3B', 3, 20, 23),
(25, '2023-03-06 01:59:33', NULL, 0, '2023-03-06 01:59:33', NULL, NULL, NULL, '4B', 4, 30, 29),
(26, '2023-03-06 02:00:32', NULL, 0, '2023-03-06 02:00:32', NULL, NULL, NULL, '5A', 5, 27, 30),
(27, '2023-03-06 02:00:53', NULL, 0, '2023-03-06 02:00:53', NULL, NULL, NULL, '5B', 5, 31, 31),
(28, '2023-03-06 02:01:16', NULL, 0, '2023-03-06 02:01:16', NULL, NULL, NULL, '6A', 6, 32, 32),
(29, '2023-03-06 02:03:19', NULL, 0, '2023-03-06 02:03:19', NULL, NULL, NULL, '6B', 6, 29, 33);

-- --------------------------------------------------------

--
-- Table structure for table `class_students`
--

CREATE TABLE `class_students` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `id_class` int(11) NOT NULL,
  `id_academic_year` int(11) NOT NULL,
  `id_students` int(11) NOT NULL,
  `number_order` int(11) NOT NULL,
  `number_of_sick` int(11) NOT NULL,
  `number_of_permit` int(11) NOT NULL,
  `number_of_absents` int(11) NOT NULL,
  `is_promoted` tinyint(1) DEFAULT 0,
  `notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_students`
--

INSERT INTO `class_students` (`id`, `created_at`, `created_by`, `is_deleted`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `id_class`, `id_academic_year`, `id_students`, `number_order`, `number_of_sick`, `number_of_permit`, `number_of_absents`, `is_promoted`, `notes`) VALUES
(26, '2023-02-27 04:42:23', NULL, 0, '2023-03-05 10:58:56', NULL, NULL, NULL, 14, 1, 9, 0, 0, 0, 20, 0, ''),
(27, '2023-02-28 14:19:55', NULL, 0, '2023-02-28 14:19:55', NULL, NULL, NULL, 13, 1, 5, 0, 27, 2, 50, 1, 'Kurangi ramai nya yaaa'),
(28, '2023-02-28 14:20:19', NULL, 0, '2023-02-28 14:20:19', NULL, NULL, NULL, 17, 1, 12, 0, 0, 0, 0, 0, ''),
(31, '2023-03-01 12:22:09', NULL, 0, '2023-03-07 01:51:23', NULL, NULL, NULL, 14, 1, 8, 0, 2, 2, 2, 0, ''),
(32, '2023-03-02 00:04:43', NULL, 0, '2023-03-05 07:36:36', NULL, NULL, NULL, 13, 1, 10, 0, 1, 2, 3, 0, 'Tingkatkan belajarnya yaa'),
(33, '2023-03-02 01:38:33', NULL, 0, '2023-03-05 07:48:47', NULL, NULL, NULL, 13, 1, 13, 0, 3, 4, 1, 0, 'Besok beli ciu yaaa');

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE `class_subject` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(100) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_class` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_subject`
--

INSERT INTO `class_subject` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `id_class`, `id_semester`) VALUES
(16, '2023-03-06 03:23:03', '', '2023-03-06 03:23:03', NULL, NULL, '', 0, 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `class_subject_detail`
--

CREATE TABLE `class_subject_detail` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_class_subject` int(11) DEFAULT NULL,
  `id_subject` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_subject_detail`
--

INSERT INTO `class_subject_detail` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `id_class_subject`, `id_subject`) VALUES
(45, '2023-03-06 03:23:04', NULL, '2023-03-06 03:23:04', NULL, NULL, NULL, 0, 16, 7),
(46, '2023-03-06 03:23:04', NULL, '2023-03-06 03:23:04', NULL, NULL, NULL, 0, 16, 8),
(47, '2023-03-06 03:23:04', NULL, '2023-03-06 03:23:04', NULL, NULL, NULL, 0, 16, 11);

-- --------------------------------------------------------

--
-- Table structure for table `extracurricular`
--

CREATE TABLE `extracurricular` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `extracurricular_name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extracurricular`
--

INSERT INTO `extracurricular` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `extracurricular_name`, `description`) VALUES
(1, '2023-02-15 02:51:10', NULL, '2023-03-08 05:09:54', NULL, NULL, NULL, 0, ' Tari', 'Dilakukan setiap hari rabu dan kamis\r\n'),
(2, '2023-02-17 15:14:29', NULL, '2023-02-23 04:26:00', NULL, NULL, NULL, 0, 'Taekwondo', 'Dilakukan setiap hari Sabtu pagi'),
(4, '2023-02-23 04:25:38', NULL, '2023-02-23 04:25:38', NULL, NULL, NULL, 0, 'Basket', 'Dilakukan setiap hari Kamis sepulang sekolah'),
(5, '2023-02-27 08:28:59', NULL, '2023-02-27 08:28:59', NULL, NULL, NULL, 0, 'Pramuka', 'Dilakukan setiap Sabtu'),
(6, '2023-03-01 01:31:34', NULL, '2023-03-01 10:27:26', NULL, NULL, NULL, 0, 'Futsal', 'Masuk setiap hari\r\n'),
(7, '2023-03-01 10:26:12', NULL, '2023-03-01 10:26:12', NULL, NULL, NULL, 0, 'Airsoft Gun', 'Dilakukan setiap hari minggu'),
(8, '2023-03-02 01:32:33', NULL, '2023-03-02 01:32:48', NULL, NULL, NULL, 0, 'Broadcasting', 'Dilakukan setiap hari minggu');

-- --------------------------------------------------------

--
-- Table structure for table `extracurricular_students`
--

CREATE TABLE `extracurricular_students` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_extracurricular` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extracurricular_students`
--

INSERT INTO `extracurricular_students` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `id_extracurricular`, `id_student`) VALUES
(8, '2023-03-01 15:35:00', '', '2023-03-01 15:35:00', NULL, NULL, NULL, 0, 2, 5),
(10, '2023-03-03 01:26:36', '', '2023-03-03 01:26:36', NULL, NULL, NULL, 0, 8, 10),
(11, '2023-03-08 01:21:07', '', '2023-03-08 01:21:07', NULL, NULL, NULL, 0, 8, 9),
(12, '2023-03-08 03:45:09', '', '2023-03-08 03:45:09', NULL, NULL, NULL, 0, 6, 13);

-- --------------------------------------------------------

--
-- Table structure for table `extracurricular_teacher`
--

CREATE TABLE `extracurricular_teacher` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `teacher_name` varchar(100) NOT NULL,
  `id_academic_year` int(11) NOT NULL,
  `id_extracurricular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extracurricular_teacher`
--

INSERT INTO `extracurricular_teacher` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `teacher_name`, `id_academic_year`, `id_extracurricular`) VALUES
(4, '2023-02-28 03:59:57', NULL, '2023-03-08 05:09:01', NULL, NULL, NULL, 0, 'Bayu Andika', 1, 6),
(5, '2023-02-28 04:13:50', NULL, '2023-02-28 06:25:46', NULL, NULL, NULL, 1, 'Dipa Nusantara Aidit', 1, 4),
(6, '2023-02-28 04:32:19', NULL, '2023-02-28 04:32:19', NULL, NULL, NULL, 1, 'Arif Budi', 1, 5),
(8, '2023-03-01 02:57:11', NULL, '2023-03-01 02:57:11', NULL, NULL, NULL, 1, 'Indah', 7, 5),
(9, '2023-03-01 13:10:57', NULL, '2023-03-01 13:10:57', NULL, NULL, NULL, 0, 'Eric', 1, 2),
(10, '2023-03-01 14:29:11', NULL, '2023-03-01 14:29:11', NULL, NULL, NULL, 1, 'Alfita Yunia', 11, 5),
(11, '2023-03-02 01:39:52', NULL, '2023-03-02 01:39:52', NULL, NULL, NULL, 1, 'Vira Alfita', 1, 7),
(12, '2023-03-08 04:59:08', NULL, '2023-03-08 04:59:08', NULL, NULL, NULL, 0, 'Rina', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `learning_outcomes`
--

CREATE TABLE `learning_outcomes` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(100) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `learning_outcome_code` varchar(10) DEFAULT NULL,
  `learning_outcome_description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learning_outcomes`
--

INSERT INTO `learning_outcomes` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `learning_outcome_code`, `learning_outcome_description`) VALUES
(3, '2023-02-19 13:24:46', '', '2023-02-23 09:02:51', '', NULL, '', 0, 'CP-0001', 'Peserta didik mampu bersikap menjadi pendengar yang penuh perhatian.'),
(4, '2023-02-23 06:05:44', '', '2023-02-23 06:05:44', '', NULL, '', 1, 'CP-0001', 'Peserta didik mampu membaca'),
(5, '2023-02-23 08:55:20', '', '2023-02-23 08:55:20', '', NULL, '', 1, '2', 'erere'),
(6, '2023-02-24 15:18:24', '', '2023-02-24 15:18:24', '', NULL, '', 1, 'CP-0002', 'Peserta didik mampu menjelaskan pengertian islam'),
(7, '2023-03-01 01:35:16', '', '2023-03-01 01:37:10', '', NULL, '', 1, '123456789', 'b aja'),
(8, '2023-03-01 01:40:05', '', '2023-03-01 01:40:05', '', NULL, '', 1, '123456', 'Tercapai'),
(9, '2023-03-01 10:29:27', '', '2023-03-01 10:30:18', '', NULL, '', 1, 'CP-0002', 'Peserta didik mampu menggunakan Bahasa Inggris sederhana untuk berinteraksi dalam situasi sosial dan kelas seperti berkenalan, memberikan informasi diri, mengucapkan salam dan selamat tinggal, serta m'),
(10, '2023-03-02 01:33:41', '', '2023-03-02 01:33:56', '', NULL, '', 1, 'CP-002', 'Peserta didik mampu menghafal rukun iman dan rukun islam');

-- --------------------------------------------------------

--
-- Table structure for table `learning_purposes`
--

CREATE TABLE `learning_purposes` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(100) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `learning_purpose_code` varchar(10) DEFAULT NULL,
  `learning_purpose_description` varchar(200) DEFAULT NULL,
  `id_learning_outcome` int(11) DEFAULT NULL,
  `id_semester` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learning_purposes`
--

INSERT INTO `learning_purposes` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `learning_purpose_code`, `learning_purpose_description`, `id_learning_outcome`, `id_semester`) VALUES
(1, '2023-02-19 14:09:40', '', '2023-02-24 16:11:09', '', NULL, '', 0, 'TP-002', 'Akhlak mulia dengan menggunakan bahasa Indonesia secara santun', 3, 2),
(5, '2023-02-24 15:45:16', '', '2023-02-24 15:45:16', '', NULL, '', 1, 'TP-003', 'Peserta didik sudah sangat baik', 3, 2),
(6, '2023-03-01 02:10:40', '', '2023-03-01 02:10:40', '', NULL, '', 0, '150', 'Menciptkan insan bermartabat', 3, 2),
(7, '2023-03-01 02:16:15', '', '2023-03-01 02:16:15', '', NULL, '', 1, '151', 'mencapai target siswa', 3, 2),
(8, '2023-03-01 10:32:16', '', '2023-03-01 10:32:16', '', NULL, '', 0, 'TP-0002', 'Peserta didik sangat baik mendengar', 3, 2),
(9, '2023-03-01 10:32:53', '', '2023-03-01 10:32:53', '', NULL, '', 0, 'TP-002', 'Peserta baik sangat perhatian', 3, 3),
(10, '2023-03-01 10:33:28', '', '2023-03-01 10:37:30', '', NULL, '', 1, 'eee', 'eee', 3, 3),
(11, '2023-03-01 10:33:47', '', '2023-03-01 10:33:47', '', NULL, '', 1, 'ssss', 'sss', 3, 2),
(12, '2023-03-02 01:34:41', '', '2023-03-02 01:35:11', '', NULL, '', 1, 'TP-0002', 'Siswa mampu menjadi pendengar yang baik', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `promoted_status`
--

CREATE TABLE `promoted_status` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_student` int(11) NOT NULL,
  `id_academic_year` int(11) NOT NULL,
  `is_promoted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raports`
--

CREATE TABLE `raports` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `id_score` int(11) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL,
  `id_score_extracurricular` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `school_name` varchar(100) DEFAULT NULL,
  `school_address` varchar(150) DEFAULT NULL,
  `school_city` varchar(50) DEFAULT NULL,
  `school_email` varchar(100) DEFAULT NULL,
  `school_phone` varchar(13) DEFAULT NULL,
  `school_faximile` varchar(100) DEFAULT NULL,
  `principal_name` varchar(100) DEFAULT NULL,
  `school_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `school_name`, `school_address`, `school_city`, `school_email`, `school_phone`, `school_faximile`, `principal_name`, `school_logo`) VALUES
(1, '2023-02-15 02:54:37', 'Vira', NULL, NULL, NULL, NULL, 0, 'SD NEGERI 1 POLOWIJEN', 'JL. Polowijen No 123, Jawa Timur', 'Kota Malang', 'sdnpolowijen1@gmail.com', '(0341)8983647', '816383648', 'Drs. Gunawan Dwiyono, S.ST., M.Pd', '');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `id_class_students` int(11) NOT NULL,
  `id_class_subjects` int(11) DEFAULT NULL,
  `id_subjects` int(11) NOT NULL,
  `learning_outcomes` varchar(800) NOT NULL,
  `learning_purpose` varchar(500) NOT NULL,
  `score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `created_at`, `created_by`, `is_deleted`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `id_class_students`, `id_class_subjects`, `id_subjects`, `learning_outcomes`, `learning_purpose`, `score`) VALUES
(17, '2023-03-07 01:48:12', NULL, 0, '2023-03-07 01:48:12', NULL, NULL, NULL, 27, NULL, 7, 'siswa mampu menghafal al-ikhlas', 'Siswa mampu menghafal surat-surat pendek', 85),
(31, '2023-03-07 05:00:00', NULL, 0, '2023-03-07 05:00:00', NULL, NULL, NULL, 27, NULL, 8, 'Peserta didik mengenal anggota tubuh manusia (pancaindra), menjelaskan fungsinya dan cara merawatnya dengan benar. Peserta didik dapat membedakan antara hewan dan tumbuhan sesuai dengan bentuk dan ciri-ciri umumnya.', 'Memahami perbedaan ciri-ciri antara laki-laki dan perempuan.', 90),
(32, '2023-03-07 05:01:29', NULL, 0, '2023-03-07 05:01:29', NULL, NULL, NULL, 27, NULL, 11, 'Peserta didik mampu mengenal aturan di lingkungan keluarga dan sekolah. Peserta didik mampu menceritakan contoh sikap mematuhi dan tidak mematuhi aturan di keluarga dan sekolah. Peserta didik mampu menunjukkan perilaku mematuhi aturan di keluarga dan sekolah.', 'Mengidentifikasi aturan yang ada di sekolah dan di rumah', 90),
(33, '2023-03-07 05:18:29', NULL, 0, '2023-03-07 05:18:29', NULL, NULL, NULL, 32, NULL, 8, 'Peserta didik mengenal anggota tubuh manusia (pancaindra), menjelaskan fungsinya dan cara merawatnya dengan benar. Peserta didik dapat membedakan antara hewan dan tumbuhan sesuai dengan bentuk dan ciri-ciri umumnya.', 'Memahami perbedaan ciri-ciri antara laki-laki dan perempuan.', 86),
(34, '2023-03-08 04:52:09', NULL, 0, '2023-03-08 04:56:39', NULL, NULL, NULL, 32, NULL, 11, 'Peserta didik mampu mengenal dan menceritakan simbol dan sila-sila Pancasila dalam lambang negara Garuda Pancasila. Peserta didik mampu mengidentifikasi dan menjelaskan hubungan antara simbol dan sila dalam lambang negara Garuda Pancasila. Peserta didik mampu menerapkan nilai-nilai Pancasila di lingkungan keluarga dan sekolah', 'Mengenali simbol-simbol Pancasila dan Lambang Negara', 77);

-- --------------------------------------------------------

--
-- Table structure for table `score_extracurricular`
--

CREATE TABLE `score_extracurricular` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(100) DEFAULT NULL,
  `id_class_students` int(11) DEFAULT NULL,
  `id_extracurricular_student` int(11) NOT NULL,
  `id_extracurricular` int(11) NOT NULL,
  `predicate` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score_extracurricular`
--

INSERT INTO `score_extracurricular` (`id`, `created_at`, `created_by`, `is_deleted`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `id_class_students`, `id_extracurricular_student`, `id_extracurricular`, `predicate`, `description`) VALUES
(6, '2023-03-07 12:06:12', NULL, 0, NULL, NULL, NULL, NULL, 27, 0, 2, 'A', 'Siswa sangat baik dalam melakukan ekskul'),
(8, '2023-03-08 01:40:17', NULL, 0, '2023-03-08 03:44:00', NULL, NULL, NULL, 26, 0, 8, 'A', 'Siswa sangat baik dalam melakukan public speaking'),
(9, '2023-03-08 03:45:57', NULL, 0, '2023-03-08 03:45:57', NULL, NULL, NULL, 33, 0, 6, 'A', 'Siswa sangat baik dalam melakukan gerakan passing bola'),
(10, '2023-03-08 04:44:41', NULL, 0, '2023-03-08 04:45:01', NULL, NULL, NULL, 32, 0, 8, 'B', 'Siswa baik dalam melakukan public speaking');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `semester` varchar(10) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `semester`, `is_active`) VALUES
(2, '2023-02-19 14:08:50', NULL, NULL, NULL, NULL, NULL, 0, 'Ganjil', 1),
(3, '2023-02-21 02:25:05', NULL, NULL, '', NULL, NULL, 0, 'Genap', 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester_notes`
--

CREATE TABLE `semester_notes` (
  `id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_student` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_account` int(11) DEFAULT NULL,
  `nis` int(50) DEFAULT NULL,
  `nisn` int(50) DEFAULT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT 0 COMMENT '0=Laki-Laki, 1=Perempuan',
  `address` varchar(200) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `father_job` varchar(100) DEFAULT NULL,
  `mother_job` varchar(100) DEFAULT NULL,
  `parent_address` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_job` varchar(100) DEFAULT NULL,
  `guardian_address` varchar(100) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `id_class` int(11) NOT NULL,
  `id_academic_year` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `id_account`, `nis`, `nisn`, `student_name`, `gender`, `address`, `birthdate`, `birthplace`, `religion`, `father_name`, `mother_name`, `father_job`, `mother_job`, `parent_address`, `guardian_name`, `guardian_job`, `guardian_address`, `class`, `id_class`, `id_academic_year`, `status`) VALUES
(2, '2023-02-17 13:31:39', NULL, '2023-03-01 01:08:15', NULL, NULL, NULL, 0, NULL, 44444, 123, 'Abil Ramadhan', 1, 'Jl. Halmahera', '2013-02-14', 'Malang', 'Islam', 'Joko', 'Yuni', 'Jualan Ciu', 'Ibu Rumah Tangga', 'Jl. Halmahera', '-', '-', '-', 1, 0, 0, 1),
(5, '2023-02-22 09:20:00', NULL, '2023-03-01 01:19:51', NULL, NULL, NULL, 0, 4, 123224, 3232, 'Nabila Lapu Lapu', 0, 'Jl. Tokyo', '2017-06-21', 'Jepang', 'Kristen', 'Wawan', 'Vira', 'Petrus', 'IRT', 'Jl. Tokyo', '-', '-', '-', 1, 0, 0, 1),
(8, '2023-02-22 09:33:39', NULL, '2023-03-06 02:04:18', NULL, NULL, NULL, 0, NULL, 222, 112111111, 'Alicia Christi', 0, 'Jl. Disana Bersamanya', '2013-02-14', 'Malang', 'Islam', 'Bayu', 'Atik', 'Guru', 'Ibu Rumah Tangga', 'Jl. Disana Bersamanya', '', '', '', 2, 0, 0, 1),
(9, '2023-02-27 04:17:14', NULL, '2023-02-27 04:17:14', NULL, NULL, NULL, 0, NULL, 21203, 932009984, 'Anggraeni Tyas', 0, 'Jl. Tanimbar 22', '2014-02-12', 'Surabaya', 'Islam', '-', '-', '-', '-', '-', 'Dicky', 'Pengangguran', 'Jl Tanimbar 22', 2, 0, 0, 1),
(10, '2023-02-28 03:44:50', NULL, '2023-02-28 03:44:50', NULL, NULL, NULL, 0, NULL, 46, 21274, 'Devina', 0, 'Jl. Surabaya', '2004-12-03', 'Malang', 'ISLAM', 'budi', 'eli', 'swasta', 'ibu rumah tangga', 'jl. surabaya', '--', '-', '-', 0, 0, 0, 1),
(11, '2023-02-28 03:49:33', NULL, '2023-02-28 03:49:33', NULL, NULL, NULL, 1, NULL, 4617, 21275, 'Nadila', 0, 'Jl. Gajayana', '2004-12-11', 'Malang', 'Islam', 'Bambang', 'Jubaedah', 'Swasta', 'Ibu Rumah Tangga', 'Jl. Gajayana', '-', '-', '-', 0, 0, 0, 1),
(12, '2023-02-28 04:17:42', NULL, '2023-02-28 04:17:42', NULL, NULL, NULL, 1, NULL, 4189, 21285, 'Rendra', 1, 'Jl. Jakarta Timur ', '2003-06-11', 'Malang', 'Islam', 'Antok', 'Sri', 'Buruh Pabrik', 'Ibu Rumah Tangga', 'Jl. Jakarta Timur', '-', '-', '-', 0, 0, 0, 1),
(13, '2023-03-01 10:04:06', NULL, '2023-03-01 10:04:06', NULL, NULL, NULL, 0, NULL, 324233423, 23323, 'Tegar Budi', 1, 'Jl. Gedog Wetan', '2023-05-09', 'Malang', 'Kristen', '-', '-', '-', '-', '-', 'Kim Jong Un', 'Bakulan Arak', 'Jl. Halmahera', 2, 0, 0, 1),
(15, '2023-03-02 00:58:09', NULL, '2023-03-02 00:58:09', NULL, NULL, NULL, 1, NULL, 21303, 576, 'Riska Nur Rohma', 0, 'Jl. Gatot Subroto ', '2004-12-07', 'Malang', 'Islam', 'Wagianto', 'Wiji', 'Swasta', 'Ibu Rumah Tangga ', 'Jl. Gatot Subroto ', '-', '-', '-', 1, 0, 0, 1),
(16, '2023-03-02 00:58:13', NULL, '2023-03-02 00:58:13', NULL, NULL, NULL, 1, NULL, 21303, 576, 'Riska Nur Rohma', 0, 'Jl. Gatot Subroto ', '2004-12-07', 'Malang', 'Islam', 'Wagianto', 'Wiji', 'Swasta', 'Ibu Rumah Tangga ', 'Jl. Gatot Subroto ', '-', '-', '-', 1, 0, 0, 1),
(17, '2023-03-02 00:58:35', NULL, '2023-03-02 00:58:35', NULL, NULL, NULL, 1, NULL, 21303, 576, '00576', 0, 'Jl. Gatot Subroto ', '2004-12-07', 'Malang', 'Islam', 'Wagianto', 'Wiji', 'Swasta', 'Ibu Rumah Tangga ', 'Jl. Gatot Subroto ', '-', '-', '-', 1, 0, 0, 1),
(18, '2023-03-02 00:59:04', NULL, '2023-03-02 00:59:04', NULL, NULL, NULL, 1, NULL, 21303, 576, '00576', 0, 'Jl. Gatot Subroto ', '2004-12-07', 'Malang', 'Islam', 'Wagianto', 'Wiji', 'Swasta', 'Ibu Rumah Tangga ', 'Jl. Gatot Subroto ', '-', '-', '-', 1, 0, 0, 1),
(19, '2023-03-02 01:01:58', NULL, '2023-03-02 01:01:58', NULL, NULL, NULL, 1, NULL, 21303, 576, 'Riska Nur Rohma ', 0, 'Jl. Gatot Subroto ', '2004-12-07', 'Malang', 'Islam', 'Wagianto', 'Wiji ', 'Swasta', 'Ibu Rumah Tangga', 'Jl. Gatot Subroto ', '-', '-', '-', 1, 0, 0, 1),
(20, '2023-03-02 01:30:23', NULL, '2023-03-02 01:30:54', NULL, NULL, NULL, 1, NULL, 22829, 281918, 'Vira Alfita', 0, 'Jl. Gadang', '2008-06-13', 'Malang', 'Kristen', 'Solikin', 'Yuni', 'Pedagang', 'Ibu Rumah Tangga', 'Jl. Gadang', '', '', '', 5, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `subject_name` varchar(50) DEFAULT NULL,
  `subject_code` varchar(10) DEFAULT NULL,
  `class` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `subject_name`, `subject_code`, `class`) VALUES
(2, '2023-02-19 12:21:37', NULL, '2023-03-06 02:05:22', NULL, NULL, NULL, 0, 'Ilmu Pengetahuan Alam dan Sosial', 'SDPL-001', 6),
(4, '2023-02-22 12:50:35', NULL, '2023-02-22 12:50:35', NULL, NULL, NULL, 1, 'Matematika', 'SDPL-002', 1),
(5, '2023-02-22 13:20:29', NULL, '2023-02-22 13:20:37', NULL, NULL, NULL, 1, 'Matematika', 'SDPL-0001', 2),
(6, '2023-02-23 04:26:41', NULL, '2023-03-02 00:27:41', NULL, NULL, NULL, 1, 'Bahasa Indonesia', 'SDPL-0001', 1),
(7, '2023-02-26 14:19:32', NULL, '2023-02-26 14:19:32', NULL, NULL, NULL, 0, 'Agama Islam', 'SDPL-0002', 1),
(8, '2023-02-27 11:54:56', NULL, '2023-02-27 11:54:56', NULL, NULL, NULL, 0, 'Ilmu Pengetahuan Alam dan Sosial', 'SDPL-0003', 1),
(9, '2023-03-01 01:24:00', NULL, '2023-03-01 01:24:39', NULL, NULL, NULL, 1, 'Biologi 2', '12345', 1),
(10, '2023-03-01 01:29:44', NULL, '2023-03-01 01:29:44', NULL, NULL, NULL, 1, 'WUSHUUUUU', '12345', 1),
(11, '2023-03-01 10:23:38', NULL, '2023-03-01 10:23:38', NULL, NULL, NULL, 0, 'Pendidikan Pancasila dan Kewarganegaraan', 'SDPL-0004', 1),
(12, '2023-03-02 00:27:15', NULL, '2023-03-02 00:27:15', NULL, NULL, NULL, 0, 'Bahasa Indonesia ', 'SDPL-0001', 3),
(13, '2023-03-02 00:28:12', NULL, '2023-03-02 00:28:12', NULL, NULL, NULL, 0, 'Bahasa Indonesia ', 'SDPL-0001', 2),
(14, '2023-03-02 00:28:49', NULL, '2023-03-02 00:28:49', NULL, NULL, NULL, 0, 'Bahasa Indonesia ', 'SDPL-0001', 5),
(15, '2023-03-02 00:29:22', NULL, '2023-03-02 00:29:22', NULL, NULL, NULL, 0, 'Bahasa Indonesia ', 'SDPL-0001', 4),
(16, '2023-03-02 00:31:15', NULL, '2023-03-02 00:31:15', NULL, NULL, NULL, 0, 'Bahasa Indonesia ', 'SDPL-0001', 6),
(17, '2023-03-02 00:32:31', NULL, '2023-03-02 00:32:31', NULL, NULL, NULL, 0, 'Agama Islam', 'SDPL-0002', 2),
(18, '2023-03-02 00:33:18', NULL, '2023-03-02 00:33:18', NULL, NULL, NULL, 0, 'Agama Islam', 'SDPL-0002', 3),
(19, '2023-03-02 00:35:54', NULL, '2023-03-02 00:35:54', NULL, NULL, NULL, 0, 'Agama Islam', 'SDPL-0002', 6),
(20, '2023-03-02 00:38:13', NULL, '2023-03-02 00:38:13', NULL, NULL, NULL, 0, 'Agama Islam ', 'SDPL-0002', 4),
(21, '2023-03-02 00:56:38', NULL, '2023-03-02 00:56:38', NULL, NULL, NULL, 0, 'Ilmu Pengetahuan Alam Dan Sosial', 'SDPL-0003', 2),
(22, '2023-03-02 00:57:37', NULL, '2023-03-02 00:57:37', NULL, NULL, NULL, 0, 'Ilmu Pengetahuan Alam Dan Sosial', 'SDPL-0003', 3),
(23, '2023-03-02 00:58:12', NULL, '2023-03-02 00:58:12', NULL, NULL, NULL, 0, 'Ilmu Pengetahuan Alam Dan Sosial', 'SDPL-0003', 4),
(24, '2023-03-02 00:59:10', NULL, '2023-03-02 00:59:10', NULL, NULL, NULL, 0, 'Ilmu Pengetahuan Alam Dan Sosial ', 'SDPL-0003', 5),
(25, '2023-03-02 00:59:33', NULL, '2023-03-02 00:59:33', NULL, NULL, NULL, 0, 'Ilmu Pengetahuan Alam Dan Sosial ', 'SDPL-0003', 6),
(26, '2023-03-02 01:31:35', NULL, '2023-03-02 01:31:58', NULL, NULL, NULL, 0, 'Matematika', 'GRF-002', 4);

-- --------------------------------------------------------

--
-- Table structure for table `subject_childs`
--

CREATE TABLE `subject_childs` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_subject` int(11) NOT NULL,
  `subject_child_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_childs`
--

INSERT INTO `subject_childs` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `id_subject`, `subject_child_name`) VALUES
(2, '2023-03-01 05:45:57', NULL, NULL, NULL, NULL, NULL, 0, 2, 'Seni Rupa');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_account` int(11) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `id_account`, `teacher_name`, `nip`, `address`, `gender`) VALUES
(14, '2023-02-20 07:00:27', NULL, '2023-02-22 16:39:05', NULL, NULL, NULL, 1, 0, 'Vira Alfita, S.Pd', '2929292', 'Jl. Surabaya', 0),
(15, '2023-02-20 10:56:50', NULL, '2023-02-20 17:56:50', NULL, NULL, NULL, 0, 0, 'Wawan, S.Pd', '2232387247', 'Jl. Comboran', 1),
(16, '2023-02-22 04:41:30', NULL, '2023-03-06 08:46:14', NULL, NULL, NULL, 0, 0, 'Joko Sutrisno, S.Pd', '222000', 'Jl Malang ', 1),
(17, '2023-02-23 04:20:28', NULL, '2023-02-23 11:20:28', NULL, NULL, NULL, 0, 0, 'Fikri Muhammad, S.Pd', '22222', 'Jl. Bumiayu', 1),
(18, '2023-03-01 00:48:39', NULL, '2023-03-01 07:48:39', NULL, NULL, NULL, 1, 0, 'Hikmah. SE', '212861561065', 'JL. Stasiun', 1),
(19, '2023-03-01 00:49:57', NULL, '2023-03-01 07:49:57', NULL, NULL, NULL, 1, 0, 'Eric.S.Pd', '212861561065', 'Jl.Stasiun', 1),
(20, '2023-03-01 00:52:53', NULL, '2023-03-01 07:52:53', NULL, NULL, NULL, 1, 0, 'Abol S.Pd', '563789087654', 'Jl. Balapan', 1),
(21, '2023-03-01 00:56:00', NULL, '2023-03-01 07:56:00', NULL, NULL, NULL, 1, 0, 'Eric. M.Pd', '1234567890', '1234567890', 1),
(22, '2023-03-01 09:57:48', NULL, '2023-03-01 16:57:48', NULL, NULL, NULL, 0, 0, 'Solikin Setiawan, S.Pd', '7373938284', 'Jl. Gadang Gg 7', 1),
(23, '2023-03-01 10:00:26', NULL, '2023-03-01 17:00:26', NULL, NULL, NULL, 0, 0, 'Faisal Adi Prayugo, S.Pd', '82929838', 'Jl. Comboran', 1),
(25, '2023-03-01 10:01:59', NULL, '2023-03-01 17:01:59', NULL, NULL, NULL, 0, 0, 'Dian Retno, S.Pd', '01002020', 'Jl. Tanimbar', 0),
(26, '2023-03-02 01:02:04', NULL, '2023-03-02 08:02:04', NULL, NULL, NULL, 1, 0, 'Reyhan S.Pd', '219372937', 'Jl.Comboran', 1),
(27, '2023-03-02 01:28:06', NULL, '2023-03-02 08:28:37', NULL, NULL, NULL, 1, 0, 'Rosalia Shelly, S.Pd', '199928272662', 'Jl. Jakarta', 0),
(28, '2023-03-06 01:47:40', NULL, '2023-03-06 08:47:50', NULL, NULL, NULL, 0, 0, 'Mifta Kemal, S.Pd', '23201922131', 'Jl. Bayam No.1', 0),
(29, '2023-03-06 01:52:50', NULL, '2023-03-06 08:59:48', NULL, NULL, NULL, 0, 0, 'Imam Hambali, S.Pd', '222983288', 'Jl. Balikpapan No.11', 1),
(30, '2023-03-06 01:55:00', NULL, '2023-03-06 08:59:57', NULL, NULL, NULL, 0, 0, 'Luxia Najwa, M.Pd', '872878', 'Jl. Bareng Gg.2 No.5', 0),
(31, '2023-03-06 01:55:53', NULL, '2023-03-06 08:55:53', NULL, NULL, NULL, 0, 0, 'Muhammad Abdul Aziz, S.Pd', '232432', 'Jl. P. Galang No.23', 1),
(32, '2023-03-06 01:58:13', NULL, '2023-03-06 08:58:13', NULL, NULL, NULL, 0, 0, 'Azam Zamzami, M.Pd', '8899768', 'Jl. Kalimantan No.9', 1),
(33, '2023-03-06 02:02:51', NULL, '2023-03-06 09:02:51', NULL, NULL, NULL, 1, 0, 'Kayla Khoirunnisa, S.Pd', '47738443', 'Jl. Wonogiri No.2', 0),
(34, '2023-03-08 05:40:00', NULL, '2023-03-08 12:40:00', NULL, NULL, NULL, 1, 0, 'Ardell Eka, S.Kom', '21313233', 'Jl. Comboran', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE `teacher_subject` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_teacher` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `id_academic_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `id_teacher`, `id_class`, `id_academic_year`) VALUES
(17, '2023-02-27 14:19:13', NULL, '2023-02-27 14:19:13', NULL, NULL, NULL, 1, 14, 13, 1),
(18, '2023-02-27 14:24:02', NULL, '2023-02-27 14:24:02', NULL, NULL, NULL, 1, 17, 17, 1),
(19, '2023-02-28 07:11:11', NULL, '2023-02-28 07:11:11', NULL, NULL, NULL, 1, 14, 13, 1),
(20, '2023-02-28 16:13:54', NULL, '2023-02-28 16:13:54', NULL, NULL, NULL, 1, 17, 14, 1),
(21, '2023-02-28 16:14:37', NULL, '2023-02-28 16:14:37', NULL, NULL, NULL, 1, 16, 13, 1),
(22, '2023-02-28 16:17:00', NULL, '2023-02-28 16:17:00', NULL, NULL, NULL, 1, 14, 13, 1),
(23, '2023-02-28 16:17:38', NULL, '2023-02-28 16:17:38', NULL, NULL, NULL, 1, 14, 13, 1),
(24, '2023-02-28 16:18:19', NULL, '2023-02-28 16:18:19', NULL, NULL, NULL, 1, 14, 13, 1),
(25, '2023-02-28 16:18:34', NULL, '2023-02-28 16:18:34', NULL, NULL, NULL, 1, 14, 13, 1),
(26, '2023-02-28 16:18:58', NULL, '2023-02-28 16:18:58', NULL, NULL, NULL, 1, 14, 13, 1),
(27, '2023-02-28 16:19:58', NULL, '2023-02-28 16:19:58', NULL, NULL, NULL, 1, 14, 17, 1),
(28, '2023-02-28 16:20:24', NULL, '2023-02-28 16:20:24', NULL, NULL, NULL, 1, 14, 17, 1),
(29, '2023-02-28 16:21:04', NULL, '2023-02-28 16:21:04', NULL, NULL, NULL, 1, 14, 17, 1),
(30, '2023-02-28 16:28:27', NULL, '2023-02-28 16:28:27', NULL, NULL, NULL, 1, 14, 17, 1),
(31, '2023-02-28 16:28:46', NULL, '2023-02-28 16:28:46', NULL, NULL, NULL, 1, 14, 17, 1),
(32, '2023-02-28 16:31:17', NULL, '2023-02-28 16:38:55', NULL, NULL, NULL, 1, 17, 18, 1),
(33, '2023-02-28 16:38:55', NULL, '2023-02-28 16:43:19', NULL, NULL, NULL, 1, 17, 18, 1),
(34, '2023-02-28 16:41:43', NULL, '2023-02-28 16:41:43', NULL, NULL, NULL, 1, 17, 18, 1),
(35, '2023-02-28 16:43:20', NULL, '2023-02-28 16:43:20', NULL, NULL, NULL, 1, 17, 18, 1),
(36, '2023-02-28 16:43:20', NULL, '2023-02-28 16:44:05', NULL, NULL, NULL, 1, 17, 18, 1),
(37, '2023-02-28 16:44:06', NULL, '2023-02-28 16:44:06', NULL, NULL, NULL, 1, 17, 18, 1),
(38, '2023-02-28 16:44:06', NULL, '2023-02-28 16:44:06', NULL, NULL, NULL, 1, 17, 18, 1),
(39, '2023-02-28 16:44:06', NULL, '2023-03-01 02:46:23', NULL, NULL, NULL, 0, 17, 20, 1),
(40, '2023-03-01 02:11:37', NULL, '2023-03-01 02:11:37', NULL, NULL, NULL, 0, 15, 13, 1),
(41, '2023-03-01 02:37:45', NULL, '2023-03-01 02:37:45', NULL, NULL, NULL, 1, 14, 14, 1),
(42, '2023-03-01 02:45:12', NULL, '2023-03-01 02:45:54', NULL, NULL, NULL, 1, 17, 13, 1),
(43, '2023-03-01 02:47:57', NULL, '2023-03-01 02:47:57', NULL, NULL, NULL, 1, 16, 17, 1),
(44, '2023-03-01 04:14:31', NULL, '2023-03-01 04:14:31', NULL, NULL, NULL, 1, 15, 14, 1),
(45, '2023-03-01 12:21:19', NULL, '2023-03-01 12:21:19', NULL, NULL, NULL, 1, 16, 17, 1),
(46, '2023-03-01 14:18:11', NULL, '2023-03-01 14:18:11', NULL, NULL, NULL, 1, 23, 18, 11),
(47, '2023-03-02 01:37:25', NULL, '2023-03-02 01:37:46', NULL, NULL, NULL, 1, 22, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject_detail`
--

CREATE TABLE `teacher_subject_detail` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `id_teacher_subject` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_subject_detail`
--

INSERT INTO `teacher_subject_detail` (`id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `id_teacher_subject`, `id_subject`) VALUES
(2, '2023-02-27 14:24:02', '', '2023-02-27 14:24:02', NULL, NULL, NULL, 1, 18, 6),
(3, '2023-02-27 14:24:02', '', '2023-02-27 14:24:02', NULL, NULL, NULL, 1, 18, 7),
(4, '2023-02-28 07:11:12', '', '2023-02-28 07:11:12', NULL, NULL, NULL, 0, 19, 6),
(5, '2023-02-28 07:11:12', '', '2023-02-28 07:11:12', NULL, NULL, NULL, 0, 19, 7),
(6, '2023-02-28 07:11:12', '', '2023-02-28 07:11:12', NULL, NULL, NULL, 0, 19, 8),
(7, '2023-02-28 16:18:19', '', '2023-02-28 16:18:19', NULL, NULL, NULL, 0, 24, 6),
(8, '2023-02-28 16:18:34', '', '2023-02-28 16:18:34', NULL, NULL, NULL, 0, 25, 6),
(9, '2023-02-28 16:18:58', '', '2023-02-28 16:18:58', NULL, NULL, NULL, 0, 26, 6),
(10, '2023-02-28 16:19:58', '', '2023-02-28 16:19:58', NULL, NULL, NULL, 0, 27, 7),
(11, '2023-02-28 16:20:24', '', '2023-02-28 16:20:24', NULL, NULL, NULL, 0, 28, 7),
(12, '2023-02-28 16:21:04', '', '2023-02-28 16:21:04', NULL, NULL, NULL, 0, 29, 7),
(13, '2023-02-28 16:21:05', '', '2023-02-28 16:21:05', NULL, NULL, NULL, 0, 29, 8),
(14, '2023-02-28 16:28:28', '', '2023-02-28 16:28:28', NULL, NULL, NULL, 0, 30, 6),
(15, '2023-02-28 16:28:28', '', '2023-02-28 16:28:28', NULL, NULL, NULL, 0, 30, 7),
(16, '2023-02-28 16:28:28', '', '2023-02-28 16:28:28', NULL, NULL, NULL, 0, 30, 8),
(17, '2023-02-28 16:28:46', '', '2023-02-28 16:28:46', NULL, NULL, NULL, 0, 31, 6),
(18, '2023-02-28 16:28:46', '', '2023-02-28 16:28:46', NULL, NULL, NULL, 0, 31, 7),
(19, '2023-02-28 16:31:18', '', '2023-02-28 16:31:18', NULL, NULL, NULL, 1, 32, 6),
(20, '2023-02-28 16:31:18', '', '2023-02-28 16:31:18', NULL, NULL, NULL, 1, 32, 7),
(21, '2023-02-28 16:57:59', '', '2023-02-28 16:57:59', NULL, NULL, NULL, 0, 39, 6),
(22, '2023-02-28 16:58:00', '', '2023-02-28 16:58:00', NULL, NULL, NULL, 0, 39, 7),
(23, '2023-02-28 16:58:00', '', '2023-02-28 16:58:00', NULL, NULL, NULL, 0, 39, 8),
(24, '2023-02-28 16:58:13', '', '2023-02-28 16:58:13', NULL, NULL, NULL, 0, 39, 6),
(25, '2023-02-28 16:58:13', '', '2023-02-28 16:58:13', NULL, NULL, NULL, 0, 39, 8),
(26, '2023-03-01 02:11:37', '', '2023-03-01 02:11:37', NULL, NULL, NULL, 0, 40, 6),
(27, '2023-03-01 02:11:37', '', '2023-03-01 02:11:37', NULL, NULL, NULL, 1, 40, 7),
(28, '2023-03-01 02:11:37', '', '2023-03-01 02:11:37', NULL, NULL, NULL, 1, 40, 8),
(29, '2023-03-01 02:37:46', '', '2023-03-01 02:37:46', NULL, NULL, NULL, 1, 41, 8),
(30, '2023-03-01 02:45:13', '', '2023-03-01 02:45:13', NULL, NULL, NULL, 1, 42, 8),
(31, '2023-03-01 02:45:54', '', '2023-03-01 02:45:54', NULL, NULL, NULL, 1, 42, 6),
(32, '2023-03-01 02:46:23', '', '2023-03-01 02:46:23', NULL, NULL, NULL, 1, 39, 6),
(33, '2023-03-01 02:46:24', '', '2023-03-01 02:46:24', NULL, NULL, NULL, 1, 39, 8),
(34, '2023-03-01 02:47:57', '', '2023-03-01 02:47:57', NULL, NULL, NULL, 1, 43, 8),
(35, '2023-03-01 04:14:31', '', '2023-03-01 04:14:31', NULL, NULL, NULL, 1, 44, 6),
(36, '2023-03-01 12:21:19', '', '2023-03-01 12:21:19', NULL, NULL, NULL, 1, 45, 6),
(37, '2023-03-01 12:21:19', '', '2023-03-01 12:21:19', NULL, NULL, NULL, 1, 45, 7),
(38, '2023-03-01 14:18:11', '', '2023-03-01 14:18:11', NULL, NULL, NULL, 1, 46, 6),
(39, '2023-03-01 14:18:11', '', '2023-03-01 14:18:11', NULL, NULL, NULL, 1, 46, 7),
(40, '2023-03-02 01:37:26', '', '2023-03-02 01:37:26', NULL, NULL, NULL, 1, 47, 17),
(41, '2023-03-02 01:37:26', '', '2023-03-02 01:37:26', NULL, NULL, NULL, 1, 47, 21),
(42, '2023-03-02 01:37:47', '', '2023-03-02 01:37:47', NULL, NULL, NULL, 1, 47, 16),
(43, '2023-03-02 01:37:47', '', '2023-03-02 01:37:47', NULL, NULL, NULL, 1, 47, 17),
(44, '2023-03-02 01:37:47', '', '2023-03-02 01:37:47', NULL, NULL, NULL, 1, 47, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_subject_list`
--
ALTER TABLE `choose_subject_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_class_students_fk` (`id_class_students`),
  ADD KEY `id_subject_childs_fk` (`id_subject_childs`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_teacher_fk` (`id_teachers`);

--
-- Indexes for table `class_students`
--
ALTER TABLE `class_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_students_fk` (`id_students`),
  ADD KEY `id_academic_year_fk` (`id_academic_year`),
  ADD KEY `id_class_fk` (`id_class`);

--
-- Indexes for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_class_fk2` (`id_class`),
  ADD KEY `id_semester_fk1` (`id_semester`);

--
-- Indexes for table `class_subject_detail`
--
ALTER TABLE `class_subject_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_class_subject_fk` (`id_class_subject`),
  ADD KEY `id_subject_foreignkey` (`id_subject`);

--
-- Indexes for table `extracurricular`
--
ALTER TABLE `extracurricular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extracurricular_students`
--
ALTER TABLE `extracurricular_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_extracurricular_fk2` (`id_extracurricular`),
  ADD KEY `id_students_fk1` (`id_student`);

--
-- Indexes for table `extracurricular_teacher`
--
ALTER TABLE `extracurricular_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_extracurricular_fk1` (`id_extracurricular`),
  ADD KEY `id_academic_year_fk4` (`id_academic_year`),
  ADD KEY `id_teacher_fkey` (`teacher_name`);

--
-- Indexes for table `learning_outcomes`
--
ALTER TABLE `learning_outcomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learning_purposes`
--
ALTER TABLE `learning_purposes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_learning_outcome_fk` (`id_learning_outcome`),
  ADD KEY `id_semester_fk2` (`id_semester`);

--
-- Indexes for table `promoted_status`
--
ALTER TABLE `promoted_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_student_foreignkey1` (`id_student`),
  ADD KEY `id_academic_year_foreignkey1` (`id_academic_year`);

--
-- Indexes for table `raports`
--
ALTER TABLE `raports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_score_fk` (`id_score`),
  ADD KEY `id_score_extrafk` (`id_score_extracurricular`),
  ADD KEY `id_studentfk` (`id_student`),
  ADD KEY `id_semester_fkey` (`id_semester`);

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_class_subject_fkey1` (`id_class_subjects`),
  ADD KEY `id_class_student_fkey1` (`id_class_students`);

--
-- Indexes for table `score_extracurricular`
--
ALTER TABLE `score_extracurricular`
  ADD PRIMARY KEY (`id`),
  ADD KEY `score_extracurricular_ibfk_1` (`id_class_students`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester_notes`
--
ALTER TABLE `semester_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_student_foreignkey` (`id_student`),
  ADD KEY `id_class_foreignkey` (`id_class`),
  ADD KEY `id_semester_foreignkey` (`id_semester`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_account_fk` (`id_account`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_childs`
--
ALTER TABLE `subject_childs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_childs_ibfk_1` (`id_subject`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_ibfk_1` (`id_account`);

--
-- Indexes for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_academic_year_fk1` (`id_academic_year`),
  ADD KEY `id_class_fk1` (`id_class`),
  ADD KEY `id_teacher_fk1` (`id_teacher`);

--
-- Indexes for table `teacher_subject_detail`
--
ALTER TABLE `teacher_subject_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_teacher_subject_fk` (`id_teacher_subject`),
  ADD KEY `id_subject_fkey` (`id_subject`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `choose_subject_list`
--
ALTER TABLE `choose_subject_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `class_students`
--
ALTER TABLE `class_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `class_subject`
--
ALTER TABLE `class_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `class_subject_detail`
--
ALTER TABLE `class_subject_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `extracurricular`
--
ALTER TABLE `extracurricular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `extracurricular_students`
--
ALTER TABLE `extracurricular_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `extracurricular_teacher`
--
ALTER TABLE `extracurricular_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `learning_outcomes`
--
ALTER TABLE `learning_outcomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `learning_purposes`
--
ALTER TABLE `learning_purposes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `promoted_status`
--
ALTER TABLE `promoted_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raports`
--
ALTER TABLE `raports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `score_extracurricular`
--
ALTER TABLE `score_extracurricular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester_notes`
--
ALTER TABLE `semester_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subject_childs`
--
ALTER TABLE `subject_childs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `teacher_subject_detail`
--
ALTER TABLE `teacher_subject_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choose_subject_list`
--
ALTER TABLE `choose_subject_list`
  ADD CONSTRAINT `id_class_students_fk` FOREIGN KEY (`id_class_students`) REFERENCES `class_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_subject_childs_fk` FOREIGN KEY (`id_subject_childs`) REFERENCES `subject_childs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `id_teacher_fk` FOREIGN KEY (`id_teachers`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_students`
--
ALTER TABLE `class_students`
  ADD CONSTRAINT `id_academic_year_fk` FOREIGN KEY (`id_academic_year`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_class_fk` FOREIGN KEY (`id_class`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_students_fk` FOREIGN KEY (`id_students`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD CONSTRAINT `id_class_fk2` FOREIGN KEY (`id_class`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_semester_fk1` FOREIGN KEY (`id_semester`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_subject_detail`
--
ALTER TABLE `class_subject_detail`
  ADD CONSTRAINT `id_class_subject_fk` FOREIGN KEY (`id_class_subject`) REFERENCES `class_subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_subject_foreignkey` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `extracurricular_students`
--
ALTER TABLE `extracurricular_students`
  ADD CONSTRAINT `id_extracurricular_fk2` FOREIGN KEY (`id_extracurricular`) REFERENCES `extracurricular` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_students_fk1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `extracurricular_teacher`
--
ALTER TABLE `extracurricular_teacher`
  ADD CONSTRAINT `id_academic_year_fk4` FOREIGN KEY (`id_academic_year`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_extracurricular_fk1` FOREIGN KEY (`id_extracurricular`) REFERENCES `extracurricular` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `learning_purposes`
--
ALTER TABLE `learning_purposes`
  ADD CONSTRAINT `id_learning_outcome_fk` FOREIGN KEY (`id_learning_outcome`) REFERENCES `learning_outcomes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_semester_fk2` FOREIGN KEY (`id_semester`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promoted_status`
--
ALTER TABLE `promoted_status`
  ADD CONSTRAINT `id_academic_year_foreignkey1` FOREIGN KEY (`id_academic_year`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_student_foreignkey1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `raports`
--
ALTER TABLE `raports`
  ADD CONSTRAINT `id_score_extrafk` FOREIGN KEY (`id_score_extracurricular`) REFERENCES `score_extracurricular` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_score_fk` FOREIGN KEY (`id_score`) REFERENCES `score` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_semester_fkey` FOREIGN KEY (`id_semester`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `id_studentfk` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `id_class_student_fkey1` FOREIGN KEY (`id_class_students`) REFERENCES `class_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_class_subject_fkey1` FOREIGN KEY (`id_class_subjects`) REFERENCES `class_subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `score_extracurricular`
--
ALTER TABLE `score_extracurricular`
  ADD CONSTRAINT `score_extracurricular_ibfk_1` FOREIGN KEY (`id_class_students`) REFERENCES `class_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester_notes`
--
ALTER TABLE `semester_notes`
  ADD CONSTRAINT `id_class_foreignkey` FOREIGN KEY (`id_class`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_semester_foreignkey` FOREIGN KEY (`id_semester`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_student_foreignkey` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `id_account_fk` FOREIGN KEY (`id_account`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_childs`
--
ALTER TABLE `subject_childs`
  ADD CONSTRAINT `subject_childs_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD CONSTRAINT `id_academic_year_fk1` FOREIGN KEY (`id_academic_year`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_class_fk1` FOREIGN KEY (`id_class`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_teacher_fk1` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_subject_detail`
--
ALTER TABLE `teacher_subject_detail`
  ADD CONSTRAINT `id_subject_fkey` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_teacher_subject_fk` FOREIGN KEY (`id_teacher_subject`) REFERENCES `teacher_subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
