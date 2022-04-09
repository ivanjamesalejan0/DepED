-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 04:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deped`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(97, '2014_10_12_000000_create_users_table', 1),
(108, '2014_10_12_100000_create_password_resets_table', 2),
(109, '2021_01_21_145426_create_admins_table', 2),
(110, '2021_01_25_130624_create_teacher_users_table', 2),
(111, '2021_01_25_134742_create_report_table', 2),
(112, '2021_01_25_143359_create_log_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipality` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barangay` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `teacher_id`, `status`, `data`, `province`, `municipality`, `barangay`, `created_at`, `updated_at`) VALUES
(1, 'Odysseus Noel', 2, 'pending', '{\"report-type\":\"small-scale\",\"report_name\":\"Odysseus Noel\",\"report_province\":\"Bukidnon\",\"report_municipality\":\"Malaybalay City\",\"report_barangay\":\"Barangay 2\",\"natural-hazards\":\"Others, please specify\",\"natural-hazard-specific-others\":null,\"human-indicated-hazards\":\"Fire(Electrical wiring failure, etc.)\",\"human-indicated-hazards-others\":\"Aut exercitationem e\",\"school-at-evalation-center\":\"Yes\",\"rooms-occupied\":\"37\",\"households-accommodated\":\"80\",\"suspention\":\"Yes\",\"class-declared\":\"27\",\"incident-happen\":\"Recusandae Dolor cu\",\"incident\":\"Esse eaque pariatur\",\"brief\":\"Nulla magni et quis\",\"person-involved\":\"Aliquid sed et digni\"}', 'Bukidnon', 'Malaybalay City', 'Barangay 2', '2022-03-18 05:31:38', '2022-03-18 05:31:38'),
(2, 'sadafafa', 2, 'pending', '{\"report-type\":\"large-scale\",\"report_name\":\"sadafafa\",\"report_province\":\"Bukidnon\",\"report_municipality\":\"Malaybalay City\",\"report_barangay\":\"Magsaysay\",\"Incident\":null,\"EBEIS\":\"123456789\",\"Incurred\":\"No\",\"totally-damaged\":\"2313\",\"major-damage\":\"21321\",\"minor-damage\":\"3123\",\"learning-spaces\":\"2313\",\"decreased-DepEd-teaching_\":\"3123\",\"injured-DepEd-teaching\":\"3123\",\"displaced-DepEd-teaching\":\"3123\",\"evacuees\":\"No\",\"damaged-school\":\"1231\",\"academic-classroom\":\"3123\",\"academic-classrooms\":\"12313\"}', 'Bukidnon', 'Malaybalay City', 'Magsaysay', '2022-03-18 10:37:51', '2022-03-18 10:37:51'),
(3, 'Bethany Owens', 2, 'pending', '{\"report-type\":\"armed-conflict\",\"report_name\":\"Bethany Owens\",\"report_province\":\"Bukidnon\",\"report_municipality\":\"Malaybalay City\",\"report_barangay\":\"Simaya\",\"School_name\":\"Christine Jensen\",\"School_id\":\"35\",\"Division\":\"84\",\"District\":\"48\",\"Narrative\":\"Iste impedit ut quo\",\"kinder_male\":\"76\",\"kinder_female\":\"71\",\"kinder_Learners_with_Disabilities\":\"30\",\"Grade1_male\":\"11\",\"Grade1_female\":\"47\",\"Grade1_Learners_with_Disabilities\":\"A consectetur non se\",\"Grade2_male\":\"72\",\"Grade2_female\":\"75\",\"Grade2_Learners_with_Disabilities\":\"Officia dolore nulla\",\"Grade3_male\":\"45\",\"Grade3_female\":\"68\",\"Grade3_Learners_with_Disabilities\":\"2\",\"Grade4_male\":\"84\",\"Grade4_female\":\"100\",\"Grade4_Learners_with_Disabilities\":\"9\",\"Grade5_male\":\"41\",\"Grade5_female\":\"71\",\"Grade5_total\":\"5\",\"Grade5_Learners_with_Disabilities\":\"77\",\"Grade6_male\":\"59\",\"Grade6_female\":\"16\",\"Grade6_total\":\"44\",\"Grade6_Learners_with_Disabilities\":\"28\",\"Grade7_male\":\"80\",\"Grade7_female\":\"39\",\"Grade7_total\":\"85\",\"Grade7_Learners_with_Disabilities\":\"22\",\"Grade8_male\":\"22\",\"Grade8_female\":\"28\",\"Grade8_total\":null,\"Grade8_Learners_with_Disabilities\":\"Consequuntur quidem\",\"Grade9_male\":\"23\",\"Grade9_female\":\"74\",\"Grade9_total\":null,\"Grade9_Learners_with_Disabilities\":\"Quam iste cum ut lau\",\"Grade10_male\":\"60\",\"Grade10_female\":\"22\",\"Grade10_total\":null,\"Grade10_Learners_with_Disabilities\":\"Ut laboris ad in ut\",\"Grade11_male\":\"22\",\"Grade11_female\":\"64\",\"Grade11_total\":null,\"Grade11_Learners_with_Disabilities\":\"Labore et irure nobi\",\"Grade12_male\":\"41\",\"Grade12_female\":\"32\",\"Grade12_total\":null,\"Grade12_Learners_with_Disabilities\":\"Quis cumque sit qua\",\"Teaching_male\":\"69\",\"Teaching_female\":\"66\",\"Non-Teaching_male\":\"81\",\"Non-Teaching_female\":\"23\",\"Total_No_male\":\"43\",\"Total_No_female\":\"75\",\"Type_ofBuilding\":\"Aspernatur labore eu\",\"No__of_School_Building\":\"35\",\"No__of_Instructional_Classrooms\":\"70\",\"No__of_non-instructional_Classrooms\":\"77\",\"Extend_of__Damage\":\"40\",\"Grade_Level\":\"9\",\"Title_of_Learning_Material\":\"Non in incidunt dic\",\"Total_Learning_Materials_\":\"79\",\"Arm_Chairs\":\"25\",\"Desks\":\"14\",\"Teachers_Tables\":\"58\",\"Chairs\\/_Desks\":\"88\",\"Cabinets\\/Dividers\":\"83\",\"Hamleting\":\"Yes\",\"Food_Blockaden\":\"No\",\"International_delayed\":\"No\",\"Rape_and_Grave_Sexual\":\"No\",\"False_reporting\":\"Yes\",\"False_branding\":\"Yes\",\"Arrest_arbitary_detendion\":\"No\",\"classes_suspended\":\"1980-11-09\",\"classes_resume\":\"1973-01-11\",\"USED_A_EVACUATION\":\"71\",\"housed_within_the_school\":\"Individuals\",\"Memorandum_of_Agreement\":\"Yes\",\"Identified_alternative_\":\"Yes\",\"Implemented_measures\":\"No\",\"timeline_for_the_relocation\":\"Yes\",\"Facilated_general_cleaning\":\"No\",\"School_Affected\":\"Et maiores dignissim\",\"Division_Affected\":\"Non sunt voluptate a\",\"Region_Affected\":\"Ut tenetur vel quo v\",\"EXTERNAL_PARTNERS\":\"Voluptas amet aut n\",\"OTHER_CONCERNS\":\"Id dolorum enim cons\"}', 'Bukidnon', 'Malaybalay City', 'Simaya', '2022-03-18 10:41:35', '2022-03-18 10:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schools`
--

CREATE TABLE `tbl_schools` (
  `id` int(8) NOT NULL,
  `school_id` varchar(8) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `stats` varchar(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_schools`
--

INSERT INTO `tbl_schools` (`id`, `school_id`, `school_name`, `stats`, `date_added`) VALUES
(1, '126557', 'Aglayan Central School', '1', '0000-00-00 00:00:00'),
(2, '126574', 'Airport Village ES', '1', '0000-00-00 00:00:00'),
(3, '325505', 'Apo Macote NHS', '1', '0000-00-00 00:00:00'),
(4, '126575', 'Baganao ES', '1', '0000-00-00 00:00:00'),
(5, '126534', 'Bagong Silang ES', '1', '0000-00-00 00:00:00'),
(6, '126535', 'Balangbang ES', '1', '0000-00-00 00:00:00'),
(7, '126558', 'Bangcud CES', '1', '0000-00-00 00:00:00'),
(8, '303946', 'Bangcud National High School', '1', '0000-00-00 00:00:00'),
(9, '199510', 'Barangay 9 ES', '1', '0000-00-00 00:00:00'),
(10, '126576', 'BCT ES', '1', '0000-00-00 00:00:00'),
(11, '126559', 'Bendolan ES', '1', '0000-00-00 00:00:00'),
(12, '126560', 'Binalbagan ES', '1', '0000-00-00 00:00:00'),
(13, '303950', 'Bukidnon NHS', '1', '0000-00-00 00:00:00'),
(14, '325504', 'Dalwangan National High School', '1', '0000-00-00 00:00:00'),
(15, '325503', 'Imbayao National High School', '1', '0000-00-00 00:00:00'),
(16, '500409', 'Busdi IS', '1', '0000-00-00 00:00:00'),
(17, '126561', 'Cabangahan ES', '1', '0000-00-00 00:00:00'),
(18, '126537', 'Caburacanan ES', '1', '0000-00-00 00:00:00'),
(19, '126562', 'Calawag ES', '1', '0000-00-00 00:00:00'),
(20, '500245', 'Can-ayan IS', '1', '0000-00-00 00:00:00'),
(21, '501195', 'Candiisan Integrated School', '1', '0000-00-00 00:00:00'),
(22, '501189', 'Capitan Angel Integrated School', '1', '0000-00-00 00:00:00'),
(23, '126579', 'Casisang CS', '1', '0000-00-00 00:00:00'),
(24, '314914', 'Casisang NHS', '1', '0000-00-00 00:00:00'),
(25, '126580', 'Dalwangan ES', '1', '0000-00-00 00:00:00'),
(26, '103610', 'Damitan Elementary School', '1', '0000-00-00 00:00:00'),
(27, '126563', 'Dapulan ES', '1', '0000-00-00 00:00:00'),
(28, '126539', 'Dumayas ES', '1', '0000-00-00 00:00:00'),
(29, '126581', 'Imbayao ES', '1', '0000-00-00 00:00:00'),
(30, '103677', 'Incalbog ES', '1', '0000-00-00 00:00:00'),
(31, '126540', 'Indalasa ES', '1', '0000-00-00 00:00:00'),
(32, '126582', 'Kalasungay Central School', '1', '0000-00-00 00:00:00'),
(33, '314915', 'Kalasungay NHS', '1', '0000-00-00 00:00:00'),
(34, '199518', 'Kibalabag ES', '1', '0000-00-00 00:00:00'),
(35, '501188', 'Kibalabag integrated school', '1', '0000-00-00 00:00:00'),
(36, '126585', 'Kilap-agan ES', '1', '0000-00-00 00:00:00'),
(37, '126541', 'Kulaman ES', '1', '0000-00-00 00:00:00'),
(38, '126564', 'Laguitas ES', '1', '0000-00-00 00:00:00'),
(39, '126542', 'Lalawan ES', '1', '0000-00-00 00:00:00'),
(40, '126543', 'Langasihan ES', '1', '0000-00-00 00:00:00'),
(41, '126544', 'Linabo CS', '1', '0000-00-00 00:00:00'),
(42, '126545', 'Lunokan ES', '1', '0000-00-00 00:00:00'),
(43, '300507', 'Luyungan High School', '1', '0000-00-00 00:00:00'),
(44, '126565', 'Mabuhay ES', '1', '0000-00-00 00:00:00'),
(45, '126566', 'Macote Elementary School', '1', '0000-00-00 00:00:00'),
(46, '501190', 'Magsaysay Integrated School', '1', '0000-00-00 00:00:00'),
(47, '126568', 'Malapgap ES', '1', '0000-00-00 00:00:00'),
(48, '126586', 'Malaybalay City Central School', '1', '0000-00-00 00:00:00'),
(49, '314904', 'Malaybalay City National Science HS', '1', '0000-00-00 00:00:00'),
(50, '314916', 'Malaybalay City NHS', '1', '0000-00-00 00:00:00'),
(51, '126546', 'Maligaya ES', '1', '0000-00-00 00:00:00'),
(52, '126547', 'Managok CS', '1', '0000-00-00 00:00:00'),
(53, '303973', 'Managok NHS', '1', '0000-00-00 00:00:00'),
(54, '325501', 'Managok NHS - Annex Lalawan', '1', '0000-00-00 00:00:00'),
(55, '314920', 'Managok NHS - Miglamin Annex', '1', '0000-00-00 00:00:00'),
(56, '126587', 'Manalog ES', '1', '0000-00-00 00:00:00'),
(57, '126569', 'Mapayag ES', '1', '0000-00-00 00:00:00'),
(58, '126548', 'Mapulo Elementary School', '1', '0000-00-00 00:00:00'),
(59, '126549', 'Matangpatang ES', '1', '0000-00-00 00:00:00'),
(60, '126550', 'Miglamin ES', '1', '0000-00-00 00:00:00'),
(61, '126588', 'Natid-asan ES', '1', '0000-00-00 00:00:00'),
(62, '126589', 'New Ilocos ES', '1', '0000-00-00 00:00:00'),
(63, '126570', 'Padernal ES', '1', '0000-00-00 00:00:00'),
(64, '199511', 'Paiwaig ES', '1', '0000-00-00 00:00:00'),
(65, '126551', 'Panamucan ES', '1', '0000-00-00 00:00:00'),
(66, '126590', 'Patpat ES', '1', '0000-00-00 00:00:00'),
(67, '103629', 'Pighalugan ES', '1', '0000-00-00 00:00:00'),
(68, '103647', 'Pigpamulahan ES', '1', '0000-00-00 00:00:00'),
(69, '126591', 'San Jose ES', '1', '0000-00-00 00:00:00'),
(70, '303982', 'San Martin Agro-Industrial NHS', '1', '0000-00-00 00:00:00'),
(71, '126571', 'San Martin ES', '1', '0000-00-00 00:00:00'),
(72, '126572', 'San Roque ES', '1', '0000-00-00 00:00:00'),
(73, '126552', 'Sawaga ES', '1', '0000-00-00 00:00:00'),
(74, '341061', 'Casisang SHS', '1', '0000-00-00 00:00:00'),
(75, '126553', 'Silae ES', '1', '0000-00-00 00:00:00'),
(76, '303984', 'Silae NHS', '1', '0000-00-00 00:00:00'),
(77, '126573', 'Simaya ES', '1', '0000-00-00 00:00:00'),
(78, '126554', 'St. Peter ES', '1', '0000-00-00 00:00:00'),
(79, '314905', 'ST. PETER NATIONAL HIGH SCHOOL', '1', '0000-00-00 00:00:00'),
(80, '126592', 'Sta. Ana Elementary School', '1', '0000-00-00 00:00:00'),
(81, '126593', 'Sumpong Central School', '1', '0000-00-00 00:00:00'),
(82, '126594', 'Tag-ilanao ES', '1', '0000-00-00 00:00:00'),
(83, '126595', 'Tintinaan ES', '1', '0000-00-00 00:00:00'),
(84, '259006', 'Tuburan Elementary School', '1', '0000-00-00 00:00:00'),
(85, '126556', 'Zamboanguita CS', '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `firstname`, `middlename`, `lastname`, `image`, `role`, `status`, `gender`, `school`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 54, 'Kimberley', 'Maite Schultz', 'Patton', NULL, 'principal', 'single', 'female', '63', '2022-03-18 05:29:35', '2022-03-18 05:29:35', NULL),
(2, 55, 'Craig', 'Grant Mcfarland', 'Buchanan', NULL, 'teacher', 'single', 'male', '71', '2022-03-18 05:30:43', '2022-03-18 05:30:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'gudy@mailinator.com', '$2y$10$EP0Mo3OErtZp8cbwHY7VieWqebNCiHs8aLqEOrIz.eD9dFBisomF.', 'admin', 1, 'FEYbGeboh26xCAoBEle40Rzpv1nVW0DXxwoV8y5qcqVoXDm7l8MUgbinWHhG', '2022-01-16 22:15:08', '2022-01-17 00:48:10'),
(51, 'krishya bag-ao', 'bagao@gmail.com', '$2y$10$Cy8FFL93qRwsdSc3SUcoE.39Wsfs0XCa/LJd/es4AN0UxbhT1.HrG', 'principal', 1, 'P9PwT9MToyI46llA3zh7OSptPItWiAfXQPZx48ZvEWYBvPsn0OHERhcuMRD9', '2022-03-03 21:14:46', '2022-03-03 21:16:00'),
(52, 'jojo marinay', 'jojo@gmail.com', '$2y$10$1xFkaiP0PV9vZShZrKSwnOJX5QgQZY00I7fP5dIJN4vz6qJMGtcl2', 'teacher', 1, 'Jgp2In5UaA5UzWDJrVEyJYTiSHXWe4Z3feLOgCFQZ5kcMqxJJOGgt5UCP4Aj', '2022-03-03 21:20:43', '2022-03-03 21:22:08'),
(53, 'ivanjamesalejan', 'ivanjamesalejan4@gmail.com', '$2y$10$Y7iVw87Vp85aEazUYY9bTOdN/2lZkD/vp9UmUfPfTpyJ1JrYrz7QO', 'principal', 1, 'cbovSSgJwwEk76zYkfkenRoUkP3VqprcEtJSCjyWCoZpWfiOGEKXvKJUDpuo', '2022-03-06 16:28:57', '2022-03-06 16:29:13'),
(54, 'Dolan Flores', 'deqijy@mailinator.com', '$2y$10$FI7qXO0qrdH9v7V/CbIZ2eLpSxl7ppUrp0wufjJPGESlp1oQhLQpG', 'principal', 0, '0VhFtwmjrgS5OvFu68u8mnTa2rnd1I8BfB5Rix5sTMa9xNwcUnz3yM2CzUPB', '2022-03-18 05:29:35', '2022-03-18 05:31:09'),
(55, 'Garth Griffith', 'dovukuguqy@mailinator.com', '$2y$10$HnL10/1oktjOF1LI2.zYEe9L91.cyinBAMYyWGYCCljF8X/uXoZTe', 'teacher', 1, 'dLx8qbfUBuz1IhWfF3UB3IZBRfChD2dEzu7rB7Yc3rL5PuO8gVO3NyIYb9K6', '2022-03-18 05:30:43', '2022-03-18 05:31:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `tbl_schools`
--
ALTER TABLE `tbl_schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_schools`
--
ALTER TABLE `tbl_schools`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
