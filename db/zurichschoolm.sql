-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2020 at 06:58 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zurichschoolm`
--
CREATE DATABASE IF NOT EXISTS `zurichschoolm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zurichschoolm`;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `country_code` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_code`, `status`) VALUES
(101, 'India', 'IN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states_cities`
--

CREATE TABLE `states_cities` (
  `city_id` int(5) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states_cities`
--

INSERT INTO `states_cities` (`city_id`, `city_name`, `latitude`, `longitude`, `state`) VALUES
(1, 'Port Blair', '11.67 N', '92.76 E', 'Andaman and Nicobar Islands'),
(2, 'Adilabad', '19.68 N', '78.53 E', 'Andhra Pradesh'),
(3, 'Adoni', '15.63 N', '77.28 E', 'Andhra Pradesh'),
(4, 'Alwal', '17.50 N', '78.54 E', 'Andhra Pradesh'),
(5, 'Anakapalle', '17.69 N', '83.00 E', 'Andhra Pradesh'),
(6, 'Anantapur', '14.70 N', '77.59 E', 'Andhra Pradesh'),
(7, 'Bapatla', '15.91 N', '80.47 E', 'Andhra Pradesh'),
(8, 'Belampalli', '19.06 N', '79.49 E', 'Andhra Pradesh'),
(9, 'Bhimavaram', '16.55 N', '81.53 E', 'Andhra Pradesh'),
(10, 'Bhongir', '17.52 N', '78.88 E', 'Andhra Pradesh'),
(11, 'Bobbili', '18.57 N', '83.37 E', 'Andhra Pradesh'),
(12, 'Bodhan', '18.66 N', '77.88 E', 'Andhra Pradesh'),
(13, 'Chilakalurupet', '16.10 N', '80.16 E', 'Andhra Pradesh'),
(14, 'Chinna Chawk', '14.47 N', '78.83 E', 'Andhra Pradesh'),
(15, 'Chirala', '15.84 N', '80.35 E', 'Andhra Pradesh'),
(16, 'Chittur', '13.22 N', '79.10 E', 'Andhra Pradesh'),
(17, 'Cuddapah', '14.48 N', '78.81 E', 'Andhra Pradesh'),
(18, 'Dharmavaram', '14.42 N', '77.71 E', 'Andhra Pradesh'),
(19, 'Dhone', '15.42 N', '77.88 E', 'Andhra Pradesh'),
(20, 'Eluru', '16.72 N', '81.11 E', 'Andhra Pradesh'),
(21, 'Gaddiannaram', '17.36 N', '78.52 E', 'Andhra Pradesh'),
(22, 'Gadwal', '16.23 N', '77.80 E', 'Andhra Pradesh'),
(23, 'Gajuwaka', '17.70 N', '83.21 E', 'Andhra Pradesh'),
(24, 'Gudivada', '16.44 N', '81.00 E', 'Andhra Pradesh'),
(25, 'Gudur', '14.15 N', '79.84 E', 'Andhra Pradesh'),
(26, 'Guntakal', '15.18 N', '77.37 E', 'Andhra Pradesh'),
(27, 'Guntur', '16.31 N', '80.44 E', 'Andhra Pradesh'),
(28, 'Hindupur', '13.83 N', '77.48 E', 'Andhra Pradesh'),
(29, 'Hyderabad', '17.40 N', '78.48 E', 'Andhra Pradesh'),
(30, 'Jagtial', '18.80 N', '78.91 E', 'Andhra Pradesh'),
(31, 'Kadiri', '14.12 N', '78.16 E', 'Andhra Pradesh'),
(32, 'Kagaznagar', '19.34 N', '79.48 E', 'Andhra Pradesh'),
(33, 'Kakinada', '16.96 N', '82.24 E', 'Andhra Pradesh'),
(34, 'Kallur', '15.69 N', '77.77 E', 'Andhra Pradesh'),
(35, 'Kamareddi', '18.32 N', '78.35 E', 'Andhra Pradesh'),
(36, 'Kapra', '17.37 N', '78.48 E', 'Andhra Pradesh'),
(37, 'Karimnagar', '18.45 N', '79.13 E', 'Andhra Pradesh'),
(38, 'Karnul', '15.83 N', '78.03 E', 'Andhra Pradesh'),
(39, 'Kavali', '14.92 N', '79.99 E', 'Andhra Pradesh'),
(40, 'Khammam', '17.25 N', '80.15 E', 'Andhra Pradesh'),
(41, 'Kodar', '16.98 N', '79.97 E', 'Andhra Pradesh'),
(42, 'Kondukur', '15.22 N', '79.91 E', 'Andhra Pradesh'),
(43, 'Koratla', '18.82 N', '78.72 E', 'Andhra Pradesh'),
(44, 'Kottagudem', '17.56 N', '80.64 E', 'Andhra Pradesh'),
(45, 'Kukatpalle', '17.49 N', '78.41 E', 'Andhra Pradesh'),
(46, 'Lalbahadur Nagar', '17.43 N', '78.50 E', 'Andhra Pradesh'),
(47, 'Machilipatnam', '16.19 N', '81.14 E', 'Andhra Pradesh'),
(48, 'Mahbubnagar', '16.74 N', '77.98 E', 'Andhra Pradesh'),
(49, 'Malkajgiri', '17.55 N', '78.59 E', 'Andhra Pradesh'),
(50, 'Mancheral', '18.88 N', '79.45 E', 'Andhra Pradesh'),
(51, 'Mandamarri', '18.97 N', '79.47 E', 'Andhra Pradesh'),
(52, 'Mangalagiri', '16.44 N', '80.56 E', 'Andhra Pradesh'),
(53, 'Markapur', '15.73 N', '79.28 E', 'Andhra Pradesh'),
(54, 'Miryalaguda', '16.87 N', '79.57 E', 'Andhra Pradesh'),
(55, 'Nalgonda', '17.06 N', '79.26 E', 'Andhra Pradesh'),
(56, 'Nandyal', '15.49 N', '78.48 E', 'Andhra Pradesh'),
(57, 'Narasapur', '16.45 N', '81.70 E', 'Andhra Pradesh'),
(58, 'Narasaraopet', '16.24 N', '80.04 E', 'Andhra Pradesh'),
(59, 'Nellur', '14.46 N', '79.98 E', 'Andhra Pradesh'),
(60, 'Nirmal', '19.12 N', '78.35 E', 'Andhra Pradesh'),
(61, 'Nizamabad', '18.68 N', '78.10 E', 'Andhra Pradesh'),
(62, 'Nuzvid', '16.78 N', '80.85 E', 'Andhra Pradesh'),
(63, 'Ongole', '15.50 N', '80.05 E', 'Andhra Pradesh'),
(64, 'Palakollu', '16.52 N', '81.75 E', 'Andhra Pradesh'),
(65, 'Palasa', '18.77 N', '84.42 E', 'Andhra Pradesh'),
(66, 'Palwancha', '17.60 N', '80.68 E', 'Andhra Pradesh'),
(67, 'Patancheru', '17.53 N', '78.27 E', 'Andhra Pradesh'),
(68, 'Piduguralla', '16.48 N', '79.90 E', 'Andhra Pradesh'),
(69, 'Ponnur', '16.07 N', '80.56 E', 'Andhra Pradesh'),
(70, 'Proddatur', '14.73 N', '78.55 E', 'Andhra Pradesh'),
(71, 'Qutubullapur', '17.43 N', '78.47 E', 'Andhra Pradesh'),
(72, 'Rajamahendri', '17.02 N', '81.79 E', 'Andhra Pradesh'),
(73, 'Rajampet', '14.18 N', '79.17 E', 'Andhra Pradesh'),
(74, 'Rajendranagar', '17.29 N', '78.39 E', 'Andhra Pradesh'),
(75, 'Ramachandrapuram', '17.56 N', '78.04 E', 'Andhra Pradesh'),
(76, 'Ramagundam', '18.80 N', '79.45 E', 'Andhra Pradesh'),
(77, 'Rayachoti', '14.05 N', '78.75 E', 'Andhra Pradesh'),
(78, 'Rayadrug', '14.70 N', '76.87 E', 'Andhra Pradesh'),
(79, 'Samalkot', '17.06 N', '82.18 E', 'Andhra Pradesh'),
(80, 'Sangareddi', '17.63 N', '78.08 E', 'Andhra Pradesh'),
(81, 'Sattenapalle', '16.40 N', '80.18 E', 'Andhra Pradesh'),
(82, 'Serilungampalle', '17.48 N', '78.33 E', 'Andhra Pradesh'),
(83, 'Siddipet', '18.11 N', '78.84 E', 'Andhra Pradesh'),
(84, 'Sikandarabad', '17.47 N', '78.52 E', 'Andhra Pradesh'),
(85, 'Sirsilla', '18.40 N', '78.81 E', 'Andhra Pradesh'),
(86, 'Srikakulam', '18.30 N', '83.90 E', 'Andhra Pradesh'),
(87, 'Srikalahasti', '13.76 N', '79.70 E', 'Andhra Pradesh'),
(88, 'Suriapet', '17.15 N', '79.62 E', 'Andhra Pradesh'),
(89, 'Tadepalle', '16.48 N', '80.60 E', 'Andhra Pradesh'),
(90, 'Tadepallegudem', '16.82 N', '81.52 E', 'Andhra Pradesh'),
(91, 'Tadpatri', '14.91 N', '78.00 E', 'Andhra Pradesh'),
(92, 'Tandur', '17.25 N', '77.58 E', 'Andhra Pradesh'),
(93, 'Tanuku', '16.75 N', '81.69 E', 'Andhra Pradesh'),
(94, 'Tenali', '16.24 N', '80.65 E', 'Andhra Pradesh'),
(95, 'Tirupati', '13.63 N', '79.41 E', 'Andhra Pradesh'),
(96, 'Tuni', '17.35 N', '82.55 E', 'Andhra Pradesh'),
(97, 'Uppal Kalan', '17.38 N', '78.55 E', 'Andhra Pradesh'),
(98, 'Vijayawada', '16.52 N', '80.63 E', 'Andhra Pradesh'),
(99, 'Vinukonda', '16.05 N', '79.75 E', 'Andhra Pradesh'),
(100, 'Visakhapatnam', '17.73 N', '83.30 E', 'Andhra Pradesh'),
(101, 'Vizianagaram', '18.12 N', '83.40 E', 'Andhra Pradesh'),
(102, 'Vuyyuru', '16.37 N', '80.85 E', 'Andhra Pradesh'),
(103, 'Wanparti', '16.37 N', '78.07 E', 'Andhra Pradesh'),
(104, 'Warangal', '18.01 N', '79.58 E', 'Andhra Pradesh'),
(105, 'Yemmiganur', '15.73 N', '77.48 E', 'Andhra Pradesh'),
(106, 'Itanagar', '27.14 N', '93.61 E', 'Arunachal Pradesh'),
(107, 'Barpeta', '26.32 N', '91.00 E', 'Assam'),
(108, 'Bongaigaon', '26.48 N', '90.54 E', 'Assam'),
(109, 'Dhuburi', '26.03 N', '89.97 E', 'Assam'),
(110, 'Dibrugarh', '27.49 N', '94.91 E', 'Assam'),
(111, 'Diphu', '25.84 N', '93.43 E', 'Assam'),
(112, 'Guwahati', '26.19 N', '91.75 E', 'Assam'),
(113, 'Jorhat', '26.76 N', '94.20 E', 'Assam'),
(114, 'Karimganj', '24.85 N', '92.36 E', 'Assam'),
(115, 'Lakhimpur', '27.24 N', '94.10 E', 'Assam'),
(116, 'Lanka', '25.93 N', '92.95 E', 'Assam'),
(117, 'Nagaon', '26.35 N', '92.68 E', 'Assam'),
(118, 'Sibsagar', '26.99 N', '94.63 E', 'Assam'),
(119, 'Silchar', '24.83 N', '92.77 E', 'Assam'),
(120, 'Tezpur', '26.63 N', '92.79 E', 'Assam'),
(121, 'Tinsukia', '27.50 N', '95.36 E', 'Assam'),
(122, 'Alipur Duar', '26.50 N', '89.53 E', 'West Bengal'),
(123, 'Arambagh', '22.88 N', '87.78 E', 'West Bengal'),
(124, 'Asansol', '23.69 N', '86.98 E', 'West Bengal'),
(125, 'Ashoknagar Kalyangarh', '22.84 N', '88.63 E', 'West Bengal'),
(126, 'Baharampur', '24.10 N', '88.24 E', 'West Bengal'),
(127, 'Baidyabati', '22.79 N', '88.33 E', 'West Bengal'),
(128, 'Baj Baj', '22.48 N', '88.17 E', 'West Bengal'),
(129, 'Bally', '22.65 N', '88.35 E', 'West Bengal'),
(130, 'Bally Cantonment', '22.65 N', '88.36 E', 'West Bengal'),
(131, 'Balurghat', '25.23 N', '88.77 E', 'West Bengal'),
(132, 'Bangaon', '23.05 N', '88.83 E', 'West Bengal'),
(133, 'Bankra', '22.58 N', '88.31 E', 'West Bengal'),
(134, 'Bankura', '23.24 N', '87.07 E', 'West Bengal'),
(135, 'Bansbaria', '22.95 N', '88.40 E', 'West Bengal'),
(136, 'Baranagar', '22.64 N', '88.37 E', 'West Bengal'),
(137, 'Barddhaman', '23.24 N', '87.86 E', 'West Bengal'),
(138, 'Basirhat', '22.66 N', '88.86 E', 'West Bengal'),
(139, 'Bhadreswar', '22.84 N', '88.35 E', 'West Bengal'),
(140, 'Bhatpara', '22.89 N', '88.42 E', 'West Bengal'),
(141, 'Bidhannagar', '22.57 N', '88.42 E', 'West Bengal'),
(142, 'Binnaguri', '26.74 N', '89.037 E', 'West Bengal'),
(143, 'Bishnupur', '23.08 N', '87.33 E', 'West Bengal'),
(144, 'Bolpur', '23.67 N', '87.70 E', 'West Bengal'),
(145, 'Calcutta', '22.57 N', '88.36 E', 'West Bengal'),
(146, 'Chakdaha', '22.48 N', '88.35 E', 'West Bengal'),
(147, 'Champdani', '22.81 N', '88.34 E', 'West Bengal'),
(148, 'Chandannagar', '22.89 N', '88.37 E', 'West Bengal'),
(149, 'Contai', '21.79 N', '87.75 E', 'West Bengal'),
(150, 'Dabgram', '', '', 'West Bengal'),
(151, 'Darjiling', '27.05 N', '88.26 E', 'West Bengal'),
(152, 'Dhulian', '24.68 N', '87.97 E', 'West Bengal'),
(153, 'Dinhata', '26.13 N', '89.47 E', 'West Bengal'),
(154, 'Dum Dum', '22.63 N', '88.42 E', 'West Bengal'),
(155, 'Durgapur', '23.50 N', '87.31 E', 'West Bengal'),
(156, 'Gangarampur', '25.40 N', '88.52 E', 'West Bengal'),
(157, 'Garulia', '22.83 N', '88.37 E', 'West Bengal'),
(158, 'Gayespur', '22.98 N', '88.51 E', 'West Bengal'),
(159, 'Ghatal', '22.67 N', '87.72 E', 'West Bengal'),
(160, 'Gopalpur', '', '', 'West Bengal'),
(161, 'Habra', '22.84 N', '88.62 E', 'West Bengal'),
(162, 'Halisahar', '22.95 N', '88.42 E', 'West Bengal'),
(163, 'Haora', '22.58 N', '88.33 E', 'West Bengal'),
(164, 'HugliChunchura', '22.91 N', '88.40 E', 'West Bengal'),
(165, 'Ingraj Bazar', '25.01 N', '88.14 E', 'West Bengal'),
(166, 'Islampur', '26.27 N', '88.20 E', 'West Bengal'),
(167, 'Jalpaiguri', '26.53 N', '88.71 E', 'West Bengal'),
(168, 'Jamuria', '23.70 N', '87.08 E', 'West Bengal'),
(169, 'Jangipur', '24.47 N', '88.07 E', 'West Bengal'),
(170, 'Jhargram', '22.45 N', '86.98 E', 'West Bengal'),
(171, 'Kaliyaganj', '25.63 N', '88.32 E', 'West Bengal'),
(172, 'Kalna', '23.22 N', '88.37 E', 'West Bengal'),
(173, 'Kalyani', '22.98 N', '88.48 E', 'West Bengal'),
(174, 'Kamarhati', '22.67 N', '88.37 E', 'West Bengal'),
(175, 'Kanchrapara', '22.95 N', '88.45 E', 'West Bengal'),
(176, 'Kandi', '23.95 N', '88.03 E', 'West Bengal'),
(177, 'Karsiyang', '26.88 N', '88.28 E', 'West Bengal'),
(178, 'Katwa', '23.65 N', '88.13 E', 'West Bengal'),
(179, 'Kharagpur', '22.34 N', '87.31 E', 'West Bengal'),
(180, 'Kharagpur Railway Settlement', '22.34 N', '87.26 E', 'West Bengal'),
(181, 'Khardaha', '22.73 N', '88.38 E', 'West Bengal'),
(182, 'Kharia', '', '', 'West Bengal'),
(183, 'Koch Bihar', '26.33 N', '89.46 E', 'West Bengal'),
(184, 'Konnagar', '22.70 N', '88.36 E', 'West Bengal'),
(185, 'Krishnanagar', '23.41 N', '88.51 E', 'West Bengal'),
(186, 'Kulti', '23.72 N', '86.89 E', 'West Bengal'),
(187, 'Madhyamgram', '22.70 N', '88.45 E', 'West Bengal'),
(188, 'Maheshtala', '22.51 N', '88.23 E', 'West Bengal'),
(189, 'Memari', '23.20 N', '88.12 E', 'West Bengal'),
(190, 'Midnapur', '22.33 N', '87.15 E', 'West Bengal'),
(191, 'Naihati', '22.91 N', '88.43 E', 'West Bengal'),
(192, 'Navadwip', '23.42 N', '88.37 E', 'West Bengal'),
(193, 'Ni Barakpur', '22.77 N', '88.36 E', 'West Bengal'),
(194, 'North Barakpur', '22.78 N', '88.37 E', 'West Bengal'),
(195, 'North Dum Dum', '22.64 N', '88.41 E', 'West Bengal'),
(196, 'Old Maldah', '', '', 'West Bengal'),
(197, 'Panihati', '22.69 N', '88.37 E', 'West Bengal'),
(198, 'Phulia', '23.24 N', '88.50 E', 'West Bengal'),
(199, 'Pujali', '22.47 N', '88.15 E', 'West Bengal'),
(200, 'Puruliya', '23.34 N', '86.36 E', 'West Bengal'),
(201, 'Raiganj', '25.62 N', '88.12 E', 'West Bengal'),
(202, 'Rajpur', '22.44 N', '88.44 E', 'West Bengal'),
(203, 'Rampur Hat', '24.17 N', '87.78 E', 'West Bengal'),
(204, 'Ranaghat', '23.19 N', '88.58 E', 'West Bengal'),
(205, 'Raniganj', '23.62 N', '87.11 E', 'West Bengal'),
(206, 'Rishra', '22.71 N', '88.36 E', 'West Bengal'),
(207, 'Shantipur', '23.26 N', '88.44 E', 'West Bengal'),
(208, 'Shiliguri', '26.73 N', '88.42 E', 'West Bengal'),
(209, 'Shrirampur', '22.74 N', '88.35 E', 'West Bengal'),
(210, 'Siuri', '23.91 N', '87.53 E', 'West Bengal'),
(211, 'South Dum Dum', '22.61 N', '88.41 E', 'West Bengal'),
(212, 'Titagarh', '22.74 N', '88.38 E', 'West Bengal'),
(213, 'Ulubaria', '22.47 N', '88.11 E', 'West Bengal'),
(214, 'UttarparaKotrung', '22.66 N', '88.35 E', 'West Bengal'),
(215, 'Araria', '26.15 N', '87.52 E', 'Bihar'),
(216, 'Arrah', '25.56 N', '84.66 E', 'Bihar'),
(217, 'Aurangabad', '24.75 N', '84.37 E', 'Bihar'),
(218, 'Bagaha', '27.10 N', '84.09 E', 'Bihar'),
(219, 'Begusarai', '25.42 N', '86.12 E', 'Bihar'),
(220, 'Bettiah', '26.81 N', '84.50 E', 'Bihar'),
(221, 'Bhabua', '25.05 N', '83.62 E', 'Bihar'),
(222, 'Bhagalpur', '25.26 N', '86.98 E', 'Bihar'),
(223, 'Bihar', '25.21 N', '85.52 E', 'Bihar'),
(224, 'Buxar', '25.58 N', '83.98 E', 'Bihar'),
(225, 'Chhapra', '25.78 N', '84.72 E', 'Bihar'),
(226, 'Darbhanga', '26.16 N', '85.88 E', 'Bihar'),
(227, 'Dehri', '24.91 N', '84.18 E', 'Bihar'),
(228, 'DighaMainpura', '', '', 'Bihar'),
(229, 'Dinapur', '25.64 N', '85.04 E', 'Bihar'),
(230, 'Dumraon', '25.55 N', '84.15 E', 'Bihar'),
(231, 'Gaya', '24.81 N', '85.00 E', 'Bihar'),
(232, 'Gopalganj', '26.47 N', '84.43 E', 'Bihar'),
(233, 'Goura', '', '', 'Bihar'),
(234, 'Hajipur', '', '', 'Bihar'),
(235, 'Jahanabad', '25.22 N', '84.98 E', 'Bihar'),
(236, 'Jamalpur', '25.32 N', '86.48 E', 'Bihar'),
(237, 'Jamui', '24.92 N', '86.22 E', 'Bihar'),
(238, 'Katihar', '25.55 N', '87.57 E', 'Bihar'),
(239, 'Khagaria', '25.50 N', '86.48 E', 'Bihar'),
(240, 'Khagaul', '25.58 N', '85.05 E', 'Bihar'),
(241, 'Kishanganj', '26.11 N', '87.95 E', 'Bihar'),
(242, 'Lakhisarai', '25.18 N', '86.09 E', 'Bihar'),
(243, 'Madhipura', '25.92 N', '86.78 E', 'Bihar'),
(244, 'Madhubani', '26.37 N', '86.06 E', 'Bihar'),
(245, 'Masaurhi', '25.35 N', '85.03 E', 'Bihar'),
(246, 'Mokama', '25.40 N', '85.92 E', 'Bihar'),
(247, 'Motihari', '26.66 N', '84.91 E', 'Bihar'),
(248, 'Munger', '25.39 N', '86.47 E', 'Bihar'),
(249, 'Muzaffarpur', '26.13 N', '85.38 E', 'Bihar'),
(250, 'Nawada', '24.88 N', '85.54 E', 'Bihar'),
(251, 'Patna', '25.62 N', '85.13 E', 'Bihar'),
(252, 'Phulwari', '25.60 N', '85.13 E', 'Bihar'),
(253, 'Purnia', '25.78 N', '87.47 E', 'Bihar'),
(254, 'Raxaul', '26.98 N', '84.85 E', 'Bihar'),
(255, 'Saharsa', '25.88 N', '86.59 E', 'Bihar'),
(256, 'Samastipur', '25.85 N', '85.78 E', 'Bihar'),
(257, 'Sasaram', '24.96 N', '84.01 E', 'Bihar'),
(258, 'Sitamarhi', '26.61 N', '85.48 E', 'Bihar'),
(259, 'Siwan', '26.23 N', '84.35 E', 'Bihar'),
(260, 'Supaul', '26.12 N', '86.60 E', 'Bihar'),
(261, 'Chandigarh', '30.75 N', '76.78 E', 'Chandigarh'),
(262, 'Ambikapur', '23.13 N', '83.20 E', 'Chhattisgarh'),
(263, 'Bhilai', '21.21 N', '81.38 E', 'Chhattisgarh'),
(264, 'Bilaspur', '22.09 N', '82.15 E', 'Chhattisgarh'),
(265, 'Charoda', '21.23 N', '81.50 E', 'Chhattisgarh'),
(266, 'Chirmiri', '23.21 N', '82.41 E', 'Chhattisgarh'),
(267, 'Dhamtari', '20.71 N', '81.55 E', 'Chhattisgarh'),
(268, 'Durg', '21.20 N', '81.28 E', 'Chhattisgarh'),
(269, 'Jagdalpur', '19.09 N', '82.03 E', 'Chhattisgarh'),
(270, 'Korba', '22.35 N', '82.69 E', 'Chhattisgarh'),
(271, 'Raigarh', '21.90 N', '83.39 E', 'Chhattisgarh'),
(272, 'Raipur', '21.24 N', '81.63 E', 'Chhattisgarh'),
(273, 'Rajnandgaon', '21.10 N', '81.04 E', 'Chhattisgarh'),
(274, 'Bhalswa Jahangirpur', '28.74 N', '77.17 E', 'Delhi'),
(275, 'Burari', '', '', 'Delhi'),
(276, 'Chilla Saroda Bangar', '', '', 'Delhi'),
(277, 'Dallo Pura', '', '', 'Delhi'),
(278, 'Delhi', '28.67 N', '77.21 E', 'Delhi'),
(279, 'Deoli', '28.49 N', '77.22 E', 'Delhi'),
(280, 'Dilli Cantonment', '28.57 N', '77.16 E', 'Delhi'),
(281, 'Gharoli', '', '', 'Delhi'),
(282, 'Gokalpur', '28.71 N', '77.28 E', 'Delhi'),
(283, 'Hastsal', '', '', 'Delhi'),
(284, 'Jaffrabad', '', '', 'Delhi'),
(285, 'Karawal Nagar', '', '', 'Delhi'),
(286, 'Khajuri Khas', '', '', 'Delhi'),
(287, 'Kirari Suleman Nagar', '', '', 'Delhi'),
(288, 'Mandoli', '', '', 'Delhi'),
(289, 'Mithe Pur', '', '', 'Delhi'),
(290, 'Molarband', '', '', 'Delhi'),
(291, 'Mundka', '', '', 'Delhi'),
(292, 'Mustafabad', '', '', 'Delhi'),
(293, 'Nangloi Jat', '28.68 N', '77.07 E', 'Delhi'),
(294, 'Ni Dilli', '28.60 N', '77.22 E', 'Delhi'),
(295, 'Pul Pehlad', '', '', 'Delhi'),
(296, 'Puth Kalan', '', '', 'Delhi'),
(297, 'Roshan Pura', '28.60 N', '76.99 E', 'Delhi'),
(298, 'Sadat Pur Gujran', '', '', 'Delhi'),
(299, 'Sultanpur Majra', '28.76 N', '77.06 E', 'Delhi'),
(300, 'Tajpul', '', '', 'Delhi'),
(301, 'Tigri', '28.50 N', '77.22 E', 'Delhi'),
(302, 'Ziauddin Pur', '', '', 'Delhi'),
(303, 'Madgaon', '15.28 N', '73.94 E', 'Goa'),
(304, 'Mormugao', '15.42 N', '73.78 E', 'Goa'),
(305, 'Panaji', '15.50 N', '73.81 E', 'Goa'),
(306, 'Ahmadabad', '23.03 N', '72.58 E', 'Gujarat'),
(307, 'Amreli', '21.61 N', '71.22 E', 'Gujarat'),
(308, 'Anand', '22.56 N', '72.95 E', 'Gujarat'),
(309, 'Anjar', '23.12 N', '70.02 E', 'Gujarat'),
(310, 'Bardoli', '21.12 N', '73.12 E', 'Gujarat'),
(311, 'Bharuch', '21.71 N', '72.97 E', 'Gujarat'),
(312, 'Bhavnagar', '21.79 N', '72.13 E', 'Gujarat'),
(313, 'Bhuj', '23.26 N', '69.66 E', 'Gujarat'),
(314, 'Borsad', '22.42 N', '72.90 E', 'Gujarat'),
(315, 'Botad', '22.18 N', '71.66 E', 'Gujarat'),
(316, 'Chandkheda', '23.15 N', '72.61 E', 'Gujarat'),
(317, 'Chandlodiya', '23.10 N', '72.56 E', 'Gujarat'),
(318, 'Dabhoi', '22.13 N', '73.41 E', 'Gujarat'),
(319, 'Dahod', '22.84 N', '74.25 E', 'Gujarat'),
(320, 'Dholka', '22.74 N', '72.44 E', 'Gujarat'),
(321, 'Dhoraji', '21.74 N', '70.44 E', 'Gujarat'),
(322, 'Dhrangadhra', '23.00 N', '71.46 E', 'Gujarat'),
(323, 'Disa', '24.26 N', '72.18 E', 'Gujarat'),
(324, 'Gandhidham', '23.07 N', '70.13 E', 'Gujarat'),
(325, 'Gandhinagar', '23.30 N', '72.63 E', 'Gujarat'),
(326, 'Ghatlodiya', '23.05 N', '72.55 E', 'Gujarat'),
(327, 'Godhra', '22.77 N', '73.60 E', 'Gujarat'),
(328, 'Gondal', '21.97 N', '70.80 E', 'Gujarat'),
(329, 'Himatnagar', '23.60 N', '72.96 E', 'Gujarat'),
(330, 'Jamnagar', '22.47 N', '70.07 E', 'Gujarat'),
(331, 'Jamnagar', '', '', 'Gujarat'),
(332, 'Jetpur', '21.75 N', '70.61 E', 'Gujarat'),
(333, 'Junagadh', '21.52 N', '70.45 E', 'Gujarat'),
(334, 'Kalol', '23.25 N', '72.49 E', 'Gujarat'),
(335, 'Keshod', '21.31 N', '70.23 E', 'Gujarat'),
(336, 'Khambhat', '22.32 N', '72.61 E', 'Gujarat'),
(337, 'Kundla', '21.35 N', '71.30 E', 'Gujarat'),
(338, 'Mahuva', '21.10 N', '71.75 E', 'Gujarat'),
(339, 'Mangrol', '21.12 N', '70.12 E', 'Gujarat'),
(340, 'Modasa', '23.47 N', '73.30 E', 'Gujarat'),
(341, 'Morvi', '22.82 N', '70.83 E', 'Gujarat'),
(342, 'Nadiad', '22.70 N', '72.85 E', 'Gujarat'),
(343, 'Navagam Ghed', '', '', 'Gujarat'),
(344, 'Navsari', '20.96 N', '72.92 E', 'Gujarat'),
(345, 'Palitana', '21.52 N', '71.83 E', 'Gujarat'),
(346, 'Patan', '23.86 N', '72.11 E', 'Gujarat'),
(347, 'Porbandar', '21.65 N', '69.60 E', 'Gujarat'),
(348, 'Puna', '', '', 'Gujarat'),
(349, 'Rajkot', '22.31 N', '70.79 E', 'Gujarat'),
(350, 'Ramod', '', '', 'Gujarat'),
(351, 'Ranip', '23.03 N', '72.54 E', 'Gujarat'),
(352, 'Siddhapur', '23.92 N', '72.37 E', 'Gujarat'),
(353, 'Sihor', '21.70 N', '71.97 E', 'Gujarat'),
(354, 'Surat', '21.20 N', '72.82 E', 'Gujarat'),
(355, 'Surendranagar', '22.71 N', '71.67 E', 'Gujarat'),
(356, 'Thaltej', '', '', 'Gujarat'),
(357, 'Una', '20.82 N', '71.03 E', 'Gujarat'),
(358, 'Unjha', '23.81 N', '72.38 E', 'Gujarat'),
(359, 'Upleta', '21.75 N', '70.27 E', 'Gujarat'),
(360, 'Vadodara', '22.31 N', '73.18 E', 'Gujarat'),
(361, 'Valsad', '20.62 N', '72.92 E', 'Gujarat'),
(362, 'Vapi', '20.37 N', '72.90 E', 'Gujarat'),
(363, 'Vastral', '', '', 'Gujarat'),
(364, 'Vejalpur', '', '', 'Gujarat'),
(365, 'Veraval', '20.92 N', '70.34 E', 'Gujarat'),
(366, 'Vijalpor', '', '', 'Gujarat'),
(367, 'Visnagar', '23.71 N', '72.54 E', 'Gujarat'),
(368, 'Wadhwan', '22.73 N', '71.72 E', 'Gujarat'),
(369, 'Ambala', '30.38 N', '76.77 E', 'Haryana'),
(370, 'Ambala Cantonment', '30.39 N', '76.86 E', 'Haryana'),
(371, 'Ambala Sadar', '30.35 N', '76.84 E', 'Haryana'),
(372, 'Bahadurgarh', '28.69 N', '76.92 E', 'Haryana'),
(373, 'Bhiwani', '28.81 N', '76.12 E', 'Haryana'),
(374, 'Charkhi Dadri', '28.60 N', '76.27 E', 'Haryana'),
(375, 'Dabwali', '29.95 N', '74.73 E', 'Haryana'),
(376, 'Faridabad', '28.38 N', '77.30 E', 'Haryana'),
(377, 'Gohana', '29.13 N', '76.70 E', 'Haryana'),
(378, 'Hisar', '29.17 N', '75.72 E', 'Haryana'),
(379, 'Jagadhri', '30.18 N', '77.29 E', 'Haryana'),
(380, 'Jind', '29.31 N', '76.30 E', 'Haryana'),
(381, 'Kaithal', '29.81 N', '76.40 E', 'Haryana'),
(382, 'Karnal', '29.69 N', '76.97 E', 'Haryana'),
(383, 'Narnaul', '28.04 N', '76.10 E', 'Haryana'),
(384, 'Narwana', '29.62 N', '76.12 E', 'Haryana'),
(385, 'Palwal', '28.15 N', '77.32 E', 'Haryana'),
(386, 'Panchkula', '30.70 N', '76.88 E', 'Haryana'),
(387, 'Panipat', '29.39 N', '76.96 E', 'Haryana'),
(388, 'Rewari', '28.19 N', '76.60 E', 'Haryana'),
(389, 'Rohtak', '28.90 N', '76.58 E', 'Haryana'),
(390, 'Sirsa', '29.53 N', '75.03 E', 'Haryana'),
(391, 'Sonipat', '28.99 N', '77.01 E', 'Haryana'),
(392, 'Thanesar', '29.98 N', '76.82 E', 'Haryana'),
(393, 'Tohana', '29.70 N', '75.90 E', 'Haryana'),
(394, 'Yamunanagar', '30.14 N', '77.28 E', 'Haryana'),
(395, 'Shimla', '31.11 N', '77.16 E', 'Himachal Pradesh'),
(396, 'Anantnag', '33.73 N', '75.15 E', 'Jammu and Kashmir'),
(397, 'Baramula', '34.20 N', '74.35 E', 'Jammu and Kashmir'),
(398, 'Bari Brahmana', '', '', 'Jammu and Kashmir'),
(399, 'Jammu', '32.71 N', '74.85 E', 'Jammu and Kashmir'),
(400, 'Kathua', '32.37 N', '75.52 E', 'Jammu and Kashmir'),
(401, 'Sopur', '34.30 N', '74.47 E', 'Jammu and Kashmir'),
(402, 'Srinagar', '34.09 N', '74.79 E', 'Jammu and Kashmir'),
(403, 'Udhampur', '32.93 N', '75.13 E', 'Jammu and Kashmir'),
(404, 'Adityapur', '22.80 N', '86.04 E', 'Jharkhand'),
(405, 'Bagbahra', '22.82 N', '86.20 E', 'Jharkhand'),
(406, 'Bhuli', '23.79 N', '86.38 E', 'Jharkhand'),
(407, 'Bokaro', '23.78 N', '85.96 E', 'Jharkhand'),
(408, 'Chaibasa', '22.56 N', '85.80 E', 'Jharkhand'),
(409, 'Chas', '23.65 N', '86.17 E', 'Jharkhand'),
(410, 'Daltenganj', '24.05 N', '84.06 E', 'Jharkhand'),
(411, 'Devghar', '24.49 N', '86.69 E', 'Jharkhand'),
(412, 'Dhanbad', '23.80 N', '86.42 E', 'Jharkhand'),
(413, 'Hazaribag', '24.01 N', '85.36 E', 'Jharkhand'),
(414, 'Jamshedpur', '22.79 N', '86.20 E', 'Jharkhand'),
(415, 'Jharia', '23.76 N', '86.42 E', 'Jharkhand'),
(416, 'Jhumri Tilaiya', '24.43 N', '85.52 E', 'Jharkhand'),
(417, 'Jorapokhar', '23.79 N', '86.36 E', 'Jharkhand'),
(418, 'Katras', '23.80 N', '86.28 E', 'Jharkhand'),
(419, 'Lohardaga', '23.43 N', '84.68 E', 'Jharkhand'),
(420, 'Mango', '22.85 N', '86.21 E', 'Jharkhand'),
(421, 'Phusro', '23.68 N', '85.86 E', 'Jharkhand'),
(422, 'Ramgarh', '23.63 N', '85.51 E', 'Jharkhand'),
(423, 'Ranchi', '23.36 N', '85.33 E', 'Jharkhand'),
(424, 'Sahibganj', '25.25 N', '87.62 E', 'Jharkhand'),
(425, 'Saunda', '23.64 N', '85.37 E', 'Jharkhand'),
(426, 'Sindari', '23.68 N', '86.49 E', 'Jharkhand'),
(427, 'Bagalkot', '16.19 N', '75.69 E', 'Karnataka'),
(428, 'Bangalore', '12.97 N', '77.56 E', 'Karnataka'),
(429, 'Basavakalyan', '17.87 N', '76.95 E', 'Karnataka'),
(430, 'Belgaum', '15.86 N', '74.50 E', 'Karnataka'),
(431, 'Bellary', '15.14 N', '76.91 E', 'Karnataka'),
(432, 'Bhadravati', '13.84 N', '75.69 E', 'Karnataka'),
(433, 'Bidar', '17.92 N', '77.52 E', 'Karnataka'),
(434, 'Bijapur', '16.83 N', '75.71 E', 'Karnataka'),
(435, 'Bommanahalli', '13.01 N', '77.63 E', 'Karnataka'),
(436, 'Byatarayanapura', '', '', 'Karnataka'),
(437, 'Challakere', '14.32 N', '76.65 E', 'Karnataka'),
(438, 'Chamrajnagar', '11.92 N', '76.95 E', 'Karnataka'),
(439, 'Channapatna', '12.66 N', '77.19 E', 'Karnataka'),
(440, 'Chik Ballapur', '13.47 N', '77.73 E', 'Karnataka'),
(441, 'Chikmagalur', '13.32 N', '75.76 E', 'Karnataka'),
(442, 'Chintamani', '13.40 N', '78.05 E', 'Karnataka'),
(443, 'Chitradurga', '14.23 N', '76.39 E', 'Karnataka'),
(444, 'Dasarahalli', '13.01 N', '77.49 E', 'Karnataka'),
(445, 'Davanagere', '14.46 N', '75.92 E', 'Karnataka'),
(446, 'Dod Ballapur', '13.30 N', '77.52 E', 'Karnataka'),
(447, 'Gadag', '15.44 N', '75.63 E', 'Karnataka'),
(448, 'Gangawati', '15.44 N', '76.52 E', 'Karnataka'),
(449, 'Gokak', '16.18 N', '74.81 E', 'Karnataka'),
(450, 'Gulbarga', '17.34 N', '76.82 E', 'Karnataka'),
(451, 'Harihar', '14.52 N', '75.80 E', 'Karnataka'),
(452, 'Hassan', '13.01 N', '76.08 E', 'Karnataka'),
(453, 'Haveri', '14.80 N', '75.40 E', 'Karnataka'),
(454, 'Hiriyur', '13.97 N', '76.60 E', 'Karnataka'),
(455, 'Hosakote', '', '', 'Karnataka'),
(456, 'Hospet', '15.28 N', '76.37 E', 'Karnataka'),
(457, 'Hubli', '15.36 N', '75.13 E', 'Karnataka'),
(458, 'Ilkal', '15.97 N', '76.13 E', 'Karnataka'),
(459, 'Jamkhandi', '16.51 N', '75.28 E', 'Karnataka'),
(460, 'Kanakapura', '12.54 N', '77.42 E', 'Karnataka'),
(461, 'Karwar', '14.82 N', '74.12 E', 'Karnataka'),
(462, 'Kolar', '13.14 N', '78.13 E', 'Karnataka'),
(463, 'Kollegal', '12.15 N', '77.12 E', 'Karnataka'),
(464, 'Koppal', '15.35 N', '76.15 E', 'Karnataka'),
(465, 'Krishnarajapura', '12.97 N', '77.74 E', 'Karnataka'),
(466, 'Mahadevapura', '', '', 'Karnataka'),
(467, 'Maisuru', '12.31 N', '76.65 E', 'Karnataka'),
(468, 'Mandya', '12.54 N', '76.89 E', 'Karnataka'),
(469, 'Mangaluru', '12.88 N', '74.84 E', 'Karnataka'),
(470, 'Nipani', '16.41 N', '74.38 E', 'Karnataka'),
(471, 'Pattanagere', '', '', 'Karnataka'),
(472, 'Puttur', '12.77 N', '75.22 E', 'Karnataka'),
(473, 'Rabkavi', '16.47 N', '75.11 E', 'Karnataka'),
(474, 'Raichur', '16.21 N', '77.35 E', 'Karnataka'),
(475, 'Ramanagaram', '12.72 N', '77.27 E', 'Karnataka'),
(476, 'Ranibennur', '14.62 N', '75.61 E', 'Karnataka'),
(477, 'Robertsonpet', '12.97 N', '78.28 E', 'Karnataka'),
(478, 'Sagar', '14.17 N', '75.03 E', 'Karnataka'),
(479, 'Shahabad', '17.13 N', '76.93 E', 'Karnataka'),
(480, 'Shahpur', '16.70 N', '76.83 E', 'Karnataka'),
(481, 'Shimoga', '13.93 N', '75.57 E', 'Karnataka'),
(482, 'Shorapur', '16.52 N', '76.75 E', 'Karnataka'),
(483, 'Sidlaghatta', '13.38 N', '77.87 E', 'Karnataka'),
(484, 'Sira', '13.75 N', '76.90 E', 'Karnataka'),
(485, 'Sirsi', '14.62 N', '74.85 E', 'Karnataka'),
(486, 'Tiptur', '13.27 N', '76.48 E', 'Karnataka'),
(487, 'Tumkur', '13.34 N', '77.10 E', 'Karnataka'),
(488, 'Udupi', '13.35 N', '74.75 E', 'Karnataka'),
(489, 'Ullal', '12.80 N', '74.85 E', 'Karnataka'),
(490, 'Yadgir', '16.77 N', '77.13 E', 'Karnataka'),
(491, 'Yelahanka', '13.10 N', '77.60 E', 'Karnataka'),
(492, 'Alappuzha', '9.50 N', '76.33 E', 'Kerala'),
(493, 'Beypur', '11.18 N', '75.82 E', 'Kerala'),
(494, 'Cheruvannur', '11.21 N', '75.84 E', 'Kerala'),
(495, 'Edakkara', '', '', 'Kerala'),
(496, 'Edathala', '10.03 N', '76.32 E', 'Kerala'),
(497, 'Kalamassery', '10.05 N', '76.27 E', 'Kerala'),
(498, 'Kannan Devan Hills', '', '', 'Kerala'),
(499, 'Kannangad', '12.34 N', '75.09 E', 'Kerala'),
(500, 'Kannur', '11.86 N', '75.35 E', 'Kerala'),
(501, 'Kayankulam', '9.17 N', '76.49 E', 'Kerala'),
(502, 'Kochi', '10.02 N', '76.22 E', 'Kerala'),
(503, 'Kollam', '8.89 N', '76.58 E', 'Kerala'),
(504, 'Kottayam', '9.60 N', '76.52 E', 'Kerala'),
(505, 'Koyilandi', '11.43 N', '75.70 E', 'Kerala'),
(506, 'Kozhikkod', '11.26 N', '75.78 E', 'Kerala'),
(507, 'Kunnamkulam', '10.65 N', '76.08 E', 'Kerala'),
(508, 'Malappuram', '11.07 N', '76.06 E', 'Kerala'),
(509, 'Manjeri', '11.12 N', '76.11 E', 'Kerala'),
(510, 'Nedumangad', '8.61 N', '77.00 E', 'Kerala'),
(511, 'Neyyattinkara', '8.40 N', '77.08 E', 'Kerala'),
(512, 'Palakkad', '10.78 N', '76.65 E', 'Kerala'),
(513, 'Pallichal', '', '', 'Kerala'),
(514, 'Payyannur', '12.10 N', '75.19 E', 'Kerala'),
(515, 'Ponnani', '10.78 N', '75.92 E', 'Kerala'),
(516, 'Talipparamba', '12.03 N', '75.36 E', 'Kerala'),
(517, 'Thalassery', '11.75 N', '75.49 E', 'Kerala'),
(518, 'Thiruvananthapuram', '8.51 N', '76.95 E', 'Kerala'),
(519, 'Thrippunithura', '9.94 N', '76.35 E', 'Kerala'),
(520, 'Thrissur', '10.52 N', '76.21 E', 'Kerala'),
(521, 'Tirur', '10.91 N', '75.92 E', 'Kerala'),
(522, 'Tiruvalla', '9.39 N', '76.57 E', 'Kerala'),
(523, 'Vadakara', '11.61 N', '75.58 E', 'Kerala'),
(524, 'Ashoknagar', '24.57 N', '77.72 E', 'Madhya Pradesh'),
(525, 'Balaghat', '21.80 N', '80.18 E', 'Madhya Pradesh'),
(526, 'Basoda', '23.85 N', '77.93 E', 'Madhya Pradesh'),
(527, 'Betul', '21.92 N', '77.90 E', 'Madhya Pradesh'),
(528, 'Bhind', '26.57 N', '78.77 E', 'Madhya Pradesh'),
(529, 'Bhopal', '23.24 N', '77.40 E', 'Madhya Pradesh'),
(530, 'BinaEtawa', '24.20 N', '78.20 E', 'Madhya Pradesh'),
(531, 'Burhanpur', '21.33 N', '76.22 E', 'Madhya Pradesh'),
(532, 'Chhatarpur', '24.92 N', '79.58 E', 'Madhya Pradesh'),
(533, 'Chhindwara', '22.07 N', '78.94 E', 'Madhya Pradesh'),
(534, 'Dabra', '25.90 N', '78.33 E', 'Madhya Pradesh'),
(535, 'Damoh', '23.85 N', '79.44 E', 'Madhya Pradesh'),
(536, 'Datia', '25.67 N', '78.45 E', 'Madhya Pradesh'),
(537, 'Dewas', '22.97 N', '76.05 E', 'Madhya Pradesh'),
(538, 'Dhar', '22.60 N', '75.29 E', 'Madhya Pradesh'),
(539, 'Gohad', '26.43 N', '78.45 E', 'Madhya Pradesh'),
(540, 'Guna', '24.65 N', '77.30 E', 'Madhya Pradesh'),
(541, 'Gwalior', '26.23 N', '78.17 E', 'Madhya Pradesh'),
(542, 'Harda', '22.33 N', '77.11 E', 'Madhya Pradesh'),
(543, 'Hoshangabad', '22.75 N', '77.71 E', 'Madhya Pradesh'),
(544, 'Indore', '22.72 N', '75.86 E', 'Madhya Pradesh'),
(545, 'Itarsi', '22.62 N', '77.76 E', 'Madhya Pradesh'),
(546, 'Jabalpur', '23.17 N', '79.94 E', 'Madhya Pradesh'),
(547, 'Jabalpur Cantonment', '23.16 N', '79.95 E', 'Madhya Pradesh'),
(548, 'Jaora', '23.64 N', '75.11 E', 'Madhya Pradesh'),
(549, 'Khandwa', '21.83 N', '76.35 E', 'Madhya Pradesh'),
(550, 'Khargone', '21.83 N', '75.60 E', 'Madhya Pradesh'),
(551, 'Mandidip', '23.10 N', '77.52 E', 'Madhya Pradesh'),
(552, 'Mandsaur', '24.07 N', '75.07 E', 'Madhya Pradesh'),
(553, 'Mau', '22.56 N', '75.75 E', 'Madhya Pradesh'),
(554, 'Morena', '26.51 N', '77.99 E', 'Madhya Pradesh'),
(555, 'Murwara', '23.85 N', '80.39 E', 'Madhya Pradesh'),
(556, 'Nagda', '23.46 N', '75.42 E', 'Madhya Pradesh'),
(557, 'Nimach', '24.47 N', '74.87 E', 'Madhya Pradesh'),
(558, 'Pithampur', '', '', 'Madhya Pradesh'),
(559, 'Raghogarh', '24.45 N', '77.20 E', 'Madhya Pradesh'),
(560, 'Ratlam', '23.35 N', '75.03 E', 'Madhya Pradesh'),
(561, 'Rewa', '24.53 N', '81.29 E', 'Madhya Pradesh'),
(562, 'Sagar', '23.85 N', '78.75 E', 'Madhya Pradesh'),
(563, 'Sarni', '22.04 N', '78.27 E', 'Madhya Pradesh'),
(564, 'Satna', '24.58 N', '80.83 E', 'Madhya Pradesh'),
(565, 'Sehore', '23.20 N', '77.08 E', 'Madhya Pradesh'),
(566, 'Sendhwa', '21.68 N', '75.10 E', 'Madhya Pradesh'),
(567, 'Seoni', '22.10 N', '79.55 E', 'Madhya Pradesh'),
(568, 'Shahdol', '23.30 N', '81.36 E', 'Madhya Pradesh'),
(569, 'Shajapur', '23.43 N', '76.27 E', 'Madhya Pradesh'),
(570, 'Sheopur', '25.67 N', '76.70 E', 'Madhya Pradesh'),
(571, 'Shivapuri', '25.43 N', '77.65 E', 'Madhya Pradesh'),
(572, 'Sidhi', '24.42 N', '81.88 E', 'Madhya Pradesh'),
(573, 'Singrauli', '23.84 N', '82.27 E', 'Madhya Pradesh'),
(574, 'Tikamgarh', '24.74 N', '78.83 E', 'Madhya Pradesh'),
(575, 'Ujjain', '23.19 N', '75.78 E', 'Madhya Pradesh'),
(576, 'Vidisha', '23.53 N', '77.80 E', 'Madhya Pradesh'),
(577, 'Achalpur', '21.26 N', '77.50 E', 'Maharashtra'),
(578, 'Ahmadnagar', '19.10 N', '74.74 E', 'Maharashtra'),
(579, 'Akola', '20.71 N', '77.00 E', 'Maharashtra'),
(580, 'Akot', '21.10 N', '77.05 E', 'Maharashtra'),
(581, 'Amalner', '21.05 N', '75.06 E', 'Maharashtra'),
(582, 'Ambajogai', '18.73 N', '76.38 E', 'Maharashtra'),
(583, 'Amravati', '20.95 N', '77.76 E', 'Maharashtra'),
(584, 'Anjangaon', '21.16 N', '77.31 E', 'Maharashtra'),
(585, 'Aurangabad', '19.89 N', '75.32 E', 'Maharashtra'),
(586, 'Badlapur', '19.15 N', '73.27 E', 'Maharashtra'),
(587, 'Ballarpur', '19.85 N', '79.35 E', 'Maharashtra'),
(588, 'Baramati', '18.15 N', '74.58 E', 'Maharashtra'),
(589, 'Barsi', '18.24 N', '75.69 E', 'Maharashtra'),
(590, 'Basmat', '19.32 N', '77.17 E', 'Maharashtra'),
(591, 'Bhadravati', '20.11 N', '79.12 E', 'Maharashtra'),
(592, 'Bhandara', '21.18 N', '79.65 E', 'Maharashtra'),
(593, 'Bhiwandi', '19.30 N', '73.05 E', 'Maharashtra'),
(594, 'Bhusawal', '21.05 N', '75.78 E', 'Maharashtra'),
(595, 'Bid', '18.99 N', '75.76 E', 'Maharashtra'),
(596, 'Mumbai', '18.96 N', '72.82 E', 'Maharashtra'),
(597, 'Buldana', '20.54 N', '76.18 E', 'Maharashtra'),
(598, 'Chalisgaon', '20.46 N', '74.99 E', 'Maharashtra'),
(599, 'Chandrapur', '19.96 N', '79.30 E', 'Maharashtra'),
(600, 'Chikhli', '20.35 N', '76.25 E', 'Maharashtra'),
(601, 'Chiplun', '17.53 N', '73.52 E', 'Maharashtra'),
(602, 'Chopda', '21.25 N', '75.28 E', 'Maharashtra'),
(603, 'Dahanu', '19.97 N', '72.73 E', 'Maharashtra'),
(604, 'Deolali', '19.95 N', '73.84 E', 'Maharashtra'),
(605, 'Dhule', '20.90 N', '74.77 E', 'Maharashtra'),
(606, 'Digdoh', '', '', 'Maharashtra'),
(607, 'Diglur', '18.55 N', '77.60 E', 'Maharashtra'),
(608, 'Gadchiroli', '20.17 N', '80.00 E', 'Maharashtra'),
(609, 'Gondiya', '21.47 N', '80.20 E', 'Maharashtra'),
(610, 'Hinganghat', '20.56 N', '78.83 E', 'Maharashtra'),
(611, 'Hingoli', '19.72 N', '77.14 E', 'Maharashtra'),
(612, 'Ichalkaranji', '16.69 N', '74.46 E', 'Maharashtra'),
(613, 'Jalgaon', '21.01 N', '75.56 E', 'Maharashtra'),
(614, 'Jalna', '19.85 N', '75.88 E', 'Maharashtra'),
(615, 'Kalyan', '19.25 N', '73.16 E', 'Maharashtra'),
(616, 'Kamthi', '21.23 N', '79.20 E', 'Maharashtra'),
(617, 'Karanja', '20.48 N', '77.48 E', 'Maharashtra'),
(618, 'Khadki', '18.57 N', '73.83 E', 'Maharashtra'),
(619, 'Khamgaon', '20.70 N', '76.56 E', 'Maharashtra'),
(620, 'Khopoli', '18.78 N', '73.33 E', 'Maharashtra'),
(621, 'Kolhapur', '16.70 N', '74.22 E', 'Maharashtra'),
(622, 'Kopargaon', '19.88 N', '74.48 E', 'Maharashtra'),
(623, 'Latur', '18.41 N', '76.58 E', 'Maharashtra'),
(624, 'Lonavale', '18.75 N', '73.42 E', 'Maharashtra'),
(625, 'Malegaon', '20.56 N', '74.52 E', 'Maharashtra'),
(626, 'Malkapur', '20.90 N', '76.19 E', 'Maharashtra'),
(627, 'Manmad', '20.26 N', '74.43 E', 'Maharashtra'),
(628, 'Mira Bhayandar', '19.29 N', '72.85 E', 'Maharashtra'),
(629, 'Nagpur', '21.16 N', '79.08 E', 'Maharashtra'),
(630, 'Nalasopara', '19.43 N', '72.78 E', 'Maharashtra'),
(631, 'Nanded', '19.17 N', '77.29 E', 'Maharashtra'),
(632, 'Nandurbar', '21.38 N', '74.23 E', 'Maharashtra'),
(633, 'Nashik', '20.01 N', '73.78 E', 'Maharashtra'),
(634, 'Navghar', '19.34 N', '72.90 E', 'Maharashtra'),
(636, 'Navi Mumbai', '19.00 N', '73.10 E', 'Maharashtra'),
(637, 'Osmanabad', '18.17 N', '76.03 E', 'Maharashtra'),
(638, 'Palghar', '19.68 N', '72.75 E', 'Maharashtra'),
(639, 'Pandharpur', '17.68 N', '75.31 E', 'Maharashtra'),
(640, 'Parbhani', '19.27 N', '76.76 E', 'Maharashtra'),
(641, 'Phaltan', '17.98 N', '74.43 E', 'Maharashtra'),
(642, 'Pimpri', '18.62 N', '73.80 E', 'Maharashtra'),
(643, 'Pune', '18.53 N', '73.84 E', 'Maharashtra'),
(644, 'Pune Cantonment', '18.50 N', '73.88 E', 'Maharashtra'),
(645, 'Pusad', '19.91 N', '77.57 E', 'Maharashtra'),
(646, 'Ratnagiri', '17.00 N', '73.29 E', 'Maharashtra'),
(647, 'SangliMiraj', '16.86 N', '74.57 E', 'Maharashtra'),
(648, 'Satara', '17.70 N', '74.00 E', 'Maharashtra'),
(649, 'Shahada', '21.55 N', '74.47 E', 'Maharashtra'),
(650, 'Shegaon', '20.78 N', '76.68 E', 'Maharashtra'),
(651, 'Shirpur', '21.35 N', '74.88 E', 'Maharashtra'),
(652, 'Sholapur', '17.67 N', '75.89 E', 'Maharashtra'),
(653, 'Shrirampur', '19.63 N', '74.64 E', 'Maharashtra'),
(654, 'Sillod', '20.30 N', '75.65 E', 'Maharashtra'),
(655, 'Thana', '19.20 N', '72.97 E', 'Maharashtra'),
(656, 'Udgir', '18.40 N', '77.11 E', 'Maharashtra'),
(657, 'Ulhasnagar', '19.23 N', '73.15 E', 'Maharashtra'),
(658, 'Uran Islampur', '17.05 N', '74.27 E', 'Maharashtra'),
(659, 'Vasai', '19.36 N', '72.80 E', 'Maharashtra'),
(660, 'Virar', '19.47 N', '72.79 E', 'Maharashtra'),
(661, 'Wadi', '', '', 'Maharashtra'),
(662, 'Wani', '20.07 N', '78.95 E', 'Maharashtra'),
(663, 'Wardha', '20.75 N', '78.60 E', 'Maharashtra'),
(664, 'Warud', '21.47 N', '78.27 E', 'Maharashtra'),
(665, 'Washim', '20.10 N', '77.13 E', 'Maharashtra'),
(666, 'Yavatmal', '20.41 N', '78.13 E', 'Maharashtra'),
(667, 'Imphal', '24.79 N', '93.94 E', 'Manipur'),
(668, 'Shillong', '25.57 N', '91.87 E', 'Meghalaya'),
(669, 'Tura', '25.52 N', '90.22 E', 'Meghalaya'),
(670, 'Aizawl', '23.71 N', '92.71 E', 'Mizoram'),
(671, 'Lunglei', '22.88 N', '92.73 E', 'Mizoram'),
(672, 'Dimapur', '25.92 N', '93.73 E', 'Nagaland'),
(673, 'Kohima', '25.67 N', '94.11 E', 'Nagaland'),
(674, 'Wokha', '26.10 N', '94.27 E', 'Nagaland'),
(675, 'Balangir', '20.71 N', '83.50 E', 'Orissa'),
(676, 'Baleshwar', '21.49 N', '86.95 E', 'Orissa'),
(677, 'Barbil', '22.12 N', '85.40 E', 'Orissa'),
(678, 'Bargarh', '21.34 N', '83.61 E', 'Orissa'),
(679, 'Baripada', '21.95 N', '86.73 E', 'Orissa'),
(680, 'Bhadrak', '21.06 N', '86.52 E', 'Orissa'),
(681, 'Bhawanipatna', '19.91 N', '83.17 E', 'Orissa'),
(682, 'Bhubaneswar', '20.27 N', '85.84 E', 'Orissa'),
(683, 'Brahmapur', '19.32 N', '84.80 E', 'Orissa'),
(684, 'Brajrajnagar', '21.82 N', '83.91 E', 'Orissa'),
(685, 'Dhenkanal', '20.67 N', '85.60 E', 'Orissa'),
(686, 'Jaypur', '18.86 N', '82.56 E', 'Orissa'),
(687, 'Jharsuguda', '21.87 N', '84.01 E', 'Orissa'),
(688, 'Kataka', '20.47 N', '85.88 E', 'Orissa'),
(689, 'Kendujhar', '21.63 N', '85.58 E', 'Orissa'),
(690, 'Paradwip', '20.32 N', '86.62 E', 'Orissa'),
(691, 'Puri', '19.81 N', '85.83 E', 'Orissa'),
(692, 'Raurkela', '22.24 N', '84.81 E', 'Orissa'),
(693, 'Raurkela Industrial Township', '', '', 'Orissa'),
(694, 'Rayagada', '19.18 N', '83.41 E', 'Orissa'),
(695, 'Sambalpur', '21.47 N', '83.97 E', 'Orissa'),
(696, 'Sunabeda', '18.69 N', '82.86 E', 'Orissa'),
(697, 'Karaikal', '10.93 N', '79.83 E', 'Pondicherry'),
(698, 'Ozhukarai', '11.94 N', '79.77 E', 'Pondicherry'),
(699, 'Pondicherry', '11.94 N', '79.83 E', 'Pondicherry'),
(700, 'Abohar', '30.14 N', '74.20 E', 'Punjab'),
(701, 'Amritsar', '31.64 N', '74.87 E', 'Punjab'),
(702, 'Barnala', '30.39 N', '75.54 E', 'Punjab'),
(703, 'Batala', '31.82 N', '75.21 E', 'Punjab'),
(704, 'Bathinda', '30.17 N', '74.97 E', 'Punjab'),
(705, 'Dhuri', '30.37 N', '75.87 E', 'Punjab'),
(706, 'Faridkot', '30.68 N', '74.74 E', 'Punjab'),
(707, 'Fazilka', '30.41 N', '74.02 E', 'Punjab'),
(708, 'Firozpur', '30.92 N', '74.61 E', 'Punjab'),
(709, 'Firozpur Cantonment', '30.95 N', '74.60 E', 'Punjab'),
(710, 'Gobindgarh', '30.66 N', '76.31 E', 'Punjab'),
(711, 'Gurdaspur', '32.04 N', '75.40 E', 'Punjab'),
(712, 'Hoshiarpur', '31.53 N', '75.91 E', 'Punjab'),
(713, 'Jagraon', '30.78 N', '75.48 E', 'Punjab'),
(714, 'Jalandhar', '31.33 N', '75.57 E', 'Punjab'),
(715, 'Kapurthala', '31.38 N', '75.38 E', 'Punjab'),
(716, 'Khanna', '30.71 N', '76.21 E', 'Punjab'),
(717, 'Kot Kapura', '30.59 N', '74.80 E', 'Punjab'),
(718, 'Ludhiana', '30.91 N', '75.84 E', 'Punjab'),
(719, 'Malaut', '30.23 N', '74.48 E', 'Punjab'),
(720, 'Maler Kotla', '30.54 N', '75.87 E', 'Punjab'),
(721, 'Mansa', '29.98 N', '75.39 E', 'Punjab'),
(722, 'Moga', '30.82 N', '75.17 E', 'Punjab'),
(723, 'Mohali', '30.78 N', '76.69 E', 'Punjab'),
(724, 'Pathankot', '32.27 N', '75.64 E', 'Punjab'),
(725, 'Patiala', '30.32 N', '76.39 E', 'Punjab'),
(726, 'Phagwara', '31.22 N', '75.76 E', 'Punjab'),
(727, 'Rajpura', '30.48 N', '76.59 E', 'Punjab'),
(728, 'Rupnagar', '30.98 N', '76.52 E', 'Punjab'),
(729, 'Samana', '30.15 N', '76.20 E', 'Punjab'),
(730, 'Sangrur', '30.25 N', '75.84 E', 'Punjab'),
(731, 'Sirhind', '30.65 N', '76.38 E', 'Punjab'),
(732, 'Sunam', '30.13 N', '75.80 E', 'Punjab'),
(733, 'Tarn Taran', '31.45 N', '74.92 E', 'Punjab'),
(734, 'Ajmer', '26.45 N', '74.64 E', 'Rajasthan'),
(735, 'Alwar', '27.56 N', '76.60 E', 'Rajasthan'),
(736, 'Balotra', '25.83 N', '72.23 E', 'Rajasthan'),
(737, 'Banswara', '23.54 N', '74.44 E', 'Rajasthan'),
(738, 'Baran', '25.10 N', '76.51 E', 'Rajasthan'),
(739, 'Bari', '26.65 N', '77.60 E', 'Rajasthan'),
(740, 'Barmer', '25.75 N', '71.39 E', 'Rajasthan'),
(741, 'Beawar', '26.10 N', '74.30 E', 'Rajasthan'),
(742, 'Bharatpur', '27.23 N', '77.49 E', 'Rajasthan'),
(743, 'Bhilwara', '25.35 N', '74.63 E', 'Rajasthan'),
(744, 'Bhiwadi', '', '', 'Rajasthan'),
(745, 'Bikaner', '28.03 N', '73.32 E', 'Rajasthan'),
(746, 'Bundi', '25.45 N', '75.63 E', 'Rajasthan'),
(747, 'Chittaurgarh', '24.89 N', '74.63 E', 'Rajasthan'),
(748, 'Chomun', '27.17 N', '75.72 E', 'Rajasthan'),
(749, 'Churu', '28.31 N', '74.96 E', 'Rajasthan'),
(750, 'Daosa', '26.88 N', '76.33 E', 'Rajasthan'),
(751, 'Dhaulpur', '26.70 N', '77.87 E', 'Rajasthan'),
(752, 'Didwana', '27.39 N', '74.57 E', 'Rajasthan'),
(753, 'Fatehpur', '27.99 N', '74.95 E', 'Rajasthan'),
(754, 'Ganganagar', '29.93 N', '73.86 E', 'Rajasthan'),
(755, 'Gangapur', '26.47 N', '76.72 E', 'Rajasthan'),
(756, 'Hanumangarh', '29.62 N', '74.29 E', 'Rajasthan'),
(757, 'Hindaun', '26.74 N', '77.02 E', 'Rajasthan'),
(758, 'Jaipur', '26.92 N', '75.80 E', 'Rajasthan'),
(759, 'Jaisalmer', '26.92 N', '70.90 E', 'Rajasthan'),
(760, 'Jalor', '25.35 N', '72.62 E', 'Rajasthan'),
(761, 'Jhalawar', '24.60 N', '76.15 E', 'Rajasthan'),
(762, 'Jhunjhunun', '28.13 N', '75.39 E', 'Rajasthan'),
(763, 'Jodhpur', '26.29 N', '73.02 E', 'Rajasthan'),
(764, 'Karauli', '26.50 N', '77.02 E', 'Rajasthan'),
(765, 'Kishangarh', '26.58 N', '74.86 E', 'Rajasthan'),
(766, 'Kota', '25.18 N', '75.83 E', 'Rajasthan'),
(767, 'Kuchaman', '27.15 N', '74.85 E', 'Rajasthan'),
(768, 'Ladnun', '27.64 N', '74.38 E', 'Rajasthan'),
(769, 'Makrana', '27.05 N', '74.72 E', 'Rajasthan'),
(770, 'Nagaur', '27.21 N', '73.73 E', 'Rajasthan'),
(771, 'Nawalgarh', '27.85 N', '75.27 E', 'Rajasthan'),
(772, 'Nimbahera', '24.62 N', '74.68 E', 'Rajasthan'),
(773, 'Nokha', '27.60 N', '73.42 E', 'Rajasthan'),
(774, 'Pali', '25.79 N', '73.32 E', 'Rajasthan'),
(775, 'Rajsamand', '25.07 N', '73.88 E', 'Rajasthan'),
(776, 'Ratangarh', '28.09 N', '74.60 E', 'Rajasthan'),
(777, 'Sardarshahr', '28.45 N', '74.48 E', 'Rajasthan'),
(778, 'Sawai Madhopur', '26.03 N', '76.34 E', 'Rajasthan'),
(779, 'Sikar', '27.61 N', '75.13 E', 'Rajasthan'),
(780, 'Sujangarh', '27.70 N', '74.46 E', 'Rajasthan'),
(781, 'Suratgarh', '29.32 N', '73.90 E', 'Rajasthan'),
(782, 'Tonk', '26.17 N', '75.78 E', 'Rajasthan'),
(783, 'Udaipur', '24.58 N', '73.69 E', 'Rajasthan'),
(784, 'Alandur', '13.03 N', '80.23 E', 'Tamil Nadu'),
(785, 'Ambattur', '13.11 N', '80.17 E', 'Tamil Nadu'),
(786, 'Ambur', '12.80 N', '78.72 E', 'Tamil Nadu'),
(787, 'Arakonam', '13.08 N', '79.67 E', 'Tamil Nadu'),
(788, 'Arani', '12.68 N', '79.28 E', 'Tamil Nadu'),
(789, 'Aruppukkottai', '9.51 N', '78.09 E', 'Tamil Nadu'),
(790, 'Attur', '11.60 N', '78.60 E', 'Tamil Nadu'),
(791, 'Avadi', '13.12 N', '80.11 E', 'Tamil Nadu'),
(792, 'Avaniapuram', '9.86 N', '78.12 E', 'Tamil Nadu'),
(793, 'Bodinayakkanur', '10.01 N', '77.35 E', 'Tamil Nadu'),
(794, 'Chengalpattu', '12.70 N', '79.97 E', 'Tamil Nadu'),
(795, 'Dharapuram', '10.74 N', '77.52 E', 'Tamil Nadu'),
(796, 'Dharmapuri', '12.13 N', '78.16 E', 'Tamil Nadu'),
(797, 'Dindigul', '10.36 N', '77.97 E', 'Tamil Nadu'),
(798, 'Erode', '11.35 N', '77.73 E', 'Tamil Nadu'),
(799, 'Gopichettipalaiyam', '11.46 N', '77.43 E', 'Tamil Nadu'),
(800, 'Gudalur', '11.76 N', '79.75 E', 'Tamil Nadu'),
(801, 'Gudiyattam', '12.95 N', '78.86 E', 'Tamil Nadu'),
(802, 'Hosur', '12.72 N', '77.82 E', 'Tamil Nadu'),
(803, 'Idappadi', '11.58 N', '77.85 E', 'Tamil Nadu'),
(804, 'Kadayanallur', '9.08 N', '77.35 E', 'Tamil Nadu'),
(805, 'Kambam', '9.74 N', '77.28 E', 'Tamil Nadu'),
(806, 'Kanchipuram', '12.84 N', '79.70 E', 'Tamil Nadu'),
(807, 'Karur', '10.96 N', '78.07 E', 'Tamil Nadu'),
(808, 'Kavundampalaiyam', '11.05 N', '76.92 E', 'Tamil Nadu'),
(809, 'Kovilpatti', '9.19 N', '77.86 E', 'Tamil Nadu'),
(810, 'Koyampattur', '11.01 N', '76.96 E', 'Tamil Nadu'),
(811, 'Krishnagiri', '12.54 N', '78.21 E', 'Tamil Nadu'),
(812, 'Kumarapalaiyam', '11.44 N', '77.73 E', 'Tamil Nadu'),
(813, 'Kumbakonam', '10.97 N', '79.38 E', 'Tamil Nadu'),
(814, 'Kuniyamuthur', '10.98 N', '76.95 E', 'Tamil Nadu'),
(815, 'Kurichi', '10.92 N', '76.96 E', 'Tamil Nadu'),
(816, 'Madhavaram', '13.02 N', '80.26 E', 'Tamil Nadu'),
(817, 'Madras', '13.09 N', '80.27 E', 'Tamil Nadu'),
(818, 'Madurai', '9.92 N', '78.12 E', 'Tamil Nadu'),
(819, 'Maduravoyal', '', '', 'Tamil Nadu'),
(820, 'Mannargudi', '10.67 N', '79.45 E', 'Tamil Nadu'),
(821, 'Mayiladuthurai', '11.11 N', '79.65 E', 'Tamil Nadu'),
(822, 'Mettupalayam', '11.30 N', '76.94 E', 'Tamil Nadu'),
(823, 'Mettur', '11.80 N', '77.80 E', 'Tamil Nadu'),
(824, 'Nagapattinam', '10.80 N', '79.84 E', 'Tamil Nadu'),
(825, 'Nagercoil', '8.18 N', '77.43 E', 'Tamil Nadu'),
(826, 'Namakkal', '11.23 N', '78.17 E', 'Tamil Nadu'),
(827, 'Nerkunram', '13.04 N', '80.26 E', 'Tamil Nadu'),
(828, 'Neyveli', '11.62 N', '79.48 E', 'Tamil Nadu'),
(829, 'Pallavaram', '12.99 N', '80.16 E', 'Tamil Nadu'),
(830, 'Pammal', '12.97 N', '80.11 E', 'Tamil Nadu'),
(831, 'Pannuratti', '11.78 N', '79.55 E', 'Tamil Nadu'),
(832, 'Paramakkudi', '9.54 N', '78.59 E', 'Tamil Nadu'),
(833, 'Pattukkottai', '10.43 N', '79.31 E', 'Tamil Nadu'),
(834, 'Pollachi', '10.67 N', '77.00 E', 'Tamil Nadu'),
(835, 'Pudukkottai', '10.39 N', '78.82 E', 'Tamil Nadu'),
(836, 'Puliyankudi', '9.18 N', '77.40 E', 'Tamil Nadu'),
(837, 'Punamalli', '13.05 N', '80.11 E', 'Tamil Nadu'),
(838, 'Rajapalaiyam', '9.46 N', '77.55 E', 'Tamil Nadu'),
(839, 'Ramanathapuram', '9.37 N', '78.83 E', 'Tamil Nadu'),
(840, 'Salem', '11.67 N', '78.16 E', 'Tamil Nadu'),
(841, 'Sankarankoil', '9.17 N', '77.54 E', 'Tamil Nadu'),
(842, 'Sivakasi', '9.46 N', '77.79 E', 'Tamil Nadu'),
(843, 'Srivilliputtur', '9.52 N', '77.63 E', 'Tamil Nadu'),
(844, 'Tambaram', '12.93 N', '80.12 E', 'Tamil Nadu'),
(845, 'Tenkasi', '8.96 N', '77.31 E', 'Tamil Nadu'),
(846, 'Thanjavur', '10.79 N', '79.13 E', 'Tamil Nadu'),
(847, 'Theni Allinagaram', '10.02 N', '77.48 E', 'Tamil Nadu'),
(848, 'Thiruthangal', '9.48 N', '77.83 E', 'Tamil Nadu'),
(849, 'Thiruvarur', '10.78 N', '79.64 E', 'Tamil Nadu'),
(850, 'Thuthukkudi', '8.81 N', '78.14 E', 'Tamil Nadu'),
(851, 'Tindivanam', '12.24 N', '79.65 E', 'Tamil Nadu'),
(852, 'Tiruchchirappalli', '10.81 N', '78.69 E', 'Tamil Nadu'),
(853, 'Tiruchengode', '11.38 N', '77.90 E', 'Tamil Nadu'),
(854, 'Tirunelveli', '8.73 N', '77.69 E', 'Tamil Nadu'),
(855, 'Tirupathur', '12.50 N', '78.57 E', 'Tamil Nadu'),
(856, 'Tiruppur', '11.09 N', '77.35 E', 'Tamil Nadu'),
(857, 'Tiruvannamalai', '12.24 N', '79.07 E', 'Tamil Nadu'),
(858, 'Tiruvottiyur', '13.16 N', '80.29 E', 'Tamil Nadu'),
(859, 'Udagamandalam', '11.42 N', '76.69 E', 'Tamil Nadu'),
(860, 'Udumalaipettai', '10.58 N', '77.24 E', 'Tamil Nadu'),
(861, 'Valparai', '10.38 N', '76.99 E', 'Tamil Nadu'),
(862, 'Vaniyambadi', '12.69 N', '78.60 E', 'Tamil Nadu'),
(863, 'Velampalaiyam', '', '', 'Tamil Nadu'),
(864, 'Velluru', '12.92 N', '79.13 E', 'Tamil Nadu'),
(865, 'Viluppuram', '11.95 N', '79.49 E', 'Tamil Nadu'),
(866, 'Virappanchatram', '11.40 N', '77.70 E', 'Tamil Nadu'),
(867, 'Virudhachalam', '11.51 N', '79.32 E', 'Tamil Nadu'),
(868, 'Virudunagar', '9.59 N', '77.95 E', 'Tamil Nadu'),
(869, 'Agartala', '23.84 N', '91.27 E', 'Tripura'),
(870, 'Agartala MCl', '', '', 'Tripura'),
(871, 'Badharghat', '', '', 'Tripura'),
(872, 'Agra', '27.19 N', '78.01 E', 'Uttar Pradesh'),
(873, 'Aligarh', '27.89 N', '78.06 E', 'Uttar Pradesh'),
(874, 'Allahabad', '25.45 N', '81.84 E', 'Uttar Pradesh'),
(875, 'Amroha', '28.91 N', '78.46 E', 'Uttar Pradesh'),
(876, 'Aonla', '28.28 N', '79.15 E', 'Uttar Pradesh'),
(877, 'Auraiya', '26.47 N', '79.50 E', 'Uttar Pradesh'),
(878, 'Ayodhya', '26.80 N', '82.20 E', 'Uttar Pradesh'),
(879, 'Azamgarh', '26.07 N', '83.18 E', 'Uttar Pradesh'),
(880, 'Baheri', '28.78 N', '79.50 E', 'Uttar Pradesh'),
(881, 'Bahraich', '27.58 N', '81.59 E', 'Uttar Pradesh'),
(882, 'Ballia', '25.76 N', '84.15 E', 'Uttar Pradesh'),
(883, 'Balrampur', '27.43 N', '82.18 E', 'Uttar Pradesh'),
(884, 'Banda', '25.48 N', '80.33 E', 'Uttar Pradesh'),
(885, 'Baraut', '29.10 N', '77.26 E', 'Uttar Pradesh'),
(886, 'Bareli', '28.36 N', '79.41 E', 'Uttar Pradesh'),
(887, 'Basti', '26.80 N', '82.74 E', 'Uttar Pradesh'),
(888, 'Behta Hajipur', '', '', 'Uttar Pradesh'),
(889, 'Bela', '25.92 N', '81.99 E', 'Uttar Pradesh'),
(890, 'Bhadohi', '25.40 N', '82.56 E', 'Uttar Pradesh'),
(891, 'Bijnor', '29.38 N', '78.13 E', 'Uttar Pradesh'),
(892, 'Bisalpur', '28.30 N', '79.80 E', 'Uttar Pradesh'),
(893, 'Biswan', '27.50 N', '81.00 E', 'Uttar Pradesh'),
(894, 'Budaun', '28.04 N', '79.12 E', 'Uttar Pradesh'),
(895, 'Bulandshahr', '28.41 N', '77.85 E', 'Uttar Pradesh'),
(896, 'Chandausi', '28.46 N', '78.78 E', 'Uttar Pradesh'),
(897, 'Chandpur', '29.14 N', '78.27 E', 'Uttar Pradesh'),
(898, 'Chhibramau', '27.15 N', '79.52 E', 'Uttar Pradesh'),
(899, 'Chitrakut Dham', '25.20 N', '80.84 E', 'Uttar Pradesh'),
(900, 'Dadri', '28.57 N', '77.55 E', 'Uttar Pradesh'),
(901, 'Deoband', '29.70 N', '77.67 E', 'Uttar Pradesh'),
(902, 'Deoria', '26.51 N', '83.78 E', 'Uttar Pradesh'),
(903, 'Etah', '27.57 N', '78.64 E', 'Uttar Pradesh'),
(904, 'Etawah', '26.78 N', '79.01 E', 'Uttar Pradesh'),
(905, 'Faizabad', '26.78 N', '82.14 E', 'Uttar Pradesh'),
(906, 'Faridpur', '28.22 N', '79.53 E', 'Uttar Pradesh'),
(907, 'Farrukhabad', '27.40 N', '79.57 E', 'Uttar Pradesh'),
(908, 'Fatehpur', '25.93 N', '80.81 E', 'Uttar Pradesh'),
(909, 'Firozabad', '27.15 N', '78.39 E', 'Uttar Pradesh'),
(910, 'Gajraula', '28.85 N', '78.23 E', 'Uttar Pradesh'),
(911, 'Ganga Ghat', '26.52 N', '80.45 E', 'Uttar Pradesh'),
(912, 'Gangoh', '29.77 N', '77.25 E', 'Uttar Pradesh'),
(913, 'Ghaziabad', '28.66 N', '77.41 E', 'Uttar Pradesh'),
(914, 'Ghazipur', '25.59 N', '83.59 E', 'Uttar Pradesh'),
(915, 'Gola Gokarannath', '28.08 N', '80.47 E', 'Uttar Pradesh'),
(916, 'Gonda', '27.14 N', '81.95 E', 'Uttar Pradesh'),
(917, 'Gorakhpur', '26.76 N', '83.36 E', 'Uttar Pradesh'),
(918, 'Hapur', '28.73 N', '77.77 E', 'Uttar Pradesh'),
(919, 'Hardoi', '27.42 N', '80.12 E', 'Uttar Pradesh'),
(920, 'Hasanpur', '28.72 N', '78.28 E', 'Uttar Pradesh'),
(921, 'Hathras', '27.60 N', '78.04 E', 'Uttar Pradesh'),
(922, 'Jahangirabad', '28.42 N', '78.10 E', 'Uttar Pradesh'),
(923, 'Jalaun', '26.15 N', '79.35 E', 'Uttar Pradesh'),
(924, 'Jaunpur', '25.76 N', '82.69 E', 'Uttar Pradesh'),
(925, 'Jhansi', '25.45 N', '78.56 E', 'Uttar Pradesh'),
(926, 'Kadi', '23.31 N', '72.33 E', 'Uttar Pradesh'),
(927, 'Kairana', '29.40 N', '77.20 E', 'Uttar Pradesh'),
(928, 'Kannauj', '27.06 N', '79.91 E', 'Uttar Pradesh'),
(929, 'Kanpur', '26.47 N', '80.33 E', 'Uttar Pradesh'),
(930, 'Kanpur Cantonment', '26.50 N', '80.28 E', 'Uttar Pradesh'),
(931, 'Kasganj', '27.81 N', '78.63 E', 'Uttar Pradesh'),
(932, 'Khatauli', '29.28 N', '77.72 E', 'Uttar Pradesh'),
(933, 'Khora', '', '', 'Uttar Pradesh'),
(934, 'Khurja', '28.26 N', '77.85 E', 'Uttar Pradesh'),
(935, 'Kiratpur', '29.52 N', '78.20 E', 'Uttar Pradesh'),
(936, 'Kosi Kalan', '27.80 N', '77.44 E', 'Uttar Pradesh'),
(937, 'Laharpur', '27.72 N', '80.90 E', 'Uttar Pradesh'),
(938, 'Lakhimpur', '27.95 N', '80.78 E', 'Uttar Pradesh'),
(939, 'Lakhnau', '26.85 N', '80.92 E', 'Uttar Pradesh'),
(940, 'Lakhnau Cantonment', '26.81 N', '80.97 E', 'Uttar Pradesh'),
(941, 'Lalitpur', '24.70 N', '78.41 E', 'Uttar Pradesh'),
(942, 'Loni', '28.75 N', '77.28 E', 'Uttar Pradesh'),
(943, 'Mahoba', '25.30 N', '79.87 E', 'Uttar Pradesh'),
(944, 'Mainpuri', '27.24 N', '79.02 E', 'Uttar Pradesh'),
(945, 'Mathura', '27.50 N', '77.68 E', 'Uttar Pradesh'),
(946, 'Mau', '25.96 N', '83.56 E', 'Uttar Pradesh'),
(947, 'Mauranipur', '25.24 N', '79.13 E', 'Uttar Pradesh'),
(948, 'Mawana', '29.11 N', '77.91 E', 'Uttar Pradesh'),
(949, 'Mirat', '28.99 N', '77.70 E', 'Uttar Pradesh'),
(950, 'Mirat Cantonment', '29.02 N', '77.67 E', 'Uttar Pradesh'),
(951, 'Mirzapur', '25.16 N', '82.56 E', 'Uttar Pradesh'),
(952, 'Modinagar', '28.92 N', '77.62 E', 'Uttar Pradesh'),
(953, 'Moradabad', '28.84 N', '78.76 E', 'Uttar Pradesh'),
(954, 'Mubarakpur', '26.09 N', '83.28 E', 'Uttar Pradesh'),
(955, 'Mughal Sarai', '25.30 N', '83.12 E', 'Uttar Pradesh'),
(956, 'Muradnagar', '28.78 N', '77.50 E', 'Uttar Pradesh');
INSERT INTO `states_cities` (`city_id`, `city_name`, `latitude`, `longitude`, `state`) VALUES
(957, 'Muzaffarnagar', '29.48 N', '77.69 E', 'Uttar Pradesh'),
(958, 'Nagina', '29.45 N', '78.43 E', 'Uttar Pradesh'),
(959, 'Najibabad', '29.62 N', '78.33 E', 'Uttar Pradesh'),
(960, 'Nawabganj', '26.94 N', '81.19 E', 'Uttar Pradesh'),
(961, 'Noida', '28.58 N', '77.33 E', 'Uttar Pradesh'),
(962, 'Obra', '24.42 N', '82.98 E', 'Uttar Pradesh'),
(963, 'Orai', '25.99 N', '79.45 E', 'Uttar Pradesh'),
(964, 'Pilibhit', '28.64 N', '79.81 E', 'Uttar Pradesh'),
(965, 'Pilkhuwa', '28.72 N', '77.65 E', 'Uttar Pradesh'),
(966, 'Rae Bareli', '26.23 N', '81.23 E', 'Uttar Pradesh'),
(967, 'Ramgarh Nagla Kothi', '', '', 'Uttar Pradesh'),
(968, 'Rampur', '28.82 N', '79.02 E', 'Uttar Pradesh'),
(969, 'Rath', '25.58 N', '79.57 E', 'Uttar Pradesh'),
(970, 'Renukut', '24.20 N', '83.03 E', 'Uttar Pradesh'),
(971, 'Saharanpur', '29.97 N', '77.54 E', 'Uttar Pradesh'),
(972, 'Sahaswan', '28.08 N', '78.74 E', 'Uttar Pradesh'),
(973, 'Sambhal', '28.59 N', '78.56 E', 'Uttar Pradesh'),
(974, 'Sandila', '27.08 N', '80.52 E', 'Uttar Pradesh'),
(975, 'Shahabad', '27.65 N', '79.95 E', 'Uttar Pradesh'),
(976, 'Shahjahanpur', '27.88 N', '79.90 E', 'Uttar Pradesh'),
(977, 'Shamli', '29.46 N', '77.31 E', 'Uttar Pradesh'),
(978, 'Sherkot', '29.35 N', '78.58 E', 'Uttar Pradesh'),
(979, 'Shikohabad', '27.12 N', '78.58 E', 'Uttar Pradesh'),
(980, 'Sikandarabad', '28.44 N', '77.69 E', 'Uttar Pradesh'),
(981, 'Sitapur', '27.57 N', '80.69 E', 'Uttar Pradesh'),
(982, 'Sukhmalpur Nizamabad', '', '', 'Uttar Pradesh'),
(983, 'Sultanpur', '26.26 N', '82.06 E', 'Uttar Pradesh'),
(984, 'Tanda', '26.55 N', '82.65 E', 'Uttar Pradesh'),
(985, 'Tilhar', '27.98 N', '79.73 E', 'Uttar Pradesh'),
(986, 'Tundla', '27.20 N', '78.28 E', 'Uttar Pradesh'),
(987, 'Ujhani', '28.02 N', '79.02 E', 'Uttar Pradesh'),
(988, 'Unnao', '26.55 N', '80.49 E', 'Uttar Pradesh'),
(989, 'Varanasi', '25.32 N', '83.01 E', 'Uttar Pradesh'),
(990, 'Vrindavan', '27.58 N', '77.70 E', 'Uttar Pradesh'),
(991, 'Dehra Dun', '30.34 N', '78.05 E', 'Uttaranchal'),
(992, 'Dehra Dun Cantonment', '30.34 N', '77.97 E', 'Uttaranchal'),
(993, 'Gola Range', '', '', 'Uttaranchal'),
(994, 'Haldwani', '29.23 N', '79.52 E', 'Uttaranchal'),
(995, 'Haridwar', '29.98 N', '78.16 E', 'Uttaranchal'),
(996, 'Kashipur', '29.22 N', '78.96 E', 'Uttaranchal'),
(997, 'Pithoragarh', '29.58 N', '80.22 E', 'Uttaranchal'),
(998, 'Rishikesh', '30.12 N', '78.29 E', 'Uttaranchal'),
(999, 'Rudrapur', '', '', 'Uttaranchal'),
(1000, 'Rurki', '29.87 N', '77.89 E', 'Uttaranchal');

-- --------------------------------------------------------

--
-- Table structure for table `zurich_academic`
--

CREATE TABLE `zurich_academic` (
  `academic_id` int(11) NOT NULL,
  `start_year` varchar(10) NOT NULL,
  `start_month` varchar(10) NOT NULL,
  `end_year` varchar(10) NOT NULL,
  `end_month` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_academic`
--

INSERT INTO `zurich_academic` (`academic_id`, `start_year`, `start_month`, `end_year`, `end_month`, `date`, `status`) VALUES
(10, '2015', '1', '2016', '1', '2018-02-01 00:00:00', 1),
(11, '2016', '1', '2017', '1', '2018-02-01 00:00:00', 1),
(12, '2017', '1', '2018', '1', '2018-02-01 00:00:00', 1),
(13, '2018', '3', '2019', '5', '2018-02-04 00:00:00', 1),
(15, '2019', '1', '2020', '1', '2018-05-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_assign_subject`
--

CREATE TABLE `zurich_assign_subject` (
  `id` int(11) NOT NULL,
  `academic` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_assign_subject`
--

INSERT INTO `zurich_assign_subject` (`id`, `academic`, `course_id`, `batch_id`, `subject`, `date`, `status`) VALUES
(5, 10, 5, 6, 5, '2018-02-04', 1),
(6, 0, 5, 5, 6, '2018-02-04', 1),
(7, 10, 5, 6, 7, '2018-02-04', 1),
(9, 0, 6, 10, 7, '2018-02-21', 1),
(11, 10, 7, 11, 9, '2018-05-17', 1),
(12, 10, 7, 11, 10, '2018-05-17', 1),
(13, 10, 7, 11, 12, '2018-05-17', 1),
(14, 10, 7, 11, 13, '2018-05-17', 1),
(15, 10, 8, 13, 9, '2018-02-25', 1),
(16, 10, 8, 13, 10, '2018-02-25', 1),
(18, 10, 8, 13, 12, '2018-02-25', 1),
(19, 10, 8, 13, 13, '2018-02-25', 1),
(21, 10, 8, 13, 5, '2018-02-25', 1),
(24, 10, 5, 5, 6, '2018-02-25', 1),
(25, 11, 10, 17, 5, '2018-05-17', 1),
(26, 11, 10, 18, 13, '2018-05-17', 1),
(27, 11, 7, 11, 5, '2018-05-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_bank`
--

CREATE TABLE `zurich_bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_bank`
--

INSERT INTO `zurich_bank` (`bank_id`, `bank_name`, `date`, `status`) VALUES
(1, 'SBI', '2018-02-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_batch`
--

CREATE TABLE `zurich_batch` (
  `batch_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_name` varchar(50) NOT NULL,
  `max_student` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_batch`
--

INSERT INTO `zurich_batch` (`batch_id`, `course_id`, `batch_name`, `max_student`, `date`, `status`) VALUES
(5, 5, 'A', 70, '2018-02-01 00:00:00', 1),
(6, 5, 'B', 100, '2018-02-01 00:00:00', 1),
(7, 6, 'C', 70, '2018-02-04 00:00:00', 1),
(8, 5, 'C', 21, '2018-02-19 00:00:00', 1),
(9, 6, 'B', 70, '2018-02-19 00:00:00', 1),
(10, 6, 'A', 50, '2018-02-19 00:00:00', 1),
(11, 7, 'A', 60, '2018-02-21 00:00:00', 1),
(12, 7, 'B', 60, '2018-02-21 00:00:00', 1),
(13, 8, 'A', 60, '2018-02-21 00:00:00', 1),
(14, 8, 'B', 60, '2018-02-21 00:00:00', 1),
(15, 9, 'A', 60, '2018-02-21 00:00:00', 1),
(16, 9, 'B', 60, '2018-02-21 00:00:00', 1),
(17, 10, 'A', 60, '2018-05-17 00:00:00', 1),
(18, 10, 'B', 60, '2018-05-17 00:00:00', 1),
(19, 10, 'C', 60, '2018-05-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_country`
--

CREATE TABLE `zurich_country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(200) NOT NULL,
  `country_code` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_country`
--

INSERT INTO `zurich_country` (`country_id`, `country_name`, `country_code`, `status`) VALUES
(1, 'Andorra', 'AD', 1),
(2, 'United Arab Emirates', 'AE', 1),
(3, 'Afghanistan', 'AF', 1),
(4, 'Antigua and Barbuda', 'AG', 1),
(5, 'Anguilla', 'AI', 1),
(6, 'Albania', 'AL', 1),
(7, 'Armenia', 'AM', 1),
(8, 'Netherlands Antilles', 'AN', 1),
(9, 'Angola', 'AO', 1),
(10, 'Antarctica', 'AQ', 1),
(11, 'Argentina', 'AR', 1),
(12, 'American Samoa', 'AS', 1),
(13, 'Austria', 'AT', 1),
(14, 'Australia', 'AU', 1),
(15, 'Aruba', 'AW', 1),
(16, 'Azerbaijan', 'AZ', 1),
(17, 'Bosnia and Herzegovina', 'BA', 1),
(18, 'Barbados', 'BB', 1),
(19, 'Bangladesh', 'BD', 1),
(20, 'Belgium', 'BE', 1),
(21, 'Burkina Faso', 'BF', 1),
(22, 'Bulgaria', 'BG', 1),
(23, 'Bahrain', 'BH', 1),
(24, 'Burundi', 'BI', 1),
(25, 'Benin', 'BJ', 1),
(26, 'Bermuda', 'BM', 1),
(27, 'Brunei Darussalam', 'BN', 1),
(28, 'Bolivia', 'BO', 1),
(29, 'Brazil', 'BR', 1),
(30, 'Bahamas', 'BS', 1),
(31, 'Bhutan', 'BT', 1),
(32, 'Bouvet Island', 'BV', 1),
(33, 'Botswana', 'BW', 1),
(34, 'Belarus', 'BY', 1),
(35, 'Belize', 'BZ', 1),
(36, 'Canada', 'CA', 1),
(37, 'Cocos (Keeling) Islands', 'CC', 1),
(38, 'Congo, the Democratic Republic of the', 'CD', 1),
(39, 'Central African Republic', 'CF', 1),
(40, 'Congo', 'CG', 1),
(41, 'Switzerland', 'CH', 1),
(42, 'Cote D''Ivoire', 'CI', 1),
(43, 'Cook Islands', 'CK', 1),
(44, 'Chile', 'CL', 1),
(45, 'Cameroon', 'CM', 1),
(46, 'China', 'CN', 1),
(47, 'Colombia', 'CO', 1),
(48, 'Costa Rica', 'CR', 1),
(49, 'Serbia and Montenegro', 'CS', 1),
(50, 'Cuba', 'CU', 1),
(51, 'Cape Verde', 'CV', 1),
(52, 'Christmas Island', 'CX', 1),
(53, 'Cyprus', 'CY', 1),
(54, 'Czech Republic', 'CZ', 1),
(55, 'Germany', 'DE', 1),
(56, 'Djibouti', 'DJ', 1),
(57, 'Denmark', 'DK', 1),
(58, 'Dominica', 'DM', 1),
(59, 'Dominican Republic', 'DO', 1),
(60, 'Algeria', 'DZ', 1),
(61, 'Ecuador', 'EC', 1),
(62, 'Estonia', 'EE', 1),
(63, 'Egypt', 'EG', 1),
(64, 'Western Sahara', 'EH', 1),
(65, 'Eritrea', 'ER', 1),
(66, 'Spain', 'ES', 1),
(67, 'Ethiopia', 'ET', 1),
(68, 'Finland', 'FI', 1),
(69, 'Fiji', 'FJ', 1),
(70, 'Falkland Islands (Malvinas)', 'FK', 1),
(71, 'Micronesia, Federated States of', 'FM', 1),
(72, 'Faroe Islands', 'FO', 1),
(73, 'France', 'FR', 1),
(74, 'Gabon', 'GA', 1),
(75, 'United Kingdom', 'GB', 1),
(76, 'Grenada', 'GD', 1),
(77, 'Georgia', 'GE', 1),
(78, 'French Guiana', 'GF', 1),
(79, 'Ghana', 'GH', 1),
(80, 'Gibraltar', 'GI', 1),
(81, 'Greenland', 'GL', 1),
(82, 'Gambia', 'GM', 1),
(83, 'Guinea', 'GN', 1),
(84, 'Guadeloupe', 'GP', 1),
(85, 'Equatorial Guinea', 'GQ', 1),
(86, 'Greece', 'GR', 1),
(87, 'South Georgia and the South Sandwich Islands', 'GS', 1),
(88, 'Guatemala', 'GT', 1),
(89, 'Guam', 'GU', 1),
(90, 'Guinea-Bissau', 'GW', 1),
(91, 'Guyana', 'GY', 1),
(92, 'Hong Kong', 'HK', 1),
(93, 'Heard Island and Mcdonald Islands', 'HM', 1),
(94, 'Honduras', 'HN', 1),
(95, 'Croatia', 'HR', 1),
(96, 'Haiti', 'HT', 1),
(97, 'Hungary', 'HU', 1),
(98, 'Indonesia', 'ID', 1),
(99, 'Ireland', 'IE', 1),
(100, 'Israel', 'IL', 1),
(101, 'India', 'IN', 1),
(102, 'British Indian Ocean Territory', 'IO', 1),
(103, 'Iraq', 'IQ', 1),
(104, 'Iran, Islamic Republic of', 'IR', 1),
(105, 'Iceland', 'IS', 1),
(106, 'Italy', 'IT', 1),
(107, 'Jamaica', 'JM', 1),
(108, 'Jordan', 'JO', 1),
(109, 'Japan', 'JP', 1),
(110, 'Kenya', 'KE', 1),
(111, 'Kyrgyzstan', 'KG', 1),
(112, 'Cambodia', 'KH', 1),
(113, 'Kiribati', 'KI', 1),
(114, 'Comoros', 'KM', 1),
(115, 'Saint Kitts and Nevis', 'KN', 1),
(116, 'Korea, Democratic People''s Republic of', 'KP', 1),
(117, 'Korea, Republic of', 'KR', 1),
(118, 'Kuwait', 'KW', 1),
(119, 'Cayman Islands', 'KY', 1),
(120, 'Kazakhstan', 'KZ', 1),
(121, 'Lao People''s Democratic Republic', 'LA', 1),
(122, 'Lebanon', 'LB', 1),
(123, 'Saint Lucia', 'LC', 1),
(124, 'Liechtenstein', 'LI', 1),
(125, 'Sri Lanka', 'LK', 1),
(126, 'Liberia', 'LR', 1),
(127, 'Lesotho', 'LS', 1),
(128, 'Lithuania', 'LT', 1),
(129, 'Luxembourg', 'LU', 1),
(130, 'Latvia', 'LV', 1),
(131, 'Libyan Arab Jamahiriya', 'LY', 1),
(132, 'Morocco', 'MA', 1),
(133, 'Monaco', 'MC', 1),
(134, 'Moldova, Republic of', 'MD', 1),
(135, 'Madagascar', 'MG', 1),
(136, 'Marshall Islands', 'MH', 1),
(137, 'Macedonia, the Former Yugoslav Republic of', 'MK', 1),
(138, 'Mali', 'ML', 1),
(139, 'Myanmar', 'MM', 1),
(140, 'Mongolia', 'MN', 1),
(141, 'Macao', 'MO', 1),
(142, 'Northern Mariana Islands', 'MP', 1),
(143, 'Martinique', 'MQ', 1),
(144, 'Mauritania', 'MR', 1),
(145, 'Montserrat', 'MS', 1),
(146, 'Malta', 'MT', 1),
(147, 'Mauritius', 'MU', 1),
(148, 'Maldives', 'MV', 1),
(149, 'Malawi', 'MW', 1),
(150, 'Mexico', 'MX', 1),
(151, 'Malaysia', 'MY', 1),
(152, 'Mozambique', 'MZ', 1),
(153, 'Namibia', 'NA', 1),
(154, 'New Caledonia', 'NC', 1),
(155, 'Niger', 'NE', 1),
(156, 'Norfolk Island', 'NF', 1),
(157, 'Nigeria', 'NG', 1),
(158, 'Nicaragua', 'NI', 1),
(159, 'Netherlands', 'NL', 1),
(160, 'Norway', 'NO', 1),
(161, 'Nepal', 'NP', 1),
(162, 'Nauru', 'NR', 1),
(163, 'Niue', 'NU', 1),
(164, 'New Zealand', 'NZ', 1),
(165, 'Oman', 'OM', 1),
(166, 'Panama', 'PA', 1),
(167, 'Peru', 'PE', 1),
(168, 'French Polynesia', 'PF', 1),
(169, 'Papua New Guinea', 'PG', 1),
(170, 'Philippines', 'PH', 1),
(171, 'Pakistan', 'PK', 1),
(172, 'Poland', 'PL', 1),
(173, 'Saint Pierre and Miquelon', 'PM', 1),
(174, 'Pitcairn', 'PN', 1),
(175, 'Puerto Rico', 'PR', 1),
(176, 'Palestinian Territory, Occupied', 'PS', 1),
(177, 'Portugal', 'PT', 1),
(178, 'Palau', 'PW', 1),
(179, 'Paraguay', 'PY', 1),
(180, 'Qatar', 'QA', 1),
(181, 'Reunion', 'RE', 1),
(182, 'Romania', 'RO', 1),
(183, 'Russian Federation', 'RU', 1),
(184, 'Rwanda', 'RW', 1),
(185, 'Saudi Arabia', 'SA', 1),
(186, 'Solomon Islands', 'SB', 1),
(187, 'Seychelles', 'SC', 1),
(188, 'Sudan', 'SD', 1),
(189, 'Sweden', 'SE', 1),
(190, 'Singapore', 'SG', 1),
(191, 'Saint Helena', 'SH', 1),
(192, 'Slovenia', 'SI', 1),
(193, 'Svalbard and Jan Mayen', 'SJ', 1),
(194, 'Slovakia', 'SK', 1),
(195, 'Sierra Leone', 'SL', 1),
(196, 'San Marino', 'SM', 1),
(197, 'Senegal', 'SN', 1),
(198, 'Somalia', 'SO', 1),
(199, 'Suriname', 'SR', 1),
(200, 'Sao Tome and Principe', 'ST', 1),
(201, 'El Salvador', 'SV', 1),
(202, 'Syrian Arab Republic', 'SY', 1),
(203, 'Swaziland', 'SZ', 1),
(204, 'Turks and Caicos Islands', 'TC', 1),
(205, 'Chad', 'TD', 1),
(206, 'French Southern Territories', 'TF', 1),
(207, 'Togo', 'TG', 1),
(208, 'Thailand', 'TH', 1),
(209, 'Tajikistan', 'TJ', 1),
(210, 'Tokelau', 'TK', 1),
(211, 'Timor-Leste', 'TL', 1),
(212, 'Turkmenistan', 'TM', 1),
(213, 'Tunisia', 'TN', 1),
(214, 'Tonga', 'TO', 1),
(215, 'Turkey', 'TR', 1),
(216, 'Trinidad and Tobago', 'TT', 1),
(217, 'Tuvalu', 'TV', 1),
(218, 'Taiwan, Province of China', 'TW', 1),
(219, 'Tanzania, United Republic of', 'TZ', 1),
(220, 'Ukraine', 'UA', 1),
(221, 'Uganda', 'UG', 1),
(222, 'United States Minor Outlying Islands', 'UM', 1),
(223, 'United States', 'US', 1),
(224, 'Uruguay', 'UY', 1),
(225, 'Uzbekistan', 'UZ', 1),
(226, 'Holy See (Vatican City State)', 'VA', 1),
(227, 'Saint Vincent and the Grenadines', 'VC', 1),
(228, 'Venezuela', 'VE', 1),
(229, 'Virgin Islands, British', 'VG', 1),
(230, 'Virgin Islands, U.s.', 'VI', 1),
(231, 'Viet Nam', 'VN', 1),
(232, 'Vanuatu', 'VU', 1),
(233, 'Wallis and Futuna', 'WF', 1),
(234, 'Samoa', 'WS', 1),
(235, 'Yemen', 'YE', 1),
(236, 'Mayotte', 'YT', 1),
(237, 'South Africa', 'ZA', 1),
(238, 'Zambia', 'ZM', 1),
(239, 'Zimbabwe', 'ZW', 1),
(240, 'Aland Islands', 'AX', 1),
(241, 'Caribbean Nations', 'CB', 1),
(242, 'East Timor', 'TP', 1),
(243, 'Guernsey', 'GG', 1),
(244, 'Isle of Man', 'IM', 1),
(245, 'Jersey', 'JE', 1),
(246, 'Kosovo', 'KO', 1),
(247, 'Montenegro', 'ME', 1),
(248, 'Serbia', 'RS', 1),
(249, 'South Sudan', 'SS', 1),
(250, 'Yugoslavia', 'YU', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_course`
--

CREATE TABLE `zurich_course` (
  `course_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `code` varchar(20) NOT NULL,
  `lecture_per_day` int(11) NOT NULL,
  `minimun_attendence` varchar(20) NOT NULL,
  `attendence_type` varchar(50) NOT NULL,
  `working_days` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_course`
--

INSERT INTO `zurich_course` (`course_id`, `name`, `description`, `code`, `lecture_per_day`, `minimun_attendence`, `attendence_type`, `working_days`, `date`, `status`) VALUES
(5, '12th', '12th(PCM)', '101', 0, '70', 'Regular', 100, '2018-02-01 00:00:00', 1),
(6, '11th', '11th(PCM)', '102', 0, '70', 'Regular', 100, '2018-02-01 00:00:00', 1),
(7, '8th', '8th', '105', 5, '60', 'Regular', 270, '2018-05-17 00:00:00', 1),
(8, '9th', '9th', '106', 6, '70', 'Regular', 356, '2018-02-21 00:00:00', 1),
(9, '10th', '10th', '107', 6, '70', 'Regular', 270, '2018-02-21 00:00:00', 1),
(10, '7th', '7th', '108', 5, '80', 'Regular', 100, '2018-05-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_designation`
--

CREATE TABLE `zurich_designation` (
  `desi_id` int(11) NOT NULL,
  `desi_name` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_designation`
--

INSERT INTO `zurich_designation` (`desi_id`, `desi_name`, `date`, `status`) VALUES
(6, 'Reader', '2018-02-01 00:00:00', 1),
(7, 'Lecturer', '2018-02-01 00:00:00', 1),
(8, 'Senior Lecturer', '2018-02-01 00:00:00', 1),
(9, 'Guest Lecturer', '2018-02-04 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_employee_attendance`
--

CREATE TABLE `zurich_employee_attendance` (
  `att_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `emp_dept` int(11) NOT NULL,
  `attendance_date` varchar(255) NOT NULL,
  `attendance` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_employee_attendance`
--

INSERT INTO `zurich_employee_attendance` (`att_id`, `emp_id`, `emp_dept`, `attendance_date`, `attendance`, `date`, `status`) VALUES
(13, 5, 6, '2018-02-13', 'Present', '2018-02-03 00:00:00', 1),
(14, 6, 7, '2018-02-13', 'Leave', '2018-02-03 00:00:00', 1),
(15, 5, 6, '2018-02-14', 'Absent', '2018-02-03 00:00:00', 1),
(16, 5, 6, '2018-02-01', 'Present', '2018-02-21 00:00:00', 1),
(17, 7, 6, '2018-02-01', 'Absent', '2018-02-21 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_employee_bank`
--

CREATE TABLE `zurich_employee_bank` (
  `e_bank_id` int(11) NOT NULL,
  `employee_designation` varchar(255) NOT NULL,
  `employee_code` varchar(255) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `bank__name` varchar(255) NOT NULL,
  `bank_branch` varchar(255) NOT NULL,
  `bank_address` text NOT NULL,
  `bank_phone` varchar(255) NOT NULL,
  `bank_ifsc_code` varchar(255) NOT NULL,
  `bank_account_no` varchar(255) NOT NULL,
  `bank_dd` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_employee_bank`
--

INSERT INTO `zurich_employee_bank` (`e_bank_id`, `employee_designation`, `employee_code`, `employee_name`, `bank__name`, `bank_branch`, `bank_address`, `bank_phone`, `bank_ifsc_code`, `bank_account_no`, `bank_dd`, `date`, `status`) VALUES
(2, '6', '5', '5', 'SBI', 'goda colony', 'goda colony', '12331312', '2313133', '1123123', '3123133', '2018-02-03 00:00:00', 1),
(3, '7', '6', '6', 'SBI', 'goda colony', 'goda colony', '12331312', '2313133', '1123123', '', '2018-02-03 00:00:00', 1),
(4, '6', '5', '5', 'SBI', 'annapurna road', 'annapurna road', '12331312', '2313133', '1123123', '', '2018-02-05 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_employee_dept`
--

CREATE TABLE `zurich_employee_dept` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_employee_dept`
--

INSERT INTO `zurich_employee_dept` (`dept_id`, `dept_name`, `date`, `status`) VALUES
(6, 'Maths', '2018-02-01 00:00:00', 1),
(7, 'Science', '2018-02-01 00:00:00', 1),
(8, 'Commerse', '2018-02-01 00:00:00', 1),
(9, 'Hindi', '2018-02-21 00:00:00', 1),
(10, 'English', '2018-02-21 00:00:00', 1),
(11, 'Sanskrit', '2018-02-21 00:00:00', 1),
(12, 'Social Science', '2018-02-21 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_employee_regt`
--

CREATE TABLE `zurich_employee_regt` (
  `emp_id` int(11) NOT NULL,
  `emp_code` varchar(200) NOT NULL,
  `emp_doj` varchar(200) NOT NULL,
  `emp_dept` int(11) NOT NULL,
  `emp_designation` int(11) NOT NULL,
  `emp_qualification` text NOT NULL,
  `emp_exp` int(11) NOT NULL,
  `emp_user_type` varchar(200) NOT NULL,
  `emp_fname` varchar(200) NOT NULL,
  `emp_mid_name` varchar(200) NOT NULL,
  `emp_lname` varchar(200) NOT NULL,
  `emp_dob` varchar(200) NOT NULL,
  `emp_gender` varchar(100) NOT NULL,
  `emp_present_add` text NOT NULL,
  `emp_permanent_add` text NOT NULL,
  `emp_city` varchar(200) NOT NULL,
  `emp_pin` int(11) NOT NULL,
  `emp_country` varchar(200) NOT NULL,
  `emp_state` varchar(200) NOT NULL,
  `emp_phone` varchar(200) NOT NULL,
  `emp_mobile` varchar(200) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_photo` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_employee_regt`
--

INSERT INTO `zurich_employee_regt` (`emp_id`, `emp_code`, `emp_doj`, `emp_dept`, `emp_designation`, `emp_qualification`, `emp_exp`, `emp_user_type`, `emp_fname`, `emp_mid_name`, `emp_lname`, `emp_dob`, `emp_gender`, `emp_present_add`, `emp_permanent_add`, `emp_city`, `emp_pin`, `emp_country`, `emp_state`, `emp_phone`, `emp_mobile`, `emp_email`, `emp_photo`, `date`, `status`) VALUES
(5, '101', '2018-02-01', 6, 6, 'PHD', 10, '6', 'jai', '', 'choudhary', '2018-02-06', 'Male', 'fsdfsdf', 'sdfs', 'sdfsdf', 42342, 'India', 'mp', '09638527145', '9325874125', 'asd@sfs.sda', 'images3.jpg', '2018-02-01 00:00:00', 1),
(6, '102', '2018-02-02', 7, 7, 'me', 2, '5', 'swati', '', 'bhagat', '2018-02-06', 'Female', 'sdfsd', '', 'dsfd', 42342, 'India', 'up', '21212121313', '3423422242', 'sda@affg.fsd', 'images3.jpg', '2018-02-01 00:00:00', 1),
(7, '96857', '2018-02-01', 6, 8, 'me', 10, '6', 'Ashwin', '', 'moyde', '2018-02-01', 'Female', 'dfsdf', 'sdfsf', 'fgdg', 432444, 'India', 'fgdg', '53453435350', '3453434545', 'asd@sfs.sdaaaa', 'images.jpg', '2018-02-04 00:00:00', 1),
(8, '963258', '2018-02-01', 8, 6, 'BA', 2, '5', 'Ashwin', 'a', 'moyde', '2018-02-13', 'Female', 'utiut', 'gfff', 'hhl', 266563, 'India', 'mp', '32253252524', '3423422242', 'asd@sfs.sda', 'images5.jpg', '2018-02-21 00:00:00', 1),
(9, '741258', '2018-02-02', 6, 7, 'me', 10, '6', 'jasmin', 'k', 'rao', '2018-02-07', 'Female', 'dfdfd', 'fghfghf', 'hfgh', 34534545, 'India', 'mp', '3225325252', '9325874125', 'sda@affg.fsd', 'index.jpg', '2018-02-21 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_employee_type`
--

CREATE TABLE `zurich_employee_type` (
  `emp_id` int(11) NOT NULL,
  `emp_type` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_employee_type`
--

INSERT INTO `zurich_employee_type` (`emp_id`, `emp_type`, `date`, `status`) VALUES
(4, 'Principal', '2018-02-01 00:00:00', 1),
(5, 'Teacher', '2018-02-01 00:00:00', 1),
(6, 'Senior Teacher ', '2018-02-01 00:00:00', 1),
(7, 'Guest Teacher', '2018-02-04 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_fee_allocation`
--

CREATE TABLE `zurich_fee_allocation` (
  `fee_allocation_id` int(11) NOT NULL,
  `fee_cat` int(11) NOT NULL,
  `fee_sub_cat` int(11) NOT NULL,
  `fee_for` varchar(200) NOT NULL,
  `course` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_fee_allocation`
--

INSERT INTO `zurich_fee_allocation` (`fee_allocation_id`, `fee_cat`, `fee_sub_cat`, `fee_for`, `course`, `batch`, `date`, `status`) VALUES
(3, 2, 4, 'Selected Batches', 5, 5, '2018-02-05 00:00:00', 1),
(4, 3, 4, 'All Batches', 5, 6, '2018-02-05 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_fee_category`
--

CREATE TABLE `zurich_fee_category` (
  `fee_cat_id` int(11) NOT NULL,
  `fee_cat` varchar(200) NOT NULL,
  `fee_receipt` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_fee_category`
--

INSERT INTO `zurich_fee_category` (`fee_cat_id`, `fee_cat`, `fee_receipt`, `desc`, `date`, `status`) VALUES
(2, 'Tution Fee', '1234', 'fees', '2018-01-26 00:00:00', 1),
(3, 'Transport Fees', '123', 'Travelling allowance', '2018-02-05 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_fee_collection`
--

CREATE TABLE `zurich_fee_collection` (
  `collection_id` int(11) NOT NULL,
  `acadmic_year` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `fee_cat` int(11) NOT NULL,
  `fee_sub_cat` int(11) NOT NULL,
  `fees_amount` int(11) NOT NULL,
  `fee_type` varchar(200) NOT NULL,
  `fine` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zurich_fee_sub_category`
--

CREATE TABLE `zurich_fee_sub_category` (
  `fee_sub_cat_id` int(11) NOT NULL,
  `fee_cat` int(11) NOT NULL,
  `fee_sub_cat` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `fee_type` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_fee_sub_category`
--

INSERT INTO `zurich_fee_sub_category` (`fee_sub_cat_id`, `fee_cat`, `fee_sub_cat`, `amount`, `fee_type`, `date`, `status`) VALUES
(4, 2, '12th', 50000, 'Annual', '2018-02-05 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_institute`
--

CREATE TABLE `zurich_institute` (
  `ins_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `admin_contact_person` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `currency_type` varchar(10) NOT NULL,
  `institution_code` varchar(100) NOT NULL,
  `logo` varchar(256) NOT NULL,
  `about` text NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_institute`
--

INSERT INTO `zurich_institute` (`ins_id`, `name`, `address`, `email`, `phone`, `mobile`, `fax`, `admin_contact_person`, `country`, `currency_type`, `institution_code`, `logo`, `about`, `date`, `status`) VALUES
(1, 'Zurich1', 'Nanda nagar, Indore MP 4520011', 'zurich@gmail.com1', '073198989991', '98989898991', 'ASDC1111', 'RD Zurich1', 'India', 'INR', 'ABC00111', 'logo.png', 'Whether your organisation is a large multinational or a small business, we can bring the appropriate skills, experience and contacts to bear. Our marketing communications department can advise on appropriate ways to communicate your message, from a static brochure website, all the way through to hundreds of pages on on-line information updated minute by minute.1', '2017-11-25 05:24:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_state_city`
--

CREATE TABLE `zurich_state_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_state_city`
--

INSERT INTO `zurich_state_city` (`city_id`, `city_name`, `latitude`, `longitude`, `state`) VALUES
(1, 'Port Blair', '11.67 N', '92.76 E', 'Andaman and Nicobar Islands'),
(2, 'Adilabad', '19.68 N', '78.53 E', 'Andhra Pradesh'),
(3, 'Adoni', '15.63 N', '77.28 E', 'Andhra Pradesh'),
(4, 'Alwal', '17.50 N', '78.54 E', 'Andhra Pradesh'),
(5, 'Anakapalle', '17.69 N', '83.00 E', 'Andhra Pradesh'),
(6, 'Anantapur', '14.70 N', '77.59 E', 'Andhra Pradesh'),
(7, 'Bapatla', '15.91 N', '80.47 E', 'Andhra Pradesh'),
(8, 'Belampalli', '19.06 N', '79.49 E', 'Andhra Pradesh'),
(9, 'Bhimavaram', '16.55 N', '81.53 E', 'Andhra Pradesh'),
(10, 'Bhongir', '17.52 N', '78.88 E', 'Andhra Pradesh'),
(11, 'Bobbili', '18.57 N', '83.37 E', 'Andhra Pradesh'),
(12, 'Bodhan', '18.66 N', '77.88 E', 'Andhra Pradesh'),
(13, 'Chilakalurupet', '16.10 N', '80.16 E', 'Andhra Pradesh'),
(14, 'Chinna Chawk', '14.47 N', '78.83 E', 'Andhra Pradesh'),
(15, 'Chirala', '15.84 N', '80.35 E', 'Andhra Pradesh'),
(16, 'Chittur', '13.22 N', '79.10 E', 'Andhra Pradesh'),
(17, 'Cuddapah', '14.48 N', '78.81 E', 'Andhra Pradesh'),
(18, 'Dharmavaram', '14.42 N', '77.71 E', 'Andhra Pradesh'),
(19, 'Dhone', '15.42 N', '77.88 E', 'Andhra Pradesh'),
(20, 'Eluru', '16.72 N', '81.11 E', 'Andhra Pradesh'),
(21, 'Gaddiannaram', '17.36 N', '78.52 E', 'Andhra Pradesh'),
(22, 'Gadwal', '16.23 N', '77.80 E', 'Andhra Pradesh'),
(23, 'Gajuwaka', '17.70 N', '83.21 E', 'Andhra Pradesh'),
(24, 'Gudivada', '16.44 N', '81.00 E', 'Andhra Pradesh'),
(25, 'Gudur', '14.15 N', '79.84 E', 'Andhra Pradesh'),
(26, 'Guntakal', '15.18 N', '77.37 E', 'Andhra Pradesh'),
(27, 'Guntur', '16.31 N', '80.44 E', 'Andhra Pradesh'),
(28, 'Hindupur', '13.83 N', '77.48 E', 'Andhra Pradesh'),
(29, 'Hyderabad', '17.40 N', '78.48 E', 'Andhra Pradesh'),
(30, 'Jagtial', '18.80 N', '78.91 E', 'Andhra Pradesh'),
(31, 'Kadiri', '14.12 N', '78.16 E', 'Andhra Pradesh'),
(32, 'Kagaznagar', '19.34 N', '79.48 E', 'Andhra Pradesh'),
(33, 'Kakinada', '16.96 N', '82.24 E', 'Andhra Pradesh'),
(34, 'Kallur', '15.69 N', '77.77 E', 'Andhra Pradesh'),
(35, 'Kamareddi', '18.32 N', '78.35 E', 'Andhra Pradesh'),
(36, 'Kapra', '17.37 N', '78.48 E', 'Andhra Pradesh'),
(37, 'Karimnagar', '18.45 N', '79.13 E', 'Andhra Pradesh'),
(38, 'Karnul', '15.83 N', '78.03 E', 'Andhra Pradesh'),
(39, 'Kavali', '14.92 N', '79.99 E', 'Andhra Pradesh'),
(40, 'Khammam', '17.25 N', '80.15 E', 'Andhra Pradesh'),
(41, 'Kodar', '16.98 N', '79.97 E', 'Andhra Pradesh'),
(42, 'Kondukur', '15.22 N', '79.91 E', 'Andhra Pradesh'),
(43, 'Koratla', '18.82 N', '78.72 E', 'Andhra Pradesh'),
(44, 'Kottagudem', '17.56 N', '80.64 E', 'Andhra Pradesh'),
(45, 'Kukatpalle', '17.49 N', '78.41 E', 'Andhra Pradesh'),
(46, 'Lalbahadur Nagar', '17.43 N', '78.50 E', 'Andhra Pradesh'),
(47, 'Machilipatnam', '16.19 N', '81.14 E', 'Andhra Pradesh'),
(48, 'Mahbubnagar', '16.74 N', '77.98 E', 'Andhra Pradesh'),
(49, 'Malkajgiri', '17.55 N', '78.59 E', 'Andhra Pradesh'),
(50, 'Mancheral', '18.88 N', '79.45 E', 'Andhra Pradesh'),
(51, 'Mandamarri', '18.97 N', '79.47 E', 'Andhra Pradesh'),
(52, 'Mangalagiri', '16.44 N', '80.56 E', 'Andhra Pradesh'),
(53, 'Markapur', '15.73 N', '79.28 E', 'Andhra Pradesh'),
(54, 'Miryalaguda', '16.87 N', '79.57 E', 'Andhra Pradesh'),
(55, 'Nalgonda', '17.06 N', '79.26 E', 'Andhra Pradesh'),
(56, 'Nandyal', '15.49 N', '78.48 E', 'Andhra Pradesh'),
(57, 'Narasapur', '16.45 N', '81.70 E', 'Andhra Pradesh'),
(58, 'Narasaraopet', '16.24 N', '80.04 E', 'Andhra Pradesh'),
(59, 'Nellur', '14.46 N', '79.98 E', 'Andhra Pradesh'),
(60, 'Nirmal', '19.12 N', '78.35 E', 'Andhra Pradesh'),
(61, 'Nizamabad', '18.68 N', '78.10 E', 'Andhra Pradesh'),
(62, 'Nuzvid', '16.78 N', '80.85 E', 'Andhra Pradesh'),
(63, 'Ongole', '15.50 N', '80.05 E', 'Andhra Pradesh'),
(64, 'Palakollu', '16.52 N', '81.75 E', 'Andhra Pradesh'),
(65, 'Palasa', '18.77 N', '84.42 E', 'Andhra Pradesh'),
(66, 'Palwancha', '17.60 N', '80.68 E', 'Andhra Pradesh'),
(67, 'Patancheru', '17.53 N', '78.27 E', 'Andhra Pradesh'),
(68, 'Piduguralla', '16.48 N', '79.90 E', 'Andhra Pradesh'),
(69, 'Ponnur', '16.07 N', '80.56 E', 'Andhra Pradesh'),
(70, 'Proddatur', '14.73 N', '78.55 E', 'Andhra Pradesh'),
(71, 'Qutubullapur', '17.43 N', '78.47 E', 'Andhra Pradesh'),
(72, 'Rajamahendri', '17.02 N', '81.79 E', 'Andhra Pradesh'),
(73, 'Rajampet', '14.18 N', '79.17 E', 'Andhra Pradesh'),
(74, 'Rajendranagar', '17.29 N', '78.39 E', 'Andhra Pradesh'),
(75, 'Ramachandrapuram', '17.56 N', '78.04 E', 'Andhra Pradesh'),
(76, 'Ramagundam', '18.80 N', '79.45 E', 'Andhra Pradesh'),
(77, 'Rayachoti', '14.05 N', '78.75 E', 'Andhra Pradesh'),
(78, 'Rayadrug', '14.70 N', '76.87 E', 'Andhra Pradesh'),
(79, 'Samalkot', '17.06 N', '82.18 E', 'Andhra Pradesh'),
(80, 'Sangareddi', '17.63 N', '78.08 E', 'Andhra Pradesh'),
(81, 'Sattenapalle', '16.40 N', '80.18 E', 'Andhra Pradesh'),
(82, 'Serilungampalle', '17.48 N', '78.33 E', 'Andhra Pradesh'),
(83, 'Siddipet', '18.11 N', '78.84 E', 'Andhra Pradesh'),
(84, 'Sikandarabad', '17.47 N', '78.52 E', 'Andhra Pradesh'),
(85, 'Sirsilla', '18.40 N', '78.81 E', 'Andhra Pradesh'),
(86, 'Srikakulam', '18.30 N', '83.90 E', 'Andhra Pradesh'),
(87, 'Srikalahasti', '13.76 N', '79.70 E', 'Andhra Pradesh'),
(88, 'Suriapet', '17.15 N', '79.62 E', 'Andhra Pradesh'),
(89, 'Tadepalle', '16.48 N', '80.60 E', 'Andhra Pradesh'),
(90, 'Tadepallegudem', '16.82 N', '81.52 E', 'Andhra Pradesh'),
(91, 'Tadpatri', '14.91 N', '78.00 E', 'Andhra Pradesh'),
(92, 'Tandur', '17.25 N', '77.58 E', 'Andhra Pradesh'),
(93, 'Tanuku', '16.75 N', '81.69 E', 'Andhra Pradesh'),
(94, 'Tenali', '16.24 N', '80.65 E', 'Andhra Pradesh'),
(95, 'Tirupati', '13.63 N', '79.41 E', 'Andhra Pradesh'),
(96, 'Tuni', '17.35 N', '82.55 E', 'Andhra Pradesh'),
(97, 'Uppal Kalan', '17.38 N', '78.55 E', 'Andhra Pradesh'),
(98, 'Vijayawada', '16.52 N', '80.63 E', 'Andhra Pradesh'),
(99, 'Vinukonda', '16.05 N', '79.75 E', 'Andhra Pradesh'),
(100, 'Visakhapatnam', '17.73 N', '83.30 E', 'Andhra Pradesh'),
(101, 'Vizianagaram', '18.12 N', '83.40 E', 'Andhra Pradesh'),
(102, 'Vuyyuru', '16.37 N', '80.85 E', 'Andhra Pradesh'),
(103, 'Wanparti', '16.37 N', '78.07 E', 'Andhra Pradesh'),
(104, 'Warangal', '18.01 N', '79.58 E', 'Andhra Pradesh'),
(105, 'Yemmiganur', '15.73 N', '77.48 E', 'Andhra Pradesh'),
(106, 'Itanagar', '27.14 N', '93.61 E', 'Arunachal Pradesh'),
(107, 'Barpeta', '26.32 N', '91.00 E', 'Assam'),
(108, 'Bongaigaon', '26.48 N', '90.54 E', 'Assam'),
(109, 'Dhuburi', '26.03 N', '89.97 E', 'Assam'),
(110, 'Dibrugarh', '27.49 N', '94.91 E', 'Assam'),
(111, 'Diphu', '25.84 N', '93.43 E', 'Assam'),
(112, 'Guwahati', '26.19 N', '91.75 E', 'Assam'),
(113, 'Jorhat', '26.76 N', '94.20 E', 'Assam'),
(114, 'Karimganj', '24.85 N', '92.36 E', 'Assam'),
(115, 'Lakhimpur', '27.24 N', '94.10 E', 'Assam'),
(116, 'Lanka', '25.93 N', '92.95 E', 'Assam'),
(117, 'Nagaon', '26.35 N', '92.68 E', 'Assam'),
(118, 'Sibsagar', '26.99 N', '94.63 E', 'Assam'),
(119, 'Silchar', '24.83 N', '92.77 E', 'Assam'),
(120, 'Tezpur', '26.63 N', '92.79 E', 'Assam'),
(121, 'Tinsukia', '27.50 N', '95.36 E', 'Assam'),
(122, 'Alipur Duar', '26.50 N', '89.53 E', 'West Bengal'),
(123, 'Arambagh', '22.88 N', '87.78 E', 'West Bengal'),
(124, 'Asansol', '23.69 N', '86.98 E', 'West Bengal'),
(125, 'Ashoknagar Kalyangarh', '22.84 N', '88.63 E', 'West Bengal'),
(126, 'Baharampur', '24.10 N', '88.24 E', 'West Bengal'),
(127, 'Baidyabati', '22.79 N', '88.33 E', 'West Bengal'),
(128, 'Baj Baj', '22.48 N', '88.17 E', 'West Bengal'),
(129, 'Bally', '22.65 N', '88.35 E', 'West Bengal'),
(130, 'Bally Cantonment', '22.65 N', '88.36 E', 'West Bengal'),
(131, 'Balurghat', '25.23 N', '88.77 E', 'West Bengal'),
(132, 'Bangaon', '23.05 N', '88.83 E', 'West Bengal'),
(133, 'Bankra', '22.58 N', '88.31 E', 'West Bengal'),
(134, 'Bankura', '23.24 N', '87.07 E', 'West Bengal'),
(135, 'Bansbaria', '22.95 N', '88.40 E', 'West Bengal'),
(136, 'Baranagar', '22.64 N', '88.37 E', 'West Bengal'),
(137, 'Barddhaman', '23.24 N', '87.86 E', 'West Bengal'),
(138, 'Basirhat', '22.66 N', '88.86 E', 'West Bengal'),
(139, 'Bhadreswar', '22.84 N', '88.35 E', 'West Bengal'),
(140, 'Bhatpara', '22.89 N', '88.42 E', 'West Bengal'),
(141, 'Bidhannagar', '22.57 N', '88.42 E', 'West Bengal'),
(142, 'Binnaguri', '26.74 N', '89.037 E', 'West Bengal'),
(143, 'Bishnupur', '23.08 N', '87.33 E', 'West Bengal'),
(144, 'Bolpur', '23.67 N', '87.70 E', 'West Bengal'),
(145, 'Calcutta', '22.57 N', '88.36 E', 'West Bengal'),
(146, 'Chakdaha', '22.48 N', '88.35 E', 'West Bengal'),
(147, 'Champdani', '22.81 N', '88.34 E', 'West Bengal'),
(148, 'Chandannagar', '22.89 N', '88.37 E', 'West Bengal'),
(149, 'Contai', '21.79 N', '87.75 E', 'West Bengal'),
(150, 'Dabgram', '', '', 'West Bengal'),
(151, 'Darjiling', '27.05 N', '88.26 E', 'West Bengal'),
(152, 'Dhulian', '24.68 N', '87.97 E', 'West Bengal'),
(153, 'Dinhata', '26.13 N', '89.47 E', 'West Bengal'),
(154, 'Dum Dum', '22.63 N', '88.42 E', 'West Bengal'),
(155, 'Durgapur', '23.50 N', '87.31 E', 'West Bengal'),
(156, 'Gangarampur', '25.40 N', '88.52 E', 'West Bengal'),
(157, 'Garulia', '22.83 N', '88.37 E', 'West Bengal'),
(158, 'Gayespur', '22.98 N', '88.51 E', 'West Bengal'),
(159, 'Ghatal', '22.67 N', '87.72 E', 'West Bengal'),
(160, 'Gopalpur', '', '', 'West Bengal'),
(161, 'Habra', '22.84 N', '88.62 E', 'West Bengal'),
(162, 'Halisahar', '22.95 N', '88.42 E', 'West Bengal'),
(163, 'Haora', '22.58 N', '88.33 E', 'West Bengal'),
(164, 'HugliChunchura', '22.91 N', '88.40 E', 'West Bengal'),
(165, 'Ingraj Bazar', '25.01 N', '88.14 E', 'West Bengal'),
(166, 'Islampur', '26.27 N', '88.20 E', 'West Bengal'),
(167, 'Jalpaiguri', '26.53 N', '88.71 E', 'West Bengal'),
(168, 'Jamuria', '23.70 N', '87.08 E', 'West Bengal'),
(169, 'Jangipur', '24.47 N', '88.07 E', 'West Bengal'),
(170, 'Jhargram', '22.45 N', '86.98 E', 'West Bengal'),
(171, 'Kaliyaganj', '25.63 N', '88.32 E', 'West Bengal'),
(172, 'Kalna', '23.22 N', '88.37 E', 'West Bengal'),
(173, 'Kalyani', '22.98 N', '88.48 E', 'West Bengal'),
(174, 'Kamarhati', '22.67 N', '88.37 E', 'West Bengal'),
(175, 'Kanchrapara', '22.95 N', '88.45 E', 'West Bengal'),
(176, 'Kandi', '23.95 N', '88.03 E', 'West Bengal'),
(177, 'Karsiyang', '26.88 N', '88.28 E', 'West Bengal'),
(178, 'Katwa', '23.65 N', '88.13 E', 'West Bengal'),
(179, 'Kharagpur', '22.34 N', '87.31 E', 'West Bengal'),
(180, 'Kharagpur Railway Settlement', '22.34 N', '87.26 E', 'West Bengal'),
(181, 'Khardaha', '22.73 N', '88.38 E', 'West Bengal'),
(182, 'Kharia', '', '', 'West Bengal'),
(183, 'Koch Bihar', '26.33 N', '89.46 E', 'West Bengal'),
(184, 'Konnagar', '22.70 N', '88.36 E', 'West Bengal'),
(185, 'Krishnanagar', '23.41 N', '88.51 E', 'West Bengal'),
(186, 'Kulti', '23.72 N', '86.89 E', 'West Bengal'),
(187, 'Madhyamgram', '22.70 N', '88.45 E', 'West Bengal'),
(188, 'Maheshtala', '22.51 N', '88.23 E', 'West Bengal'),
(189, 'Memari', '23.20 N', '88.12 E', 'West Bengal'),
(190, 'Midnapur', '22.33 N', '87.15 E', 'West Bengal'),
(191, 'Naihati', '22.91 N', '88.43 E', 'West Bengal'),
(192, 'Navadwip', '23.42 N', '88.37 E', 'West Bengal'),
(193, 'Ni Barakpur', '22.77 N', '88.36 E', 'West Bengal'),
(194, 'North Barakpur', '22.78 N', '88.37 E', 'West Bengal'),
(195, 'North Dum Dum', '22.64 N', '88.41 E', 'West Bengal'),
(196, 'Old Maldah', '', '', 'West Bengal'),
(197, 'Panihati', '22.69 N', '88.37 E', 'West Bengal'),
(198, 'Phulia', '23.24 N', '88.50 E', 'West Bengal'),
(199, 'Pujali', '22.47 N', '88.15 E', 'West Bengal'),
(200, 'Puruliya', '23.34 N', '86.36 E', 'West Bengal'),
(201, 'Raiganj', '25.62 N', '88.12 E', 'West Bengal'),
(202, 'Rajpur', '22.44 N', '88.44 E', 'West Bengal'),
(203, 'Rampur Hat', '24.17 N', '87.78 E', 'West Bengal'),
(204, 'Ranaghat', '23.19 N', '88.58 E', 'West Bengal'),
(205, 'Raniganj', '23.62 N', '87.11 E', 'West Bengal'),
(206, 'Rishra', '22.71 N', '88.36 E', 'West Bengal'),
(207, 'Shantipur', '23.26 N', '88.44 E', 'West Bengal'),
(208, 'Shiliguri', '26.73 N', '88.42 E', 'West Bengal'),
(209, 'Shrirampur', '22.74 N', '88.35 E', 'West Bengal'),
(210, 'Siuri', '23.91 N', '87.53 E', 'West Bengal'),
(211, 'South Dum Dum', '22.61 N', '88.41 E', 'West Bengal'),
(212, 'Titagarh', '22.74 N', '88.38 E', 'West Bengal'),
(213, 'Ulubaria', '22.47 N', '88.11 E', 'West Bengal'),
(214, 'UttarparaKotrung', '22.66 N', '88.35 E', 'West Bengal'),
(215, 'Araria', '26.15 N', '87.52 E', 'Bihar'),
(216, 'Arrah', '25.56 N', '84.66 E', 'Bihar'),
(217, 'Aurangabad', '24.75 N', '84.37 E', 'Bihar'),
(218, 'Bagaha', '27.10 N', '84.09 E', 'Bihar'),
(219, 'Begusarai', '25.42 N', '86.12 E', 'Bihar'),
(220, 'Bettiah', '26.81 N', '84.50 E', 'Bihar'),
(221, 'Bhabua', '25.05 N', '83.62 E', 'Bihar'),
(222, 'Bhagalpur', '25.26 N', '86.98 E', 'Bihar'),
(223, 'Bihar', '25.21 N', '85.52 E', 'Bihar'),
(224, 'Buxar', '25.58 N', '83.98 E', 'Bihar'),
(225, 'Chhapra', '25.78 N', '84.72 E', 'Bihar'),
(226, 'Darbhanga', '26.16 N', '85.88 E', 'Bihar'),
(227, 'Dehri', '24.91 N', '84.18 E', 'Bihar'),
(228, 'DighaMainpura', '', '', 'Bihar'),
(229, 'Dinapur', '25.64 N', '85.04 E', 'Bihar'),
(230, 'Dumraon', '25.55 N', '84.15 E', 'Bihar'),
(231, 'Gaya', '24.81 N', '85.00 E', 'Bihar'),
(232, 'Gopalganj', '26.47 N', '84.43 E', 'Bihar'),
(233, 'Goura', '', '', 'Bihar'),
(234, 'Hajipur', '', '', 'Bihar'),
(235, 'Jahanabad', '25.22 N', '84.98 E', 'Bihar'),
(236, 'Jamalpur', '25.32 N', '86.48 E', 'Bihar'),
(237, 'Jamui', '24.92 N', '86.22 E', 'Bihar'),
(238, 'Katihar', '25.55 N', '87.57 E', 'Bihar'),
(239, 'Khagaria', '25.50 N', '86.48 E', 'Bihar'),
(240, 'Khagaul', '25.58 N', '85.05 E', 'Bihar'),
(241, 'Kishanganj', '26.11 N', '87.95 E', 'Bihar'),
(242, 'Lakhisarai', '25.18 N', '86.09 E', 'Bihar'),
(243, 'Madhipura', '25.92 N', '86.78 E', 'Bihar'),
(244, 'Madhubani', '26.37 N', '86.06 E', 'Bihar'),
(245, 'Masaurhi', '25.35 N', '85.03 E', 'Bihar'),
(246, 'Mokama', '25.40 N', '85.92 E', 'Bihar'),
(247, 'Motihari', '26.66 N', '84.91 E', 'Bihar'),
(248, 'Munger', '25.39 N', '86.47 E', 'Bihar'),
(249, 'Muzaffarpur', '26.13 N', '85.38 E', 'Bihar'),
(250, 'Nawada', '24.88 N', '85.54 E', 'Bihar'),
(251, 'Patna', '25.62 N', '85.13 E', 'Bihar'),
(252, 'Phulwari', '25.60 N', '85.13 E', 'Bihar'),
(253, 'Purnia', '25.78 N', '87.47 E', 'Bihar'),
(254, 'Raxaul', '26.98 N', '84.85 E', 'Bihar'),
(255, 'Saharsa', '25.88 N', '86.59 E', 'Bihar'),
(256, 'Samastipur', '25.85 N', '85.78 E', 'Bihar'),
(257, 'Sasaram', '24.96 N', '84.01 E', 'Bihar'),
(258, 'Sitamarhi', '26.61 N', '85.48 E', 'Bihar'),
(259, 'Siwan', '26.23 N', '84.35 E', 'Bihar'),
(260, 'Supaul', '26.12 N', '86.60 E', 'Bihar'),
(261, 'Chandigarh', '30.75 N', '76.78 E', 'Chandigarh'),
(262, 'Ambikapur', '23.13 N', '83.20 E', 'Chhattisgarh'),
(263, 'Bhilai', '21.21 N', '81.38 E', 'Chhattisgarh'),
(264, 'Bilaspur', '22.09 N', '82.15 E', 'Chhattisgarh'),
(265, 'Charoda', '21.23 N', '81.50 E', 'Chhattisgarh'),
(266, 'Chirmiri', '23.21 N', '82.41 E', 'Chhattisgarh'),
(267, 'Dhamtari', '20.71 N', '81.55 E', 'Chhattisgarh'),
(268, 'Durg', '21.20 N', '81.28 E', 'Chhattisgarh'),
(269, 'Jagdalpur', '19.09 N', '82.03 E', 'Chhattisgarh'),
(270, 'Korba', '22.35 N', '82.69 E', 'Chhattisgarh'),
(271, 'Raigarh', '21.90 N', '83.39 E', 'Chhattisgarh'),
(272, 'Raipur', '21.24 N', '81.63 E', 'Chhattisgarh'),
(273, 'Rajnandgaon', '21.10 N', '81.04 E', 'Chhattisgarh'),
(274, 'Bhalswa Jahangirpur', '28.74 N', '77.17 E', 'Delhi'),
(275, 'Burari', '', '', 'Delhi'),
(276, 'Chilla Saroda Bangar', '', '', 'Delhi'),
(277, 'Dallo Pura', '', '', 'Delhi'),
(278, 'Delhi', '28.67 N', '77.21 E', 'Delhi'),
(279, 'Deoli', '28.49 N', '77.22 E', 'Delhi'),
(280, 'Dilli Cantonment', '28.57 N', '77.16 E', 'Delhi'),
(281, 'Gharoli', '', '', 'Delhi'),
(282, 'Gokalpur', '28.71 N', '77.28 E', 'Delhi'),
(283, 'Hastsal', '', '', 'Delhi'),
(284, 'Jaffrabad', '', '', 'Delhi'),
(285, 'Karawal Nagar', '', '', 'Delhi'),
(286, 'Khajuri Khas', '', '', 'Delhi'),
(287, 'Kirari Suleman Nagar', '', '', 'Delhi'),
(288, 'Mandoli', '', '', 'Delhi'),
(289, 'Mithe Pur', '', '', 'Delhi'),
(290, 'Molarband', '', '', 'Delhi'),
(291, 'Mundka', '', '', 'Delhi'),
(292, 'Mustafabad', '', '', 'Delhi'),
(293, 'Nangloi Jat', '28.68 N', '77.07 E', 'Delhi'),
(294, 'Ni Dilli', '28.60 N', '77.22 E', 'Delhi'),
(295, 'Pul Pehlad', '', '', 'Delhi'),
(296, 'Puth Kalan', '', '', 'Delhi'),
(297, 'Roshan Pura', '28.60 N', '76.99 E', 'Delhi'),
(298, 'Sadat Pur Gujran', '', '', 'Delhi'),
(299, 'Sultanpur Majra', '28.76 N', '77.06 E', 'Delhi'),
(300, 'Tajpul', '', '', 'Delhi'),
(301, 'Tigri', '28.50 N', '77.22 E', 'Delhi'),
(302, 'Ziauddin Pur', '', '', 'Delhi'),
(303, 'Madgaon', '15.28 N', '73.94 E', 'Goa'),
(304, 'Mormugao', '15.42 N', '73.78 E', 'Goa'),
(305, 'Panaji', '15.50 N', '73.81 E', 'Goa'),
(306, 'Ahmadabad', '23.03 N', '72.58 E', 'Gujarat'),
(307, 'Amreli', '21.61 N', '71.22 E', 'Gujarat'),
(308, 'Anand', '22.56 N', '72.95 E', 'Gujarat'),
(309, 'Anjar', '23.12 N', '70.02 E', 'Gujarat'),
(310, 'Bardoli', '21.12 N', '73.12 E', 'Gujarat'),
(311, 'Bharuch', '21.71 N', '72.97 E', 'Gujarat'),
(312, 'Bhavnagar', '21.79 N', '72.13 E', 'Gujarat'),
(313, 'Bhuj', '23.26 N', '69.66 E', 'Gujarat'),
(314, 'Borsad', '22.42 N', '72.90 E', 'Gujarat'),
(315, 'Botad', '22.18 N', '71.66 E', 'Gujarat'),
(316, 'Chandkheda', '23.15 N', '72.61 E', 'Gujarat'),
(317, 'Chandlodiya', '23.10 N', '72.56 E', 'Gujarat'),
(318, 'Dabhoi', '22.13 N', '73.41 E', 'Gujarat'),
(319, 'Dahod', '22.84 N', '74.25 E', 'Gujarat'),
(320, 'Dholka', '22.74 N', '72.44 E', 'Gujarat'),
(321, 'Dhoraji', '21.74 N', '70.44 E', 'Gujarat'),
(322, 'Dhrangadhra', '23.00 N', '71.46 E', 'Gujarat'),
(323, 'Disa', '24.26 N', '72.18 E', 'Gujarat'),
(324, 'Gandhidham', '23.07 N', '70.13 E', 'Gujarat'),
(325, 'Gandhinagar', '23.30 N', '72.63 E', 'Gujarat'),
(326, 'Ghatlodiya', '23.05 N', '72.55 E', 'Gujarat'),
(327, 'Godhra', '22.77 N', '73.60 E', 'Gujarat'),
(328, 'Gondal', '21.97 N', '70.80 E', 'Gujarat'),
(329, 'Himatnagar', '23.60 N', '72.96 E', 'Gujarat'),
(330, 'Jamnagar', '22.47 N', '70.07 E', 'Gujarat'),
(331, 'Jamnagar', '', '', 'Gujarat'),
(332, 'Jetpur', '21.75 N', '70.61 E', 'Gujarat'),
(333, 'Junagadh', '21.52 N', '70.45 E', 'Gujarat'),
(334, 'Kalol', '23.25 N', '72.49 E', 'Gujarat'),
(335, 'Keshod', '21.31 N', '70.23 E', 'Gujarat'),
(336, 'Khambhat', '22.32 N', '72.61 E', 'Gujarat'),
(337, 'Kundla', '21.35 N', '71.30 E', 'Gujarat'),
(338, 'Mahuva', '21.10 N', '71.75 E', 'Gujarat'),
(339, 'Mangrol', '21.12 N', '70.12 E', 'Gujarat'),
(340, 'Modasa', '23.47 N', '73.30 E', 'Gujarat'),
(341, 'Morvi', '22.82 N', '70.83 E', 'Gujarat'),
(342, 'Nadiad', '22.70 N', '72.85 E', 'Gujarat'),
(343, 'Navagam Ghed', '', '', 'Gujarat'),
(344, 'Navsari', '20.96 N', '72.92 E', 'Gujarat'),
(345, 'Palitana', '21.52 N', '71.83 E', 'Gujarat'),
(346, 'Patan', '23.86 N', '72.11 E', 'Gujarat'),
(347, 'Porbandar', '21.65 N', '69.60 E', 'Gujarat'),
(348, 'Puna', '', '', 'Gujarat'),
(349, 'Rajkot', '22.31 N', '70.79 E', 'Gujarat'),
(350, 'Ramod', '', '', 'Gujarat'),
(351, 'Ranip', '23.03 N', '72.54 E', 'Gujarat'),
(352, 'Siddhapur', '23.92 N', '72.37 E', 'Gujarat'),
(353, 'Sihor', '21.70 N', '71.97 E', 'Gujarat'),
(354, 'Surat', '21.20 N', '72.82 E', 'Gujarat'),
(355, 'Surendranagar', '22.71 N', '71.67 E', 'Gujarat'),
(356, 'Thaltej', '', '', 'Gujarat'),
(357, 'Una', '20.82 N', '71.03 E', 'Gujarat'),
(358, 'Unjha', '23.81 N', '72.38 E', 'Gujarat'),
(359, 'Upleta', '21.75 N', '70.27 E', 'Gujarat'),
(360, 'Vadodara', '22.31 N', '73.18 E', 'Gujarat'),
(361, 'Valsad', '20.62 N', '72.92 E', 'Gujarat'),
(362, 'Vapi', '20.37 N', '72.90 E', 'Gujarat'),
(363, 'Vastral', '', '', 'Gujarat'),
(364, 'Vejalpur', '', '', 'Gujarat'),
(365, 'Veraval', '20.92 N', '70.34 E', 'Gujarat'),
(366, 'Vijalpor', '', '', 'Gujarat'),
(367, 'Visnagar', '23.71 N', '72.54 E', 'Gujarat'),
(368, 'Wadhwan', '22.73 N', '71.72 E', 'Gujarat'),
(369, 'Ambala', '30.38 N', '76.77 E', 'Haryana'),
(370, 'Ambala Cantonment', '30.39 N', '76.86 E', 'Haryana'),
(371, 'Ambala Sadar', '30.35 N', '76.84 E', 'Haryana'),
(372, 'Bahadurgarh', '28.69 N', '76.92 E', 'Haryana'),
(373, 'Bhiwani', '28.81 N', '76.12 E', 'Haryana'),
(374, 'Charkhi Dadri', '28.60 N', '76.27 E', 'Haryana'),
(375, 'Dabwali', '29.95 N', '74.73 E', 'Haryana'),
(376, 'Faridabad', '28.38 N', '77.30 E', 'Haryana'),
(377, 'Gohana', '29.13 N', '76.70 E', 'Haryana'),
(378, 'Hisar', '29.17 N', '75.72 E', 'Haryana'),
(379, 'Jagadhri', '30.18 N', '77.29 E', 'Haryana'),
(380, 'Jind', '29.31 N', '76.30 E', 'Haryana'),
(381, 'Kaithal', '29.81 N', '76.40 E', 'Haryana'),
(382, 'Karnal', '29.69 N', '76.97 E', 'Haryana'),
(383, 'Narnaul', '28.04 N', '76.10 E', 'Haryana'),
(384, 'Narwana', '29.62 N', '76.12 E', 'Haryana'),
(385, 'Palwal', '28.15 N', '77.32 E', 'Haryana'),
(386, 'Panchkula', '30.70 N', '76.88 E', 'Haryana'),
(387, 'Panipat', '29.39 N', '76.96 E', 'Haryana'),
(388, 'Rewari', '28.19 N', '76.60 E', 'Haryana'),
(389, 'Rohtak', '28.90 N', '76.58 E', 'Haryana'),
(390, 'Sirsa', '29.53 N', '75.03 E', 'Haryana'),
(391, 'Sonipat', '28.99 N', '77.01 E', 'Haryana'),
(392, 'Thanesar', '29.98 N', '76.82 E', 'Haryana'),
(393, 'Tohana', '29.70 N', '75.90 E', 'Haryana'),
(394, 'Yamunanagar', '30.14 N', '77.28 E', 'Haryana'),
(395, 'Shimla', '31.11 N', '77.16 E', 'Himachal Pradesh'),
(396, 'Anantnag', '33.73 N', '75.15 E', 'Jammu and Kashmir'),
(397, 'Baramula', '34.20 N', '74.35 E', 'Jammu and Kashmir'),
(398, 'Bari Brahmana', '', '', 'Jammu and Kashmir'),
(399, 'Jammu', '32.71 N', '74.85 E', 'Jammu and Kashmir'),
(400, 'Kathua', '32.37 N', '75.52 E', 'Jammu and Kashmir'),
(401, 'Sopur', '34.30 N', '74.47 E', 'Jammu and Kashmir'),
(402, 'Srinagar', '34.09 N', '74.79 E', 'Jammu and Kashmir'),
(403, 'Udhampur', '32.93 N', '75.13 E', 'Jammu and Kashmir'),
(404, 'Adityapur', '22.80 N', '86.04 E', 'Jharkhand'),
(405, 'Bagbahra', '22.82 N', '86.20 E', 'Jharkhand'),
(406, 'Bhuli', '23.79 N', '86.38 E', 'Jharkhand'),
(407, 'Bokaro', '23.78 N', '85.96 E', 'Jharkhand'),
(408, 'Chaibasa', '22.56 N', '85.80 E', 'Jharkhand'),
(409, 'Chas', '23.65 N', '86.17 E', 'Jharkhand'),
(410, 'Daltenganj', '24.05 N', '84.06 E', 'Jharkhand'),
(411, 'Devghar', '24.49 N', '86.69 E', 'Jharkhand'),
(412, 'Dhanbad', '23.80 N', '86.42 E', 'Jharkhand'),
(413, 'Hazaribag', '24.01 N', '85.36 E', 'Jharkhand'),
(414, 'Jamshedpur', '22.79 N', '86.20 E', 'Jharkhand'),
(415, 'Jharia', '23.76 N', '86.42 E', 'Jharkhand'),
(416, 'Jhumri Tilaiya', '24.43 N', '85.52 E', 'Jharkhand'),
(417, 'Jorapokhar', '23.79 N', '86.36 E', 'Jharkhand'),
(418, 'Katras', '23.80 N', '86.28 E', 'Jharkhand'),
(419, 'Lohardaga', '23.43 N', '84.68 E', 'Jharkhand'),
(420, 'Mango', '22.85 N', '86.21 E', 'Jharkhand'),
(421, 'Phusro', '23.68 N', '85.86 E', 'Jharkhand'),
(422, 'Ramgarh', '23.63 N', '85.51 E', 'Jharkhand'),
(423, 'Ranchi', '23.36 N', '85.33 E', 'Jharkhand'),
(424, 'Sahibganj', '25.25 N', '87.62 E', 'Jharkhand'),
(425, 'Saunda', '23.64 N', '85.37 E', 'Jharkhand'),
(426, 'Sindari', '23.68 N', '86.49 E', 'Jharkhand'),
(427, 'Bagalkot', '16.19 N', '75.69 E', 'Karnataka'),
(428, 'Bangalore', '12.97 N', '77.56 E', 'Karnataka'),
(429, 'Basavakalyan', '17.87 N', '76.95 E', 'Karnataka'),
(430, 'Belgaum', '15.86 N', '74.50 E', 'Karnataka'),
(431, 'Bellary', '15.14 N', '76.91 E', 'Karnataka'),
(432, 'Bhadravati', '13.84 N', '75.69 E', 'Karnataka'),
(433, 'Bidar', '17.92 N', '77.52 E', 'Karnataka'),
(434, 'Bijapur', '16.83 N', '75.71 E', 'Karnataka'),
(435, 'Bommanahalli', '13.01 N', '77.63 E', 'Karnataka'),
(436, 'Byatarayanapura', '', '', 'Karnataka'),
(437, 'Challakere', '14.32 N', '76.65 E', 'Karnataka'),
(438, 'Chamrajnagar', '11.92 N', '76.95 E', 'Karnataka'),
(439, 'Channapatna', '12.66 N', '77.19 E', 'Karnataka'),
(440, 'Chik Ballapur', '13.47 N', '77.73 E', 'Karnataka'),
(441, 'Chikmagalur', '13.32 N', '75.76 E', 'Karnataka'),
(442, 'Chintamani', '13.40 N', '78.05 E', 'Karnataka'),
(443, 'Chitradurga', '14.23 N', '76.39 E', 'Karnataka'),
(444, 'Dasarahalli', '13.01 N', '77.49 E', 'Karnataka'),
(445, 'Davanagere', '14.46 N', '75.92 E', 'Karnataka'),
(446, 'Dod Ballapur', '13.30 N', '77.52 E', 'Karnataka'),
(447, 'Gadag', '15.44 N', '75.63 E', 'Karnataka'),
(448, 'Gangawati', '15.44 N', '76.52 E', 'Karnataka'),
(449, 'Gokak', '16.18 N', '74.81 E', 'Karnataka'),
(450, 'Gulbarga', '17.34 N', '76.82 E', 'Karnataka'),
(451, 'Harihar', '14.52 N', '75.80 E', 'Karnataka'),
(452, 'Hassan', '13.01 N', '76.08 E', 'Karnataka'),
(453, 'Haveri', '14.80 N', '75.40 E', 'Karnataka'),
(454, 'Hiriyur', '13.97 N', '76.60 E', 'Karnataka'),
(455, 'Hosakote', '', '', 'Karnataka'),
(456, 'Hospet', '15.28 N', '76.37 E', 'Karnataka'),
(457, 'Hubli', '15.36 N', '75.13 E', 'Karnataka'),
(458, 'Ilkal', '15.97 N', '76.13 E', 'Karnataka'),
(459, 'Jamkhandi', '16.51 N', '75.28 E', 'Karnataka'),
(460, 'Kanakapura', '12.54 N', '77.42 E', 'Karnataka'),
(461, 'Karwar', '14.82 N', '74.12 E', 'Karnataka'),
(462, 'Kolar', '13.14 N', '78.13 E', 'Karnataka'),
(463, 'Kollegal', '12.15 N', '77.12 E', 'Karnataka'),
(464, 'Koppal', '15.35 N', '76.15 E', 'Karnataka'),
(465, 'Krishnarajapura', '12.97 N', '77.74 E', 'Karnataka'),
(466, 'Mahadevapura', '', '', 'Karnataka'),
(467, 'Maisuru', '12.31 N', '76.65 E', 'Karnataka'),
(468, 'Mandya', '12.54 N', '76.89 E', 'Karnataka'),
(469, 'Mangaluru', '12.88 N', '74.84 E', 'Karnataka'),
(470, 'Nipani', '16.41 N', '74.38 E', 'Karnataka'),
(471, 'Pattanagere', '', '', 'Karnataka'),
(472, 'Puttur', '12.77 N', '75.22 E', 'Karnataka'),
(473, 'Rabkavi', '16.47 N', '75.11 E', 'Karnataka'),
(474, 'Raichur', '16.21 N', '77.35 E', 'Karnataka'),
(475, 'Ramanagaram', '12.72 N', '77.27 E', 'Karnataka'),
(476, 'Ranibennur', '14.62 N', '75.61 E', 'Karnataka'),
(477, 'Robertsonpet', '12.97 N', '78.28 E', 'Karnataka'),
(478, 'Sagar', '14.17 N', '75.03 E', 'Karnataka'),
(479, 'Shahabad', '17.13 N', '76.93 E', 'Karnataka'),
(480, 'Shahpur', '16.70 N', '76.83 E', 'Karnataka'),
(481, 'Shimoga', '13.93 N', '75.57 E', 'Karnataka'),
(482, 'Shorapur', '16.52 N', '76.75 E', 'Karnataka'),
(483, 'Sidlaghatta', '13.38 N', '77.87 E', 'Karnataka'),
(484, 'Sira', '13.75 N', '76.90 E', 'Karnataka'),
(485, 'Sirsi', '14.62 N', '74.85 E', 'Karnataka'),
(486, 'Tiptur', '13.27 N', '76.48 E', 'Karnataka'),
(487, 'Tumkur', '13.34 N', '77.10 E', 'Karnataka'),
(488, 'Udupi', '13.35 N', '74.75 E', 'Karnataka'),
(489, 'Ullal', '12.80 N', '74.85 E', 'Karnataka'),
(490, 'Yadgir', '16.77 N', '77.13 E', 'Karnataka'),
(491, 'Yelahanka', '13.10 N', '77.60 E', 'Karnataka'),
(492, 'Alappuzha', '9.50 N', '76.33 E', 'Kerala'),
(493, 'Beypur', '11.18 N', '75.82 E', 'Kerala'),
(494, 'Cheruvannur', '11.21 N', '75.84 E', 'Kerala'),
(495, 'Edakkara', '', '', 'Kerala'),
(496, 'Edathala', '10.03 N', '76.32 E', 'Kerala'),
(497, 'Kalamassery', '10.05 N', '76.27 E', 'Kerala'),
(498, 'Kannan Devan Hills', '', '', 'Kerala'),
(499, 'Kannangad', '12.34 N', '75.09 E', 'Kerala'),
(500, 'Kannur', '11.86 N', '75.35 E', 'Kerala'),
(501, 'Kayankulam', '9.17 N', '76.49 E', 'Kerala'),
(502, 'Kochi', '10.02 N', '76.22 E', 'Kerala'),
(503, 'Kollam', '8.89 N', '76.58 E', 'Kerala'),
(504, 'Kottayam', '9.60 N', '76.52 E', 'Kerala'),
(505, 'Koyilandi', '11.43 N', '75.70 E', 'Kerala'),
(506, 'Kozhikkod', '11.26 N', '75.78 E', 'Kerala'),
(507, 'Kunnamkulam', '10.65 N', '76.08 E', 'Kerala'),
(508, 'Malappuram', '11.07 N', '76.06 E', 'Kerala'),
(509, 'Manjeri', '11.12 N', '76.11 E', 'Kerala'),
(510, 'Nedumangad', '8.61 N', '77.00 E', 'Kerala'),
(511, 'Neyyattinkara', '8.40 N', '77.08 E', 'Kerala'),
(512, 'Palakkad', '10.78 N', '76.65 E', 'Kerala'),
(513, 'Pallichal', '', '', 'Kerala'),
(514, 'Payyannur', '12.10 N', '75.19 E', 'Kerala'),
(515, 'Ponnani', '10.78 N', '75.92 E', 'Kerala'),
(516, 'Talipparamba', '12.03 N', '75.36 E', 'Kerala'),
(517, 'Thalassery', '11.75 N', '75.49 E', 'Kerala'),
(518, 'Thiruvananthapuram', '8.51 N', '76.95 E', 'Kerala'),
(519, 'Thrippunithura', '9.94 N', '76.35 E', 'Kerala'),
(520, 'Thrissur', '10.52 N', '76.21 E', 'Kerala'),
(521, 'Tirur', '10.91 N', '75.92 E', 'Kerala'),
(522, 'Tiruvalla', '9.39 N', '76.57 E', 'Kerala'),
(523, 'Vadakara', '11.61 N', '75.58 E', 'Kerala'),
(524, 'Ashoknagar', '24.57 N', '77.72 E', 'Madhya Pradesh'),
(525, 'Balaghat', '21.80 N', '80.18 E', 'Madhya Pradesh'),
(526, 'Basoda', '23.85 N', '77.93 E', 'Madhya Pradesh'),
(527, 'Betul', '21.92 N', '77.90 E', 'Madhya Pradesh'),
(528, 'Bhind', '26.57 N', '78.77 E', 'Madhya Pradesh'),
(529, 'Bhopal', '23.24 N', '77.40 E', 'Madhya Pradesh'),
(530, 'BinaEtawa', '24.20 N', '78.20 E', 'Madhya Pradesh'),
(531, 'Burhanpur', '21.33 N', '76.22 E', 'Madhya Pradesh'),
(532, 'Chhatarpur', '24.92 N', '79.58 E', 'Madhya Pradesh'),
(533, 'Chhindwara', '22.07 N', '78.94 E', 'Madhya Pradesh'),
(534, 'Dabra', '25.90 N', '78.33 E', 'Madhya Pradesh'),
(535, 'Damoh', '23.85 N', '79.44 E', 'Madhya Pradesh'),
(536, 'Datia', '25.67 N', '78.45 E', 'Madhya Pradesh'),
(537, 'Dewas', '22.97 N', '76.05 E', 'Madhya Pradesh'),
(538, 'Dhar', '22.60 N', '75.29 E', 'Madhya Pradesh'),
(539, 'Gohad', '26.43 N', '78.45 E', 'Madhya Pradesh'),
(540, 'Guna', '24.65 N', '77.30 E', 'Madhya Pradesh'),
(541, 'Gwalior', '26.23 N', '78.17 E', 'Madhya Pradesh'),
(542, 'Harda', '22.33 N', '77.11 E', 'Madhya Pradesh'),
(543, 'Hoshangabad', '22.75 N', '77.71 E', 'Madhya Pradesh'),
(544, 'Indore', '22.72 N', '75.86 E', 'Madhya Pradesh'),
(545, 'Itarsi', '22.62 N', '77.76 E', 'Madhya Pradesh'),
(546, 'Jabalpur', '23.17 N', '79.94 E', 'Madhya Pradesh'),
(547, 'Jabalpur Cantonment', '23.16 N', '79.95 E', 'Madhya Pradesh'),
(548, 'Jaora', '23.64 N', '75.11 E', 'Madhya Pradesh'),
(549, 'Khandwa', '21.83 N', '76.35 E', 'Madhya Pradesh'),
(550, 'Khargone', '21.83 N', '75.60 E', 'Madhya Pradesh'),
(551, 'Mandidip', '23.10 N', '77.52 E', 'Madhya Pradesh'),
(552, 'Mandsaur', '24.07 N', '75.07 E', 'Madhya Pradesh'),
(553, 'Mau', '22.56 N', '75.75 E', 'Madhya Pradesh'),
(554, 'Morena', '26.51 N', '77.99 E', 'Madhya Pradesh'),
(555, 'Murwara', '23.85 N', '80.39 E', 'Madhya Pradesh'),
(556, 'Nagda', '23.46 N', '75.42 E', 'Madhya Pradesh'),
(557, 'Nimach', '24.47 N', '74.87 E', 'Madhya Pradesh'),
(558, 'Pithampur', '', '', 'Madhya Pradesh'),
(559, 'Raghogarh', '24.45 N', '77.20 E', 'Madhya Pradesh'),
(560, 'Ratlam', '23.35 N', '75.03 E', 'Madhya Pradesh'),
(561, 'Rewa', '24.53 N', '81.29 E', 'Madhya Pradesh'),
(562, 'Sagar', '23.85 N', '78.75 E', 'Madhya Pradesh'),
(563, 'Sarni', '22.04 N', '78.27 E', 'Madhya Pradesh'),
(564, 'Satna', '24.58 N', '80.83 E', 'Madhya Pradesh'),
(565, 'Sehore', '23.20 N', '77.08 E', 'Madhya Pradesh'),
(566, 'Sendhwa', '21.68 N', '75.10 E', 'Madhya Pradesh'),
(567, 'Seoni', '22.10 N', '79.55 E', 'Madhya Pradesh'),
(568, 'Shahdol', '23.30 N', '81.36 E', 'Madhya Pradesh'),
(569, 'Shajapur', '23.43 N', '76.27 E', 'Madhya Pradesh'),
(570, 'Sheopur', '25.67 N', '76.70 E', 'Madhya Pradesh'),
(571, 'Shivapuri', '25.43 N', '77.65 E', 'Madhya Pradesh'),
(572, 'Sidhi', '24.42 N', '81.88 E', 'Madhya Pradesh'),
(573, 'Singrauli', '23.84 N', '82.27 E', 'Madhya Pradesh'),
(574, 'Tikamgarh', '24.74 N', '78.83 E', 'Madhya Pradesh'),
(575, 'Ujjain', '23.19 N', '75.78 E', 'Madhya Pradesh'),
(576, 'Vidisha', '23.53 N', '77.80 E', 'Madhya Pradesh'),
(577, 'Achalpur', '21.26 N', '77.50 E', 'Maharashtra'),
(578, 'Ahmadnagar', '19.10 N', '74.74 E', 'Maharashtra'),
(579, 'Akola', '20.71 N', '77.00 E', 'Maharashtra'),
(580, 'Akot', '21.10 N', '77.05 E', 'Maharashtra'),
(581, 'Amalner', '21.05 N', '75.06 E', 'Maharashtra'),
(582, 'Ambajogai', '18.73 N', '76.38 E', 'Maharashtra'),
(583, 'Amravati', '20.95 N', '77.76 E', 'Maharashtra'),
(584, 'Anjangaon', '21.16 N', '77.31 E', 'Maharashtra'),
(585, 'Aurangabad', '19.89 N', '75.32 E', 'Maharashtra'),
(586, 'Badlapur', '19.15 N', '73.27 E', 'Maharashtra'),
(587, 'Ballarpur', '19.85 N', '79.35 E', 'Maharashtra'),
(588, 'Baramati', '18.15 N', '74.58 E', 'Maharashtra'),
(589, 'Barsi', '18.24 N', '75.69 E', 'Maharashtra'),
(590, 'Basmat', '19.32 N', '77.17 E', 'Maharashtra'),
(591, 'Bhadravati', '20.11 N', '79.12 E', 'Maharashtra'),
(592, 'Bhandara', '21.18 N', '79.65 E', 'Maharashtra'),
(593, 'Bhiwandi', '19.30 N', '73.05 E', 'Maharashtra'),
(594, 'Bhusawal', '21.05 N', '75.78 E', 'Maharashtra'),
(595, 'Bid', '18.99 N', '75.76 E', 'Maharashtra'),
(596, 'Mumbai', '18.96 N', '72.82 E', 'Maharashtra'),
(597, 'Buldana', '20.54 N', '76.18 E', 'Maharashtra'),
(598, 'Chalisgaon', '20.46 N', '74.99 E', 'Maharashtra'),
(599, 'Chandrapur', '19.96 N', '79.30 E', 'Maharashtra'),
(600, 'Chikhli', '20.35 N', '76.25 E', 'Maharashtra'),
(601, 'Chiplun', '17.53 N', '73.52 E', 'Maharashtra'),
(602, 'Chopda', '21.25 N', '75.28 E', 'Maharashtra'),
(603, 'Dahanu', '19.97 N', '72.73 E', 'Maharashtra'),
(604, 'Deolali', '19.95 N', '73.84 E', 'Maharashtra'),
(605, 'Dhule', '20.90 N', '74.77 E', 'Maharashtra'),
(606, 'Digdoh', '', '', 'Maharashtra'),
(607, 'Diglur', '18.55 N', '77.60 E', 'Maharashtra'),
(608, 'Gadchiroli', '20.17 N', '80.00 E', 'Maharashtra'),
(609, 'Gondiya', '21.47 N', '80.20 E', 'Maharashtra'),
(610, 'Hinganghat', '20.56 N', '78.83 E', 'Maharashtra'),
(611, 'Hingoli', '19.72 N', '77.14 E', 'Maharashtra'),
(612, 'Ichalkaranji', '16.69 N', '74.46 E', 'Maharashtra'),
(613, 'Jalgaon', '21.01 N', '75.56 E', 'Maharashtra'),
(614, 'Jalna', '19.85 N', '75.88 E', 'Maharashtra'),
(615, 'Kalyan', '19.25 N', '73.16 E', 'Maharashtra'),
(616, 'Kamthi', '21.23 N', '79.20 E', 'Maharashtra'),
(617, 'Karanja', '20.48 N', '77.48 E', 'Maharashtra'),
(618, 'Khadki', '18.57 N', '73.83 E', 'Maharashtra'),
(619, 'Khamgaon', '20.70 N', '76.56 E', 'Maharashtra'),
(620, 'Khopoli', '18.78 N', '73.33 E', 'Maharashtra'),
(621, 'Kolhapur', '16.70 N', '74.22 E', 'Maharashtra'),
(622, 'Kopargaon', '19.88 N', '74.48 E', 'Maharashtra'),
(623, 'Latur', '18.41 N', '76.58 E', 'Maharashtra'),
(624, 'Lonavale', '18.75 N', '73.42 E', 'Maharashtra'),
(625, 'Malegaon', '20.56 N', '74.52 E', 'Maharashtra'),
(626, 'Malkapur', '20.90 N', '76.19 E', 'Maharashtra'),
(627, 'Manmad', '20.26 N', '74.43 E', 'Maharashtra'),
(628, 'Mira Bhayandar', '19.29 N', '72.85 E', 'Maharashtra'),
(629, 'Nagpur', '21.16 N', '79.08 E', 'Maharashtra'),
(630, 'Nalasopara', '19.43 N', '72.78 E', 'Maharashtra'),
(631, 'Nanded', '19.17 N', '77.29 E', 'Maharashtra'),
(632, 'Nandurbar', '21.38 N', '74.23 E', 'Maharashtra'),
(633, 'Nashik', '20.01 N', '73.78 E', 'Maharashtra'),
(634, 'Navghar', '19.34 N', '72.90 E', 'Maharashtra'),
(636, 'Navi Mumbai', '19.00 N', '73.10 E', 'Maharashtra'),
(637, 'Osmanabad', '18.17 N', '76.03 E', 'Maharashtra'),
(638, 'Palghar', '19.68 N', '72.75 E', 'Maharashtra'),
(639, 'Pandharpur', '17.68 N', '75.31 E', 'Maharashtra'),
(640, 'Parbhani', '19.27 N', '76.76 E', 'Maharashtra'),
(641, 'Phaltan', '17.98 N', '74.43 E', 'Maharashtra'),
(642, 'Pimpri', '18.62 N', '73.80 E', 'Maharashtra'),
(643, 'Pune', '18.53 N', '73.84 E', 'Maharashtra'),
(644, 'Pune Cantonment', '18.50 N', '73.88 E', 'Maharashtra'),
(645, 'Pusad', '19.91 N', '77.57 E', 'Maharashtra'),
(646, 'Ratnagiri', '17.00 N', '73.29 E', 'Maharashtra'),
(647, 'SangliMiraj', '16.86 N', '74.57 E', 'Maharashtra'),
(648, 'Satara', '17.70 N', '74.00 E', 'Maharashtra'),
(649, 'Shahada', '21.55 N', '74.47 E', 'Maharashtra'),
(650, 'Shegaon', '20.78 N', '76.68 E', 'Maharashtra'),
(651, 'Shirpur', '21.35 N', '74.88 E', 'Maharashtra'),
(652, 'Sholapur', '17.67 N', '75.89 E', 'Maharashtra'),
(653, 'Shrirampur', '19.63 N', '74.64 E', 'Maharashtra'),
(654, 'Sillod', '20.30 N', '75.65 E', 'Maharashtra'),
(655, 'Thana', '19.20 N', '72.97 E', 'Maharashtra'),
(656, 'Udgir', '18.40 N', '77.11 E', 'Maharashtra'),
(657, 'Ulhasnagar', '19.23 N', '73.15 E', 'Maharashtra'),
(658, 'Uran Islampur', '17.05 N', '74.27 E', 'Maharashtra'),
(659, 'Vasai', '19.36 N', '72.80 E', 'Maharashtra'),
(660, 'Virar', '19.47 N', '72.79 E', 'Maharashtra'),
(661, 'Wadi', '', '', 'Maharashtra'),
(662, 'Wani', '20.07 N', '78.95 E', 'Maharashtra'),
(663, 'Wardha', '20.75 N', '78.60 E', 'Maharashtra'),
(664, 'Warud', '21.47 N', '78.27 E', 'Maharashtra'),
(665, 'Washim', '20.10 N', '77.13 E', 'Maharashtra'),
(666, 'Yavatmal', '20.41 N', '78.13 E', 'Maharashtra'),
(667, 'Imphal', '24.79 N', '93.94 E', 'Manipur'),
(668, 'Shillong', '25.57 N', '91.87 E', 'Meghalaya'),
(669, 'Tura', '25.52 N', '90.22 E', 'Meghalaya'),
(670, 'Aizawl', '23.71 N', '92.71 E', 'Mizoram'),
(671, 'Lunglei', '22.88 N', '92.73 E', 'Mizoram'),
(672, 'Dimapur', '25.92 N', '93.73 E', 'Nagaland'),
(673, 'Kohima', '25.67 N', '94.11 E', 'Nagaland'),
(674, 'Wokha', '26.10 N', '94.27 E', 'Nagaland'),
(675, 'Balangir', '20.71 N', '83.50 E', 'Orissa'),
(676, 'Baleshwar', '21.49 N', '86.95 E', 'Orissa'),
(677, 'Barbil', '22.12 N', '85.40 E', 'Orissa'),
(678, 'Bargarh', '21.34 N', '83.61 E', 'Orissa'),
(679, 'Baripada', '21.95 N', '86.73 E', 'Orissa'),
(680, 'Bhadrak', '21.06 N', '86.52 E', 'Orissa'),
(681, 'Bhawanipatna', '19.91 N', '83.17 E', 'Orissa'),
(682, 'Bhubaneswar', '20.27 N', '85.84 E', 'Orissa'),
(683, 'Brahmapur', '19.32 N', '84.80 E', 'Orissa'),
(684, 'Brajrajnagar', '21.82 N', '83.91 E', 'Orissa'),
(685, 'Dhenkanal', '20.67 N', '85.60 E', 'Orissa'),
(686, 'Jaypur', '18.86 N', '82.56 E', 'Orissa'),
(687, 'Jharsuguda', '21.87 N', '84.01 E', 'Orissa'),
(688, 'Kataka', '20.47 N', '85.88 E', 'Orissa'),
(689, 'Kendujhar', '21.63 N', '85.58 E', 'Orissa'),
(690, 'Paradwip', '20.32 N', '86.62 E', 'Orissa'),
(691, 'Puri', '19.81 N', '85.83 E', 'Orissa'),
(692, 'Raurkela', '22.24 N', '84.81 E', 'Orissa'),
(693, 'Raurkela Industrial Township', '', '', 'Orissa'),
(694, 'Rayagada', '19.18 N', '83.41 E', 'Orissa'),
(695, 'Sambalpur', '21.47 N', '83.97 E', 'Orissa'),
(696, 'Sunabeda', '18.69 N', '82.86 E', 'Orissa'),
(697, 'Karaikal', '10.93 N', '79.83 E', 'Pondicherry'),
(698, 'Ozhukarai', '11.94 N', '79.77 E', 'Pondicherry'),
(699, 'Pondicherry', '11.94 N', '79.83 E', 'Pondicherry'),
(700, 'Abohar', '30.14 N', '74.20 E', 'Punjab'),
(701, 'Amritsar', '31.64 N', '74.87 E', 'Punjab'),
(702, 'Barnala', '30.39 N', '75.54 E', 'Punjab'),
(703, 'Batala', '31.82 N', '75.21 E', 'Punjab'),
(704, 'Bathinda', '30.17 N', '74.97 E', 'Punjab'),
(705, 'Dhuri', '30.37 N', '75.87 E', 'Punjab'),
(706, 'Faridkot', '30.68 N', '74.74 E', 'Punjab'),
(707, 'Fazilka', '30.41 N', '74.02 E', 'Punjab'),
(708, 'Firozpur', '30.92 N', '74.61 E', 'Punjab'),
(709, 'Firozpur Cantonment', '30.95 N', '74.60 E', 'Punjab'),
(710, 'Gobindgarh', '30.66 N', '76.31 E', 'Punjab'),
(711, 'Gurdaspur', '32.04 N', '75.40 E', 'Punjab'),
(712, 'Hoshiarpur', '31.53 N', '75.91 E', 'Punjab'),
(713, 'Jagraon', '30.78 N', '75.48 E', 'Punjab'),
(714, 'Jalandhar', '31.33 N', '75.57 E', 'Punjab'),
(715, 'Kapurthala', '31.38 N', '75.38 E', 'Punjab'),
(716, 'Khanna', '30.71 N', '76.21 E', 'Punjab'),
(717, 'Kot Kapura', '30.59 N', '74.80 E', 'Punjab'),
(718, 'Ludhiana', '30.91 N', '75.84 E', 'Punjab'),
(719, 'Malaut', '30.23 N', '74.48 E', 'Punjab'),
(720, 'Maler Kotla', '30.54 N', '75.87 E', 'Punjab'),
(721, 'Mansa', '29.98 N', '75.39 E', 'Punjab'),
(722, 'Moga', '30.82 N', '75.17 E', 'Punjab'),
(723, 'Mohali', '30.78 N', '76.69 E', 'Punjab'),
(724, 'Pathankot', '32.27 N', '75.64 E', 'Punjab'),
(725, 'Patiala', '30.32 N', '76.39 E', 'Punjab'),
(726, 'Phagwara', '31.22 N', '75.76 E', 'Punjab'),
(727, 'Rajpura', '30.48 N', '76.59 E', 'Punjab'),
(728, 'Rupnagar', '30.98 N', '76.52 E', 'Punjab'),
(729, 'Samana', '30.15 N', '76.20 E', 'Punjab'),
(730, 'Sangrur', '30.25 N', '75.84 E', 'Punjab'),
(731, 'Sirhind', '30.65 N', '76.38 E', 'Punjab'),
(732, 'Sunam', '30.13 N', '75.80 E', 'Punjab'),
(733, 'Tarn Taran', '31.45 N', '74.92 E', 'Punjab'),
(734, 'Ajmer', '26.45 N', '74.64 E', 'Rajasthan'),
(735, 'Alwar', '27.56 N', '76.60 E', 'Rajasthan'),
(736, 'Balotra', '25.83 N', '72.23 E', 'Rajasthan'),
(737, 'Banswara', '23.54 N', '74.44 E', 'Rajasthan'),
(738, 'Baran', '25.10 N', '76.51 E', 'Rajasthan'),
(739, 'Bari', '26.65 N', '77.60 E', 'Rajasthan'),
(740, 'Barmer', '25.75 N', '71.39 E', 'Rajasthan'),
(741, 'Beawar', '26.10 N', '74.30 E', 'Rajasthan'),
(742, 'Bharatpur', '27.23 N', '77.49 E', 'Rajasthan'),
(743, 'Bhilwara', '25.35 N', '74.63 E', 'Rajasthan'),
(744, 'Bhiwadi', '', '', 'Rajasthan'),
(745, 'Bikaner', '28.03 N', '73.32 E', 'Rajasthan'),
(746, 'Bundi', '25.45 N', '75.63 E', 'Rajasthan'),
(747, 'Chittaurgarh', '24.89 N', '74.63 E', 'Rajasthan'),
(748, 'Chomun', '27.17 N', '75.72 E', 'Rajasthan'),
(749, 'Churu', '28.31 N', '74.96 E', 'Rajasthan'),
(750, 'Daosa', '26.88 N', '76.33 E', 'Rajasthan'),
(751, 'Dhaulpur', '26.70 N', '77.87 E', 'Rajasthan'),
(752, 'Didwana', '27.39 N', '74.57 E', 'Rajasthan'),
(753, 'Fatehpur', '27.99 N', '74.95 E', 'Rajasthan'),
(754, 'Ganganagar', '29.93 N', '73.86 E', 'Rajasthan'),
(755, 'Gangapur', '26.47 N', '76.72 E', 'Rajasthan'),
(756, 'Hanumangarh', '29.62 N', '74.29 E', 'Rajasthan'),
(757, 'Hindaun', '26.74 N', '77.02 E', 'Rajasthan'),
(758, 'Jaipur', '26.92 N', '75.80 E', 'Rajasthan'),
(759, 'Jaisalmer', '26.92 N', '70.90 E', 'Rajasthan'),
(760, 'Jalor', '25.35 N', '72.62 E', 'Rajasthan'),
(761, 'Jhalawar', '24.60 N', '76.15 E', 'Rajasthan'),
(762, 'Jhunjhunun', '28.13 N', '75.39 E', 'Rajasthan'),
(763, 'Jodhpur', '26.29 N', '73.02 E', 'Rajasthan'),
(764, 'Karauli', '26.50 N', '77.02 E', 'Rajasthan'),
(765, 'Kishangarh', '26.58 N', '74.86 E', 'Rajasthan'),
(766, 'Kota', '25.18 N', '75.83 E', 'Rajasthan'),
(767, 'Kuchaman', '27.15 N', '74.85 E', 'Rajasthan'),
(768, 'Ladnun', '27.64 N', '74.38 E', 'Rajasthan'),
(769, 'Makrana', '27.05 N', '74.72 E', 'Rajasthan'),
(770, 'Nagaur', '27.21 N', '73.73 E', 'Rajasthan'),
(771, 'Nawalgarh', '27.85 N', '75.27 E', 'Rajasthan'),
(772, 'Nimbahera', '24.62 N', '74.68 E', 'Rajasthan'),
(773, 'Nokha', '27.60 N', '73.42 E', 'Rajasthan'),
(774, 'Pali', '25.79 N', '73.32 E', 'Rajasthan'),
(775, 'Rajsamand', '25.07 N', '73.88 E', 'Rajasthan'),
(776, 'Ratangarh', '28.09 N', '74.60 E', 'Rajasthan'),
(777, 'Sardarshahr', '28.45 N', '74.48 E', 'Rajasthan'),
(778, 'Sawai Madhopur', '26.03 N', '76.34 E', 'Rajasthan'),
(779, 'Sikar', '27.61 N', '75.13 E', 'Rajasthan'),
(780, 'Sujangarh', '27.70 N', '74.46 E', 'Rajasthan'),
(781, 'Suratgarh', '29.32 N', '73.90 E', 'Rajasthan'),
(782, 'Tonk', '26.17 N', '75.78 E', 'Rajasthan'),
(783, 'Udaipur', '24.58 N', '73.69 E', 'Rajasthan'),
(784, 'Alandur', '13.03 N', '80.23 E', 'Tamil Nadu'),
(785, 'Ambattur', '13.11 N', '80.17 E', 'Tamil Nadu'),
(786, 'Ambur', '12.80 N', '78.72 E', 'Tamil Nadu'),
(787, 'Arakonam', '13.08 N', '79.67 E', 'Tamil Nadu'),
(788, 'Arani', '12.68 N', '79.28 E', 'Tamil Nadu'),
(789, 'Aruppukkottai', '9.51 N', '78.09 E', 'Tamil Nadu'),
(790, 'Attur', '11.60 N', '78.60 E', 'Tamil Nadu'),
(791, 'Avadi', '13.12 N', '80.11 E', 'Tamil Nadu'),
(792, 'Avaniapuram', '9.86 N', '78.12 E', 'Tamil Nadu'),
(793, 'Bodinayakkanur', '10.01 N', '77.35 E', 'Tamil Nadu'),
(794, 'Chengalpattu', '12.70 N', '79.97 E', 'Tamil Nadu'),
(795, 'Dharapuram', '10.74 N', '77.52 E', 'Tamil Nadu'),
(796, 'Dharmapuri', '12.13 N', '78.16 E', 'Tamil Nadu'),
(797, 'Dindigul', '10.36 N', '77.97 E', 'Tamil Nadu'),
(798, 'Erode', '11.35 N', '77.73 E', 'Tamil Nadu'),
(799, 'Gopichettipalaiyam', '11.46 N', '77.43 E', 'Tamil Nadu'),
(800, 'Gudalur', '11.76 N', '79.75 E', 'Tamil Nadu'),
(801, 'Gudiyattam', '12.95 N', '78.86 E', 'Tamil Nadu'),
(802, 'Hosur', '12.72 N', '77.82 E', 'Tamil Nadu'),
(803, 'Idappadi', '11.58 N', '77.85 E', 'Tamil Nadu'),
(804, 'Kadayanallur', '9.08 N', '77.35 E', 'Tamil Nadu'),
(805, 'Kambam', '9.74 N', '77.28 E', 'Tamil Nadu'),
(806, 'Kanchipuram', '12.84 N', '79.70 E', 'Tamil Nadu'),
(807, 'Karur', '10.96 N', '78.07 E', 'Tamil Nadu'),
(808, 'Kavundampalaiyam', '11.05 N', '76.92 E', 'Tamil Nadu'),
(809, 'Kovilpatti', '9.19 N', '77.86 E', 'Tamil Nadu'),
(810, 'Koyampattur', '11.01 N', '76.96 E', 'Tamil Nadu'),
(811, 'Krishnagiri', '12.54 N', '78.21 E', 'Tamil Nadu'),
(812, 'Kumarapalaiyam', '11.44 N', '77.73 E', 'Tamil Nadu'),
(813, 'Kumbakonam', '10.97 N', '79.38 E', 'Tamil Nadu'),
(814, 'Kuniyamuthur', '10.98 N', '76.95 E', 'Tamil Nadu'),
(815, 'Kurichi', '10.92 N', '76.96 E', 'Tamil Nadu'),
(816, 'Madhavaram', '13.02 N', '80.26 E', 'Tamil Nadu'),
(817, 'Madras', '13.09 N', '80.27 E', 'Tamil Nadu'),
(818, 'Madurai', '9.92 N', '78.12 E', 'Tamil Nadu'),
(819, 'Maduravoyal', '', '', 'Tamil Nadu'),
(820, 'Mannargudi', '10.67 N', '79.45 E', 'Tamil Nadu'),
(821, 'Mayiladuthurai', '11.11 N', '79.65 E', 'Tamil Nadu'),
(822, 'Mettupalayam', '11.30 N', '76.94 E', 'Tamil Nadu'),
(823, 'Mettur', '11.80 N', '77.80 E', 'Tamil Nadu'),
(824, 'Nagapattinam', '10.80 N', '79.84 E', 'Tamil Nadu'),
(825, 'Nagercoil', '8.18 N', '77.43 E', 'Tamil Nadu'),
(826, 'Namakkal', '11.23 N', '78.17 E', 'Tamil Nadu'),
(827, 'Nerkunram', '13.04 N', '80.26 E', 'Tamil Nadu'),
(828, 'Neyveli', '11.62 N', '79.48 E', 'Tamil Nadu'),
(829, 'Pallavaram', '12.99 N', '80.16 E', 'Tamil Nadu'),
(830, 'Pammal', '12.97 N', '80.11 E', 'Tamil Nadu'),
(831, 'Pannuratti', '11.78 N', '79.55 E', 'Tamil Nadu'),
(832, 'Paramakkudi', '9.54 N', '78.59 E', 'Tamil Nadu'),
(833, 'Pattukkottai', '10.43 N', '79.31 E', 'Tamil Nadu'),
(834, 'Pollachi', '10.67 N', '77.00 E', 'Tamil Nadu'),
(835, 'Pudukkottai', '10.39 N', '78.82 E', 'Tamil Nadu'),
(836, 'Puliyankudi', '9.18 N', '77.40 E', 'Tamil Nadu'),
(837, 'Punamalli', '13.05 N', '80.11 E', 'Tamil Nadu'),
(838, 'Rajapalaiyam', '9.46 N', '77.55 E', 'Tamil Nadu'),
(839, 'Ramanathapuram', '9.37 N', '78.83 E', 'Tamil Nadu'),
(840, 'Salem', '11.67 N', '78.16 E', 'Tamil Nadu'),
(841, 'Sankarankoil', '9.17 N', '77.54 E', 'Tamil Nadu'),
(842, 'Sivakasi', '9.46 N', '77.79 E', 'Tamil Nadu'),
(843, 'Srivilliputtur', '9.52 N', '77.63 E', 'Tamil Nadu'),
(844, 'Tambaram', '12.93 N', '80.12 E', 'Tamil Nadu'),
(845, 'Tenkasi', '8.96 N', '77.31 E', 'Tamil Nadu'),
(846, 'Thanjavur', '10.79 N', '79.13 E', 'Tamil Nadu'),
(847, 'Theni Allinagaram', '10.02 N', '77.48 E', 'Tamil Nadu'),
(848, 'Thiruthangal', '9.48 N', '77.83 E', 'Tamil Nadu'),
(849, 'Thiruvarur', '10.78 N', '79.64 E', 'Tamil Nadu'),
(850, 'Thuthukkudi', '8.81 N', '78.14 E', 'Tamil Nadu'),
(851, 'Tindivanam', '12.24 N', '79.65 E', 'Tamil Nadu'),
(852, 'Tiruchchirappalli', '10.81 N', '78.69 E', 'Tamil Nadu'),
(853, 'Tiruchengode', '11.38 N', '77.90 E', 'Tamil Nadu'),
(854, 'Tirunelveli', '8.73 N', '77.69 E', 'Tamil Nadu'),
(855, 'Tirupathur', '12.50 N', '78.57 E', 'Tamil Nadu'),
(856, 'Tiruppur', '11.09 N', '77.35 E', 'Tamil Nadu'),
(857, 'Tiruvannamalai', '12.24 N', '79.07 E', 'Tamil Nadu'),
(858, 'Tiruvottiyur', '13.16 N', '80.29 E', 'Tamil Nadu'),
(859, 'Udagamandalam', '11.42 N', '76.69 E', 'Tamil Nadu'),
(860, 'Udumalaipettai', '10.58 N', '77.24 E', 'Tamil Nadu'),
(861, 'Valparai', '10.38 N', '76.99 E', 'Tamil Nadu'),
(862, 'Vaniyambadi', '12.69 N', '78.60 E', 'Tamil Nadu'),
(863, 'Velampalaiyam', '', '', 'Tamil Nadu'),
(864, 'Velluru', '12.92 N', '79.13 E', 'Tamil Nadu'),
(865, 'Viluppuram', '11.95 N', '79.49 E', 'Tamil Nadu'),
(866, 'Virappanchatram', '11.40 N', '77.70 E', 'Tamil Nadu'),
(867, 'Virudhachalam', '11.51 N', '79.32 E', 'Tamil Nadu'),
(868, 'Virudunagar', '9.59 N', '77.95 E', 'Tamil Nadu'),
(869, 'Agartala', '23.84 N', '91.27 E', 'Tripura'),
(870, 'Agartala MCl', '', '', 'Tripura'),
(871, 'Badharghat', '', '', 'Tripura'),
(872, 'Agra', '27.19 N', '78.01 E', 'Uttar Pradesh'),
(873, 'Aligarh', '27.89 N', '78.06 E', 'Uttar Pradesh'),
(874, 'Allahabad', '25.45 N', '81.84 E', 'Uttar Pradesh'),
(875, 'Amroha', '28.91 N', '78.46 E', 'Uttar Pradesh'),
(876, 'Aonla', '28.28 N', '79.15 E', 'Uttar Pradesh'),
(877, 'Auraiya', '26.47 N', '79.50 E', 'Uttar Pradesh'),
(878, 'Ayodhya', '26.80 N', '82.20 E', 'Uttar Pradesh'),
(879, 'Azamgarh', '26.07 N', '83.18 E', 'Uttar Pradesh'),
(880, 'Baheri', '28.78 N', '79.50 E', 'Uttar Pradesh'),
(881, 'Bahraich', '27.58 N', '81.59 E', 'Uttar Pradesh'),
(882, 'Ballia', '25.76 N', '84.15 E', 'Uttar Pradesh'),
(883, 'Balrampur', '27.43 N', '82.18 E', 'Uttar Pradesh'),
(884, 'Banda', '25.48 N', '80.33 E', 'Uttar Pradesh'),
(885, 'Baraut', '29.10 N', '77.26 E', 'Uttar Pradesh'),
(886, 'Bareli', '28.36 N', '79.41 E', 'Uttar Pradesh'),
(887, 'Basti', '26.80 N', '82.74 E', 'Uttar Pradesh'),
(888, 'Behta Hajipur', '', '', 'Uttar Pradesh'),
(889, 'Bela', '25.92 N', '81.99 E', 'Uttar Pradesh'),
(890, 'Bhadohi', '25.40 N', '82.56 E', 'Uttar Pradesh'),
(891, 'Bijnor', '29.38 N', '78.13 E', 'Uttar Pradesh'),
(892, 'Bisalpur', '28.30 N', '79.80 E', 'Uttar Pradesh'),
(893, 'Biswan', '27.50 N', '81.00 E', 'Uttar Pradesh'),
(894, 'Budaun', '28.04 N', '79.12 E', 'Uttar Pradesh'),
(895, 'Bulandshahr', '28.41 N', '77.85 E', 'Uttar Pradesh'),
(896, 'Chandausi', '28.46 N', '78.78 E', 'Uttar Pradesh'),
(897, 'Chandpur', '29.14 N', '78.27 E', 'Uttar Pradesh'),
(898, 'Chhibramau', '27.15 N', '79.52 E', 'Uttar Pradesh'),
(899, 'Chitrakut Dham', '25.20 N', '80.84 E', 'Uttar Pradesh'),
(900, 'Dadri', '28.57 N', '77.55 E', 'Uttar Pradesh'),
(901, 'Deoband', '29.70 N', '77.67 E', 'Uttar Pradesh'),
(902, 'Deoria', '26.51 N', '83.78 E', 'Uttar Pradesh'),
(903, 'Etah', '27.57 N', '78.64 E', 'Uttar Pradesh'),
(904, 'Etawah', '26.78 N', '79.01 E', 'Uttar Pradesh'),
(905, 'Faizabad', '26.78 N', '82.14 E', 'Uttar Pradesh'),
(906, 'Faridpur', '28.22 N', '79.53 E', 'Uttar Pradesh'),
(907, 'Farrukhabad', '27.40 N', '79.57 E', 'Uttar Pradesh'),
(908, 'Fatehpur', '25.93 N', '80.81 E', 'Uttar Pradesh'),
(909, 'Firozabad', '27.15 N', '78.39 E', 'Uttar Pradesh'),
(910, 'Gajraula', '28.85 N', '78.23 E', 'Uttar Pradesh'),
(911, 'Ganga Ghat', '26.52 N', '80.45 E', 'Uttar Pradesh'),
(912, 'Gangoh', '29.77 N', '77.25 E', 'Uttar Pradesh'),
(913, 'Ghaziabad', '28.66 N', '77.41 E', 'Uttar Pradesh'),
(914, 'Ghazipur', '25.59 N', '83.59 E', 'Uttar Pradesh'),
(915, 'Gola Gokarannath', '28.08 N', '80.47 E', 'Uttar Pradesh'),
(916, 'Gonda', '27.14 N', '81.95 E', 'Uttar Pradesh'),
(917, 'Gorakhpur', '26.76 N', '83.36 E', 'Uttar Pradesh'),
(918, 'Hapur', '28.73 N', '77.77 E', 'Uttar Pradesh'),
(919, 'Hardoi', '27.42 N', '80.12 E', 'Uttar Pradesh'),
(920, 'Hasanpur', '28.72 N', '78.28 E', 'Uttar Pradesh'),
(921, 'Hathras', '27.60 N', '78.04 E', 'Uttar Pradesh'),
(922, 'Jahangirabad', '28.42 N', '78.10 E', 'Uttar Pradesh'),
(923, 'Jalaun', '26.15 N', '79.35 E', 'Uttar Pradesh'),
(924, 'Jaunpur', '25.76 N', '82.69 E', 'Uttar Pradesh'),
(925, 'Jhansi', '25.45 N', '78.56 E', 'Uttar Pradesh'),
(926, 'Kadi', '23.31 N', '72.33 E', 'Uttar Pradesh'),
(927, 'Kairana', '29.40 N', '77.20 E', 'Uttar Pradesh'),
(928, 'Kannauj', '27.06 N', '79.91 E', 'Uttar Pradesh'),
(929, 'Kanpur', '26.47 N', '80.33 E', 'Uttar Pradesh'),
(930, 'Kanpur Cantonment', '26.50 N', '80.28 E', 'Uttar Pradesh'),
(931, 'Kasganj', '27.81 N', '78.63 E', 'Uttar Pradesh'),
(932, 'Khatauli', '29.28 N', '77.72 E', 'Uttar Pradesh'),
(933, 'Khora', '', '', 'Uttar Pradesh'),
(934, 'Khurja', '28.26 N', '77.85 E', 'Uttar Pradesh'),
(935, 'Kiratpur', '29.52 N', '78.20 E', 'Uttar Pradesh'),
(936, 'Kosi Kalan', '27.80 N', '77.44 E', 'Uttar Pradesh'),
(937, 'Laharpur', '27.72 N', '80.90 E', 'Uttar Pradesh'),
(938, 'Lakhimpur', '27.95 N', '80.78 E', 'Uttar Pradesh'),
(939, 'Lakhnau', '26.85 N', '80.92 E', 'Uttar Pradesh'),
(940, 'Lakhnau Cantonment', '26.81 N', '80.97 E', 'Uttar Pradesh'),
(941, 'Lalitpur', '24.70 N', '78.41 E', 'Uttar Pradesh'),
(942, 'Loni', '28.75 N', '77.28 E', 'Uttar Pradesh'),
(943, 'Mahoba', '25.30 N', '79.87 E', 'Uttar Pradesh'),
(944, 'Mainpuri', '27.24 N', '79.02 E', 'Uttar Pradesh'),
(945, 'Mathura', '27.50 N', '77.68 E', 'Uttar Pradesh'),
(946, 'Mau', '25.96 N', '83.56 E', 'Uttar Pradesh'),
(947, 'Mauranipur', '25.24 N', '79.13 E', 'Uttar Pradesh'),
(948, 'Mawana', '29.11 N', '77.91 E', 'Uttar Pradesh'),
(949, 'Mirat', '28.99 N', '77.70 E', 'Uttar Pradesh'),
(950, 'Mirat Cantonment', '29.02 N', '77.67 E', 'Uttar Pradesh'),
(951, 'Mirzapur', '25.16 N', '82.56 E', 'Uttar Pradesh'),
(952, 'Modinagar', '28.92 N', '77.62 E', 'Uttar Pradesh'),
(953, 'Moradabad', '28.84 N', '78.76 E', 'Uttar Pradesh'),
(954, 'Mubarakpur', '26.09 N', '83.28 E', 'Uttar Pradesh'),
(955, 'Mughal Sarai', '25.30 N', '83.12 E', 'Uttar Pradesh'),
(956, 'Muradnagar', '28.78 N', '77.50 E', 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `zurich_student_attendance`
--

CREATE TABLE `zurich_student_attendance` (
  `att_id` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `att_date` varchar(100) NOT NULL,
  `attendance` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_student_attendance`
--

INSERT INTO `zurich_student_attendance` (`att_id`, `batch`, `course`, `roll_no`, `att_date`, `attendance`, `date`, `status`) VALUES
(16, 5, 5, '121', '2018-02-01', 'Present', '2018-02-04', 1),
(17, 5, 5, '121', '2018-02-02', 'Present', '2018-02-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_student_category`
--

CREATE TABLE `zurich_student_category` (
  `stu_id` int(11) NOT NULL,
  `stu_category` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_student_category`
--

INSERT INTO `zurich_student_category` (`stu_id`, `stu_category`, `date`, `status`) VALUES
(1, 'Genral', '2018-01-23 00:00:00', 1),
(2, 'OBC', '2018-01-23 00:00:00', 1),
(3, 'ST/SC', '2018-05-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_student_parents`
--

CREATE TABLE `zurich_student_parents` (
  `parent_id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `f_mobile` varchar(200) NOT NULL,
  `f_job` text NOT NULL,
  `f_email` varchar(200) NOT NULL,
  `f_aadhar` varchar(200) NOT NULL,
  `income` varchar(200) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `student_id` varchar(100) DEFAULT NULL,
  `p_pass` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_student_parents`
--

INSERT INTO `zurich_student_parents` (`parent_id`, `f_name`, `f_mobile`, `f_job`, `f_email`, `f_aadhar`, `income`, `p_image`, `student_id`, `p_pass`, `date`, `status`) VALUES
(7, 'vijendra', '1234567890', 'dfsdfsf', 'asa@sf.ssd', '963258741', '85690', '', '12,13,17', 'zurich74911', '2018-02-03 00:00:00', 1),
(8, 'dfgd', '4234233434', 'fdgdfg445', 'fgfg@dfs.sdf', '98745632158', '3443', '', '14', 'zurich15591', '2018-02-04 00:00:00', 1),
(9, 'neetu', '8521479632', 'service', 'asa@sf.ssd', '456897321', '85690', '', '15', 'zurich66920', '2018-02-04 00:00:00', 1),
(10, 'vijendra', '1234567890', 'dfsdfsf', 'asa@sf.ssd', '123456785', '85690', 'images4.jpg', '16', 'zurich15981', '2018-02-20 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_student_registration`
--

CREATE TABLE `zurich_student_registration` (
  `student_id` int(11) NOT NULL,
  `acadmic_year` varchar(100) NOT NULL,
  `registration_no` varchar(200) NOT NULL,
  `doj` varchar(200) NOT NULL,
  `course` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `roll_no` varchar(200) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `birth_place` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `mother_tongue` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `cast` varchar(200) NOT NULL,
  `stu_aadhar` varchar(255) DEFAULT NULL,
  `present_add` text NOT NULL,
  `permanent_add` text,
  `city` varchar(200) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `p_school` varchar(255) DEFAULT NULL,
  `p_school_add` text,
  `p_qualification` varchar(200) NOT NULL,
  `fees` int(11) NOT NULL,
  `transport` varchar(100) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_student_registration`
--

INSERT INTO `zurich_student_registration` (`student_id`, `acadmic_year`, `registration_no`, `doj`, `course`, `batch`, `roll_no`, `fname`, `mname`, `lname`, `dob`, `gender`, `blood_group`, `birth_place`, `nationality`, `mother_tongue`, `category`, `religion`, `cast`, `stu_aadhar`, `present_add`, `permanent_add`, `city`, `pin`, `country`, `state`, `phone`, `mobile`, `email`, `photo`, `qualification`, `p_school`, `p_school_add`, `p_qualification`, `fees`, `transport`, `mother_name`, `father_name`, `parent_id`, `date`, `status`) VALUES
(12, '2015', '1111', '2018-02-01', 5, 5, '121', 'swati', '', 'joshi', '2018-02-01', 'Female', 'B+', 'Karachi', 'India', 'hindi', 1, 'hindu', 'hindu', '1234567', 'fsds', 'sdfdsdf', 'dfsf', '12345', 'India', 'sdasd', '12312312311', '4232344324', 'asda@sd.sd', 'index.jpg', '9', 'sda', 'asda', '10', 50000, 'on', '', '', 7, '2018-02-03 00:00:00', 1),
(13, '2017', '123', '2018-02-05', 6, 7, '', 'jasmin', 'm', 'khan', '2018-02-06', 'Female', 'O-', 'dfs', 'India', 'sdfs', 1, 'dsfs', 'sdf', '1234567', 'dfsdfsf', 'dfsf', 'sdfs', '342423', 'India', 'sdfsf', '34242423233', '1231312311', 'asda@sd.sd', 'images1.jpg', '', 'sdada', 'fsdfsdf', '', 342, 'on', '', '', 7, '2018-02-04 00:00:00', 1),
(14, '2015', '124', '2018-02-05', 6, 7, '', 'vimal', '', 'jain', '2018-02-06', 'Male', 'A-', 'Karachi', 'India', 'sdfsdf', 1, 'ffgf', 'fgd', 'fgdf', 'fgdfg', 'dfgdfg', 'fgdf', '3424234', 'India', 'fsgg', '12312312311', '4232344324', '', 'images5.jpg', '', 'sdfsdf', 'fdfgfg', '', 423, 'on', '', '', 8, '2018-02-04 00:00:00', 1),
(15, '2017', '12345', '2018-02-01', 5, 5, '', 'swati', 'a', 'aaa', '2018-02-06', 'Female', 'B-', 'Karachi', 'India', 'hindi', 1, 'hindu', 'eshu', '1234567', 'fgdfgd', 'fgdfgd', 'dfgd', '324243', 'India', 'fgdfg', '34234234234', '3242342342', 'sdf@dff.dfd', 'images.jpg', NULL, 'sadasd', 'sdasda', '6', 1231, 'on', 'asdb', 'asd', 9, '2018-02-04 00:00:00', 1),
(16, '2016', '54321', '2018-02-14', 5, 5, '', 'sanvi', 'k', 'verma', '2018-02-15', 'Female', 'O-', 'Karachi', 'India', 'hindi', 1, 'hindu', 'dashora', '1234567', 'dsfsdfsdf', 'sfdfsfsf', 'dfsf', '12345', 'India', 'sdasd', '43534534335', '3453453534', 'asda@sd.sd', 'index1.jpg', NULL, '', '', '', 50000, 'on', 'mona', 'santosh', 10, '2018-02-20 00:00:00', 1),
(17, '2016', '12345', '2018-05-18', 10, 17, '', 'Divyansh', '', 'Chaudhary', '2019-06-27', 'Male', 'A-', 'Karachi', 'India', 'hindi', 2, 'hindu', 'Shatriya', '9638521475', 'indore', 'indore', 'sdfs', '12345', 'India', 'mp', '', '9632587415', 'swati.bhagat2406@gmail.com', '64649_4096491326365_1267194349_n.jpg', NULL, 'SMVP School', '', '10', 12334, 'on', 'Swati ', 'Jai Prakash', 7, '2018-05-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_subject`
--

CREATE TABLE `zurich_subject` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_subject`
--

INSERT INTO `zurich_subject` (`id`, `sub_name`, `sub_code`, `date`, `status`) VALUES
(5, 'Mathematics', '1', '2018-05-17', 1),
(6, 'Physics', '2', '2018-05-17', 1),
(7, 'Commerce', '3', '2018-05-17', 1),
(8, 'Accounts', '4', '2018-05-17', 1),
(9, 'Hindi', '5', '2018-05-17', 1),
(10, 'English', '6', '2018-05-17', 1),
(12, 'Science', '7', '2018-05-17', 1),
(13, 'Social Science', '8', '2018-05-17', 1),
(20, 'Sanskrit', '9', '2018-05-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_subject_allocation`
--

CREATE TABLE `zurich_subject_allocation` (
  `allocation_id` int(11) NOT NULL,
  `dept` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `academic` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_subject_allocation`
--

INSERT INTO `zurich_subject_allocation` (`allocation_id`, `dept`, `emp_name`, `academic`, `course`, `batch`, `subject`, `date`, `status`) VALUES
(3, 7, '5', 10, 6, 7, 5, '2018-02-23 00:00:00', 1),
(4, 7, '6', 10, 6, 7, 6, '2018-02-23 00:00:00', 1),
(5, 7, '5', 10, 5, 5, 7, '2018-02-23 00:00:00', 1),
(6, 8, '7', 10, 5, 6, 8, '2018-02-23 00:00:00', 1),
(7, 8, '8', 10, 6, 10, 8, '2018-02-23 00:00:00', 1),
(8, 6, '9', 10, 7, 11, 5, '2018-02-23 00:00:00', 1),
(9, 7, '6', 10, 7, 11, 12, '2018-02-23 00:00:00', 1),
(11, 6, '5', 10, 8, 13, 5, '2018-02-25 00:00:00', 1),
(13, 7, '6', 10, 8, 13, 12, '2018-02-25 00:00:00', 1),
(14, 6, '7', 11, 10, 17, 5, '2018-05-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_teacher_allocation`
--

CREATE TABLE `zurich_teacher_allocation` (
  `allocation_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_teacher_allocation`
--

INSERT INTO `zurich_teacher_allocation` (`allocation_id`, `course_id`, `batch_id`, `teacher_id`, `date`, `status`) VALUES
(4, 5, 5, 5, '2018-02-03 00:00:00', 1),
(5, 5, 6, 6, '2018-02-03 00:00:00', 1),
(6, 8, 13, 7, '2018-05-17 00:00:00', 1),
(7, 8, 14, 8, '2018-05-17 00:00:00', 1),
(8, 6, 10, 9, '2018-05-17 00:00:00', 1),
(9, 6, 9, 5, '2018-05-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_time_table`
--

CREATE TABLE `zurich_time_table` (
  `t_id` int(11) NOT NULL,
  `acadamic_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `d1` int(11) DEFAULT NULL,
  `d2` int(11) DEFAULT NULL,
  `d3` int(11) DEFAULT NULL,
  `d4` int(11) DEFAULT NULL,
  `d5` int(11) DEFAULT NULL,
  `d6` int(11) DEFAULT NULL,
  `d7` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_time_table`
--

INSERT INTO `zurich_time_table` (`t_id`, `acadamic_id`, `course_id`, `batch_id`, `subject_id`, `teacher_id`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `date`, `status`) VALUES
(3, 10, 8, 13, 5, 5, 0, 1, 0, 1, 0, 1, 1, '2018-05-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_transport_allocation`
--

CREATE TABLE `zurich_transport_allocation` (
  `all_id` int(11) NOT NULL,
  `route` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zurich_transport_destination_fee`
--

CREATE TABLE `zurich_transport_destination_fee` (
  `f_id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `drop_point` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `fee_type` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zurich_transport_driver`
--

CREATE TABLE `zurich_transport_driver` (
  `d_id` int(11) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `drive_name` varchar(255) NOT NULL,
  `license_no` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_transport_driver`
--

INSERT INTO `zurich_transport_driver` (`d_id`, `vehicle_no`, `drive_name`, `license_no`, `date`, `status`) VALUES
(1, '1', 'Sunil', '85693214', '2018-02-07 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_transport_route`
--

CREATE TABLE `zurich_transport_route` (
  `r_id` int(11) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `start_place` varchar(255) NOT NULL,
  `stop_place` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zurich_transport_vehicle`
--

CREATE TABLE `zurich_transport_vehicle` (
  `v_id` int(11) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `vehicle_seat` int(11) NOT NULL,
  `max_allow` int(11) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_transport_vehicle`
--

INSERT INTO `zurich_transport_vehicle` (`v_id`, `vehicle_no`, `vehicle_seat`, `max_allow`, `contact_person`, `date`, `status`) VALUES
(1, '09sn7888', 35, 35, 'sunil ', '2018-02-07 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zurich_user_login`
--

CREATE TABLE `zurich_user_login` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zurich_user_login`
--

INSERT INTO `zurich_user_login` (`id`, `uid`, `name`, `username`, `password`, `lastlogin`, `role`, `date`, `status`) VALUES
(1, 0, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', 'super admin', '2017-11-01', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `states_cities`
--
ALTER TABLE `states_cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `zurich_academic`
--
ALTER TABLE `zurich_academic`
  ADD PRIMARY KEY (`academic_id`);

--
-- Indexes for table `zurich_assign_subject`
--
ALTER TABLE `zurich_assign_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zurich_bank`
--
ALTER TABLE `zurich_bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `zurich_batch`
--
ALTER TABLE `zurich_batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `zurich_country`
--
ALTER TABLE `zurich_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `zurich_course`
--
ALTER TABLE `zurich_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `zurich_designation`
--
ALTER TABLE `zurich_designation`
  ADD PRIMARY KEY (`desi_id`);

--
-- Indexes for table `zurich_employee_attendance`
--
ALTER TABLE `zurich_employee_attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `zurich_employee_bank`
--
ALTER TABLE `zurich_employee_bank`
  ADD PRIMARY KEY (`e_bank_id`);

--
-- Indexes for table `zurich_employee_dept`
--
ALTER TABLE `zurich_employee_dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `zurich_employee_regt`
--
ALTER TABLE `zurich_employee_regt`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `zurich_employee_type`
--
ALTER TABLE `zurich_employee_type`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `zurich_fee_allocation`
--
ALTER TABLE `zurich_fee_allocation`
  ADD PRIMARY KEY (`fee_allocation_id`);

--
-- Indexes for table `zurich_fee_category`
--
ALTER TABLE `zurich_fee_category`
  ADD PRIMARY KEY (`fee_cat_id`);

--
-- Indexes for table `zurich_fee_collection`
--
ALTER TABLE `zurich_fee_collection`
  ADD PRIMARY KEY (`collection_id`);

--
-- Indexes for table `zurich_fee_sub_category`
--
ALTER TABLE `zurich_fee_sub_category`
  ADD PRIMARY KEY (`fee_sub_cat_id`);

--
-- Indexes for table `zurich_institute`
--
ALTER TABLE `zurich_institute`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `zurich_state_city`
--
ALTER TABLE `zurich_state_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `zurich_student_attendance`
--
ALTER TABLE `zurich_student_attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `zurich_student_category`
--
ALTER TABLE `zurich_student_category`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `zurich_student_parents`
--
ALTER TABLE `zurich_student_parents`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `zurich_student_registration`
--
ALTER TABLE `zurich_student_registration`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `zurich_subject`
--
ALTER TABLE `zurich_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zurich_subject_allocation`
--
ALTER TABLE `zurich_subject_allocation`
  ADD PRIMARY KEY (`allocation_id`);

--
-- Indexes for table `zurich_teacher_allocation`
--
ALTER TABLE `zurich_teacher_allocation`
  ADD PRIMARY KEY (`allocation_id`);

--
-- Indexes for table `zurich_time_table`
--
ALTER TABLE `zurich_time_table`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `zurich_transport_allocation`
--
ALTER TABLE `zurich_transport_allocation`
  ADD PRIMARY KEY (`all_id`);

--
-- Indexes for table `zurich_transport_destination_fee`
--
ALTER TABLE `zurich_transport_destination_fee`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `zurich_transport_driver`
--
ALTER TABLE `zurich_transport_driver`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `zurich_transport_route`
--
ALTER TABLE `zurich_transport_route`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `zurich_transport_vehicle`
--
ALTER TABLE `zurich_transport_vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `zurich_user_login`
--
ALTER TABLE `zurich_user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `zurich_academic`
--
ALTER TABLE `zurich_academic`
  MODIFY `academic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `zurich_assign_subject`
--
ALTER TABLE `zurich_assign_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `zurich_bank`
--
ALTER TABLE `zurich_bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zurich_batch`
--
ALTER TABLE `zurich_batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `zurich_country`
--
ALTER TABLE `zurich_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT for table `zurich_course`
--
ALTER TABLE `zurich_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `zurich_designation`
--
ALTER TABLE `zurich_designation`
  MODIFY `desi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `zurich_employee_attendance`
--
ALTER TABLE `zurich_employee_attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `zurich_employee_bank`
--
ALTER TABLE `zurich_employee_bank`
  MODIFY `e_bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zurich_employee_dept`
--
ALTER TABLE `zurich_employee_dept`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `zurich_employee_regt`
--
ALTER TABLE `zurich_employee_regt`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `zurich_employee_type`
--
ALTER TABLE `zurich_employee_type`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `zurich_fee_allocation`
--
ALTER TABLE `zurich_fee_allocation`
  MODIFY `fee_allocation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zurich_fee_category`
--
ALTER TABLE `zurich_fee_category`
  MODIFY `fee_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zurich_fee_collection`
--
ALTER TABLE `zurich_fee_collection`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zurich_fee_sub_category`
--
ALTER TABLE `zurich_fee_sub_category`
  MODIFY `fee_sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zurich_institute`
--
ALTER TABLE `zurich_institute`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zurich_state_city`
--
ALTER TABLE `zurich_state_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=957;
--
-- AUTO_INCREMENT for table `zurich_student_attendance`
--
ALTER TABLE `zurich_student_attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `zurich_student_category`
--
ALTER TABLE `zurich_student_category`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zurich_student_parents`
--
ALTER TABLE `zurich_student_parents`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `zurich_student_registration`
--
ALTER TABLE `zurich_student_registration`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `zurich_subject`
--
ALTER TABLE `zurich_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `zurich_subject_allocation`
--
ALTER TABLE `zurich_subject_allocation`
  MODIFY `allocation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `zurich_teacher_allocation`
--
ALTER TABLE `zurich_teacher_allocation`
  MODIFY `allocation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `zurich_time_table`
--
ALTER TABLE `zurich_time_table`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zurich_transport_allocation`
--
ALTER TABLE `zurich_transport_allocation`
  MODIFY `all_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zurich_transport_destination_fee`
--
ALTER TABLE `zurich_transport_destination_fee`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zurich_transport_driver`
--
ALTER TABLE `zurich_transport_driver`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zurich_transport_route`
--
ALTER TABLE `zurich_transport_route`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zurich_transport_vehicle`
--
ALTER TABLE `zurich_transport_vehicle`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zurich_user_login`
--
ALTER TABLE `zurich_user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
