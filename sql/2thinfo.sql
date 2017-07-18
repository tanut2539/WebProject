-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2016 at 03:27 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2thinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_forums`
--

CREATE TABLE `db_forums` (
  `qid` bigint(11) UNSIGNED NOT NULL,
  `createdate` datetime NOT NULL COMMENT '0000-00-00 00:00:00',
  `pin_Post` int(11) NOT NULL,
  `user_post` varchar(60) NOT NULL,
  `title` varchar(250) CHARACTER SET utf32 NOT NULL,
  `details` text NOT NULL,
  `details_index` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_forums`
--

INSERT INTO `db_forums` (`qid`, `createdate`, `pin_Post`, `user_post`, `title`, `details`, `details_index`) VALUES
(2, '2016-03-15 21:33:50', 1, 'webmaster', 'ยุคนี้ไม่มีใครไม่รู้จัก Internet of things [IoT]', '<div class="featured-image">\r\n<img width="960" height="400" src="http://98.131.159.138/home/wp-content/uploads/2015/11/IoT.jpg" alt="IOT">\r\n</div>\r\n<p>ยุคนี้ไม่มีใครไม่รู้จัก Internet of things [IoT] </p>\r\n<p>เมื่ออุปกรณ์ที่เราเห็นอยู่รอบตัวในปัจจุบันจะสามารถสื่อสารกันได้ง่ายขึ้น ปัจจุบันมีอุปกรณ์ไอทีใหม่ๆมากมายที่รองรับ IoT</p>\r\n<h2>1. Smart home</h2>\r\n<p>ไม่ค่อยน่าแปลกใจเท่าไหร่ที่ Smart Home จะถูกจัดอยู่ในอันดับหนึ่ง สำหรับเดือนที่สำรวจนั้นพบว่ามีผู้คนค้นหาบนกูเกิลด้วยคำว่า “Smart Home” มากกว่า 60,000 คนเลยทีเดียว โดยในฐานข้อมูลของ IoT Analytics มีบริษัทรวมถึง startup ต่างๆ อยู่มากถึง 256 บริษัทที่ทำเรื่อง Smart Home อยู่ในตอนนี้ และมีการเปิดให้ใช้งานแอพพลิเคชันทางด้าน IoT อยู่ในปัจจุบัน  จำนวนเม็ดเงินที่มีการลงทุนไปใน Smart Home ของบริษัท Startup ในปัจจุบันมีนั้นเกิน 2.5 พันล้านเหรียญไปแล้ว นี่ยังไม่ได้นับรวมบริษัท startups ชื่อดังอย่างเช่น Nest หรือ AlertMe เข้าไป และก็ยังไม่ได้รวมบริษัทข้ามชาติดังๆ อย่างเช่น Philips, Haier หรือ Belkin เข้าไป</p>\r\n<h2>2.      Wearables</h2>\r\n<p>Wearables devices ยังเป็นประเด็นร้อนแรงที่ทุกคนพูดถึง และในไทยเองค่อนข้างเห็นได้ชัดเจนจากสินค้าหลายๆ ค่ายที่มาวางขายกันแล้ว ไม่ว่าจะเป็นจาก Sumsung, Jawbone หรือ Fitbit แต่ยังมีที่ผู้บริโภคยังคงรอคอยอยู่คือ Apple smart watch ที่คาดว่าจะปล่อยออกมาในราวเดือนเมษายนปีนี้ ยังมีจากค่ายอื่นๆ อีกมากมายที่ทำออกมาได้อย่างน่าสนใจ เช่น Sony ที่มีทั้งนาฬิกา และสายรัดข้อมือ, Myo ที่สั่งงานด้วยการเคลื่อนไหว (Gesture control) หรือแม้แต่ LookSee ที่เป็นกำไลข้อมือออกแบบมาอย่างสวยงาม จากทั้งหมดของบริษัท Startup ทางด้าน IoT สำหรับ Wearable แล้ว จนถึงตอนนี้ดูเหมือน Jawbone จะเป็นบริษัทที่ทุ่มเงินลงทุนไปมากที่สุด น่าจะมากกว่า 500 ล้านเหรียญไปแล้ว</p>', '<div class="featured-image">\r\n<img width="960" height="400" src="http://98.131.159.138/home/wp-content/uploads/2015/11/IoT.jpg" alt="IOT">\r\n</div>\r\n<p>ยุคนี้ไม่มีใครไม่รู้จัก Internet of things [IoT] </p>\r\n<p>เมื่ออุปกรณ์ที่เราเห็นอยู่รอบตัวในปัจจุบันจะสามารถสื่อสารกันได้ง่ายขึ้น....</p>'),
(3, '2016-03-15 22:18:10', 0, 'webmaster', 'Atomas เกมส์รวมธาตุเคมี', '<p>Atomas เกมส์รวมธาตุเคมี</p>\r\n<p>เหล่านักวิทยาศษสตร์พลาดไม่ได้กับเกมส์ Atomas เมื่อการรวมสารเคมีเป็นเรื่องง่าย</p>\r\n<hr>\r\n<p>สามารถดาวโหลดได้ที่</p>\r\n<a href="https://play.google.com/store/apps/details?id=com.sirnic.atomas&hl=th" target="_black" class="btn btn-warning">Google Play Store</a>\r\n<a href="https://itunes.apple.com/th/app/atomas/id953603155?mt=8" target="_black" class="btn btn-danger">Itunes Store</a>', '<div class="featured-image">\r\n			<img width="960" height="400" src="http://upic.me/i/40/screenshot_20160303-211129.png" alt="Contact">\r\n		</div>'),
(4, '2016-05-08 02:34:24', 0, 'cs319', 'หัวข้อ', 'เนื้อหา และ รายละเอียดทั้งหมด', 'รายละเอียดหน้าเว็บไซต์');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `user_nickname` varchar(250) NOT NULL,
  `user_registered` datetime NOT NULL COMMENT '0000-00-00 00:00:00',
  `user_status` int(11) NOT NULL,
  `user_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`id`, `user_nickname`, `user_registered`, `user_status`, `user_img`) VALUES
(3, 'cs319', '2016-05-08 02:15:28', 1, 'start_avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `member_registered`
--

CREATE TABLE `member_registered` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `user_login` varchar(60) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_registered`
--

INSERT INTO `member_registered` (`id`, `user_login`, `user_password`, `user_email`, `facebook`, `twitter`) VALUES
(3, 'cs319', '1234', 'cs319@cs319.com', 'https://www.facebook.com/cs319', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_forums`
--
ALTER TABLE `db_forums`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_registered`
--
ALTER TABLE `member_registered`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_forums`
--
ALTER TABLE `db_forums`
  MODIFY `qid` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member_registered`
--
ALTER TABLE `member_registered`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
