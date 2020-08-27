-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2020 at 02:32 AM
-- Server version: 10.3.23-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuetac_msadmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sl` int(5) NOT NULL,
  `bank_slip` varchar(140) NOT NULL,
  `type_msc_phd` varchar(22) NOT NULL,
  `dep` varchar(70) NOT NULL,
  `student_type` varchar(22) NOT NULL,
  `student_name` varchar(60) NOT NULL,
  `f_name` varchar(66) NOT NULL,
  `m_name` varchar(66) NOT NULL,
  `b_day` text NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `email` varchar(77) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `birth` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `degree_name` text NOT NULL,
  `passing_year` varchar(255) NOT NULL,
  `institute` text NOT NULL,
  `passed_dept` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `pic_upload` varchar(120) NOT NULL,
  `signature_upload` varchar(255) NOT NULL,
  `certificate_upload` varchar(255) NOT NULL,
  `NOC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sl`, `bank_slip`, `type_msc_phd`, `dep`, `student_type`, `student_name`, `f_name`, `m_name`, `b_day`, `present_address`, `permanent_address`, `email`, `phone`, `nation`, `religion`, `birth`, `gender`, `degree_name`, `passing_year`, `institute`, `passed_dept`, `cgpa`, `occupation`, `pic_upload`, `signature_upload`, `certificate_upload`, `NOC`) VALUES
(1, '', 'Msc', '', '', 'sad', 'sad', '', '2020-08-20 13:01:55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '01876280415_.jpg', 'M.Sc.', '', '', 'KAZI HASSAN SHAZIB', 'KAZI KHAIRUL ALAM', 'SALEHA AKTAR', '04-08-1999', 'Advocate.Zainal Abedin Chowdhury,rdgrsd,Chattogram,Double Mooring,G.P.O,4000.', ' Kazi Khairul Alam,wdkjdhbu,0,Sitakunda,JafarNagar,4310.', 'kazishakib98@gmail.com', '01876280415', 'Bangladeshi', 'Islam', '', 'Male', 'S.S.C,H.S.C,B.Sc(Engineering)', '2015-2017-2020', 'Chittagong,Chittagong,Shahjalal University of Science & Technology', 'Science,Science,Electrical & Electronics Engineering', 'GPA(out of 5)-5.00,GPA(out of 5)-4.33,CGPA(out of 4)-3.33', '-AP-bbbggg-01/01/1986..01/02/1986..', '01876280415_13364 (1).jpg', '01876280415_1_300x80.jpg', '01876280415_uploaded_files.zip', ''),
(86, '01765197998_SIVP-D-20-00462 (3).pdf', 'Masters', 'Computer Science & Engineering', '0', 'KAZI HASSAN SHAKIB', 'KAZI KHAIRUL ALAM', 'SALEHA AKTAR', '15-10-1995', ',,0,,,.', ' ,,0,,,.', 'kazishakib98@gmail.com', '01765197998', 'Bangladeshi', 'Islam', '', 'Male', '0,0,0', '0-0-0', '0,0,0', 'Others,Others,', '0-,0-,0-', '---0/0/0..0/0/0..', '01765197998_13364 (1).jpg', '01765197998_1_300x80.jpg', '01765197998_Microsoft+Word+2003+Proceedings+Templates.zip', ''),
(90, '01534660559_bloom-blossom-flora-39517.jpg', 'Masters', 'Computer Science & Engineering', '0', 'KAZIHASSANSHAKIB', 'KAZI KHAIRUL ALAM', 'SALEHA AKTHER', '03-0-0', ',,0,,,.', ' ,,0,,,.', 'kazishakib98@cuet.ac.bd', '01534660559', 'Bangladeshi', '0', '', 'Male', '0,0,0,M.Sc(Engineering)', '0-0-2020-', '0,0,0,Chittagong University of Engineering & Technology', 'Others,Others,,', '0-5,0-5,CGPA(out of 4)-,-3.8', '---0/0/0..0/0/0..', '01534660559__a.jpg', '01534660559_3d-architecture-design-plans-online-goodhomez-com-gorgeous-ranch-house-floor-designs_best-architectural-design-houses_interior-design_interior-design-tips-definition-styles-online-how-to-become-an-des.jpg', '01534660559_bloom-blossom-close-up-87840.jpg', ''),
(110, '01765197998_logo-carousel-6.png', 'Masters', '0', '0', 'KAZI HASSAN SHAKIB', 'KAZI KHAIRUL ALAM', 'SALEHA AKTAR', '0-0-0', ',,0,,,.', ' ,,0,,,.', 'kazishakib98@gmail.com', '01765197998', 'Bangladeshi', '0', '', 'Male', '0,0,0,0', '0-0-0-', '0,0,0,0', 'Others,Others,,', '0-5.00,0-5.00,0-,-', '---0/0/0..0/0/0..', '01765197998_13364 (1).jpg', '01765197998_1_300x80.jpg', '01765197998_clblp.zip', '01765197998_1.png'),
(111, '01111111111_logo-carousel-6.png', 'Masters', '0', '0', 'KAZI HASSAN SHAKIB', 'KAZI KHAIRUL ALAM', 'SALEHA AKTAR', '0-0-0', ',,0,,,.', ' ,,0,,,.', 'kazishakib98@gmail.com', '01111111111', 'Bangladeshi', '0', '', 'Male', '0,0,0,0', '0-0-0-', '0,0,0,0', 'Others,Others,,', '0-5.00,0-5.00,0-,-', '---0/0/0..0/0/0..', '011111111115f47ebeb2513f4.94789172.jpg', '01111111111_1_300x80.jpg', '01111111111_clblp.zip', '01111111111_1.png'),
(112, '01534660559_5f47ee330104d2.78813481.png', 'Masters', '0', '0', 'KAZI HASSAN SHAKIB', 'KAZI KHAIRUL ALAM', 'SALEHA AKTAR', '0-0-0', ',,0,,,.', ' ,,0,,,.', 'kazishakib98@gmail.com', '01534660559', 'Bangladeshi', '0', '', 'Male', '0,0,0,0', '0-0-0-', '0,0,0,0', 'Others,Others,,', '0-5.00,0-5.00,0-,-', '---0/0/0..0/0/0..', '01534660559_5f47ee2fb77500.86671602.jpg', '01534660559_5f47ee2fb9e274.33573952.jpg', '01534660559_5f47ee2fbd49d8.87022682.zip', '01534660559_1.png'),
(113, '01534660559_logo-carousel-6.png', 'Masters', '0', '0', 'KAZI HASSAN SHAKIB', 'KAZI KHAIRUL ALAM', 'SALEHA AKTAR', '0-0-0', ',,0,,,.', ' ,,0,,,.', 'kazishakib98@gmail.com', '01534660559', 'Bangladeshi', '0', '', 'Male', '0,0,0,0', '0-0-0-', '0,0,0,0', 'Others,Others,,', '0-5.00,0-5.00,0-,-', '---0/0/0..0/0/0..', '01534660559_13364 (1).jpg', '01534660559_1_300x80.jpg', '01534660559_clblp.zip', '01534660559_1.png'),
(114, '018202392295f47f18aba7370.08344606.png', 'Masters', '0', '0', 'KAZI HASSAN SHAKIB', 'KAZI KHAIRUL ALAM', 'SALEHA AKTAR', '0-0-0', ',,0,,,.', ' ,,0,,,.', 'kazishakib98@gmail.com', '01820239229', 'Bangladeshi', '0', '', 'Male', '0,0,0,0', '0-0-0-', '0,0,0,0', 'Others,Others,,', '0-5.00,0-5.00,0-,-', '---0/0/0..0/0/0..', '018202392295f47f1877bb8e2.25565723.jpg', '018202392295f47f1877cebd1.95859233.jpg', '018202392295f47f1877dea59.61533286.zip', '01820239229_1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
