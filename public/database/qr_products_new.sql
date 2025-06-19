-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 05:54 PM
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
-- Table structure for table `job_striker`
--

CREATE TABLE `job_striker` (
  `job_striker_id` int NOT NULL,
  `part_id` int NOT NULL,
  `part_serial_number` varchar(255) NOT NULL,
  `striker_data` text NOT NULL,
  `striker_pdf_url` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL,
  `added_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job_striker`
--

INSERT INTO `job_striker` (`job_striker_id`, `part_id`, `part_serial_number`, `striker_data`, `striker_pdf_url`, `added_date`, `added_by`) VALUES
(1, 1, '2024/06/30/1', '{\"part_id\":\"1\",\"part_name\":\"Rotation Limiting Damper Assembly (NYT PVD 44\\/52) DS-350002\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\\r\\n\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/1\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_1.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_1.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_1.pdf', '2024-06-30 15:21:46', 1),
(2, 1, '2024/06/30/2', '{\"part_id\":\"1\",\"part_name\":\"Rotation Limiting Damper Assembly (NYT PVD 44\\/52) DS-350002\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\\r\\n\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/2\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_2.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_2.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_2.pdf', '2024-06-30 15:21:47', 1),
(3, 1, '2024/06/30/3', '{\"part_id\":\"1\",\"part_name\":\"Rotation Limiting Damper Assembly (NYT PVD 44\\/52) DS-350002\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\\r\\n\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/3\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_3.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_3.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_3.pdf', '2024-06-30 15:21:47', 1),
(4, 1, '2024/06/30/4', '{\"part_id\":\"1\",\"part_name\":\"Rotation Limiting Damper Assembly (NYT PVD 44\\/52) DS-350002\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\\r\\n\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/4\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_4.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_4.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_4.pdf', '2024-06-30 15:21:47', 1),
(5, 2, '2024/06/30/5', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/5\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_5.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_5.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_5.pdf', '2024-06-30 16:28:34', 1),
(6, 2, '2024/06/30/6', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/6\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_6.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_6.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_6.pdf', '2024-06-30 16:31:20', 1),
(7, 1, '2024/06/30/7', '{\"part_id\":\"1\",\"part_name\":\"Rotation Limiting Damper Assembly (NYT PVD 44\\/52) DS-350002\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\\r\\n\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/7\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_7.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_7.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_7.pdf', '2024-06-30 16:34:14', 1),
(8, 1, '2024/06/30/8', '{\"part_id\":\"1\",\"part_name\":\"Rotation Limiting Damper Assembly (NYT PVD 44\\/52) DS-350002\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\\r\\n\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/8\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_8.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_8.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_8.pdf', '2024-06-30 16:34:39', 1),
(9, 1, '2024/06/30/9', '{\"part_id\":\"1\",\"part_name\":\"Rotation Limiting Damper Assembly (NYT PVD 44\\/52) DS-350002\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\\r\\n\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/9\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_9.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_9.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_9.pdf', '2024-06-30 16:34:59', 1),
(10, 1, '2024/06/30/10', '{\"part_id\":\"1\",\"part_name\":\"Rotation Limiting Damper Assembly (NYT PVD 44\\/52) DS-350002\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\\r\\n\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/10\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_10.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_10.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_10.pdf', '2024-06-30 16:35:16', 1),
(11, 2, '2024/06/30/11', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/11\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_11.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_11.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_11.pdf', '2024-06-30 16:36:01', 1),
(12, 2, '2024/06/30/12', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/12\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_12.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_12.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_12.pdf', '2024-06-30 16:36:52', 1),
(13, 2, '2024/06/30/13', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/13\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_13.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_13.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_13.pdf', '2024-06-30 16:37:11', 1),
(14, 2, '2024/06/30/14', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/14\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_14.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_14.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_14.pdf', '2024-06-30 16:38:46', 1),
(15, 2, '2024/06/30/15', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/15\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_15.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_15.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_15.pdf', '2024-06-30 16:39:13', 1),
(16, 2, '2024/06/30/16', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/16\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_16.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_16.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_16.pdf', '2024-06-30 16:39:49', 1),
(17, 2, '2024/06/30/17', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/17\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_17.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_17.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_17.pdf', '2024-06-30 16:40:00', 1),
(18, 2, '2024/06/30/18', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/18\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_18.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_18.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_18.pdf', '2024-06-30 16:40:17', 1),
(19, 2, '2024/06/30/19', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/19\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_19.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_19.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_19.pdf', '2024-06-30 16:40:42', 1),
(20, 2, '2024/06/30/20', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/20\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_20.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_20.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_20.pdf', '2024-06-30 16:41:04', 1),
(21, 2, '2024/06/30/21', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/21\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_21.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_21.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_21.pdf', '2024-06-30 16:41:25', 1),
(22, 2, '2024/06/30/22', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/22\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_22.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_22.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_22.pdf', '2024-06-30 16:41:42', 1),
(23, 2, '2024/06/30/23', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/23\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_23.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_23.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_23.pdf', '2024-06-30 16:41:56', 1),
(24, 2, '2024/06/30/24', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/24\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_24.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_24.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_24.pdf', '2024-06-30 16:42:16', 1),
(25, 2, '2024/06/30/25', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/25\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_25.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_25.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_25.pdf', '2024-06-30 16:42:41', 1),
(26, 2, '2024/06/30/26', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/26\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_26.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_26.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_26.pdf', '2024-06-30 16:42:51', 1),
(27, 2, '2024/06/30/27', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/27\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_27.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_27.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_27.pdf', '2024-06-30 16:43:19', 1),
(28, 2, '2024/06/30/28', '{\"part_id\":\"2\",\"part_name\":\"Rotation1 Limiting Damper Assembling (NYT PVD 44\\/52) DS-350003\",\"customer_name\":\"GameChange Solor\",\"customer_logo\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/img\\/duroshox_client_logo.png\",\"customer_part_number\":\"Rotation Limiting Damper GC4467D-52-30.35\\/0.0-0\",\"box_packing_qty\":\"40\",\"vendor_initial\":\"D\",\"gcs_rev_date\":\"2024-06-11\",\"stroke_travel\":\"20.58in\",\"eel_extended\":\"56.08in\",\"eel_retracted\":\"35.50in\",\"llc_extension\":\"500 lbs\",\"maximum_rated_load\":\"9000 ibs\",\"production_date\":\"2024-06-30\",\"production_serial_number\":\"2024\\/06\\/30\\/28\",\"qr_code\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/public\\/uploads\\/qr_code\\/2024\\/06\\/qr_code_2024_06_30_28.png\",\"job_striker\":\"http:\\/\\/localhost\\/extra_work\\/qr_products\\/\\/public\\/uploads\\/job_striker\\/job_striker_2024_06_30_28.pdf\"}', 'http://localhost/extra_work/qr_products//public/uploads/job_striker/job_striker_2024_06_30_28.pdf', '2024-06-30 16:43:33', 1);

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

--
-- Dumping data for table `part_master`
--

INSERT INTO `part_master` (`part_id`, `part_name`, `customer_name`, `customer_logo`, `customer_part_number`, `box_packing_qty`, `vendor_initial`, `gcs_rev_date`, `stroke_travel`, `eel_extended`, `eel_retracted`, `llc_extension`, `maximum_rated_load`, `added_by`, `added_date`, `updated_by`, `updated_date`) VALUES
(1, 'Rotation Limiting Damper Assembly (NYT PVD 44/52) DS-350002', 'GameChange Solor', 'duroshox_client_logo3.png', 'Rotation Limiting Damper GC4467D-52-30.35/0.0-0', 40, 'D', '2024-06-11', '20.58in', '56.08in', '35.50in', '500 lbs', '9000 ibs', 1, '2024-06-11 23:39:00', 1, '2024-06-30 17:07:39'),
(2, 'Rotation1 Limiting Damper Assembling (NYT PVD 44/52) DS-350003', 'GameChange Solor', 'duroshox_client_logo2.png', 'Rotation Limiting Damper GC4467D-52-30.35/0.0-0', 40, 'D', '2024-06-11', '20.58in', '56.08in', '35.50in', '500 lbs', '9000 ibs', 1, '2024-06-11 23:39:00', 1, '2024-06-30 17:06:25');

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
  `type` enum('Admin','Job Striker Print Man','Packing Slip Print Man') COLLATE utf8mb4_general_ci NOT NULL,
  `added_by` int DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `name`, `email`, `password`, `type`, `added_by`, `added_date`, `updated_by`, `updated_date`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Admin', NULL, NULL, NULL, NULL, 'Active'),
(2, 'Gayatri Narayan Hedau', 'gayu@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Packing Slip Print Man', 1, '2024-06-30 11:19:46', 1, '2024-06-30 17:48:08', 'Active'),
(3, 'Dipsi', 'dipsi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Job Striker Print Man', 1, '2024-06-30 11:20:47', 1, '2024-06-30 11:26:00', 'Active'),
(4, 'Aarbaj', 'aarbaj@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Admin', 1, '2024-06-30 11:22:12', 1, '2024-06-30 11:23:10', 'Active'),
(5, 'John', 'employee@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Packing Slip Print Man', 1, '2024-06-30 11:52:18', 1, '2024-06-30 11:53:14', 'Active'),
(6, 'Juned', 'juned1@yopmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Admin', 1, '2024-06-30 17:46:02', 1, '2024-06-30 17:46:22', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_striker`
--
ALTER TABLE `job_striker`
  ADD PRIMARY KEY (`job_striker_id`);

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
-- AUTO_INCREMENT for table `job_striker`
--
ALTER TABLE `job_striker`
  MODIFY `job_striker_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `part_master`
--
ALTER TABLE `part_master`
  MODIFY `part_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
