-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 08:30 PM
-- Server version: 8.0.37-0ubuntu0.20.04.3
-- PHP Version: 7.0.33-75+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qr_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `part_master`
--

CREATE TABLE `part_master` (
  `part_id` int NOT NULL,
  `part_name` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_logo` varchar(255) NOT NULL,
  `customer_part_number` varchar(255) NOT NULL,
  `box_packing_qty` int NOT NULL,
  `vendor_initial` varchar(255) NOT NULL,
  `gcs_rev_date` date NOT NULL,
  `stroke_travel` varchar(255) NOT NULL,
  `eel_extended` varchar(255) NOT NULL,
  `eel_retracted` varchar(255) NOT NULL,
  `llc_extension` varchar(255) NOT NULL,
  `maximum_rated_load` varchar(255) NOT NULL,
  `added_by` int NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_by` int NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `product_id` int NOT NULL,
  `Product_code` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mrp_price` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `unit_val` double(10,2) NOT NULL,
  `product_description` longtext COLLATE utf8mb4_general_ci,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `offer_value` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qr_code` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci DEFAULT 'Active',
  `created_by` int DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `Product_code`, `product_name`, `mrp_price`, `unit`, `unit_val`, `product_description`, `image`, `offer_value`, `qr_code`, `status`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'WBE2229060', 'Gyau Foods', '2330', 'kg', 1.00, 'Food', NULL, '00', NULL, 'Active', 1, '2024-05-30 17:39:25', NULL, NULL),
(2, 'JUR7811297', 'Gyau Foods2', '2330', 'kg', 1.00, 'Food', 'bg_2.jpg', '00', NULL, 'Active', 1, '2024-06-28 09:15:52', NULL, NULL),
(3, 'IFX7026074', '5 Star', '250', 'Kg', 12.00, 'iub', '3d3c3b6674930cac6df67045e798a652.png', '485', NULL, 'Active', 1, '2024-06-29 12:52:19', NULL, NULL),
(7, 'QRL5881547', '5 Star 25', '250', 'Kg', 12.00, 'iub', '3d3c3b6674930cac6df67045e798a6526.png', '485', 'qr_code_8f14e45fceea167a5a36dedd4bea2543.png', 'Active', 1, '2024-06-29 13:02:06', NULL, NULL),
(15, 'IXR0601607', '5 Star 254', '250', 'Kg', 12.00, 'iub', '3d3c3b6674930cac6df67045e798a65216.png', '485', 'qr_code_9bf31c7ff062936a96d3c8bd1f8f2ff3.png', 'Active', 1, '2024-06-29 13:16:12', NULL, NULL),
(16, 'TBT6994721', '5 Star 2545', '250', 'Kg', 12.00, 'iub', '3d3c3b6674930cac6df67045e798a65217.png', '485', 'qr_code_c74d97b01eae257e44aa9d5bade97baf.png', 'Active', 1, '2024-06-29 13:18:16', NULL, NULL),
(17, 'BZR5110435', '5 Star 5691', '250', 'Kg', 123423.00, 'iubwerlihwelirhweoihrowehrowe', '3e144d63f67acf1ac1f9a208ef1ab291c32a6705912aa214237cd829e639e2ae.png', '4852342', 'qr_code_70efdf2ec9b086079795c442636b55fb.png', 'Active', 1, '2024-06-29 13:20:35', NULL, NULL),
(18, 'JYP9741298', '5 Star 56914', '250', 'Kg', 123423.00, 'iubwerlihwelirhweoihrowehrowe', '3e144d63f67acf1ac1f9a208ef1ab291c32a6705912aa214237cd829e639e2ae1.png', '4852342', 'qr_code_6f4922f45568161a8cdf4ad2299f6d23.png', 'Active', 1, '2024-06-29 13:22:26', NULL, NULL),
(19, 'OGD6681500', '5 Star 2545423', '250', 'Kg', 12.00, '2342342,3j4hk2j3bg4k23g4kj23k4v43k2v3jk23hv', '3d3c3b6674930cac6df67045e798a65218.png', '4852342', 'qr_code_1f0e3dad99908345f7439f8ffabdffc4.png', 'Active', 1, '2024-06-29 13:24:00', NULL, NULL),
(20, 'DNA1761414', '5 Star 2545234', '250', 'Kg', 123423.00, 'iubwerlihwelirhweoihrowehrowe2342342342', '3d3c3b6674930cac6df67045e798a65219.png', '4852342', 'qr_code_98f13708210194c475687be6106a3b84.png', 'Active', 1, '2024-06-29 13:25:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shift_master`
--

CREATE TABLE `shift_master` (
  `shift_id` int NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `shift_start_time` varchar(255) NOT NULL,
  `shift_end_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `type` enum('admin','job_striker_print_man','packing_slip_print_man') COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `name`, `email`, `password`, `type`, `created_by`, `created_on`, `updated_by`, `updated_on`, `status`) VALUES
(1, 'Gayatri', 'gayu@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'admin', 1, '2024-05-22 13:38:35', NULL, NULL, 'Active'),
(2, '', 'john@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'admin', 1, '2024-05-22 13:55:18', NULL, NULL, 'Active'),
(3, '', 'johny@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'admin', 1, '2024-05-22 13:59:09', NULL, NULL, 'Active'),
(4, '', 'johndev@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'admin', 1, '2024-05-22 14:10:59', NULL, NULL, 'Active'),
(5, '', 'admin@gmail.com', '12bce374e7be15142e8172f668da00d8', 'admin', 1, '2024-05-23 07:49:13', NULL, NULL, 'Active'),
(6, '', 'subadmin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'admin', 1, '2024-05-23 08:06:04', NULL, NULL, 'Active'),
(7, '', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'admin', 1, '2024-05-30 09:57:42', NULL, NULL, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `part_master`
--
ALTER TABLE `part_master`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shift_master`
--
ALTER TABLE `shift_master`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `part_master`
--
ALTER TABLE `part_master`
  MODIFY `part_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shift_master`
--
ALTER TABLE `shift_master`
  MODIFY `shift_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
