-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 02:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_types`
--

CREATE TABLE `appointment_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `jd` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(100) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `pay_type` varchar(255) NOT NULL,
  `charge_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `entry_date` date NOT NULL,
  `enter_by` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `charge_types`
--

CREATE TABLE `charge_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `desciption` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `document_path` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `cnic` varchar(16) NOT NULL,
  `image` blob NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pay` decimal(8,2) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `ref_emp_id` int(11) NOT NULL,
  `emergency_contact` varchar(12) NOT NULL,
  `joining_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(100) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `pay_type` varchar(255) NOT NULL,
  `expense_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_types`
--

CREATE TABLE `expense_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `desciption` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `result_id` int(11) NOT NULL,
  `visit_id` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `order_by` varchar(100) NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `entry_date` date NOT NULL,
  `enter_by` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_types`
--

CREATE TABLE `lab_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `desciption` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `sig` varchar(100) NOT NULL,
  `quantity` decimal(8,2) NOT NULL,
  `no_of_days` varchar(255) NOT NULL,
  `visit_id` varchar(100) NOT NULL,
  `is_alergy` varchar(100) NOT NULL,
  `prescribe_by` varchar(255) NOT NULL,
  `entry_date` date NOT NULL,
  `enter_by` varchar(255) NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_05_07_203504_create_categories_table', 1),
(5, '2024_05_07_204306_create_customers_table', 1),
(6, '2024_05_07_205011_create_refund_types_table', 1),
(7, '2024_05_07_205115_create_expense_types_table', 1),
(8, '2024_05_07_205140_create_charge_types_table', 1),
(9, '2024_05_07_205159_create_lab_types_table', 1),
(10, '2024_05_07_205216_create_patient_types_table', 1),
(11, '2024_05_07_205232_create_provider_types_table', 1),
(12, '2024_05_07_205253_create_appointment_types_table', 1),
(13, '2024_05_07_205400_create_visit_ccs_table', 1),
(14, '2024_05_07_205446_create_providers_table', 1),
(15, '2024_05_07_210359_create_employees_table', 1),
(16, '2024_05_07_211243_create_expenses_table', 1),
(17, '2024_05_07_211508_create_refunds_table', 1),
(18, '2024_05_07_211632_create_charges_table', 1),
(19, '2024_05_07_212459_create_patients_table', 1),
(20, '2024_05_07_212575_create_medications_table', 1),
(21, '2024_05_07_212755_create_labs_table', 1),
(22, '2024_05_07_213659_create_wards_table', 1),
(23, '2024_05_07_213908_create_visits_table', 1),
(24, '2024_15_07_204307_create_users_table', 1),
(25, '2024_07_02_205812_create_documents_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `occupation` varchar(10) DEFAULT NULL,
  `cnic` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `portal_id` int(11) DEFAULT NULL,
  `vital_id` int(11) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(12) DEFAULT NULL,
  `due_amount` decimal(8,2) DEFAULT NULL,
  `advance_payment` decimal(8,2) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `ward_no` varchar(20) DEFAULT NULL,
  `bed_no` varchar(20) DEFAULT NULL,
  `attended_name` varchar(20) DEFAULT NULL,
  `attended_phone` varchar(20) DEFAULT NULL,
  `nok_name` varchar(20) DEFAULT NULL,
  `nok_no` varchar(20) DEFAULT NULL,
  `dob` date NOT NULL,
  `patient_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `provider_id` bigint(20) UNSIGNED DEFAULT NULL,
  `entry_date` date NOT NULL DEFAULT '2024-06-07',
  `patient_history` varchar(250) DEFAULT NULL,
  `enter_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_types`
--

CREATE TABLE `patient_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_types`
--

INSERT INTO `patient_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sdsdsdml', 'ldsmsld', '2024-06-07 14:36:47', '2024-06-07 14:36:47'),
(2, 'test', 'ldfdlf', '2024-06-07 14:37:03', '2024-06-07 14:37:03'),
(3, 'test', 'ldfdlf', '2024-06-07 14:37:05', '2024-06-07 14:37:05'),
(4, 'test', 'ldfdlf', '2024-06-07 14:37:06', '2024-06-07 14:37:06'),
(5, 'test', 'ldfdlf', '2024-06-07 14:37:06', '2024-06-07 14:37:06'),
(6, 'test', 'ldfdlf', '2024-06-07 14:37:06', '2024-06-07 14:37:06'),
(7, 'test', 'ldfdlf', '2024-06-07 14:37:06', '2024-06-07 14:37:06'),
(8, 'test', 'ldfdlf', '2024-06-07 14:37:07', '2024-06-07 14:37:07'),
(9, 'test', 'ldfdlf', '2024-06-07 14:37:07', '2024-06-07 14:37:07'),
(10, 'test', 'ldfdlf', '2024-06-07 14:37:07', '2024-06-07 14:37:07'),
(11, 'test', 'ldfdlf', '2024-06-07 14:37:07', '2024-06-07 14:37:07'),
(12, 'ffdf', 'lfmlfdm', '2024-06-08 12:03:07', '2024-06-08 12:03:07'),
(13, 'cxz,cm,', 'mdsf,msd,f', '2024-06-10 16:25:46', '2024-06-10 16:25:46'),
(14, 'ffdsfk', 'kddmfd', '2024-06-10 16:26:25', '2024-06-10 16:26:25'),
(15, 'ffdsfk', 'kddmfd', '2024-06-10 16:26:31', '2024-06-10 16:26:31'),
(16, 'dksfmdfsk', 'mdkfm', '2024-06-10 16:27:14', '2024-06-10 16:27:14'),
(17, 'dksfmdfsk', 'mdkfm', '2024-06-10 16:27:30', '2024-06-10 16:27:30'),
(18, 'sdam', 'fdkm', '2024-06-10 16:27:40', '2024-06-10 16:27:40'),
(19, 'mckxmc', 'KDFKMFDK', '2024-06-20 11:22:21', '2024-06-20 11:22:21'),
(20, 'mckxmc', 'KDFKMFDK', '2024-06-20 11:22:31', '2024-06-20 11:22:31'),
(21, 'fska', 'kfmakf', '2024-06-21 13:51:10', '2024-06-21 13:51:10'),
(22, 'xcxmzcl', 'ldmffldmf', '2024-06-21 13:51:52', '2024-06-21 13:51:52'),
(23, 'xcxmzcl', 'ldmffldmf', '2024-06-21 13:52:08', '2024-06-21 13:52:08'),
(24, 'smdk', 'kmdksd', '2024-06-21 13:54:01', '2024-06-21 13:54:01'),
(25, 'kfdkfm', 'kmdfkf', '2024-06-21 13:56:35', '2024-06-21 13:56:35'),
(26, 'csfmkqk', 'kfkfm', '2024-06-21 13:57:37', '2024-06-21 13:57:37'),
(27, 'csfmkqk', 'kfkfm', '2024-06-21 13:57:54', '2024-06-21 13:57:54'),
(28, 'fksdk', 'kmksmdks', '2024-07-23 15:16:54', '2024-07-23 15:16:54'),
(29, 'fkdfsfk', 'kfkdfmk', '2024-08-09 16:18:31', '2024-08-09 16:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `pmdc` varchar(20) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `available_days` date DEFAULT NULL,
  `available_time` time DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provider_types`
--

CREATE TABLE `provider_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provider_types`
--

INSERT INTO `provider_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'fafasfml', 'mlfmfl', '2024-06-08 12:14:58', '2024-06-08 12:14:58'),
(2, 'dfkfm', 'kfmdkfmdk', '2024-06-10 16:26:45', '2024-06-10 16:26:45'),
(3, 'njnjnj', 'njnj', '2024-06-22 15:06:16', '2024-06-22 15:06:16'),
(4, 'fdf', 'dfffd', '2024-07-02 17:05:21', '2024-07-02 17:05:21'),
(5, 'kfmdkfm', 'kfdmfk', '2024-08-02 16:26:33', '2024-08-02 16:26:33'),
(6, 'fdfsmk', 'kfdkfm', '2024-08-09 16:18:18', '2024-08-09 16:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE `refunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(100) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `pay_type` varchar(255) NOT NULL,
  `charge_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refund_types`
--

CREATE TABLE `refund_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `desciption` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `phone`, `gender`, `dob`, `customer_id`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'admin', 'test', 'admin@admin.com', '$2y$10$8IVnkwu/VqanN5gcFG/jBu1wO0.dR5xfboMIb6ILrpehPynW0UJLK', '09912434', 'male', '1994-10-02', NULL, NULL, NULL, '2024-06-07 14:18:36', '2024-06-07 14:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit_date` date NOT NULL,
  `cc_id` bigint(20) UNSIGNED DEFAULT NULL,
  `provider_id` bigint(20) UNSIGNED DEFAULT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_signedof` tinyint(4) NOT NULL DEFAULT 1,
  `is_paid` tinyint(4) NOT NULL DEFAULT 1,
  `visit_type` varchar(255) NOT NULL,
  `visit_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visit_ccs`
--

CREATE TABLE `visit_ccs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `desciption` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_types`
--
ALTER TABLE `appointment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `charges_charge_type_id_index` (`charge_type_id`);

--
-- Indexes for table `charge_types`
--
ALTER TABLE `charge_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_category_id_index` (`category_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_expense_id_index` (`expense_id`);

--
-- Indexes for table `expense_types`
--
ALTER TABLE `expense_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `labs_patient_id_index` (`patient_id`);

--
-- Indexes for table `lab_types`
--
ALTER TABLE `lab_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medications_patient_id_index` (`patient_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_email_unique` (`email`),
  ADD KEY `patients_patient_type_id_index` (`patient_type_id`),
  ADD KEY `patients_provider_id_index` (`provider_id`);

--
-- Indexes for table `patient_types`
--
ALTER TABLE `patient_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_types`
--
ALTER TABLE `provider_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refunds_charge_type_id_index` (`charge_type_id`);

--
-- Indexes for table `refund_types`
--
ALTER TABLE `refund_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_customer_id_index` (`customer_id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visits_cc_id_index` (`cc_id`),
  ADD KEY `visits_provider_id_index` (`provider_id`),
  ADD KEY `visits_patient_id_index` (`patient_id`);

--
-- Indexes for table `visit_ccs`
--
ALTER TABLE `visit_ccs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_types`
--
ALTER TABLE `appointment_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `charge_types`
--
ALTER TABLE `charge_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_types`
--
ALTER TABLE `expense_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_types`
--
ALTER TABLE `lab_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_types`
--
ALTER TABLE `patient_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `provider_types`
--
ALTER TABLE `provider_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refund_types`
--
ALTER TABLE `refund_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visit_ccs`
--
ALTER TABLE `visit_ccs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `charges`
--
ALTER TABLE `charges`
  ADD CONSTRAINT `charges_charge_type_id_foreign` FOREIGN KEY (`charge_type_id`) REFERENCES `charge_types` (`id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_expense_id_foreign` FOREIGN KEY (`expense_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `labs`
--
ALTER TABLE `labs`
  ADD CONSTRAINT `labs_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `medications`
--
ALTER TABLE `medications`
  ADD CONSTRAINT `medications_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_patient_type_id_foreign` FOREIGN KEY (`patient_type_id`) REFERENCES `patient_types` (`id`),
  ADD CONSTRAINT `patients_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`);

--
-- Constraints for table `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_charge_type_id_foreign` FOREIGN KEY (`charge_type_id`) REFERENCES `charge_types` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_cc_id_foreign` FOREIGN KEY (`cc_id`) REFERENCES `visit_ccs` (`id`),
  ADD CONSTRAINT `visits_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `visits_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
