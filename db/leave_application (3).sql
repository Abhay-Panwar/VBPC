-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 01:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpt_id` int(11) NOT NULL,
  `dst_id` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delete3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `emp_id`, `first_name`, `last_name`, `dpt_id`, `dst_id`, `dob`, `image`, `email`, `mobile_no`, `password`, `created_at`, `updated_at`, `delete3`) VALUES
(2, 2, 'rahul', 'raghu', 2, 1, '2024-04-08', 'image/1712573705_img3.jpg', 'rahul@unicloudtech.com', '1234567890', '$2y$10$Db/GZAwWqLx0s/vjgAr3OeH/E0S/DTjgWYmCY4j1s48DsN3Iy75l6', NULL, '2024-04-16 02:58:10', 0),
(3, 3, 'Kanishka', 'Purohit', 2, 2, '2004-11-01', 'image/1712654759_img3.jpg', 'abhay2004panwar@gmail.com', '9079128741', '$2y$10$ixlk5plClzjpop5x5nfyRe50b31z.CMSNLoD0Z78GK8FR3Cb7Ea2e', NULL, '2024-04-16 02:47:37', 0),
(4, 5, 'Shivansh', 'Chohan', 1, 6, '2023-09-04', 'image/1712746058_Screenshot (5).png', 'tv2000and2@gmail.com', '3216549870', '$2y$10$rC0Ae9EbQfg50JzNREOIk.QEiQ1mVOIYceTK0DtDFWB7u7cTGy1..', '2024-04-10 05:17:38', '2024-04-10 05:17:38', 0),
(6, 7, 'Abhay', 'Panwar', 1, 5, '2024-02-21', 'image/1712999600_1712999326_1712857211_photo.jpg', 'abhay@unicloudtech.com', '8955387379', '$2y$10$A4D1ATXptHiqBt9hgwz/He05wI87yhq6hB9QXDjPOT5.VBqydlgFu', '2024-04-13 03:43:20', '2024-04-15 04:21:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dpt_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dpt_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Department of Information Technology', 1, NULL, '2024-03-28 03:38:47'),
(2, 'Department of Computer Science', 1, NULL, '2024-03-28 03:58:01'),
(3, 'Department of Electronic', 1, NULL, '2024-03-28 03:58:08'),
(4, 'Department of Electrical', 1, NULL, NULL),
(5, 'Department of Civil', 1, NULL, NULL),
(6, 'Department of Rubber & Polymor Science', 1, NULL, NULL),
(7, 'Administration', 1, '2024-04-01 03:01:07', '2024-04-01 03:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dst_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `dst_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Principal', 1, NULL, '2024-03-28 03:56:16'),
(2, 'HOD', 1, NULL, NULL),
(3, 'Faculty Member', 1, NULL, NULL),
(4, 'Clerk', 1, '2024-04-01 03:01:26', '2024-04-01 03:02:11'),
(5, 'Administrator', 1, '2024-04-01 03:01:44', '2024-04-01 03:02:16'),
(6, 'Vice President', 1, '2024-04-10 04:00:42', '2024-04-10 04:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpt_id` int(11) NOT NULL,
  `dst_id` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `addresses` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `leave_taken` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delete1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `dpt_id`, `dst_id`, `dob`, `mobile_no`, `image`, `gender`, `addresses`, `email`, `password`, `status`, `leave_taken`, `created_at`, `updated_at`, `delete1`) VALUES
(2, 'rahul', 'raghu', 2, 1, '2024-04-08', '1234567890', 'image/1712573705_img3.jpg', 1, 'UCT', 'rahul@unicloudtech.com', '$2y$10$L01Rd3LgW3M1lMTUUdsYqe.I1eWo715xGFjW.EtjBwLZ59JvsdFye', 0, 0, NULL, NULL, 0),
(3, 'Kanishka', 'Purohit', 2, 2, '2004-11-01', '9079128741', 'image/1712654759_img3.jpg', 2, 'Croco Code PVT. LTD.', 'abhay2004panwar@gmail.com', '$2y$10$DWu.QpkILo2HK0/o6dbkb.X1qhHBabbSzYT.jah3yEmS6NR930oV.', 0, 0, NULL, NULL, 0),
(4, 'Hitan', 'Singh', 1, 3, '2024-04-10', '7894561230', 'image/1712744602_Screenshot (2).png', 1, 'UCT', 'singh121hitan@gmail.com', '$2y$10$buxXTq3kk5STkHOUkpAKYOoAb/UwVUXkobHAka/5I7VF1Wmi8NP/u', 0, 0, NULL, NULL, 0),
(5, 'Shivansh', 'Chohan', 1, 6, '2023-09-04', '3216549870', 'image/1712746058_Screenshot (5).png', 1, 'Ajmer', 'tv2000and2@gmail.com', '$2y$10$E3WzjsONMbEc94TgRBYF4eEfRvXX/I02F/DFWbESVM2tSLsqVHvNC', 0, 0, NULL, NULL, 0),
(7, 'Abhay', 'Panwar', 1, 5, '2024-02-21', '8955387379', 'image/1712999600_1712999326_1712857211_photo.jpg', 1, 'VBPC', 'abhay@unicloudtech.com', '$2y$10$ueGZLtkBJWGsc3t5sj9hueFPmKCA/.YRYjmi7JJ/cmz6ok9OjEagC', 0, 3, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  `lt_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `how_long` int(11) NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval_pcp` int(11) DEFAULT NULL,
  `approval_hod` int(11) DEFAULT NULL,
  `approval_vc` int(11) DEFAULT NULL,
  `final_approval` int(11) DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delete1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `emp_id`, `lt_id`, `start_date`, `end_date`, `how_long`, `reason`, `location`, `approval_pcp`, `approval_hod`, `approval_vc`, `final_approval`, `comment`, `status`, `created_at`, `updated_at`, `delete1`) VALUES
(1, 7, '8', '2024-04-18', '2024-04-20', 3, 'ad', 'da', 0, 0, 0, 1, 'admins', 0, NULL, NULL, 0),
(2, 3, '4', '2024-04-18', '2024-04-18', 1, 'DASFD', 'DAA', 0, 0, 0, NULL, NULL, 0, NULL, NULL, 0),
(3, 3, '3', '2024-04-18', '2024-04-18', 1, 'ACAS', 'CASC', 0, 0, 0, 2, 'fdhgd', 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lt_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_leave_year` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `lt_name`, `total_leave_year`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Casual Leave', 2, 0, NULL, NULL),
(2, 'Vacaton Leave', 2, 0, NULL, NULL),
(3, 'Marternity/Parentinity Leave', 2, 0, NULL, NULL),
(4, 'Family/Medical Leave', 2, 0, NULL, NULL),
(5, 'Study Leave', 2, 0, NULL, NULL),
(6, 'Special Leave', 2, 0, NULL, NULL),
(7, 'Military Leave', 2, 0, NULL, NULL),
(8, 'Administrative Leave', 2, 0, NULL, NULL),
(9, 'Stick Leave', 2, 0, NULL, NULL),
(10, 'Other Leave', 2, 0, NULL, NULL);

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
(71, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(72, '2024_03_17_103613_create_employees_table', 1),
(73, '2024_03_17_103827_create_designations_table', 1),
(74, '2024_03_17_103852_create_leaves_table', 1),
(75, '2024_03_17_103918_create_departments_table', 1),
(76, '2024_03_17_104049_create_staff_table', 1),
(77, '2024_03_17_113613_create_leave_types_table', 1),
(78, '2024_03_30_062503_create_admins_table', 2),
(79, '2024_04_18_084327_create_notifications_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `path`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New Leave Request', 'http://vbpc.lc/updating-leaves-form/edit/1', 0, '2024-04-18 03:48:41', '2024-04-18 03:48:41'),
(2, 'New Leave Request', 'http://vbpc.lc/updating-leaves-form/edit/3', 0, '2024-04-18 04:55:28', '2024-04-18 04:55:28'),
(3, 'New Leave Request', 'http://vbpc.lc/updating-leaves-form/edit/3', 0, '2024-04-18 05:00:33', '2024-04-18 05:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpt_id` int(255) NOT NULL,
  `dst_id` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `duty` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delete2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `emp_id`, `first_name`, `last_name`, `dpt_id`, `dst_id`, `dob`, `mobile_no`, `image`, `gender`, `duty`, `status`, `created_at`, `updated_at`, `delete2`) VALUES
(2, 2, 'rahul', 'raghu', 2, 3, '2024-04-08', '1234567890', 'image/1712573705_img3.jpg', 1, 0, 0, NULL, NULL, 0),
(3, 3, 'Kanishka', 'Purohit', 2, 3, '2004-11-01', '9079128741', 'image/1712654759_img3.jpg', 2, 0, 0, NULL, NULL, 0),
(4, 4, 'Hitan', 'Singh', 1, 3, '2024-04-10', '7894561230', 'image/1712744602_Screenshot (2).png', 1, 0, 0, NULL, NULL, 0),
(5, 5, 'Shivansh', 'Chohan', 1, 6, '2023-09-04', '3216549870', 'image/1712746058_Screenshot (5).png', 1, 0, 0, NULL, NULL, 0),
(7, 7, 'Abhay', 'Panwar', 1, 5, '2024-02-21', '8955387379', 'image/1712999600_1712999326_1712857211_photo.jpg', 1, 0, 0, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
