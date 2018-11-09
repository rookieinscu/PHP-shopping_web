-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-11-09 11:17:22
-- 服务器版本： 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scubookstore`
--

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` varchar(13) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `user_name` text NOT NULL,
  `user_nickname` text NOT NULL,
  `user_tel` varchar(11) NOT NULL,
  `user_email` text NOT NULL,
  `user_location` text NOT NULL,
  `register_date` text NOT NULL,
  `user_img` text NOT NULL,
  `user_integral` smallint(6) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_password`, `admin`, `user_name`, `user_nickname`, `user_tel`, `user_email`, `user_location`, `register_date`, `user_img`, `user_integral`) VALUES
('2016141093015', '0', 1, '谢申昊', '白云出岫の本无心', '13258223672', 'xieshenhao.scu@gmail.com', '望江校区', '2018-10-09', '', 0),
('2016141093001', '199802192710jt', 1, '江涛', '江直树', '13072813016', '1726467940@qq.com', '望江校区', '2018-10-09', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
